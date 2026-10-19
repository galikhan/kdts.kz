/**
 * KDTS Transport Routes — interactive amCharts 5 maps.
 * Each route is a self-contained IIFE targeting its own #chartdiv-route-N.
 * Registers itself on window.kdtsRouteCharts["N"] = { play: fn } so
 * script.js can trigger a replay whenever that route's tab is clicked.
 */

/* ===========================================================
   ROUTE 1 — Еуропа — Орталық Азия (Брест арқылы)
   =========================================================== */
(function () {
  'use strict';

  var CONTAINER_ID = 'chartdiv-route-1';
  var ROUTE_KEY = '1';

  if (!document.getElementById(CONTAINER_ID) || typeof am5 === 'undefined') return;

  var root = am5.Root.new(CONTAINER_ID);
  root.setThemes([am5themes_Animated.new(root)]);
  root.container.set('background', am5.Rectangle.new(root, {
    fill: am5.color(0x061c38),
    fillOpacity: 1
  }));

  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      projection: am5map.geoMercator(),
      panX: 'none',
      panY: 'none',
      wheelX: 'none',
      wheelY: 'none',
      pinchZoom: false
    })
  );

  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ['AQ']
    })
  );

  polygonSeries.mapPolygons.template.setAll({
    fill: am5.color(0x08264a),
    fillOpacity: 0.68,
    stroke: am5.color(0x176dc1),
    strokeOpacity: 0.42,
    strokeWidth: 0.8,
    interactive: false,
    templateField: 'polygonSettings'
  });

  polygonSeries.data.setAll([
    { id: 'LV', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.90, stroke: am5.color(0x1f72c5), strokeOpacity: 0.65, strokeWidth: 1 } },
    { id: 'KZ', polygonSettings: { fill: am5.color(0x0c3768), fillOpacity: 0.98, stroke: am5.color(0x2995ff), strokeOpacity: 0.85, strokeWidth: 1.1 } },
    { id: 'UZ', polygonSettings: { fill: am5.color(0x0b2f58), fillOpacity: 0.90, stroke: am5.color(0x1f72c5), strokeOpacity: 0.65, strokeWidth: 1 } },
    { id: 'KG', polygonSettings: { fill: am5.color(0x0a345f), fillOpacity: 0.90, stroke: am5.color(0x1f72c5), strokeOpacity: 0.65, strokeWidth: 1 } }
  ]);

  var countryLabelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var countryLabels = [
    { title: 'EUROPE', geometry: { type: 'Point', coordinates: [11, 46] } },
    { title: 'LATVIA', geometry: { type: 'Point', coordinates: [25.5, 58.2] }, dy: 12 },
    { title: 'KAZAKHSTAN', geometry: { type: 'Point', coordinates: [68, 47] }, dy: -12 },
    { title: 'UZBEKISTAN', geometry: { type: 'Point', coordinates: [62.5, 40.6] } },
    { title: 'KYRGYZSTAN', geometry: { type: 'Point', coordinates: [78.5, 40.5] } },
    { title: 'CHINA', geometry: { type: 'Point', coordinates: [93, 37] } }
  ];

  countryLabelSeries.data.setAll(countryLabels);

  countryLabelSeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var label = am5.Label.new(root, {
      text: data.title,
      fill: am5.color(0x2995ff),
      fontSize: data.small ? 10 : 13,
      fontWeight: '500',
      centerX: am5.p50,
      centerY: am5.p50,
      dy: data.dy || 0,
      opacity: 0.9,
      paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
    });
    return am5.Bullet.new(root, { sprite: label });
  });

  var citySeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var cities = [
    { id: 'riga', title: 'Riga', geometry: { type: 'Point', coordinates: [24.1052, 56.9496] }, dx: 9, dy: -12 },
    { id: 'zilupe', title: 'Zilupe', geometry: { type: 'Point', coordinates: [28.1217, 56.3862] }, dx: -12, dy: 14 },
    { id: 'russiaHub', title: '', hidden: true, geometry: { type: 'Point', coordinates: [43.0, 55.2] } },
    { id: 'ozinki', title: 'Ozinki', geometry: { type: 'Point', coordinates: [49.7265, 51.1986] }, dx: -12, dy: 14 },
    { id: 'iletsk', title: 'Iletsk', geometry: { type: 'Point', coordinates: [54.9951, 51.1583] }, dx: 2, dy: -14 },
    { id: 'kartaly', title: 'Kartalay', geometry: { type: 'Point', coordinates: [60.65, 53.05] }, dx: 10, dy: -10 },
    { id: 'aktobe', title: 'Aktobe', geometry: { type: 'Point', coordinates: [57.1667, 50.2839] }, dx: -12, dy: 14 },
    { id: 'pavlodar', title: 'Pavlodar', geometry: { type: 'Point', coordinates: [76.9674, 52.2873] }, dx: 10, dy: -5 },
    { id: 'astana', title: 'Astana', geometry: { type: 'Point', coordinates: [71.4304, 51.1282] }, dx: -18, dy: -14 },
    { id: 'karaganda', title: 'Karaganda', geometry: { type: 'Point', coordinates: [73.1026, 49.8064] }, dx: 10, dy: 2 },
    { id: 'shymkent', title: 'Shymkent', geometry: { type: 'Point', coordinates: [69.6004, 42.3099] }, dx: -65, dy: -2 },
    { id: 'almaty', title: 'Almaty', geometry: { type: 'Point', coordinates: [76.9457, 43.2383] }, dx: 10, dy: -5 },
    { id: 'tashkent', title: 'Tashkent', geometry: { type: 'Point', coordinates: [69.2401, 41.2995] }, dx: -5, dy: 14 },
    { id: 'bishkek', title: 'Bishkek', geometry: { type: 'Point', coordinates: [74.5698, 42.8746] }, dx: 10, dy: 10 },
    { id: 'bukhara', title: 'Bukhara', geometry: { type: 'Point', coordinates: [64.4307, 39.7703] }, dx: -10, dy: 12 }
  ];

  citySeries.data.setAll(cities);

  citySeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;

    if (data.hidden) {
      return am5.Bullet.new(root, {
        sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0, strokeOpacity: 0 })
      });
    }

    var cont = am5.Container.new(root, {});

    cont.children.push(
      am5.Circle.new(root, {
        radius: 4,
        fill: am5.color(0xffffff),
        fillOpacity: 1,
        strokeOpacity: 0,
        tooltipText: '{title}'
      })
    );

    cont.children.push(
      am5.Label.new(root, {
        text: data.title,
        fill: am5.color(0xffffff),
        fontSize: 12,
        fontWeight: '400',
        centerY: am5.p50,
        dx: data.dx || 10,
        dy: data.dy || 0,
        paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
      })
    );

    return am5.Bullet.new(root, { sprite: cont });
  });

  var baseLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  baseLineSeries.mapLines.template.setAll({ strokeOpacity: 0 });

  var dashedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  dashedLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.94,
    strokeDasharray: [5, 5]
  });

  var solidLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  solidLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.94
  });

  var animatedPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
  animatedPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0 })
    });
  });

  var animationSpeed = 0.5;

  var routes = [
    { from: 'riga', to: 'zilupe', type: 'dashed', delay: 200, duration: 500 },
    { from: 'zilupe', to: 'russiaHub', type: 'dashed', delay: 550, duration: 1400 },
    { from: 'russiaHub', to: 'ozinki', type: 'dashed', delay: 1650, duration: 800 },
    { from: 'russiaHub', to: 'iletsk', type: 'dashed', delay: 1700, duration: 1000 },
    { from: 'russiaHub', to: 'kartaly', type: 'dashed', delay: 1750, duration: 1300 },
    { from: 'ozinki', to: 'aktobe', type: 'solid', delay: 2400, duration: 850 },
    { from: 'ozinki', to: 'shymkent', type: 'solid', delay: 2550, duration: 1800 },
    { from: 'ozinki', to: 'bukhara', type: 'solid', delay: 2650, duration: 2200 },
    { from: 'iletsk', to: 'almaty', type: 'solid', delay: 2550, duration: 2100 },
    { from: 'iletsk', to: 'bishkek', type: 'solid', delay: 2700, duration: 2000 },
    { from: 'kartaly', to: 'pavlodar', type: 'solid', delay: 2500, duration: 1500 },
    { from: 'kartaly', to: 'astana', type: 'solid', delay: 2650, duration: 1450 },
    { from: 'kartaly', to: 'karaganda', type: 'solid', delay: 2800, duration: 1500 }
  ];

  function buildRoute(route) {
    var fromItem = citySeries.getDataItemById(route.from);
    var toItem = citySeries.getDataItemById(route.to);
    if (!fromItem || !toItem) return;

    var baseLine = baseLineSeries.pushDataItem({});
    baseLine.set('pointsToConnect', [fromItem, toItem]);

    var startPoint = animatedPointSeries.pushDataItem({});
    startPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var endPoint = animatedPointSeries.pushDataItem({});
    endPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var visibleSeries = route.type === 'solid' ? solidLineSeries : dashedLineSeries;
    var visibleLine = visibleSeries.pushDataItem({});
    visibleLine.set('pointsToConnect', [startPoint, endPoint]);

    route._endPoint = endPoint;
  }

  var playTimers = [];

  function playAllRoutes() {
    playTimers.forEach(function (t) { clearTimeout(t); });
    playTimers = [];

    routes.forEach(function (route) {
      if (!route._endPoint) return;
      route._endPoint.animate({ key: 'positionOnLine', from: 0, to: 0, duration: 0 });

      var timer = setTimeout(function () {
        route._endPoint.animate({
          key: 'positionOnLine',
          from: 0,
          to: 1,
          duration: route.duration * animationSpeed,
          easing: am5.ease.out(am5.ease.cubic)
        });
      }, route.delay * animationSpeed);
      playTimers.push(timer);
    });
  }

  var routesCreated = false;
  citySeries.events.on('datavalidated', function () {
    if (routesCreated) return;
    routesCreated = true;
    routes.forEach(buildRoute);
    /* animation starts on scroll-into-view or tab click — see script.js */
  });

  polygonSeries.events.on('datavalidated', function () {
    chart.zoomToGeoBounds({ left: 2, right: 96, top: 63, bottom: 36.5 }, 0);
  });

  chart.appear(1000, 100);

  window.kdtsRouteCharts = window.kdtsRouteCharts || {};
  window.kdtsRouteCharts[ROUTE_KEY] = { play: playAllRoutes };
})();

