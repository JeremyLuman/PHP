<a href="https://www.linkedin.com/in/jeremy-luman-b68a2938/"><img src="https://lastpass.com/wp-content/uploads/Parker.png" align="center"></a>



# PHP Portfolio

> A showcase of exemplary PHP coding

**Badges**

[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) [![Dependency Status](http://img.shields.io/gemnasium/badges/badgerbadgerbadger.svg?style=flat-square)](https://gemnasium.com/badges/badgerbadgerbadger) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger) [![Code Climate](http://img.shields.io/codeclimate/github/badges/badgerbadgerbadger.svg?style=flat-square)](https://codeclimate.com/github/badges/badgerbadgerbadger) [![Github Issues](http://githubbadges.herokuapp.com/badges/badgerbadgerbadger/issues.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger/issues) [![Pending Pull-Requests](http://githubbadges.herokuapp.com/badges/badgerbadgerbadger/pulls.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger/pulls) [![Gem Version](http://img.shields.io/gem/v/badgerbadgerbadger.svg?style=flat-square)](https://rubygems.org/gems/badgerbadgerbadger) [![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org) [![Badges](http://img.shields.io/:badges-9/9-ff6799.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger)

- For more on these wonderful ~~badgers~~ badges, refer to <a href="http://badges.github.io/badgerbadgerbadger/" target="_blank">`badgerbadgerbadger`</a>.

![Recordit GIF](http://g.recordit.co/iLN6A0vSD8.gif)

## Example (Optional)

```php
<?php
$myfile = fopen("names.txt", "w");

  $txt = "Jeremias\n";
   fwrite($myfile, $txt);
  $txt = "Erika\n";
   fwrite($myfile, $txt);

 fclose($myfile);

$read = file('names.txt');
$count = count($read);
  $i = 1;
foreach ($read as $line) {
  echo $line;
   if($i < $count) {
      echo ', ';
      }
     $i++;
   }
   
//date formatted in mm/dd/yyyy format
$birthDate = "09/19/1991"; 
//explode the birthdate to get month, day and year 
$birthDate = explode("/", $birthDate); 
//get the age from date or birthdate 
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") 
 ? ((date("Y") - $birthDate[2]) - 1) 
 : (date("Y") - $birthDate[2])); 
echo "Your age is: " . $age; 

?>
```

---


## Contributing

> To get started...

## Contact

Reach out to me at one of the following places!

- LinkedIn at <a href="https://www.linkedin.com/in/jeremy-luman-b68a2938/" target="_blank">`linkedin.com`</a>
- CodePen at <a href="https://codepen.io/JeremyLuman/">`codepen.io
- GitHub at <a href="https://github.com/JeremyLuman" target="_blank">`github.com`</a>


## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2017 © <a href="https://github.com/JeremyLuman" target="_blank">Jeremy Luman</a>.
