## Documentation for API Endpoints

All URIs are relative to *https://api.clever.com/v1.2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataApi* | [**getContact**](Api/DataApi.md#getcontact) | **GET** /contacts/{id} | 
*DataApi* | [**getContacts**](Api/DataApi.md#getcontacts) | **GET** /contacts | 
*DataApi* | [**getContactsForStudent**](Api/DataApi.md#getcontactsforstudent) | **GET** /students/{id}/contacts | 
*DataApi* | [**getDistrict**](Api/DataApi.md#getdistrict) | **GET** /districts/{id} | 
*DataApi* | [**getDistrictAdmin**](Api/DataApi.md#getdistrictadmin) | **GET** /district_admins/{id} | 
*DataApi* | [**getDistrictAdmins**](Api/DataApi.md#getdistrictadmins) | **GET** /district_admins | 
*DataApi* | [**getDistrictForSchool**](Api/DataApi.md#getdistrictforschool) | **GET** /schools/{id}/district | 
*DataApi* | [**getDistrictForSection**](Api/DataApi.md#getdistrictforsection) | **GET** /sections/{id}/district | 
*DataApi* | [**getDistrictForStudent**](Api/DataApi.md#getdistrictforstudent) | **GET** /students/{id}/district | 
*DataApi* | [**getDistrictForStudentContact**](Api/DataApi.md#getdistrictforstudentcontact) | **GET** /contacts/{id}/district | 
*DataApi* | [**getDistrictForTeacher**](Api/DataApi.md#getdistrictforteacher) | **GET** /teachers/{id}/district | 
*DataApi* | [**getDistrictStatus**](Api/DataApi.md#getdistrictstatus) | **GET** /districts/{id}/status | 
*DataApi* | [**getDistricts**](Api/DataApi.md#getdistricts) | **GET** /districts | 
*DataApi* | [**getGradeLevelsForTeacher**](Api/DataApi.md#getgradelevelsforteacher) | **GET** /teachers/{id}/grade_levels | 
*DataApi* | [**getSchool**](Api/DataApi.md#getschool) | **GET** /schools/{id} | 
*DataApi* | [**getSchoolAdmin**](Api/DataApi.md#getschooladmin) | **GET** /school_admins/{id} | 
*DataApi* | [**getSchoolAdmins**](Api/DataApi.md#getschooladmins) | **GET** /school_admins | 
*DataApi* | [**getSchoolForSection**](Api/DataApi.md#getschoolforsection) | **GET** /sections/{id}/school | 
*DataApi* | [**getSchoolForStudent**](Api/DataApi.md#getschoolforstudent) | **GET** /students/{id}/school | 
*DataApi* | [**getSchoolForTeacher**](Api/DataApi.md#getschoolforteacher) | **GET** /teachers/{id}/school | 
*DataApi* | [**getSchools**](Api/DataApi.md#getschools) | **GET** /schools | 
*DataApi* | [**getSchoolsForSchoolAdmin**](Api/DataApi.md#getschoolsforschooladmin) | **GET** /school_admins/{id}/schools | 
*DataApi* | [**getSection**](Api/DataApi.md#getsection) | **GET** /sections/{id} | 
*DataApi* | [**getSections**](Api/DataApi.md#getsections) | **GET** /sections | 
*DataApi* | [**getSectionsForSchool**](Api/DataApi.md#getsectionsforschool) | **GET** /schools/{id}/sections | 
*DataApi* | [**getSectionsForStudent**](Api/DataApi.md#getsectionsforstudent) | **GET** /students/{id}/sections | 
*DataApi* | [**getSectionsForTeacher**](Api/DataApi.md#getsectionsforteacher) | **GET** /teachers/{id}/sections | 
*DataApi* | [**getStudent**](Api/DataApi.md#getstudent) | **GET** /students/{id} | 
*DataApi* | [**getStudentForContact**](Api/DataApi.md#getstudentforcontact) | **GET** /contacts/{id}/student | 
*DataApi* | [**getStudents**](Api/DataApi.md#getstudents) | **GET** /students | 
*DataApi* | [**getStudentsForSchool**](Api/DataApi.md#getstudentsforschool) | **GET** /schools/{id}/students | 
*DataApi* | [**getStudentsForSection**](Api/DataApi.md#getstudentsforsection) | **GET** /sections/{id}/students | 
*DataApi* | [**getStudentsForTeacher**](Api/DataApi.md#getstudentsforteacher) | **GET** /teachers/{id}/students | 
*DataApi* | [**getTeacher**](Api/DataApi.md#getteacher) | **GET** /teachers/{id} | 
*DataApi* | [**getTeacherForSection**](Api/DataApi.md#getteacherforsection) | **GET** /sections/{id}/teacher | 
*DataApi* | [**getTeachers**](Api/DataApi.md#getteachers) | **GET** /teachers | 
*DataApi* | [**getTeachersForSchool**](Api/DataApi.md#getteachersforschool) | **GET** /schools/{id}/teachers | 
*DataApi* | [**getTeachersForSection**](Api/DataApi.md#getteachersforsection) | **GET** /sections/{id}/teachers | 
*DataApi* | [**getTeachersForStudent**](Api/DataApi.md#getteachersforstudent) | **GET** /students/{id}/teachers | 
*EventsApi* | [**getEvent**](Api/EventsApi.md#getevent) | **GET** /events/{id} | 
*EventsApi* | [**getEvents**](Api/EventsApi.md#getevents) | **GET** /events | 
*EventsApi* | [**getEventsForSchool**](Api/EventsApi.md#geteventsforschool) | **GET** /schools/{id}/events | 
*EventsApi* | [**getEventsForSchoolAdmin**](Api/EventsApi.md#geteventsforschooladmin) | **GET** /school_admins/{id}/events | 
*EventsApi* | [**getEventsForSection**](Api/EventsApi.md#geteventsforsection) | **GET** /sections/{id}/events | 
*EventsApi* | [**getEventsForStudent**](Api/EventsApi.md#geteventsforstudent) | **GET** /students/{id}/events | 
*EventsApi* | [**getEventsForTeacher**](Api/EventsApi.md#geteventsforteacher) | **GET** /teachers/{id}/events | 


## Documentation For Models

 - [BadRequest](Model/BadRequest.md)
 - [Credentials](Model/Credentials.md)
 - [District](Model/District.md)
 - [DistrictAdmin](Model/DistrictAdmin.md)
 - [DistrictAdminResponse](Model/DistrictAdminResponse.md)
 - [DistrictAdminsResponse](Model/DistrictAdminsResponse.md)
 - [DistrictObject](Model/DistrictObject.md)
 - [DistrictResponse](Model/DistrictResponse.md)
 - [DistrictStatus](Model/DistrictStatus.md)
 - [DistrictStatusResponse](Model/DistrictStatusResponse.md)
 - [DistrictStatusResponses](Model/DistrictStatusResponses.md)
 - [DistrictsResponse](Model/DistrictsResponse.md)
 - [Event](Model/Event.md)
 - [EventResponse](Model/EventResponse.md)
 - [EventsResponse](Model/EventsResponse.md)
 - [GradeLevelsResponse](Model/GradeLevelsResponse.md)
 - [InternalError](Model/InternalError.md)
 - [Location](Model/Location.md)
 - [Name](Model/Name.md)
 - [NotFound](Model/NotFound.md)
 - [Principal](Model/Principal.md)
 - [School](Model/School.md)
 - [SchoolAdmin](Model/SchoolAdmin.md)
 - [SchoolAdminObject](Model/SchoolAdminObject.md)
 - [SchoolAdminResponse](Model/SchoolAdminResponse.md)
 - [SchoolAdminsResponse](Model/SchoolAdminsResponse.md)
 - [SchoolObject](Model/SchoolObject.md)
 - [SchoolResponse](Model/SchoolResponse.md)
 - [SchoolsResponse](Model/SchoolsResponse.md)
 - [Section](Model/Section.md)
 - [SectionObject](Model/SectionObject.md)
 - [SectionResponse](Model/SectionResponse.md)
 - [SectionsResponse](Model/SectionsResponse.md)
 - [Student](Model/Student.md)
 - [StudentContact](Model/StudentContact.md)
 - [StudentContactObject](Model/StudentContactObject.md)
 - [StudentContactResponse](Model/StudentContactResponse.md)
 - [StudentContactsForStudentResponse](Model/StudentContactsForStudentResponse.md)
 - [StudentContactsResponse](Model/StudentContactsResponse.md)
 - [StudentObject](Model/StudentObject.md)
 - [StudentResponse](Model/StudentResponse.md)
 - [StudentsResponse](Model/StudentsResponse.md)
 - [Teacher](Model/Teacher.md)
 - [TeacherObject](Model/TeacherObject.md)
 - [TeacherResponse](Model/TeacherResponse.md)
 - [TeachersResponse](Model/TeachersResponse.md)
 - [Term](Model/Term.md)
 - [DistrictsCreated](Model/DistrictsCreated.md)
 - [DistrictsDeleted](Model/DistrictsDeleted.md)
 - [DistrictsUpdated](Model/DistrictsUpdated.md)
 - [SchooladminsCreated](Model/SchooladminsCreated.md)
 - [SchooladminsDeleted](Model/SchooladminsDeleted.md)
 - [SchooladminsUpdated](Model/SchooladminsUpdated.md)
 - [SchoolsCreated](Model/SchoolsCreated.md)
 - [SchoolsDeleted](Model/SchoolsDeleted.md)
 - [SchoolsUpdated](Model/SchoolsUpdated.md)
 - [SectionsCreated](Model/SectionsCreated.md)
 - [SectionsDeleted](Model/SectionsDeleted.md)
 - [SectionsUpdated](Model/SectionsUpdated.md)
 - [StudentcontactsCreated](Model/StudentcontactsCreated.md)
 - [StudentcontactsDeleted](Model/StudentcontactsDeleted.md)
 - [StudentcontactsUpdated](Model/StudentcontactsUpdated.md)
 - [StudentsCreated](Model/StudentsCreated.md)
 - [StudentsDeleted](Model/StudentsDeleted.md)
 - [StudentsUpdated](Model/StudentsUpdated.md)
 - [TeachersCreated](Model/TeachersCreated.md)
 - [TeachersDeleted](Model/TeachersDeleted.md)
 - [TeachersUpdated](Model/TeachersUpdated.md)


## Documentation For Authorization


## oauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://clever.com/oauth/authorize
- **Scopes**: N/A