/* ===========================================================
   ROUTE 3 — Еуропа — Ресей (Брест арқылы)
   =========================================================== */
(function () {
  'use strict';

  var CONTAINER_ID = 'chartdiv-route-3';
  var ROUTE_KEY = '3';

  if (!document.getElementById(CONTAINER_ID) || typeof am5 === 'undefined') return;

  var root = am5.Root.new(CONTAINER_ID);
  root.setThemes([am5themes_Animated.new(root)]);
  root.container.set('background', am5.Rectangle.new(root, {
    fill: am5.color(0x061c38),
    fillOpacity: 1
  }));

  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      projection: am5map.geoMercator(),
      panX: 'none',
      panY: 'none',
      wheelX: 'none',
      wheelY: 'none',
      pinchZoom: false
    })
  );

  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ['AQ']
    })
  );

  polygonSeries.mapPolygons.template.setAll({
    fill: am5.color(0x08264a),
    fillOpacity: 0.68,
    stroke: am5.color(0x176dc1),
    strokeOpacity: 0.42,
    strokeWidth: 0.8,
    interactive: false,
    templateField: 'polygonSettings'
  });

  polygonSeries.data.setAll([
    { id: 'LV', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.92, stroke: am5.color(0x1f72c5), strokeOpacity: 0.7, strokeWidth: 1 } },
    { id: 'RU', polygonSettings: { fill: am5.color(0x0a2f59), fillOpacity: 0.92, stroke: am5.color(0x1f72c5), strokeOpacity: 0.65, strokeWidth: 1 } },
    { id: 'KZ', polygonSettings: { fill: am5.color(0x0c3768), fillOpacity: 0.98, stroke: am5.color(0x2995ff), strokeOpacity: 0.85, strokeWidth: 1.1 } }
  ]);

  var countryLabelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var countryLabels = [
    { title: 'LATVIA', geometry: { type: 'Point', coordinates: [25.3, 58.4] }, small: true, dy: 12 },
    { title: 'RUSSIA', geometry: { type: 'Point', coordinates: [70, 61] } },
    { title: 'KAZAKHSTAN', geometry: { type: 'Point', coordinates: [68, 46] }, dy: -22 }
  ];

  countryLabelSeries.data.setAll(countryLabels);

  countryLabelSeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var label = am5.Label.new(root, {
      text: data.title,
      fill: am5.color(0x2995ff),
      fontSize: data.small ? 9 : 12,
      fontWeight: '500',
      centerX: am5.p50,
      centerY: am5.p50,
      dy: data.dy || 0,
      opacity: 0.85,
      paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
    });
    return am5.Bullet.new(root, { sprite: label });
  });

  var citySeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var cities = [
    { id: 'riga', title: 'Riga', geometry: { type: 'Point', coordinates: [24.1052, 56.9496] }, dx: -10, dy: 14 },
    { id: 'zilupe', title: 'Zilupe', geometry: { type: 'Point', coordinates: [28.1217, 56.3862] }, dx: -10, dy: 14 },
    { id: 'saintPetersburg', title: 'Saint Petersburg', geometry: { type: 'Point', coordinates: [30.3351, 59.9343] }, dx: 10, dy: -8 },
    { id: 'moscow', title: 'Moscow', geometry: { type: 'Point', coordinates: [37.6173, 55.7558] }, dx: -18, dy: 15 },
    { id: 'nizhniNovgorod', title: 'Nizhni Novgorod', geometry: { type: 'Point', coordinates: [44.0059, 56.2965] }, dx: -32, dy: 15 },
    { id: 'perm', title: 'Perm', geometry: { type: 'Point', coordinates: [56.2502, 58.0105] }, dx: -7, dy: 15 },
    { id: 'ekaterinburg', title: 'Ekaterinburg', geometry: { type: 'Point', coordinates: [60.5975, 56.8389] }, dx: -42, dy: 15 },
    { id: 'omsk', title: 'Omsk', geometry: { type: 'Point', coordinates: [73.3686, 54.9885] }, dx: -10, dy: 15 },
    { id: 'krasnoyarsk', title: 'Krasnoyarsk', geometry: { type: 'Point', coordinates: [92.8526, 56.0153] }, dx: -40, dy: 15 },
    { id: 'irkutsk', title: 'Irkutsk', geometry: { type: 'Point', coordinates: [104.2807, 52.2869] }, dx: -15, dy: 15 }
  ];

  citySeries.data.setAll(cities);

  citySeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var cont = am5.Container.new(root, {});

    cont.children.push(
      am5.Circle.new(root, {
        radius: 4,
        fill: am5.color(0xffffff),
        fillOpacity: 1,
        strokeOpacity: 0,
        tooltipText: '{title}'
      })
    );

    cont.children.push(
      am5.Label.new(root, {
        text: data.title,
        fill: am5.color(0xffffff),
        fontSize: 12,
        fontWeight: '400',
        centerY: am5.p50,
        dx: data.dx || 10,
        dy: data.dy || 0,
        paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
      })
    );

    return am5.Bullet.new(root, { sprite: cont });
  });

  var baseLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  baseLineSeries.mapLines.template.setAll({ strokeOpacity: 0 });

  var dashedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  dashedLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.94,
    strokeDasharray: [5, 5]
  });

  var animatedPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
  animatedPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0 })
    });
  });

  var animationSpeed = 0.5;

  var routes = [
    { from: 'riga', to: 'zilupe', delay: 150, duration: 450 },
    { from: 'zilupe', to: 'saintPetersburg', delay: 450, duration: 650 },
    { from: 'zilupe', to: 'moscow', delay: 450, duration: 900 },
    { from: 'moscow', to: 'nizhniNovgorod', delay: 1100, duration: 750 },
    { from: 'nizhniNovgorod', to: 'perm', delay: 1600, duration: 950 },
    { from: 'perm', to: 'ekaterinburg', delay: 2150, duration: 650 },
    { from: 'ekaterinburg', to: 'omsk', delay: 2550, duration: 1050 },
    { from: 'omsk', to: 'krasnoyarsk', delay: 3150, duration: 1350 },
    { from: 'krasnoyarsk', to: 'irkutsk', delay: 3900, duration: 1050 }
  ];

  function buildRoute(route) {
    var fromItem = citySeries.getDataItemById(route.from);
    var toItem = citySeries.getDataItemById(route.to);
    if (!fromItem || !toItem) return;

    var baseLine = baseLineSeries.pushDataItem({});
    baseLine.set('pointsToConnect', [fromItem, toItem]);

    var startPoint = animatedPointSeries.pushDataItem({});
    startPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var endPoint = animatedPointSeries.pushDataItem({});
    endPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var visibleLine = dashedLineSeries.pushDataItem({});
    visibleLine.set('pointsToConnect', [startPoint, endPoint]);

    route._endPoint = endPoint;
  }

  var playTimers = [];

  function playAllRoutes() {
    playTimers.forEach(function (t) { clearTimeout(t); });
    playTimers = [];

    routes.forEach(function (route) {
      if (!route._endPoint) return;
      route._endPoint.animate({ key: 'positionOnLine', from: 0, to: 0, duration: 0 });

      var timer = setTimeout(function () {
        route._endPoint.animate({
          key: 'positionOnLine',
          from: 0,
          to: 1,
          duration: route.duration * animationSpeed,
          easing: am5.ease.out(am5.ease.cubic)
        });
      }, route.delay * animationSpeed);
      playTimers.push(timer);
    });
  }

  var routesCreated = false;
  citySeries.events.on('datavalidated', function () {
    if (routesCreated) return;
    routesCreated = true;
    routes.forEach(buildRoute);
    /* animation starts on scroll-into-view or tab click — see script.js */
  });

  polygonSeries.events.on('datavalidated', function () {
    chart.zoomToGeoBounds({ left: -10, right: 120, top: 68, bottom: 34 }, 0);
  });

  chart.appear(1000, 100);

  window.kdtsRouteCharts = window.kdtsRouteCharts || {};
  window.kdtsRouteCharts[ROUTE_KEY] = { play: playAllRoutes };
})();

