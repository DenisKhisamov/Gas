CoreJs = {
	init: function () {
		$(document).on('submit','form.ajax',function (e) {
			var module = $(this).find('input[name=module]').val();
			var action = $(this).find('input[name=action]').val();
			var tag = module+'_'+action;
			e.preventDefault();
			if (CoreJs.ajax.before(this, tag)===false) return false;
			$(this).ajaxSubmit({
				success: function (result, statusText, xhr, form) { CoreJs.ajax.after(form, tag, result);}
			});
			/*$.ajax({
				url: "/",
				data: this,
				re
				success: function( result ) {
					$( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
				}
			});*/
			return false;
		});
	},
	ajax: {
		callbacks: {
			_before_callbacks: {},
			_after_callbacks: {},
			addBefore: function (name, callback) {
				if (typeof this._before_callbacks[name] === 'undefined') {
					this._before_callbacks[name] = [];
				}
				this._before_callbacks[name].push(callback);
			},
			addAfter: function (name, callback) {
				if (typeof this._after_callbacks[name] === 'undefined') {
					this._after_callbacks[name] = [];
				}
				this._after_callbacks[name].push(callback);
			},
			getBefore: function (name) {
				if (typeof this._before_callbacks[name] === 'undefined') {
					return [];
				}
				return this._before_callbacks[name];
			},
			getAfter: function (name) {
				if (typeof this._after_callbacks[name] === 'undefined') {
					return [];
				}
				return this._after_callbacks[name];
			}
		},
		before: function (form, tag) {
			$(form).find('.has-error').removeClass('.has-error');
			$(form).find('.errors').remove();
			var calls = this.callbacks.getBefore(tag);
			var result = true;
			calls.forEach(function (t) {
				var r = t(form);
				if (r===false && result) {
					result = false;
				}
			});
			return result;
		},
		after: function (form, tag, result) {
			try {
				var response = $.parseJSON(result);
			} catch(err){
				$('body').append(result);
				return false;
			}
			var calls = this.callbacks.getAfter(tag);
			var tmp_result = true;
			calls.forEach(function (t) {
				var r = t(form,response);
				if (r===false && tmp_result) {
					tmp_result = false;
				}
			});
			if (tmp_result===false) return false;
			if (response.errors) {
				$.each(response.errors, function (k, val) {
					if(k === 0)
					{
						if(! $(".error", form).length)
						{
							$(form).parent().find(".error").addClass("error_message").html(prepareHtml(val)).show();
						}
						else
						{
							$(".error", form).addClass("error_message").html(prepareHtml(val)).show();
						}
					}
					else
					{
						var input = $("input[name="+k+"], textarea[name="+k+"], select[name="+k+"]", form);
						var error = $(input).next('.errors');
						if (!error.length) {
							error = $('<span>', { class: 'help-block errors error_'+k, html: prepareHtml(val)});
							error.insertAfter(input);
							error.show();
						} else {
							error.html(prepareHtml(val));
							error.show();
						}
						if (input.length)
						{
							input.closest('div').addClass('has-error');
						}
					}
				});
			}
			if (response.redirect) {
				var url = prepareHtml(response.redirect);
				if (window.location.href != url)
					window.location = url;
				else
					window.location.reload();
			}
			if (response.data) {
				$.each(response.data, function (k, val) {
					if(k === "form")
					{
						k = form;
					}
					if(val)
					{
						$(k).html(prepareHtml(val)).show();
					}
					else
					{
						$(k).hide();
					}
				});
			}
		}
	}
};

CoreJs.init();

function prepareHtml(string) {
	string = string.replace(new RegExp('&lt;', 'g'), '<');
	string = string.replace(new RegExp('&gt;', 'g'), '<');
	string = string.replace(new RegExp('&amp;', 'g'), '<');
	return string;
}