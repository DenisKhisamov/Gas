ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [54.738762,55.972055],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        });
     getPointData = function (index, name) {
        return {
            balloonContentHeader: 'Название:' + name,
            balloonContentBody: 'Название:' + name,
            clusterCaption: 'метка <strong>' + index + '</strong>'
        };
     };
    getOptionData = function (check_flag) {
        if (check_flag  == 0) {
            return {
                iconLayout: 'default#imageWithContent',
                iconImageHref: 'img/red.png',
                iconImageSize: [60, 60],
                iconImageOffset: [-24, -24],
                iconContentOffset: [15, 15],

            };
        }
        else
        {
            return {
                iconLayout: 'default#imageWithContent',
                iconImageHref: 'img/green.png',
                iconImageSize: [60, 60],
                iconImageOffset: [-24, -24],
                iconContentOffset: [15, 15],

            };
        }
    };
    myCollection = new ymaps.GeoObjectCollection();
    var preveous = [];
        $.ajax({
        type: "POST",
        data: {'name': 'action', 'module': 'Map', 'ajax': 'true', 'action': 'get_data'},
        success: function (data) {
            var results = jQuery.parseJSON(data);

            for (i in results) {
                var arg = results[i];
                if (arg.status_id  === null)
                {

                }
                else{
                    preveous[i] = arg.id;
                }

                    myPlacemarkWithContent = new ymaps.Placemark([arg.lon, arg.lat], getPointData(arg.id, arg.name),
                        getOptionData(arg.check_flag));
                    myCollection.add(myPlacemarkWithContent);

                   // myMap.geoObjects.add(myPlacemarkWithContent);
            }
            myMap.geoObjects.add(myCollection);
        }

    });
    function update_date(id) {
        $.ajax({
            type: "POST",
            data: {'name': 'action', 'module': 'Map', 'ajax': 'true', 'action': 'push_time', 'id': + id },
            success: function (data) {
                }
        });
    }
    setInterval(get_coords, 5000);
    function get_coords() {
        now = [];
        $.ajax({
            type: "POST",
            data: {'name': 'action', 'module': 'Map', 'ajax': 'true', 'action': 'get_data'},
            success: function (data) {
                var results = jQuery.parseJSON(data);
                for (i in results) {
                    var arg = results[i];
                    if (arg.status_id  === null)
                    {
                    }
                    else{
                        now[i] = arg.id;
                    }
                }
                var my = _.difference(now, preveous);
                preveous = now;
                var z = 0;
                console.log(my);
                for (i in results) {
                    var arg = results[i];
                     for (i in my) {
                        if (my == arg.id)
                        {
                            myCollection.removeAll();
                        }
                    }
                    for (i in my) {
                        if (my == arg.id) {
                            var marker = new ymaps.Placemark([arg.lon, arg.lat], {
                                rotation: 0
                            }, {
                                iconLayout: ymaps.templateLayoutFactory.createClass('' +
                                    '<ymaps id="arrow-icon" class="arrow-icon" style="transform: rotate($[properties.rotation]deg); background-image: $[properties.image];"/>'),

                            });
                            update_date(arg.id);
                            myCollection.add(marker);
                           // myMap.geoObjects.add(marker);
                            z = 1;
                        }
                        else
                        {
                            myPlacemarkWithContent = new ymaps.Placemark([arg.lon, arg.lat], getPointData(arg.id, arg.name),
                                getOptionData(arg.check_flag));
                            myCollection.add(myPlacemarkWithContent);
                        }

                    }

                }
                var u = 0;
                if (z == 1)
                {
                    marker.properties.set('image', "url('/img/red.png')");
                    var angle2 = 90;
                    var angle = 0;
                    var myTimer = setInterval(function(){
                        if (angle < 90) {
                            marker.properties.set('rotation', angle);
                            angle += 10;
                        }
                        else
                        {
                            if (u == 0)
                            {
                                marker.properties.set('image',  "url('/img/green.png')");
                                u = u+1;
                            }
                            marker.properties.set('', angle2);
                            if (angle2 <= 90)
                            {
                                marker.properties.set('rotation', angle2);
                                angle2 -= 10;
                            }
                            if (angle2 == -10)
                            {
                                clearInterval(myTimer);
                            }
                        }
                    }, 100);

                }


            }

        });
    }

});