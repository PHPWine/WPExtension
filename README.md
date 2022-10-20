# WPExtension plugin framework
WPExtension System cloud application development wp plugin framework [ Support only PHP v8++  ]

Backend Dependencies :  PHPVanilla RESTful-API | Guzzle  |  AltoRouter | CMB2 | TCPDF | GULP | PHPMailer | PHPWine v2.0 | PHPVanilla v1.5 | PHPWine Enhancer |
- D|T|M : PHP WineElement  
- D|T|M : PHP Dyanmic Tab 
- D|T|M : PHP Dyanmic Accordion  
- D|T|M : PHP Dynamic Table  
- D|T|M : PHP Dynamic Banner Slider 
- D|T|M : PHP Dynamic Product Slider 
- D|T|M : PHP Dynamic Logo Slider 
- D|T|M : PHP Dynamic Gallery 
- D|T|M : PHP Static SearchFilter 
- D|T|M : PHP Pagination 

FrontEnd Components: 
- Bootstrap 4
- Google fonts [ Poppin, Roboto Condence | 400, 500, 600 ]

```HTML
 // Structure and Dependencies 
 | - root folder [ WPExtension ]
   | - Apps
     | - Admin
     | - Public
     | - Api
     | - Shorcodes [ class not allowed inside ]
     | - Vendor
         | - Guzzle
         | - AltoRouter
         | - CMB2
         | - TCPDF
         | - PHPMailer
         | - PHPWine v2.0
             | - PHPVanilla v1.5
             | - PHP WineElement
             | - PHPWine Enhancers
      -
  | - Includes
  | - Loader
      ...
```

```PHP
  // Installing WinElement Dependency
  use PHPWineVanillaFlavour\Apps\PHPWineElement\Wine\WineElement;

  $elem =  new WineElement();
  $elem->Element([
     'attr'  => ['data-r'=>'drive', 'data-t'=>'wheel', 'data-n'=>'y']
    ,'elem'  => 'h1'
    ,'id'    => 'id' 
    ,'class' => 'class' 
    ,'value' => 'First Above!']);
  $elem->Element([
    'id'     => 'new_id' 
    ,'class' => 'new_class' 
    ,'value' => function() { return('This is New Above!'); }
  ]);
  $elem->renderElements();
```

```PHP
 // Incase you have no idea what are you doing.
 define('PHPWINE_DEBUG_ERRORS', true );  // @since v1.4
 define('PHPCRUD_DEBUG_ERRORS', true ); 
 // rename WPExtension file as 
 WPExtension-debugging or just [ -debug ] Disregard error message header_sent that happen when framework having content already.
 
 // Incase you almost dead enable PHP Default error report [ debugging! ]
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
```
Resources: <br />
WP Generator Source: <a href="https://wppb.me/">Link</a><br />
Google Fonts: <a href="https://fonts.google.com/">Link</a>


<hr /> 

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my WP Extension plugin to repository<br /> 
</h5>

__LICENSE BY GNU v3__

NO WARRANTY

BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.

IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
<br />

<hr />
Would you like me to treat a cake and coffee ? <br />
Become a donor, Because with you! We can build more... 

Donate: <br />
GCash : +639650332900 <br /> 
Paypal account: syncdevprojects@gmail.com
<hr />
<br />
Thanks and good luck! 
