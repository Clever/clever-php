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

Most API requests allow query parameters for purposes like paging and filtering. The same can be done in the PHP library by passing the `all()` method an associative array of parameters. For example, to retrieve the last Event from the Events API, you could run:

```php
$events = CleverEvent::all(array('ending_before' => 'last', 'limit' => 1));
```

To cursor through larger data sets, capture the last ID of an object in a set, and use it as the `starting_after` value for a subsequent request.

```php
$schools = CleverSchool::all(array('limit' => 1)); # page "one"
$last_school = $schools[count($schools)-1];
do {
  # retrieve page "two" and beyond
  $more_schools = CleverSchool::all(array('limit' => 1, 'starting_after' => $last_school->id));
  if(count($more_schools) > 0) {
    $schools = array_merge($schools, $more_schools);
    $last_school = $more_schools[count($more_schools)-1];
  } else {
    $last_school = NULL;
  }
} while($last_school);
print_r($schools); # Print all the schools retrieved.
```

To cursor to a previous page, use the first ID of each set as the `ending_before` value.

Unfortunately, paginating via relative links is not yet supported by clever-php.

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

Questions, feature requests, or feedback of any kind is always welcome! We're available at [tech-support@clever.com](mailto:tech-support@clever.com).
