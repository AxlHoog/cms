<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-14 14:35:27 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\Users\Axl\Desktop\dev\system\classes\Kohana\Cookie.php:67
2014-07-14 14:35:27 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\Users\Axl\Desktop\dev\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\Users\Axl\Desktop\dev\system\classes\Kohana\Cookie.php:67
2014-07-14 14:38:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\cms.php [ 10 ] in file:line
2014-07-14 14:38:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:38:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\cms.php [ 10 ] in file:line
2014-07-14 14:38:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:38:49 --- CRITICAL: ErrorException [ 1 ]: Class 'parrent' not found ~ APPPATH\classes\Controller\cms.php [ 8 ] in file:line
2014-07-14 14:38:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:38:50 --- CRITICAL: ErrorException [ 1 ]: Class 'parrent' not found ~ APPPATH\classes\Controller\cms.php [ 8 ] in file:line
2014-07-14 14:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:38:57 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\cms.php [ 10 ] in C:\Users\Axl\Desktop\dev\application\classes\Controller\cms.php:10
2014-07-14 14:38:57 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\classes\Controller\cms.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\Users\Axl\De...', 10, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(69): Controller_Cms->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cms))
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#7 {main} in C:\Users\Axl\Desktop\dev\application\classes\Controller\cms.php:10
2014-07-14 14:48:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:48:41 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:51:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\welcome.php [ 1 ] in C:\Users\Axl\Desktop\dev\application\views\welcome.php:1
2014-07-14 14:51:49 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\welcome.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 1, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_View->__toString()
#5 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#14 {main} in C:\Users\Axl\Desktop\dev\application\views\welcome.php:1
2014-07-14 14:51:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\welcome.php [ 1 ] in C:\Users\Axl\Desktop\dev\application\views\welcome.php:1
2014-07-14 14:51:51 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\welcome.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 1, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_View->__toString()
#5 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#14 {main} in C:\Users\Axl\Desktop\dev\application\views\welcome.php:1
2014-07-14 14:52:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:28 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:29 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:29 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:30 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:30 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:30 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_check ~ APPPATH\views\template.php [ 9 ] in C:\Users\Axl\Desktop\dev\application\views\template.php:9
2014-07-14 14:52:47 --- DEBUG: #0 C:\Users\Axl\Desktop\dev\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Axl\De...', 9, Array)
#1 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(61): include('C:\Users\Axl\De...')
#2 C:\Users\Axl\Desktop\dev\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Axl\De...', Array)
#3 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Axl\Desktop\dev\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Axl\Desktop\dev\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Axl\Desktop\dev\application\views\template.php:9