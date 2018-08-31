# Clever\DataApi

All URIs are relative to *https://api.clever.com/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContact**](DataApi.md#getContact) | **GET** /contacts/{id} | 
[**getContacts**](DataApi.md#getContacts) | **GET** /contacts | 
[**getContactsForStudent**](DataApi.md#getContactsForStudent) | **GET** /students/{id}/contacts | 
[**getCourse**](DataApi.md#getCourse) | **GET** /courses/{id} | 
[**getCourseForSection**](DataApi.md#getCourseForSection) | **GET** /sections/{id}/course | 
[**getCourses**](DataApi.md#getCourses) | **GET** /courses | 
[**getDistrict**](DataApi.md#getDistrict) | **GET** /districts/{id} | 
[**getDistrictAdmin**](DataApi.md#getDistrictAdmin) | **GET** /district_admins/{id} | 
[**getDistrictAdmins**](DataApi.md#getDistrictAdmins) | **GET** /district_admins | 
[**getDistrictForContact**](DataApi.md#getDistrictForContact) | **GET** /contacts/{id}/district | 
[**getDistrictForCourse**](DataApi.md#getDistrictForCourse) | **GET** /courses/{id}/district | 
[**getDistrictForDistrictAdmin**](DataApi.md#getDistrictForDistrictAdmin) | **GET** /district_admins/{id}/district | 
[**getDistrictForSchool**](DataApi.md#getDistrictForSchool) | **GET** /schools/{id}/district | 
[**getDistrictForSchoolAdmin**](DataApi.md#getDistrictForSchoolAdmin) | **GET** /school_admins/{id}/district | 
[**getDistrictForSection**](DataApi.md#getDistrictForSection) | **GET** /sections/{id}/district | 
[**getDistrictForStudent**](DataApi.md#getDistrictForStudent) | **GET** /students/{id}/district | 
[**getDistrictForTeacher**](DataApi.md#getDistrictForTeacher) | **GET** /teachers/{id}/district | 
[**getDistrictForTerm**](DataApi.md#getDistrictForTerm) | **GET** /terms/{id}/district | 
[**getDistricts**](DataApi.md#getDistricts) | **GET** /districts | 
[**getSchool**](DataApi.md#getSchool) | **GET** /schools/{id} | 
[**getSchoolAdmin**](DataApi.md#getSchoolAdmin) | **GET** /school_admins/{id} | 
[**getSchoolAdmins**](DataApi.md#getSchoolAdmins) | **GET** /school_admins | 
[**getSchoolForSection**](DataApi.md#getSchoolForSection) | **GET** /sections/{id}/school | 
[**getSchoolForStudent**](DataApi.md#getSchoolForStudent) | **GET** /students/{id}/school | 
[**getSchoolForTeacher**](DataApi.md#getSchoolForTeacher) | **GET** /teachers/{id}/school | 
[**getSchools**](DataApi.md#getSchools) | **GET** /schools | 
[**getSchoolsForSchoolAdmin**](DataApi.md#getSchoolsForSchoolAdmin) | **GET** /school_admins/{id}/schools | 
[**getSchoolsForStudent**](DataApi.md#getSchoolsForStudent) | **GET** /students/{id}/schools | 
[**getSchoolsForTeacher**](DataApi.md#getSchoolsForTeacher) | **GET** /teachers/{id}/schools | 
[**getSection**](DataApi.md#getSection) | **GET** /sections/{id} | 
[**getSections**](DataApi.md#getSections) | **GET** /sections | 
[**getSectionsForCourse**](DataApi.md#getSectionsForCourse) | **GET** /courses/{id}/sections | 
[**getSectionsForSchool**](DataApi.md#getSectionsForSchool) | **GET** /schools/{id}/sections | 
[**getSectionsForStudent**](DataApi.md#getSectionsForStudent) | **GET** /students/{id}/sections | 
[**getSectionsForTeacher**](DataApi.md#getSectionsForTeacher) | **GET** /teachers/{id}/sections | 
[**getSectionsForTerm**](DataApi.md#getSectionsForTerm) | **GET** /terms/{id}/sections | 
[**getStudent**](DataApi.md#getStudent) | **GET** /students/{id} | 
[**getStudents**](DataApi.md#getStudents) | **GET** /students | 
[**getStudentsForContact**](DataApi.md#getStudentsForContact) | **GET** /contacts/{id}/students | 
[**getStudentsForSchool**](DataApi.md#getStudentsForSchool) | **GET** /schools/{id}/students | 
[**getStudentsForSection**](DataApi.md#getStudentsForSection) | **GET** /sections/{id}/students | 
[**getStudentsForTeacher**](DataApi.md#getStudentsForTeacher) | **GET** /teachers/{id}/students | 
[**getTeacher**](DataApi.md#getTeacher) | **GET** /teachers/{id} | 
[**getTeacherForSection**](DataApi.md#getTeacherForSection) | **GET** /sections/{id}/teacher | 
[**getTeachers**](DataApi.md#getTeachers) | **GET** /teachers | 
[**getTeachersForSchool**](DataApi.md#getTeachersForSchool) | **GET** /schools/{id}/teachers | 
[**getTeachersForSection**](DataApi.md#getTeachersForSection) | **GET** /sections/{id}/teachers | 
[**getTeachersForStudent**](DataApi.md#getTeachersForStudent) | **GET** /students/{id}/teachers | 
[**getTerm**](DataApi.md#getTerm) | **GET** /terms/{id} | 
[**getTermForSection**](DataApi.md#getTermForSection) | **GET** /sections/{id}/term | 
[**getTerms**](DataApi.md#getTerms) | **GET** /terms | 


# **getContact**
> \Clever\Model\ContactResponse getContact($id)



Returns a specific student contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContacts**
> \Clever\Model\ContactsResponse getContacts($limit, $starting_after, $ending_before)



Returns a list of student contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getContacts($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\ContactsResponse**](../Model/ContactsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContactsForStudent**
> \Clever\Model\ContactsResponse getContactsForStudent($id, $limit, $starting_after, $ending_before)



Returns the contacts for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getContactsForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getContactsForStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\ContactsResponse**](../Model/ContactsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourse**
> \Clever\Model\CourseResponse getCourse($id)



Returns a specific course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\CourseResponse**](../Model/CourseResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourseForSection**
> \Clever\Model\CourseResponse getCourseForSection($id)



Returns the course for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getCourseForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCourseForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\CourseResponse**](../Model/CourseResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourses**
> \Clever\Model\CoursesResponse getCourses($limit, $starting_after, $ending_before)



Returns a list of courses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getCourses($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\CoursesResponse**](../Model/CoursesResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrict**
> \Clever\Model\DistrictResponse getDistrict($id)



Returns a specific district

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrict($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrict: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictAdmin**
> \Clever\Model\DistrictAdminResponse getDistrictAdmin($id)



Returns a specific district admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictAdmin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictAdminResponse**](../Model/DistrictAdminResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictAdmins**
> \Clever\Model\DistrictAdminsResponse getDistrictAdmins($limit, $starting_after, $ending_before)



Returns a list of district admins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getDistrictAdmins($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictAdmins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\DistrictAdminsResponse**](../Model/DistrictAdminsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForContact**
> \Clever\Model\DistrictResponse getDistrictForContact($id)



Returns the district for a student contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForCourse**
> \Clever\Model\DistrictResponse getDistrictForCourse($id)



Returns the district for a course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForDistrictAdmin**
> \Clever\Model\DistrictResponse getDistrictForDistrictAdmin($id)



Returns the district for a district admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForDistrictAdmin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForDistrictAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForSchool**
> \Clever\Model\DistrictResponse getDistrictForSchool($id)



Returns the district for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForSchoolAdmin**
> \Clever\Model\DistrictResponse getDistrictForSchoolAdmin($id)



Returns the district for a school admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForSchoolAdmin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForSchoolAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForSection**
> \Clever\Model\DistrictResponse getDistrictForSection($id)



Returns the district for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForStudent**
> \Clever\Model\DistrictResponse getDistrictForStudent($id)



Returns the district for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForTeacher**
> \Clever\Model\DistrictResponse getDistrictForTeacher($id)



Returns the district for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForTeacher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistrictForTerm**
> \Clever\Model\DistrictResponse getDistrictForTerm($id)



Returns the district for a term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDistricts**
> \Clever\Model\DistrictsResponse getDistricts()



Returns a list of districts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');


try {
    $result = $api_instance->getDistricts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistricts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Clever\Model\DistrictsResponse**](../Model/DistrictsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchool**
> \Clever\Model\SchoolResponse getSchool($id)



Returns a specific school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolAdmin**
> \Clever\Model\SchoolAdminResponse getSchoolAdmin($id)



Returns a specific school admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getSchoolAdmin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\SchoolAdminResponse**](../Model/SchoolAdminResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolAdmins**
> \Clever\Model\SchoolAdminsResponse getSchoolAdmins($limit, $starting_after, $ending_before)



Returns a list of school admins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSchoolAdmins($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolAdmins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SchoolAdminsResponse**](../Model/SchoolAdminsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolForSection**
> \Clever\Model\SchoolResponse getSchoolForSection($id)



Returns the school for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getSchoolForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolForStudent**
> \Clever\Model\SchoolResponse getSchoolForStudent($id)



Returns the primary school for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getSchoolForStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolForStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolForTeacher**
> \Clever\Model\SchoolResponse getSchoolForTeacher($id)



Retrieves school info for a teacher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getSchoolForTeacher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolForTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchools**
> \Clever\Model\SchoolsResponse getSchools($limit, $starting_after, $ending_before)



Returns a list of schools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSchools($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolsForSchoolAdmin**
> \Clever\Model\SchoolsResponse getSchoolsForSchoolAdmin($id, $limit, $starting_after, $ending_before)



Returns the schools for a school admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSchoolsForSchoolAdmin($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolsForSchoolAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolsForStudent**
> \Clever\Model\SchoolsResponse getSchoolsForStudent($id, $limit, $starting_after, $ending_before)



Returns the schools for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSchoolsForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolsForStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSchoolsForTeacher**
> \Clever\Model\SchoolsResponse getSchoolsForTeacher($id, $limit, $starting_after, $ending_before)



Returns the schools for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSchoolsForTeacher($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSchoolsForTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSection**
> \Clever\Model\SectionResponse getSection($id)



Returns a specific section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\SectionResponse**](../Model/SectionResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSections**
> \Clever\Model\SectionsResponse getSections($limit, $starting_after, $ending_before)



Returns a list of sections

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSections($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForCourse**
> \Clever\Model\SectionsResponse getSectionsForCourse($id, $limit, $starting_after, $ending_before)



Returns the sections for a Courses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSectionsForCourse($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForSchool**
> \Clever\Model\SectionsResponse getSectionsForSchool($id, $limit, $starting_after, $ending_before)



Returns the sections for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSectionsForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForStudent**
> \Clever\Model\SectionsResponse getSectionsForStudent($id, $limit, $starting_after, $ending_before)



Returns the sections for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSectionsForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForTeacher**
> \Clever\Model\SectionsResponse getSectionsForTeacher($id, $limit, $starting_after, $ending_before)



Returns the sections for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSectionsForTeacher($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionsForTerm**
> \Clever\Model\SectionsResponse getSectionsForTerm($id, $limit, $starting_after, $ending_before)



Returns the sections for a term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getSectionsForTerm($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getSectionsForTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudent**
> \Clever\Model\StudentResponse getStudent($id)



Returns a specific student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\StudentResponse**](../Model/StudentResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudents**
> \Clever\Model\StudentsResponse getStudents($limit, $starting_after, $ending_before)



Returns a list of students

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getStudents($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentsForContact**
> \Clever\Model\StudentsResponse getStudentsForContact($id, $limit, $starting_after, $ending_before)



Returns the students for a student contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getStudentsForContact($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudentsForContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentsForSchool**
> \Clever\Model\StudentsResponse getStudentsForSchool($id, $limit, $starting_after, $ending_before)



Returns the students for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getStudentsForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudentsForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentsForSection**
> \Clever\Model\StudentsResponse getStudentsForSection($id, $limit, $starting_after, $ending_before)



Returns the students for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getStudentsForSection($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudentsForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentsForTeacher**
> \Clever\Model\StudentsResponse getStudentsForTeacher($id, $limit, $starting_after, $ending_before)



Returns the students for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getStudentsForTeacher($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudentsForTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeacher**
> \Clever\Model\TeacherResponse getTeacher($id)



Returns a specific teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getTeacher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\TeacherResponse**](../Model/TeacherResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeacherForSection**
> \Clever\Model\TeacherResponse getTeacherForSection($id)



Returns the primary teacher for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getTeacherForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeacherForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\TeacherResponse**](../Model/TeacherResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeachers**
> \Clever\Model\TeachersResponse getTeachers($limit, $starting_after, $ending_before)



Returns a list of teachers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getTeachers($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeachers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeachersForSchool**
> \Clever\Model\TeachersResponse getTeachersForSchool($id, $limit, $starting_after, $ending_before)



Returns the teachers for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getTeachersForSchool($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeachersForSchool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeachersForSection**
> \Clever\Model\TeachersResponse getTeachersForSection($id, $limit, $starting_after, $ending_before)



Returns the teachers for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getTeachersForSection($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeachersForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTeachersForStudent**
> \Clever\Model\TeachersResponse getTeachersForStudent($id, $limit, $starting_after, $ending_before)



Returns the teachers for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 
$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getTeachersForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTeachersForStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTerm**
> \Clever\Model\TermResponse getTerm($id)



Returns a specific term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\TermResponse**](../Model/TermResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTermForSection**
> \Clever\Model\TermResponse getTermForSection($id)



Returns the term for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getTermForSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTermForSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\TermResponse**](../Model/TermResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTerms**
> \Clever\Model\TermsResponse getTerms($limit, $starting_after, $ending_before)



Returns a list of terms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getTerms($limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Clever\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