/* ===========================================================
   ROUTE 4 — Еуропа — Ресей (Рига арқылы)
   =========================================================== */
(function () {
  'use strict';

  var CONTAINER_ID = 'chartdiv-route-4';
  var ROUTE_KEY = '4';

  if (!document.getElementById(CONTAINER_ID) || typeof am5 === 'undefined') return;

  var root = am5.Root.new(CONTAINER_ID);
  root.setThemes([am5themes_Animated.new(root)]);
  root.container.set('background', am5.Rectangle.new(root, {
    fill: am5.color(0x061c38),
    fillOpacity: 1
  }));

  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      projection: am5map.geoMercator(),
      panX: 'none',
      panY: 'none',
      wheelX: 'none',
      wheelY: 'none',
      pinchZoom: false
    })
  );

  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ['AQ']
    })
  );

  polygonSeries.mapPolygons.template.setAll({
    fill: am5.color(0x08264a),
    fillOpacity: 0.68,
    stroke: am5.color(0x176dc1),
    strokeOpacity: 0.42,
    strokeWidth: 0.8,
    interactive: false,
    templateField: 'polygonSettings'
  });

  polygonSeries.data.setAll([
    { id: 'DE', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.92, stroke: am5.color(0x1f72c5), strokeOpacity: 0.7, strokeWidth: 1 } },
    { id: 'RU', polygonSettings: { fill: am5.color(0x0a2f59), fillOpacity: 0.92, stroke: am5.color(0x1f72c5), strokeOpacity: 0.7, strokeWidth: 1 } },
    { id: 'KZ', polygonSettings: { fill: am5.color(0x0c3768), fillOpacity: 0.98, stroke: am5.color(0x2995ff), strokeOpacity: 0.85, strokeWidth: 1.1 } }
  ]);

  var countryLabelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var countryLabels = [
    { title: 'GERMANY', geometry: { type: 'Point', coordinates: [9, 49] } },
    { title: 'RUSSIA', geometry: { type: 'Point', coordinates: [50, 62] } },
    { title: 'KAZAKHSTAN', geometry: { type: 'Point', coordinates: [68, 47] } }
  ];

  countryLabelSeries.data.setAll(countryLabels);

  countryLabelSeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var label = am5.Label.new(root, {
      text: data.title,
      fill: am5.color(0x2995ff),
      fontSize: 12,
      fontWeight: '500',
      centerX: am5.p50,
      centerY: am5.p50,
      dy: data.dy || 0,
      opacity: 0.9,
      paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
    });
    return am5.Bullet.new(root, { sprite: label });
  });

  var citySeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var cities = [
    { id: 'duisburg', title: 'Duisburg', geometry: { type: 'Point', coordinates: [6.7623, 51.4344] }, dx: -12, dy: 14 },
    { id: 'brest', title: 'Brest', geometry: { type: 'Point', coordinates: [23.6877, 52.0976] }, dx: -12, dy: 14 },
    { id: 'krasnoe', title: 'Krasnoe', geometry: { type: 'Point', coordinates: [31.4395, 54.5694] }, dx: -25, dy: 14 },
    { id: 'saintPetersburg', title: 'Saint Petersburg', geometry: { type: 'Point', coordinates: [30.3351, 59.9343] }, dx: -5, dy: -13 },
    { id: 'moscow', title: 'Moscow', geometry: { type: 'Point', coordinates: [37.6173, 55.7558] }, dx: -12, dy: 14 },
    { id: 'nizhniNovgorod', title: 'Nizhni Novgorod', geometry: { type: 'Point', coordinates: [44.0059, 56.2965] }, dx: -35, dy: 14 },
    { id: 'perm', title: 'Perm', geometry: { type: 'Point', coordinates: [56.2294, 58.0105] }, dx: -7, dy: 14 },
    { id: 'ekaterinburg', title: 'Ekaterinburg', geometry: { type: 'Point', coordinates: [60.5975, 56.8389] }, dx: -38, dy: 14 },
    { id: 'omsk', title: 'Omsk', geometry: { type: 'Point', coordinates: [73.3686, 54.9885] }, dx: -10, dy: 14 },
    { id: 'krasnoyarsk', title: 'Krasnoyarsk', geometry: { type: 'Point', coordinates: [92.8932, 56.0153] }, dx: -38, dy: 14 },
    { id: 'irkutsk', title: 'Irkutsk', geometry: { type: 'Point', coordinates: [104.2807, 52.2869] }, dx: -13, dy: 14 }
  ];

  citySeries.data.setAll(cities);

  citySeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var cont = am5.Container.new(root, {});

    cont.children.push(
      am5.Circle.new(root, {
        radius: 4,
        fill: am5.color(0xffffff),
        fillOpacity: 1,
        strokeOpacity: 0,
        tooltipText: '{title}'
      })
    );

    cont.children.push(
      am5.Label.new(root, {
        text: data.title,
        fill: am5.color(0xffffff),
        fontSize: 12,
        fontWeight: '400',
        centerY: am5.p50,
        dx: data.dx || 10,
        dy: data.dy || 0,
        paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
      })
    );

    return am5.Bullet.new(root, { sprite: cont });
  });

  var baseLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  baseLineSeries.mapLines.template.setAll({ strokeOpacity: 0 });

  var dashedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  dashedLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.94,
    strokeDasharray: [5, 5]
  });

  var solidLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  solidLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.94
  });

  var animatedPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
  animatedPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0 })
    });
  });

  var animationSpeed = 0.5;

  var routes = [
    { from: 'duisburg', to: 'brest', type: 'dashed', delay: 150, duration: 1200 },
    { from: 'brest', to: 'krasnoe', type: 'dashed', delay: 950, duration: 700 },
    { from: 'krasnoe', to: 'moscow', type: 'dashed', delay: 1400, duration: 700 },
    { from: 'moscow', to: 'nizhniNovgorod', type: 'dashed', delay: 1850, duration: 750 },
    { from: 'nizhniNovgorod', to: 'perm', type: 'dashed', delay: 2300, duration: 1000 },
    { from: 'perm', to: 'ekaterinburg', type: 'dashed', delay: 2900, duration: 650 },
    { from: 'ekaterinburg', to: 'omsk', type: 'dashed', delay: 3300, duration: 1000 },
    { from: 'omsk', to: 'krasnoyarsk', type: 'dashed', delay: 3900, duration: 1300 },
    { from: 'krasnoyarsk', to: 'irkutsk', type: 'dashed', delay: 4650, duration: 1000 },
    { from: 'saintPetersburg', to: 'moscow', type: 'solid', delay: 1400, duration: 900 }
  ];

  function buildRoute(route) {
    var fromItem = citySeries.getDataItemById(route.from);
    var toItem = citySeries.getDataItemById(route.to);
    if (!fromItem || !toItem) return;

    var baseLine = baseLineSeries.pushDataItem({});
    baseLine.set('pointsToConnect', [fromItem, toItem]);

    var startPoint = animatedPointSeries.pushDataItem({});
    startPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var endPoint = animatedPointSeries.pushDataItem({});
    endPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var visibleSeries = route.type === 'solid' ? solidLineSeries : dashedLineSeries;
    var visibleLine = visibleSeries.pushDataItem({});
    visibleLine.set('pointsToConnect', [startPoint, endPoint]);

    route._endPoint = endPoint;
  }

  var playTimers = [];

  function playAllRoutes() {
    playTimers.forEach(function (t) { clearTimeout(t); });
    playTimers = [];

    routes.forEach(function (route) {
      if (!route._endPoint) return;
      route._endPoint.animate({ key: 'positionOnLine', from: 0, to: 0, duration: 0 });

      var timer = setTimeout(function () {
        route._endPoint.animate({
          key: 'positionOnLine',
          from: 0,
          to: 1,
          duration: route.duration * animationSpeed,
          easing: am5.ease.out(am5.ease.cubic)
        });
      }, route.delay * animationSpeed);
      playTimers.push(timer);
    });
  }

  var routesCreated = false;
  citySeries.events.on('datavalidated', function () {
    if (routesCreated) return;
    routesCreated = true;
    routes.forEach(buildRoute);
    /* animation starts on scroll-into-view or tab click — see script.js */
  });

  polygonSeries.events.on('datavalidated', function () {
    chart.zoomToGeoBounds({ left: -3, right: 113, top: 65, bottom: 35 }, 0);
  });

  chart.appear(1000, 100);

  window.kdtsRouteCharts = window.kdtsRouteCharts || {};
  window.kdtsRouteCharts[ROUTE_KEY] = { play: playAllRoutes };
})();

