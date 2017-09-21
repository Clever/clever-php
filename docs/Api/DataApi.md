# Swagger\Client\DataApi

All URIs are relative to *https://api.clever.com/v1.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContact**](DataApi.md#getContact) | **GET** /contacts/{id} | 
[**getContacts**](DataApi.md#getContacts) | **GET** /contacts | 
[**getContactsForStudent**](DataApi.md#getContactsForStudent) | **GET** /students/{id}/contacts | 
[**getDistrict**](DataApi.md#getDistrict) | **GET** /districts/{id} | 
[**getDistrictAdmin**](DataApi.md#getDistrictAdmin) | **GET** /district_admins/{id} | 
[**getDistrictAdmins**](DataApi.md#getDistrictAdmins) | **GET** /district_admins | 
[**getDistrictForSchool**](DataApi.md#getDistrictForSchool) | **GET** /schools/{id}/district | 
[**getDistrictForSection**](DataApi.md#getDistrictForSection) | **GET** /sections/{id}/district | 
[**getDistrictForStudent**](DataApi.md#getDistrictForStudent) | **GET** /students/{id}/district | 
[**getDistrictForStudentContact**](DataApi.md#getDistrictForStudentContact) | **GET** /contacts/{id}/district | 
[**getDistrictForTeacher**](DataApi.md#getDistrictForTeacher) | **GET** /teachers/{id}/district | 
[**getDistrictStatus**](DataApi.md#getDistrictStatus) | **GET** /districts/{id}/status | 
[**getDistricts**](DataApi.md#getDistricts) | **GET** /districts | 
[**getGradeLevelsForTeacher**](DataApi.md#getGradeLevelsForTeacher) | **GET** /teachers/{id}/grade_levels | 
[**getSchool**](DataApi.md#getSchool) | **GET** /schools/{id} | 
[**getSchoolAdmin**](DataApi.md#getSchoolAdmin) | **GET** /school_admins/{id} | 
[**getSchoolAdmins**](DataApi.md#getSchoolAdmins) | **GET** /school_admins | 
[**getSchoolForSection**](DataApi.md#getSchoolForSection) | **GET** /sections/{id}/school | 
[**getSchoolForStudent**](DataApi.md#getSchoolForStudent) | **GET** /students/{id}/school | 
[**getSchoolForTeacher**](DataApi.md#getSchoolForTeacher) | **GET** /teachers/{id}/school | 
[**getSchools**](DataApi.md#getSchools) | **GET** /schools | 
[**getSchoolsForSchoolAdmin**](DataApi.md#getSchoolsForSchoolAdmin) | **GET** /school_admins/{id}/schools | 
[**getSection**](DataApi.md#getSection) | **GET** /sections/{id} | 
[**getSections**](DataApi.md#getSections) | **GET** /sections | 
[**getSectionsForSchool**](DataApi.md#getSectionsForSchool) | **GET** /schools/{id}/sections | 
[**getSectionsForStudent**](DataApi.md#getSectionsForStudent) | **GET** /students/{id}/sections | 
[**getSectionsForTeacher**](DataApi.md#getSectionsForTeacher) | **GET** /teachers/{id}/sections | 
[**getStudent**](DataApi.md#getStudent) | **GET** /students/{id} | 
[**getStudentForContact**](DataApi.md#getStudentForContact) | **GET** /contacts/{id}/student | 
[**getStudents**](DataApi.md#getStudents) | **GET** /students | 
[**getStudentsForSchool**](DataApi.md#getStudentsForSchool) | **GET** /schools/{id}/students | 
[**getStudentsForSection**](DataApi.md#getStudentsForSection) | **GET** /sections/{id}/students | 
[**getStudentsForTeacher**](DataApi.md#getStudentsForTeacher) | **GET** /teachers/{id}/students | 
[**getTeacher**](DataApi.md#getTeacher) | **GET** /teachers/{id} | 
[**getTeacherForSection**](DataApi.md#getTeacherForSection) | **GET** /sections/{id}/teacher | 
[**getTeachers**](DataApi.md#getTeachers) | **GET** /teachers | 
[**getTeachersForSchool**](DataApi.md#getTeachersForSchool) | **GET** /schools/{id}/teachers | 
[**getTeachersForSection**](DataApi.md#getTeachersForSection) | **GET** /sections/{id}/teachers | 
[**getTeachersForStudent**](DataApi.md#getTeachersForStudent) | **GET** /students/{id}/teachers | 


# **getContact**
> \Swagger\Client\Model\StudentContactResponse getContact($id)



Returns a specific student contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentContactResponse**](../Model/StudentContactResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Swagger\Client\Model\StudentContactsResponse getContacts($limit, $starting_after, $ending_before)



Returns a list of student contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentContactsResponse**](../Model/StudentContactsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsForStudent**
> \Swagger\Client\Model\StudentContactsForStudentResponse getContactsForStudent($id, $limit)



Returns the contacts for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
$id = "id_example"; // string | 
$limit = 56; // int | 

try {
    $result = $api_instance->getContactsForStudent($id, $limit);
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

### Return type

[**\Swagger\Client\Model\StudentContactsForStudentResponse**](../Model/StudentContactsForStudentResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrict**
> \Swagger\Client\Model\DistrictResponse getDistrict($id)



Returns a specific district

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictAdmin**
> \Swagger\Client\Model\DistrictAdminResponse getDistrictAdmin($id)



Returns a specific district admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\DistrictAdminResponse**](../Model/DistrictAdminResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictAdmins**
> \Swagger\Client\Model\DistrictAdminsResponse getDistrictAdmins($starting_after, $ending_before)



Returns a list of district admins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 

try {
    $result = $api_instance->getDistrictAdmins($starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictAdmins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DistrictAdminsResponse**](../Model/DistrictAdminsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictForSchool**
> \Swagger\Client\Model\DistrictResponse getDistrictForSchool($id)



Returns the district for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictForSection**
> \Swagger\Client\Model\DistrictResponse getDistrictForSection($id)



Returns the district for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictForStudent**
> \Swagger\Client\Model\DistrictResponse getDistrictForStudent($id)



Returns the district for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictForStudentContact**
> \Swagger\Client\Model\DistrictResponse getDistrictForStudentContact($id)



Returns the district for a student contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictForStudentContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictForStudentContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictForTeacher**
> \Swagger\Client\Model\DistrictResponse getDistrictForTeacher($id)



Returns the district for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistrictStatus**
> \Swagger\Client\Model\DistrictStatusResponses getDistrictStatus($id)



Returns the status of the district

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getDistrictStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDistrictStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DistrictStatusResponses**](../Model/DistrictStatusResponses.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistricts**
> \Swagger\Client\Model\DistrictsResponse getDistricts()



Returns a list of districts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();

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

[**\Swagger\Client\Model\DistrictsResponse**](../Model/DistrictsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGradeLevelsForTeacher**
> \Swagger\Client\Model\GradeLevelsResponse getGradeLevelsForTeacher($id)



Returns the grade levels for sections a teacher teaches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getGradeLevelsForTeacher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getGradeLevelsForTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GradeLevelsResponse**](../Model/GradeLevelsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchool**
> \Swagger\Client\Model\SchoolResponse getSchool($id)



Returns a specific school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolAdmin**
> \Swagger\Client\Model\SchoolAdminResponse getSchoolAdmin($id)



Returns a specific school admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolAdminResponse**](../Model/SchoolAdminResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolAdmins**
> \Swagger\Client\Model\SchoolAdminsResponse getSchoolAdmins($limit, $starting_after, $ending_before)



Returns a list of school admins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolAdminsResponse**](../Model/SchoolAdminsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolForSection**
> \Swagger\Client\Model\SchoolResponse getSchoolForSection($id)



Returns the school for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolForStudent**
> \Swagger\Client\Model\SchoolResponse getSchoolForStudent($id)



Returns the primary school for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolForTeacher**
> \Swagger\Client\Model\SchoolResponse getSchoolForTeacher($id)



Retrieves school info for a teacher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchools**
> \Swagger\Client\Model\SchoolsResponse getSchools($limit, $starting_after, $ending_before)



Returns a list of schools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolsForSchoolAdmin**
> \Swagger\Client\Model\SchoolsResponse getSchoolsForSchoolAdmin($id, $limit, $starting_after, $ending_before)



Returns the schools for a school admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSection**
> \Swagger\Client\Model\SectionResponse getSection($id)



Returns a specific section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SectionResponse**](../Model/SectionResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSections**
> \Swagger\Client\Model\SectionsResponse getSections($limit, $starting_after, $ending_before)



Returns a list of sections

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSectionsForSchool**
> \Swagger\Client\Model\SectionsResponse getSectionsForSchool($id, $limit, $starting_after, $ending_before)



Returns the sections for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSectionsForStudent**
> \Swagger\Client\Model\SectionsResponse getSectionsForStudent($id, $limit, $starting_after, $ending_before)



Returns the sections for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSectionsForTeacher**
> \Swagger\Client\Model\SectionsResponse getSectionsForTeacher($id, $limit, $starting_after, $ending_before)



Returns the sections for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudent**
> \Swagger\Client\Model\StudentResponse getStudent($id)



Returns a specific student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentResponse**](../Model/StudentResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudentForContact**
> \Swagger\Client\Model\StudentResponse getStudentForContact($id)



Returns the student for a student contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getStudentForContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getStudentForContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StudentResponse**](../Model/StudentResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudents**
> \Swagger\Client\Model\StudentsResponse getStudents($limit, $starting_after, $ending_before)



Returns a list of students

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudentsForSchool**
> \Swagger\Client\Model\StudentsResponse getStudentsForSchool($id, $limit, $starting_after, $ending_before)



Returns the students for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudentsForSection**
> \Swagger\Client\Model\StudentsResponse getStudentsForSection($id, $limit, $starting_after, $ending_before)



Returns the students for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudentsForTeacher**
> \Swagger\Client\Model\StudentsResponse getStudentsForTeacher($id, $limit, $starting_after, $ending_before)



Returns the students for a teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeacher**
> \Swagger\Client\Model\TeacherResponse getTeacher($id)



Returns a specific teacher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\TeacherResponse**](../Model/TeacherResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeacherForSection**
> \Swagger\Client\Model\TeacherResponse getTeacherForSection($id)



Returns the primary teacher for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\TeacherResponse**](../Model/TeacherResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachers**
> \Swagger\Client\Model\TeachersResponse getTeachers($limit, $starting_after, $ending_before)



Returns a list of teachers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachersForSchool**
> \Swagger\Client\Model\TeachersResponse getTeachersForSchool($id, $limit, $starting_after, $ending_before)



Returns the teachers for a school

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachersForSection**
> \Swagger\Client\Model\TeachersResponse getTeachersForSection($id, $limit, $starting_after, $ending_before)



Returns the teachers for a section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeachersForStudent**
> \Swagger\Client\Model\TeachersResponse getTeachersForStudent($id, $limit, $starting_after, $ending_before)



Returns the teachers for a student

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DataApi();
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

[**\Swagger\Client\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

