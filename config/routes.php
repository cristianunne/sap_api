<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/*
 * This file is loaded in the context of the `Application` class.
  * So you can use  `$this` to reference the application class instance
  * if required.
 */
return function (RouteBuilder $routes): void {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        /*
         * Here, we are connecting '/' (base path) to a controller called 'Pages',
         * its action called 'display', and we pass a param to select the view file
         * to use (in this case, templates/Pages/home.php)...
         */
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');




        /*
         * Connect catchall routes for all controllers.
         *
         * The `fallbacks` method is a shortcut for
         *
         * ```
         * $builder->connect('/{controller}', ['action' => 'index']);
         * $builder->connect('/{controller}/{action}/*', []);
         * ```
         *
         * You can remove these routes once you've connected the
         * routes you want in your application.
         */
        $builder->fallbacks();
    });

    $routes->connect(
        '/API/index',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'index']
    );

    $routes->connect(
        '/API/getRodales',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getRodales']
    );

    $routes->connect(
        '/API/getEmpresas',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getEmpresas']
    );

    $routes->connect(
        '/API/getRodalesIdByEmpresa',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getRodalesIdByEmpresa']
    );

    $routes->connect(
        '/API/getRodalesWithEmpresas',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getRodalesWithEmpresas']
    );

    $routes->connect(
        '/API/getYears',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getYears']
    );

    $routes->connect(
        '/API/getDataByYears',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getDataByYears']
    );

    $routes->connect(
        '/API/getMetadataForQueryData',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMetadataForQueryData']
    );

    $routes->connect(
        '/API/getEmsefors',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getEmsefors']
    );

    $routes->connect(
        '/API/getYearsByIdRodal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getYearsByIdRodal']
    );

    $routes->connect(
        '/API/getMonthsByRodales',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMonthsByRodales']
    );

    $routes->connect(
        '/API/getDataCostosCompleto',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getDataCostosCompleto']
    );

    $routes->connect(
        '/API/getMateriales',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMateriales']
    );

    $routes->connect(
        '/API/getMonthsByYears',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMonthsByYears']
    );

    $routes->connect(
        '/API/getResumenCostos',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenCostos']
    );

    $routes->connect(
        '/API/getMaterialesByQuery',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMaterialesByQuery']
    );

    $routes->connect(
        '/API/getResumenCostosByYears',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenCostosByYears']
    );

    $routes->connect(
        '/API/getElaborador',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getElaborador']
    );

    $routes->connect(
        '/API/getChoferes',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getChoferes']
    );

    $routes->connect(
        '/API/getTransportistas',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getTransportistas']
    );

    $routes->connect(
        '/API/getCompradores',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getCompradores']
    );

    $routes->connect(
        '/API/getYearsForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getYearsForestal']
    );

    $routes->connect(
        '/API/getYearsPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getYearsPresentForestal']
    );

    $routes->connect(
        '/API/getMaterialesPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMaterialesPresentForestal']
    );

    $routes->connect(
        '/API/getElaboradorPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getElaboradorPresentForestal']
    );

    $routes->connect(
        '/API/getChoferesPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getChoferesPresentForestal']
    );

    $routes->connect(
        '/API/getTransportistasPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getTransportistasPresentForestal']
    );

    $routes->connect(
        '/API/getCompradorPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getCompradorPresentForestal']
    );

    $routes->connect(
        '/API/getMonthsPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMonthsPresentForestal']
    );

    $routes->connect(
        '/API/getDaysPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getDaysPresentForestal']
    );

    $routes->connect(
        '/API/getRodalesPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getRodalesPresentForestal']
    );

    $routes->connect(
        '/API/getEmpresasPresentForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getEmpresasPresentForestal']
    );

    $routes->connect(
        '/API/getMetadataForQueryDataForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getMetadataForQueryDataForestal']
    );

    $routes->connect(
        '/API/getDataExtraccionForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getDataExtraccionForestal']
    );

    $routes->connect(
        '/API/getResumenProduccionByYears',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenProduccionByYears']
    );

    $routes->connect(
        '/API/getResumenRodalDestinoMaterialForestal',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenRodalDestinoMaterialForestal']
    );

    $routes->connect(
        '/API/getResumenProduccionByYearsByMaterial',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenProduccionByYearsByMaterial']
    );


    /*
     * Metodos de Costos
     */

    $routes->connect(
        '/API/getResumenCostosByQuery',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenCostosByQuery']
    );

    $routes->connect(
        '/API/getResumenCostosByYearsByQuery',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenCostosByYearsByQuery']
    );

    $routes->connect(
        '/API/getResumenCostosByYearsRodalesByQuery',
        ['prefix' => 'API', 'controller' => 'Api', 'action' => 'getResumenCostosByYearsRodalesByQuery']
    );


    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder): void {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