/* ===========================================================
   ROUTE 5 — Йоэнсуу (Финляндия) — Корла (Қытай)
   =========================================================== */
(function () {
  'use strict';

  var CONTAINER_ID = 'chartdiv-route-5';
  var ROUTE_KEY = '5';

  if (!document.getElementById(CONTAINER_ID) || typeof am5 === 'undefined') return;

  var root = am5.Root.new(CONTAINER_ID);
  root.setThemes([am5themes_Animated.new(root)]);
  root.container.set('background', am5.Rectangle.new(root, {
    fill: am5.color(0x061c38),
    fillOpacity: 1
  }));

  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      projection: am5map.geoMercator(),
      panX: 'none',
      panY: 'none',
      wheelX: 'none',
      wheelY: 'none',
      pinchZoom: false
    })
  );

  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ['AQ']
    })
  );

  polygonSeries.mapPolygons.template.setAll({
    fill: am5.color(0x08264a),
    fillOpacity: 0.68,
    stroke: am5.color(0x176dc1),
    strokeOpacity: 0.42,
    strokeWidth: 0.8,
    interactive: false,
    templateField: 'polygonSettings'
  });

  polygonSeries.data.setAll([
    { id: 'KZ', polygonSettings: { fill: am5.color(0x0c3768), fillOpacity: 0.98, stroke: am5.color(0x2995ff), strokeOpacity: 0.85, strokeWidth: 1.1 } },
    { id: 'CN', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.93, stroke: am5.color(0x1f72c5), strokeOpacity: 0.72, strokeWidth: 1 } }
  ]);

  var countryLabelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var countryLabels = [
    { title: 'FINLAND', geometry: { type: 'Point', coordinates: [24.5, 64] } },
    { title: 'KAZAKHSTAN', geometry: { type: 'Point', coordinates: [67.5, 48.0] } },
    { title: 'CHINA', geometry: { type: 'Point', coordinates: [104.0, 36.0] } }
  ];

  countryLabelSeries.data.setAll(countryLabels);

  countryLabelSeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var label = am5.Label.new(root, {
      text: data.title,
      fill: am5.color(0x2995ff),
      fontSize: 12,
      fontWeight: '500',
      centerX: am5.p50,
      centerY: am5.p50,
      opacity: 0.9,
      paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
    });
    return am5.Bullet.new(root, { sprite: label });
  });

  var citySeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var cities = [
    { id: 'joensuu', title: 'Joensuu', geometry: { type: 'Point', coordinates: [29.7632, 62.6012] }, dx: -50, dy: 14 },
    { id: 'vartsila', title: 'Värtsilä', geometry: { type: 'Point', coordinates: [30.6164, 62.2014] }, dx: 8, dy: -5 },
    { id: 'iletsk', title: '', hidden: true, geometry: { type: 'Point', coordinates: [54.9951, 51.1583] } },
    { id: 'dostyk', title: 'Dostyk', geometry: { type: 'Point', coordinates: [82.4878, 45.255] }, dx: 13, dy: 1 },
    { id: 'korla', title: 'Korla', geometry: { type: 'Point', coordinates: [86.15, 41.77] }, dx: 10, dy: 10 }
  ];

  citySeries.data.setAll(cities);

  citySeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;

    if (data.hidden) {
      return am5.Bullet.new(root, {
        sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0, strokeOpacity: 0 })
      });
    }

    var cont = am5.Container.new(root, {});

    cont.children.push(
      am5.Circle.new(root, {
        radius: 4,
        fill: am5.color(0xffffff),
        fillOpacity: 1,
        strokeOpacity: 0,
        tooltipText: '{title}'
      })
    );

    cont.children.push(
      am5.Label.new(root, {
        text: data.title,
        fill: am5.color(0xffffff),
        fontSize: 12,
        fontWeight: '400',
        centerY: am5.p50,
        dx: data.dx || 10,
        dy: data.dy || 0,
        paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
      })
    );

    return am5.Bullet.new(root, { sprite: cont });
  });

  var secondaryPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var secondaryPoints = [
    { geometry: { type: 'Point', coordinates: [48.5, 50.4] } },
    { geometry: { type: 'Point', coordinates: [53.5, 51.4] } },
    { geometry: { type: 'Point', coordinates: [60.5, 51.0] } },
    { geometry: { type: 'Point', coordinates: [67.0, 53.0] } },
    { geometry: { type: 'Point', coordinates: [73.0, 51.7] } },
    { geometry: { type: 'Point', coordinates: [69.0, 43.0] } },
    { geometry: { type: 'Point', coordinates: [105.0, 39.5] } },
    { geometry: { type: 'Point', coordinates: [110.5, 34.5] } },
    { geometry: { type: 'Point', coordinates: [112.5, 28.5] } },
    { geometry: { type: 'Point', coordinates: [120.0, 44.0] } }
  ];

  secondaryPointSeries.data.setAll(secondaryPoints);

  secondaryPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 3, fill: am5.color(0xffffff), fillOpacity: 0.75, strokeOpacity: 0 })
    });
  });

  var baseLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  baseLineSeries.mapLines.template.setAll({ strokeOpacity: 0 });

  var dashedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  dashedLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.95,
    strokeDasharray: [5, 5]
  });

  var animatedPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
  animatedPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0 })
    });
  });

  var animationSpeed = 0.5;

  var routes = [
    { from: 'joensuu', to: 'vartsila', delay: 100, duration: 450 },
    { from: 'vartsila', to: 'iletsk', delay: 400, duration: 1800 },
    { from: 'iletsk', to: 'dostyk', delay: 1500, duration: 1900 },
    { from: 'dostyk', to: 'korla', delay: 2700, duration: 1000 }
  ];

  function buildRoute(route) {
    var fromItem = citySeries.getDataItemById(route.from);
    var toItem = citySeries.getDataItemById(route.to);
    if (!fromItem || !toItem) return;

    var baseLine = baseLineSeries.pushDataItem({});
    baseLine.set('pointsToConnect', [fromItem, toItem]);

    var startPoint = animatedPointSeries.pushDataItem({});
    startPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var endPoint = animatedPointSeries.pushDataItem({});
    endPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var visibleLine = dashedLineSeries.pushDataItem({});
    visibleLine.set('pointsToConnect', [startPoint, endPoint]);

    route._endPoint = endPoint;
  }

  var playTimers = [];

  function playAllRoutes() {
    playTimers.forEach(function (t) { clearTimeout(t); });
    playTimers = [];

    routes.forEach(function (route) {
      if (!route._endPoint) return;
      route._endPoint.animate({ key: 'positionOnLine', from: 0, to: 0, duration: 0 });

      var timer = setTimeout(function () {
        route._endPoint.animate({
          key: 'positionOnLine',
          from: 0,
          to: 1,
          duration: route.duration * animationSpeed,
          easing: am5.ease.out(am5.ease.cubic)
        });
      }, route.delay * animationSpeed);
      playTimers.push(timer);
    });
  }

  var routesCreated = false;
  citySeries.events.on('datavalidated', function () {
    if (routesCreated) return;
    routesCreated = true;
    routes.forEach(buildRoute);
    /* animation starts on scroll-into-view or tab click — see script.js */
  });

  polygonSeries.events.on('datavalidated', function () {
    chart.zoomToGeoBounds({ left: 10, right: 135, top: 72, bottom: 25 }, 0);
  });

  chart.appear(1000, 100);

  window.kdtsRouteCharts = window.kdtsRouteCharts || {};
  window.kdtsRouteCharts[ROUTE_KEY] = { play: playAllRoutes };
})();

