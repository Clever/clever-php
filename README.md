# clever-php

[![Build Status](https://drone.ops.clever.com/github.com/Clever/clever-php/status.svg?branch=master)](https://drone.ops.clever.com/github.com/Clever/clever-php)

# Installation

Download the latest version of the Clever PHP library via git:

```bash
git clone https://github.com/Clever/clever-php
```

or click here: [https://github.com/Clever/clever-php/tarball/master](https://github.com/Clever/clever-php/tarball/master).


# Usage

To get started, add the following to your PHP script:

```php
require_once("/path/to/clever-php/lib/Clever.php");
```

To authenticate using your API key:

```
Clever::setApiKey("YOUR_API_KEY");
```

If you're authenticating using an oauth token, call `setToken` instead:

```
Clever::setToken("TOKEN_STRING");
```

Once you've included Clever.php and set your API key, you can begin using the objects provided by the SDK:

* CleverDistrict
* CleverSchool
* CleverStudent
* CleverSection
* CleverTeacher
* CleverEvent

These objects correspond directly with the endpoints of the [REST API](https://clever.com/developers/docs), and expose the exact same functionality via the class methods `all()` and `retrieve()`:

```php
CleverDistrict::all(); // gets all districts you have access to via your API key.
CleverDistrict::retrieve($id); // gets district with ID $id
```

`all()` returns an array of Clever objects, while `retrieve()` returns a single instance of an object. Each Clever object has an additional set of instance methods corresponding to "second-level" information. For example, getting all of the schools, teachers, students, and sections for a district could be done like so:

```php
$demo_district = CleverDistrict::retrieve("4fd43cc56d11340000000005");
$demo_schools = $demo_district->schools();
$demo_teachers = $demo_district->teachers();
$demo_students = $demo_district->students();
$demo_sections = $demo_district->sections();
```

The same patterns apply to other Clever objects (CleverSchool, CleverStudent, CleverSection, CleverTeacher, and CleverEvent). Here's an example that gets information about a teacher, all the sections they teach, the school they belong to, and the students they teach:

```php
$teacher = CleverTeacher::retrieve("4fee004dca2e43cf270007d5");
$teacher_sections = $teacher->sections();
$teacher_school = $teacher->school();
$teacher_students = $teacher->students();
```

## Query Parameters

Most API requests allow query parameters for purposes like paging and filtering. The same can be done in the PHP library by passing the `all()` method an associative array of parameters. For example, to see what data has changed since July 23rd, you could run:

```php
$events = CleverEvent::all(array('created_since' => '2012-07-23'));
```

To page through a lot of data you could do something along the lines of:

```php
for ($page = 1;
     count($students = CleverStudent::all(array('page' => $page)));
     $page++) {
  print_r($students);
}
```

## Composer Support

Composer support has been added,  Place the following lines in your composer.json file.

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/clever/clever-php"
        }
    ],
    "require": {
       "clever/clever": "*"
}
}
```

**Note that it is necessary to include the vcs link to be sure that you are pulling from this repo.**

The package manager for composer currently does **not** point to the correct repo for [clever/clever-php](https://packagist.org/packages/clever/clever-php).

We are published as [clever/clever](https://packagist.org/packages/clever/clever).


## Feedback

Questions, feature requests, or feedback of any kind is always welcome! We're available at [clever-php@clever.com](mailto:clever-php@clever.com).
