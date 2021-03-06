<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)/Stocks'] = 'Stocks/index';
$route['Dashboard'] = 'Dashboard/PrepareDashBoard';
$route['User/Dashboard'] = 'Dashboard/PrepareDashBoard';
$route['(:any)/getusers'] = 'User/viewusers';
$route['(:any)/(:any)/getusers']='User/viewusers';
$route['(:any)/(:any)/User/getusers'] = 'User/viewusers';
$route['(:any)/(:any)/User']='User';
$route['(:any)/(:any)/Dashboard']='Dashboard/PrepareDashBoard';
$route['(:any)/Dashboard']='Dashboard/PrepareDashBoard';
$route['User/User'] = 'User';
$route['User/User/Dashboard'] = 'Dashboard/PrepareDashBoard';
$route['User/User/User'] = 'User';
$route['User/User/addUser'] = 'User/addUser';
$route['(:any)/User']='User';
$route['LoginService']='Dashboard/LoginUtil';
$route['login']='Dashboard/funclogin';
$route['logout']='Dashboard/logout';
$route['Stocks/AddStockEntry']='Stocks/addStock';
$route['Stocks/UpdateStockService']='Stocks/updateStock';
//$route['Products']='Products/index';
$route['Suppliers']='Members/getsuppliers';
$route['Customers']='Members/getcustomers';
$route['Members/GetMemberDetails']='Members/ViewMemberDetails';


$route['Orders']='Orders/ShowOrders';
$route['Products']='Products/ProductView';
$route['AddOrder']='Orders';
$route['GetDebtorsReport']='Orders/CreateDebtorsReport';
$route['GetCustomerOrders']='Orders/CreateOrdersReport';
$route['GetOrdersReport']='Orders/OrdersReport';

$route['GetCreditorsReport']='Stocks/CreateCreditorsReport';
$route['AddProducts']='Products';
$route['GetProductReport']='Products/CreateProductValuationReport';
$route['GetStockReport']='Stocks/CreateStockValuationReport';