/* ===========================================================
   ROUTE 6 — Қытай — Еуропа
   =========================================================== */
(function () {
  'use strict';

  var CONTAINER_ID = 'chartdiv-route-6';
  var ROUTE_KEY = '6';

  if (!document.getElementById(CONTAINER_ID) || typeof am5 === 'undefined') return;

  var root = am5.Root.new(CONTAINER_ID);
  root.setThemes([am5themes_Animated.new(root)]);
  root.container.set('background', am5.Rectangle.new(root, {
    fill: am5.color(0x061c38),
    fillOpacity: 1
  }));

  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      projection: am5map.geoMercator(),
      panX: 'none',
      panY: 'none',
      wheelX: 'none',
      wheelY: 'none',
      pinchZoom: false
    })
  );

  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ['AQ']
    })
  );

  polygonSeries.mapPolygons.template.setAll({
    fill: am5.color(0x08264a),
    fillOpacity: 0.68,
    stroke: am5.color(0x176dc1),
    strokeOpacity: 0.42,
    strokeWidth: 0.8,
    interactive: false,
    templateField: 'polygonSettings'
  });

  polygonSeries.data.setAll([
    { id: 'DE', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.92, stroke: am5.color(0x1f72c5), strokeOpacity: 0.7, strokeWidth: 1 } },
    { id: 'KZ', polygonSettings: { fill: am5.color(0x0c3768), fillOpacity: 0.98, stroke: am5.color(0x2995ff), strokeOpacity: 0.85, strokeWidth: 1.1 } },
    { id: 'CN', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.93, stroke: am5.color(0x1f72c5), strokeOpacity: 0.72, strokeWidth: 1 } }
  ]);

  var countryLabelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var countryLabels = [
    { title: 'GERMANY', geometry: { type: 'Point', coordinates: [10.5, 50.0] }, dy: -12 },
    { title: 'KAZAKHSTAN', geometry: { type: 'Point', coordinates: [67.0, 47.5] } },
    { title: 'CHINA', geometry: { type: 'Point', coordinates: [100.0, 34.0] } }
  ];

  countryLabelSeries.data.setAll(countryLabels);

  countryLabelSeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var label = am5.Label.new(root, {
      text: data.title,
      fill: am5.color(0x2995ff),
      fontSize: 12,
      fontWeight: '500',
      centerX: am5.p50,
      centerY: am5.p50,
      dy: data.dy || 0,
      opacity: 0.9,
      paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
    });
    return am5.Bullet.new(root, { sprite: label });
  });

  var citySeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var cities = [
    { id: 'hamburg', title: 'Hamburg', geometry: { type: 'Point', coordinates: [9.9937, 53.5511] }, dx: -25, dy: 14 },
    { id: 'brest', title: 'Brest', geometry: { type: 'Point', coordinates: [23.6877, 52.0976] }, dx: -15, dy: 14 },
    { id: 'krasnoe', title: 'Krasnoe', geometry: { type: 'Point', coordinates: [31.43, 54.57] }, dx: -15, dy: 14 },
    { id: 'iletsk', title: 'Iletsk', geometry: { type: 'Point', coordinates: [54.9951, 51.1583] }, dx: -14, dy: 14 },
    { id: 'dostyk', title: 'Dostyk', geometry: { type: 'Point', coordinates: [82.4878, 45.255] }, dx: -20, dy: 14 },
    { id: 'chinaHub', title: '', hidden: true, geometry: { type: 'Point', coordinates: [104.0, 36.0] } },
    { id: 'chongqing', title: 'Chongqing', geometry: { type: 'Point', coordinates: [106.5516, 29.563] }, dx: -25, dy: 14 },
    { id: 'dalian', title: 'Dalian', geometry: { type: 'Point', coordinates: [120.3826, 36.0671] }, dx: -18, dy: 14 },
    { id: 'qingdao', title: 'Qingdao', geometry: { type: 'Point', coordinates: [121.6147, 38.914] }, dx: -28, dy: 14 },
    { id: 'shanghai', title: 'Shanghai', geometry: { type: 'Point', coordinates: [121.4737, 31.2304] }, dx: -25, dy: 14 }
  ];

  citySeries.data.setAll(cities);

  citySeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;

    if (data.hidden) {
      return am5.Bullet.new(root, {
        sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0, strokeOpacity: 0 })
      });
    }

    var cont = am5.Container.new(root, {});

    cont.children.push(
      am5.Circle.new(root, {
        radius: 4,
        fill: am5.color(0xffffff),
        fillOpacity: 1,
        strokeOpacity: 0,
        tooltipText: '{title}'
      })
    );

    cont.children.push(
      am5.Label.new(root, {
        text: data.title,
        fill: am5.color(0xffffff),
        fontSize: 12,
        fontWeight: '400',
        centerY: am5.p50,
        dx: data.dx || 10,
        dy: data.dy || 0,
        paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
      })
    );

    return am5.Bullet.new(root, { sprite: cont });
  });

  var secondaryPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var secondaryPoints = [
    { geometry: { type: 'Point', coordinates: [8.0, 51.5] } },
    { geometry: { type: 'Point', coordinates: [8.7, 49.5] } },
    { geometry: { type: 'Point', coordinates: [28.0, 58.0] } },
    { geometry: { type: 'Point', coordinates: [36.5, 58.5] } },
    { geometry: { type: 'Point', coordinates: [45.0, 60.0] } },
    { geometry: { type: 'Point', coordinates: [48.5, 50.4] } },
    { geometry: { type: 'Point', coordinates: [53.5, 51.4] } },
    { geometry: { type: 'Point', coordinates: [60.5, 51.0] } },
    { geometry: { type: 'Point', coordinates: [67.0, 53.0] } },
    { geometry: { type: 'Point', coordinates: [73.0, 51.5] } },
    { geometry: { type: 'Point', coordinates: [69.0, 43.0] } }
  ];

  secondaryPointSeries.data.setAll(secondaryPoints);

  secondaryPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 3, fill: am5.color(0xffffff), fillOpacity: 0.72, strokeOpacity: 0 })
    });
  });

  var baseLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  baseLineSeries.mapLines.template.setAll({ strokeOpacity: 0 });

  var dashedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  dashedLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.95,
    strokeDasharray: [5, 5]
  });

  var solidLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  solidLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.75
  });

  var animatedPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
  animatedPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0 })
    });
  });

  var animationSpeed = 0.5;

  var routes = [
    { from: 'hamburg', to: 'brest', type: 'dashed', delay: 100, duration: 1000 },
    { from: 'brest', to: 'krasnoe', type: 'dashed', delay: 750, duration: 650 },
    { from: 'krasnoe', to: 'iletsk', type: 'dashed', delay: 1150, duration: 1450 },
    { from: 'iletsk', to: 'dostyk', type: 'dashed', delay: 2100, duration: 1800 },
    { from: 'dostyk', to: 'chinaHub', type: 'dashed', delay: 3250, duration: 1500 },
    { from: 'chinaHub', to: 'chongqing', type: 'dashed', delay: 4200, duration: 900 },
    { from: 'chinaHub', to: 'qingdao', type: 'solid', delay: 4000, duration: 1100 },
    { from: 'chinaHub', to: 'dalian', type: 'solid', delay: 4100, duration: 1050 },
    { from: 'chinaHub', to: 'shanghai', type: 'solid', delay: 4200, duration: 1100 }
  ];

  function buildRoute(route) {
    var fromItem = citySeries.getDataItemById(route.from);
    var toItem = citySeries.getDataItemById(route.to);
    if (!fromItem || !toItem) return;

    var baseLine = baseLineSeries.pushDataItem({});
    baseLine.set('pointsToConnect', [fromItem, toItem]);

    var startPoint = animatedPointSeries.pushDataItem({});
    startPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var endPoint = animatedPointSeries.pushDataItem({});
    endPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var visibleSeries = route.type === 'solid' ? solidLineSeries : dashedLineSeries;
    var visibleLine = visibleSeries.pushDataItem({});
    visibleLine.set('pointsToConnect', [startPoint, endPoint]);

    route._endPoint = endPoint;
  }

  var playTimers = [];

  function playAllRoutes() {
    playTimers.forEach(function (t) { clearTimeout(t); });
    playTimers = [];

    routes.forEach(function (route) {
      if (!route._endPoint) return;
      route._endPoint.animate({ key: 'positionOnLine', from: 0, to: 0, duration: 0 });

      var timer = setTimeout(function () {
        route._endPoint.animate({
          key: 'positionOnLine',
          from: 0,
          to: 1,
          duration: route.duration * animationSpeed,
          easing: am5.ease.out(am5.ease.cubic)
        });
      }, route.delay * animationSpeed);
      playTimers.push(timer);
    });
  }

  var routesCreated = false;
  citySeries.events.on('datavalidated', function () {
    if (routesCreated) return;
    routesCreated = true;
    routes.forEach(buildRoute);
    /* animation starts on scroll-into-view or tab click — see script.js */
  });

  polygonSeries.events.on('datavalidated', function () {
    chart.zoomToGeoBounds({ left: -8, right: 135, top: 64, bottom: 22 }, 0);
  });

  chart.appear(1000, 100);

  window.kdtsRouteCharts = window.kdtsRouteCharts || {};
  window.kdtsRouteCharts[ROUTE_KEY] = { play: playAllRoutes };
})();

