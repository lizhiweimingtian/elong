(function (global) {
    "use strict"
    function Factory(options) {
        var options = options || {},
            defaults = Factory.defaults;

        for (var i in defaults) {
            if (options[i] === undefined) {
                options[i] = defaults[i];
            };

        };
        return new MapControl(options);
    }

    function MapControl(opt) {
        this.init(opt);
    }

    MapControl.prototype = {
        constructor: MapControl,
        init: function (opt) {
            var _this = this;
            var googleSrc = "http://maps.google.cn/maps/api/js?sensor=false&language=zh-CN.js", baiduSrc = "http://api.map.baidu.com/getscript?v=1.4";
            var script = document.createElement('script');
            script.src = opt.type === "google" ? googleSrc : (opt.type === "baidu" ? baiduSrc : _this.errorCatch("未获取到地图类型"));
            script.onload = script.onreadystatechange = function () {
                if( !this.readyState || this.readyState==='loaded' || this.readyState==='complete' ){
                    switch (opt.type) {
                        case "google":
                            _this.googleMapInit(opt);
                            break;
                        case "baidu":
                            window.BMap_loadScriptTime = (new Date).getTime();
                            var style = document.createElement('link');
                            style.href = "http://api.map.baidu.com/res/14/bmap.css";
                            style.type = "text/css";
                            style.rel = "stylesheet";
                            document.getElementsByTagName("head")[0].appendChild(style);
                            _this.baiduMapInit(opt);
                            break;
                    }

                }
            }
            document.body.appendChild(script);
        },
        googleMapInit: function (opt) {
            var myLatlng = { lng: opt.coordinate.lng, lat: opt.coordinate.lat };
            var myOptions = {
                zoom: opt.zoom,
                center: myLatlng
            }

            var map = new google.maps.Map(document.getElementById(opt.containerID), myOptions);
            if (opt.marker) {
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
                if (opt.markerTips.content !== "") {
                    var markerDiv = "<div><h4 style='margin:5px 0;'>" + opt.markerTips.title + "</h1><div>" + opt.markerTips.content + "</div></div>";
                    var infowindow = new google.maps.InfoWindow({
                        content: markerDiv,
                        maxWidth: opt.marker.maxWidth
                    });
                    marker.addListener('click', function () {
                        infowindow.open(map, marker);
                    });

                }
            }
        },
        baiduMapInit: function (opt) {
            var map = new BMap.Map(opt.containerID);
            var point = new BMap.Point(opt.coordinate.lng, opt.coordinate.lat);
            var marker = new BMap.Marker(point);

            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.centerAndZoom(point, opt.zoom);
            var ctrl_nav = new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE });
            map.addControl(ctrl_nav);
            var ctrl_ove = new BMap.OverviewMapControl({ anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1 });
            map.addControl(ctrl_ove);
            var ctrl_sca = new BMap.ScaleControl({ anchor: BMAP_ANCHOR_BOTTOM_LEFT });
            map.addControl(ctrl_sca);

            if (opt.marker) {
                map.addOverlay(marker);
                if (opt.markerTips.content !== "") {
                    var opts = {
                        width: opt.markerTips.maxWidth,
                        height: opt.markerTips.maxHeight,
                        title: opt.markerTips.title
                    }
                    var infoWindow = new BMap.InfoWindow(opt.markerTips.content, opts);
                    marker.addEventListener("click", function () {
                        map.openInfoWindow(infoWindow, point);
                    });
                }
            }
        },
        errorCatch: function (mes) {
            throw new Error("地图组件异常: " + mes);
        }
    };

    Factory.defaults = {
        type: "google",
        marker: false,
        coordinate: { lng: 116.407, lat: 39.9 },
        zoom: 15,
        containerID: "mapContainer",
        markerTips: { title: "", content: "", maxWidth: 150, maxHeight: 100 }
    };
    global.lvmap = Factory;
}(window));