/* ===========================================================
   ROUTE 7 — Сучжоу (Қытай) — Варшава (Польша)
   =========================================================== */
(function () {
  'use strict';

  var CONTAINER_ID = 'chartdiv-route-7';
  var ROUTE_KEY = '7';

  if (!document.getElementById(CONTAINER_ID) || typeof am5 === 'undefined') return;

  var root = am5.Root.new(CONTAINER_ID);
  root.setThemes([am5themes_Animated.new(root)]);
  root.container.set('background', am5.Rectangle.new(root, {
    fill: am5.color(0x061c38),
    fillOpacity: 1
  }));

  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      projection: am5map.geoMercator(),
      panX: 'none',
      panY: 'none',
      wheelX: 'none',
      wheelY: 'none',
      pinchZoom: false
    })
  );

  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ['AQ']
    })
  );

  polygonSeries.mapPolygons.template.setAll({
    fill: am5.color(0x08264a),
    fillOpacity: 0.68,
    stroke: am5.color(0x176dc1),
    strokeOpacity: 0.42,
    strokeWidth: 0.8,
    interactive: false,
    templateField: 'polygonSettings'
  });

  polygonSeries.data.setAll([
    { id: 'PL', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.92, stroke: am5.color(0x1f72c5), strokeOpacity: 0.7, strokeWidth: 1 } },
    { id: 'KZ', polygonSettings: { fill: am5.color(0x0c3768), fillOpacity: 0.98, stroke: am5.color(0x2995ff), strokeOpacity: 0.85, strokeWidth: 1.1 } },
    { id: 'CN', polygonSettings: { fill: am5.color(0x0a315b), fillOpacity: 0.93, stroke: am5.color(0x1f72c5), strokeOpacity: 0.72, strokeWidth: 1 } }
  ]);

  var countryLabelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var countryLabels = [
    { title: 'POLAND', geometry: { type: 'Point', coordinates: [19.0, 50.5] }, dy: -14 },
    { title: 'KAZAKHSTAN', geometry: { type: 'Point', coordinates: [67.0, 47.5] } },
    { title: 'CHINA', geometry: { type: 'Point', coordinates: [104.0, 34.0] } }
  ];

  countryLabelSeries.data.setAll(countryLabels);

  countryLabelSeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var label = am5.Label.new(root, {
      text: data.title,
      fill: am5.color(0x2995ff),
      fontSize: 12,
      fontWeight: '500',
      centerX: am5.p50,
      centerY: am5.p50,
      dy: data.dy || 0,
      opacity: 0.9,
      paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
    });
    return am5.Bullet.new(root, { sprite: label });
  });

  var citySeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var cities = [
    { id: 'warsaw', title: 'Warsaw', geometry: { type: 'Point', coordinates: [21.0122, 52.2297] }, dx: -40, dy: -14 },
    { id: 'brest', title: 'Brest', geometry: { type: 'Point', coordinates: [23.6877, 52.0976] }, dx: 2, dy: 14 },
    { id: 'krasnoe', title: 'Krasnoe', geometry: { type: 'Point', coordinates: [31.43, 54.57] }, dx: -10, dy: 14 },
    { id: 'zabaikalsk', title: 'Zabaikalsk', geometry: { type: 'Point', coordinates: [117.32, 49.65] }, dx: -28, dy: 14 },
    { id: 'zhengzhou', title: 'Zhengzhou', geometry: { type: 'Point', coordinates: [113.6254, 34.7466] }, dx: -28, dy: 14 }
  ];

  citySeries.data.setAll(cities);

  citySeries.bullets.push(function (root, series, dataItem) {
    var data = dataItem.dataContext;
    var cont = am5.Container.new(root, {});

    cont.children.push(
      am5.Circle.new(root, {
        radius: 4,
        fill: am5.color(0xffffff),
        fillOpacity: 1,
        strokeOpacity: 0,
        tooltipText: '{title}'
      })
    );

    cont.children.push(
      am5.Label.new(root, {
        text: data.title,
        fill: am5.color(0xffffff),
        fontSize: 12,
        fontWeight: '400',
        centerY: am5.p50,
        dx: data.dx || 10,
        dy: data.dy || 0,
        paddingTop: 0, paddingBottom: 0, paddingLeft: 0, paddingRight: 0
      })
    );

    return am5.Bullet.new(root, { sprite: cont });
  });

  var secondaryPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  var secondaryPoints = [
    { geometry: { type: 'Point', coordinates: [12.0, 50.0] } },
    { geometry: { type: 'Point', coordinates: [14.0, 54.0] } },
    { geometry: { type: 'Point', coordinates: [18.0, 57.0] } },
    { geometry: { type: 'Point', coordinates: [29.0, 58.0] } },
    { geometry: { type: 'Point', coordinates: [45.0, 60.0] } },
    { geometry: { type: 'Point', coordinates: [67.0, 56.5] } },
    { geometry: { type: 'Point', coordinates: [92.0, 55.0] } },
    { geometry: { type: 'Point', coordinates: [48.5, 50.4] } },
    { geometry: { type: 'Point', coordinates: [53.5, 51.4] } },
    { geometry: { type: 'Point', coordinates: [60.5, 51.0] } },
    { geometry: { type: 'Point', coordinates: [67.0, 53.0] } },
    { geometry: { type: 'Point', coordinates: [73.0, 51.7] } },
    { geometry: { type: 'Point', coordinates: [69.0, 43.0] } },
    { geometry: { type: 'Point', coordinates: [105.0, 39.5] } },
    { geometry: { type: 'Point', coordinates: [110.0, 34.5] } },
    { geometry: { type: 'Point', coordinates: [113.0, 28.0] } },
    { geometry: { type: 'Point', coordinates: [120.0, 44.0] } }
  ];

  secondaryPointSeries.data.setAll(secondaryPoints);

  secondaryPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 3, fill: am5.color(0xffffff), fillOpacity: 0.72, strokeOpacity: 0 })
    });
  });

  var baseLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  baseLineSeries.mapLines.template.setAll({ strokeOpacity: 0 });

  var dashedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
  dashedLineSeries.mapLines.template.setAll({
    stroke: am5.color(0xffffff),
    strokeWidth: 1,
    strokeOpacity: 0.95,
    strokeDasharray: [5, 5]
  });

  var animatedPointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
  animatedPointSeries.bullets.push(function () {
    return am5.Bullet.new(root, {
      sprite: am5.Circle.new(root, { radius: 0, fillOpacity: 0 })
    });
  });

  var animationSpeed = 0.5;

  var routes = [
    { from: 'warsaw', to: 'brest', delay: 100, duration: 550 },
    { from: 'brest', to: 'krasnoe', delay: 450, duration: 650 },
    { from: 'krasnoe', to: 'zabaikalsk', delay: 850, duration: 2800 },
    { from: 'zabaikalsk', to: 'zhengzhou', delay: 2550, duration: 1400 }
  ];

  function buildRoute(route) {
    var fromItem = citySeries.getDataItemById(route.from);
    var toItem = citySeries.getDataItemById(route.to);
    if (!fromItem || !toItem) return;

    var baseLine = baseLineSeries.pushDataItem({});
    baseLine.set('pointsToConnect', [fromItem, toItem]);

    var startPoint = animatedPointSeries.pushDataItem({});
    startPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var endPoint = animatedPointSeries.pushDataItem({});
    endPoint.setAll({ lineDataItem: baseLine, positionOnLine: 0 });

    var visibleLine = dashedLineSeries.pushDataItem({});
    visibleLine.set('pointsToConnect', [startPoint, endPoint]);

    route._endPoint = endPoint;
  }

  var playTimers = [];

  function playAllRoutes() {
    playTimers.forEach(function (t) { clearTimeout(t); });
    playTimers = [];

    routes.forEach(function (route) {
      if (!route._endPoint) return;
      route._endPoint.animate({ key: 'positionOnLine', from: 0, to: 0, duration: 0 });

      var timer = setTimeout(function () {
        route._endPoint.animate({
          key: 'positionOnLine',
          from: 0,
          to: 1,
          duration: route.duration * animationSpeed,
          easing: am5.ease.out(am5.ease.cubic)
        });
      }, route.delay * animationSpeed);
      playTimers.push(timer);
    });
  }

  var routesCreated = false;
  citySeries.events.on('datavalidated', function () {
    if (routesCreated) return;
    routesCreated = true;
    routes.forEach(buildRoute);
    /* animation starts on scroll-into-view or tab click — see script.js */
  });

  polygonSeries.events.on('datavalidated', function () {
    chart.zoomToGeoBounds({ left: 5, right: 130, top: 67, bottom: 27 }, 0);
  });

  chart.appear(1000, 100);

  window.kdtsRouteCharts = window.kdtsRouteCharts || {};
  window.kdtsRouteCharts[ROUTE_KEY] = { play: playAllRoutes };
})();
