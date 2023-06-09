@extends('front.layout.master')

@section('container')

<body class id="page-home">
    <div class="contain-page">
     <header class="z-top relative" data-cc-header="nosearch">
      <div class="relative bg-white cc-header border-bottom border-gray-light">
       <nav class="cmpt-nav row nowrap vert-align-middle absolute width-100 padding-horz-medium border-box">
        <a class="block medium-up-margin-right-large cmpt-nav-logo" data-track-click="nav_click" data-track-ga="{" category": "nav_click", "action": "homepage", "label":"top"}" data-track-props="{ " type": "title": "logo" }" href="index.html">
         <i class="symbol-classcentral-navy symbol-medium hidden large-up-block">
         </i>
         <i class="relative symbol-classcentral-navy symbol-small block large-up-hidden">
         </i>
         <span class="off-page">
          क्लास सेंट्रल
         </span>
        </a>
        <div class="margin-right-small large-up-margin-right-medium" data-name="MAIN_NAV_TRIGGER_CONTAINER" style="display: flex; align-items: center; height: 100%;">
         <button aria-label="Site Menu" class="block large-up-hidden" data-name="MAIN_NAV_TRIGGER">
          <i class="icon-medium icon-menu-charcoal">
          </i>
         </button>
         <button class="hidden weight-semi large-up-block text-1 color-charcoal padding-right-small" data-name="LARGE_UP_MAIN_NAV_TRIGGER" type="button">
          पाठ्यक्रम
         </button>
         <nav class="main-nav-dropdown js-main-nav-dropdown">
          <div class="main-nav-dropdown__index">
           <div class="main-nav-dropdown__header large-up-hidden">
            <h2 class="main-nav-dropdown__header-brand icon-lettermark-charcoal">
             क्लास सेंट्रल
            </h2>
            <button aria-label="Close Site Menu" class="main-nav-dropdown__close-button" data-name="MAIN_NAV_CLOSE">
             <i class="icon-x-charcoal main-nav-dropdown__close-button-icon">
             </i>
            </button>
           </div>
           <section class="main-nav-dropdown__section">
            <ul class="list-no-style">
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"rankings"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"notable","label":"Rankings"}" data-track-props="{" type":"Notable","title":"Rankings"}" href="rankings.html">
               <span>
                रैंकिंग
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"collections"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"notable","label":"Collections"}" data-track-props="{" type":"Notable","title":"Collections"}" href="collections.html">
               <span>
                संग्रह
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
            </ul>
           </section>
           <section class="main-nav-dropdown__section--with-header">
            <div class="main-nav-dropdown__section-header">
             <h3 class="main-nav-dropdown__section-heading">
              विषयों
             </h3>
             <a class="main-nav-dropdown__section-button large-up-hidden" data-track-ga="{" category":"nav_click","action":"subject","label":"view all"}" href="subjects.html">
              सभी को देखें
             </a>
            </div>
            <ul class="list-no-style">
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-cs"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Computer Science"}" data-track-props="{" type":"Subject","title":"Computer href="subject/cs.html">
               <span>
                कंप्यूटर विज्ञान
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-health"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Health & Medicine"}" data-track-props="{" type":"Subject","title":"Health href="subject/health.html">
               <span>
                स्वास्थ्य और चिकित्सा
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-maths"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Mathematics"}" data-track-props="{" type":"Subject","title":"Mathematics"}" href="subject/maths.html">
               <span>
                अंक शास्त्र
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-business"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Business"}" data-track-props="{" type":"Subject","title":"Business"}" href="subject/business.html">
               <span>
                व्यवसाय
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-humanities"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Humanities"}" data-track-props="{" type":"Subject","title":"Humanities"}" href="subject/humanities.html">
               <span>
                मानविकी
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-engineering"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Engineering"}" data-track-props="{" type":"Subject","title":"Engineering"}" href="subject/engineering.html">
               <span>
                अभियांत्रिकी
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-science"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Science"}" data-track-props="{" type":"Subject","title":"Science"}" href="subject/science.html">
               <span>
                विज्ञान
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-education"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Education & Teaching"}" data-track-props="{" type":"Subject","title":"Education href="subject/education.html">
               <span>
                शिक्षा और शिक्षण
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-social-sciences"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Social Sciences"}" data-track-props="{" type":"Subject","title":"Social href="subject/social-sciences.html">
               <span>
                सामाजिक विज्ञान
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-art-and-design"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Art & Design"}" data-track-props="{" type":"Subject","title":"Art href="subject/art-and-design.html">
               <span>
                कला डिजाइन
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-data-science"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Data Science"}" data-track-props="{" type":"Subject","title":"Data href="subject/data-science.html">
               <span>
                डेटा विज्ञान
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-programming-and-software-development"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Programming"}" data-track-props="{" type":"Subject","title":"Programming"}" href="subject/programming-and-software-development.html">
               <span>
                प्रोग्रामिंग
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-personal-development"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Personal Development"}" data-track-props="{" type":"Subject","title":"Personal href="subject/personal-development.html">
               <span>
                व्यक्तिगत विकास
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-detail="{" childListId":"subject-infosec"}" data-name="NAV_SUBSECTION_PARENT" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Information Security (InfoSec)"}" data-track-props="{" type":"Subject","title":"Information href="subject/infosec.html">
               <span>
                सूचना सुरक्षा (इन्फोसेक)
               </span>
               <span class="main-nav-dropdown__item-icon icon-chevron-right-charcoal icon-small">
               </span>
              </a>
             </li>
            </ul>
            <a class="text-2 hover-no-underline weight-semi margin-vert-xsmall padding-left-medium padding-right-medium hidden large-up-block" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"view all subjects"}" data-track-props="{" type":"Subject","title":"View Subjects"}" href="subjects.html">
             सभी विषय देखें
            </a>
           </section>
           <section class="main-nav-dropdown__section large-up-hidden">
            <ul class="list-no-style">
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"university","label":"Universities"}" data-track-props="{" type":"University","title":"Universities"}" href="universities.html">
               <span class="weight-semi">
                विश्वविद्यालयों
               </span>
              </a>
             </li>
             <li class="main-nav-dropdown__item">
              <a class="main-nav-dropdown__item-control color-charcoal" data-track-ga="{" category":"nav_click","action":"news","label":"mobile"}" href="report/index.html">
               <span class="block symbol-report" style="height: 18px;">
                रिपोर्ट
               </span>
              </a>
             </li>
            </ul>
           </section>
           <p class="small-down-hidden text-2 padding-left-medium padding-right-medium padding-vert-xxsmall">
            से पाठ्यक्रम
            <a data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"university","label":"1000+ universities"}" data-track-props="{" type": "University", "title": "1000+ href="universities.html">
             1000+ विश्वविद्यालय
            </a>
           </p>
          </div>
          <div class="main-nav-dropdown__subsections">
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="rankings" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              रैंकिंग
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--with-image" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Best of All Time"}" data-track-props="{" type":"rankings","title":"Best href="collection/top-free-online-courses.html">
                <img alt="Best of All Time" class="width-100 radius-small" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&h=420&ixlib=php-3.3.1&s=11c7448eb8908a8cc785e26ec27de650" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=11c7448eb8908a8cc785e26ec27de650">
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--with-image" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Most Popular of All Time"}" data-track-props="{" type":"rankings","title":"Most href="report/most-popular-online-courses/index.html">
                <img alt="Most Popular of All Time" class="width-100 radius-small" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-most-popular-of-all-time.png?auto=format&h=420&ixlib=php-3.3.1&s=8ddc221d6528da20924c85c064e17572" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-most-popular-of-all-time.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=8ddc221d6528da20924c85c064e17572">
               </a>
              </li>
             </ul>
            </section>
            <section class="main-nav-dropdown__section--with-header">
             <div class="main-nav-dropdown__section-header">
              <h3 class="main-nav-dropdown__section-heading">
               सर्वश्रेष्ठ पाठ्यक्रम
              </h3>
             </div>
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Best of All Time"}" data-track-props="{" type":"rankings","title":"Best href="collection/top-free-online-courses.html">
                <span>
                 बेस्ट ऑफ ऑल टाइम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Best of the Year 2022"}" data-track-props="{" type":"rankings","title":"Best href="report/best-free-online-courses-2022/index.html">
                <span>
                 वर्ष 2022 का सर्वश्रेष्ठ
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Best of the Year 2021"}" data-track-props="{" type":"rankings","title":"Best href="report/best-free-online-courses-2021/index.html">
                <span>
                 वर्ष 2021 का सर्वश्रेष्ठ
                </span>
               </a>
              </li>
             </ul>
            </section>
            <section class="main-nav-dropdown__section--with-header">
             <div class="main-nav-dropdown__section-header">
              <h3 class="main-nav-dropdown__section-heading">
               सबसे लोकप्रिय पाठ्यक्रम
              </h3>
             </div>
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Most Popular of All Time"}" data-track-props="{" type":"rankings","title":"Most href="report/most-popular-online-courses/index.html">
                <span>
                 अब तक का सबसे लोकप्रिय
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Most Popular of the Year 2022"}" data-track-props="{" type":"rankings","title":"Most href="report/most-popular-courses-2022/index.html">
                <span>
                 वर्ष 2022 का सर्वाधिक लोकप्रिय
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"rankings","label":"Most Popular of the Year 2021"}" data-track-props="{" type":"rankings","title":"Most href="report/100-most-popular-online-courses-2021/index.html">
                <span>
                 साल 2021 का सबसे लोकप्रिय
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="collections" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              संग्रह
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--with-image" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"Ivy League Courses"}" data-track-props="{" type":"collections","title":"Ivy href="collection/ivy-league-moocs/index.html">
                <img alt="Ivy League Courses" class="width-100 radius-small" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&h=420&ixlib=php-3.3.1&s=c49b305f32e1e971696b9852e3971c6b" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=c49b305f32e1e971696b9852e3971c6b">
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--with-image" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"Free Coursera Courses"}" data-track-props="{" type":"collections","title":"Free href="report/coursera-free-online-courses/index.html">
                <img alt="Free Coursera Courses" class="width-100 radius-small" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-coursera-free-courses.png?auto=format&h=420&ixlib=php-3.3.1&s=9044610de77ddba19697f770dd2531c7" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-coursera-free-courses.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=9044610de77ddba19697f770dd2531c7">
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--with-image" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"Free Certificates"}" data-track-props="{" type":"collections","title":"Free href="report/free-certificates/index.html">
                <img alt="Free Certificates" class="width-100 radius-small" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-free-certificates.png?auto=format&h=420&ixlib=php-3.3.1&s=bc50a602c38dbf30802649312c6a4474" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-free-certificates.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=bc50a602c38dbf30802649312c6a4474">
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--with-image" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"Free Google Certifications"}" data-track-props="{" type":"collections","title":"Free href="report/google-free-certificates/index.html">
                <img alt="Free Google Certifications" class="width-100 radius-small" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-google-certs.png?auto=format&h=420&ixlib=php-3.3.1&s=ac4c48d612e7961d7335e87451e52ac4" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-google-certs.png?auto=format&amp;h=420&amp;ixlib=php-3.3.1&amp;s=ac4c48d612e7961d7335e87451e52ac4">
               </a>
              </li>
             </ul>
            </section>
            <section class="main-nav-dropdown__section--with-header">
             <div class="main-nav-dropdown__section-header">
              <h3 class="main-nav-dropdown__section-heading">
               मासिक पाठ्यक्रम रिपोर्ट
              </h3>
             </div>
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"Starting this Month"}" data-track-props="{" type":"collections","title":"Starting href="starting-this-month.html">
                <span>
                 इस महीने की शुरुआत
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"New Online Courses"}" data-track-props="{" type":"collections","title":"New href="new-online-courses.html">
                <span>
                 नए ऑनलाइन पाठ्यक्रम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"collections","label":"Most Popular"}" data-track-props="{" type":"collections","title":"Most href="most-popular-courses.html">
                <span>
                 सबसे लोकप्रिय
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-cs" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              कंप्यूटर विज्ञान
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Artificial Intelligence"}" data-track-props="{" type":"Subject","title":"Artificial href="subject/ai.html">
                <span>
                 कृत्रिम होशियारी
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Algorithms and Data Structures"}" data-track-props="{" type":"Subject","title":"Algorithms href="subject/algorithms-and-data-structures.html">
                <span>
                 एल्गोरिदम और डेटा संरचनाएं
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Internet of Things"}" data-track-props="{" type":"Subject","title":"Internet href="subject/internet-of-things.html">
                <span>
                 चीजों की इंटरनेट
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Information Technology"}" data-track-props="{" type":"Subject","title":"Information href="subject/information-technology.html">
                <span>
                 सूचान प्रौद्योगिकी
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Computer Networking"}" data-track-props="{" type":"Subject","title":"Computer href="subject/computer-networking.html">
                <span>
                 कम्प्यूटर नेट्वर्किंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Machine Learning"}" data-track-props="{" type":"Subject","title":"Machine href="subject/machine-learning.html">
                <span>
                 यंत्र अधिगम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"DevOps"}" data-track-props="{" type":"Subject","title":"DevOps"}" href="subject/devops.html">
                <span>
                 DevOps
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Deep Learning"}" data-track-props="{" type":"Subject","title":"Deep href="subject/deep-learning.html">
                <span>
                 ध्यान लगा के पढ़ना या सीखना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Cryptography"}" data-track-props="{" type":"Subject","title":"Cryptography"}" href="subject/cryptography.html">
                <span>
                 क्रिप्टोग्राफी
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Quantum Computing"}" data-track-props="{" type":"Subject","title":"Quantum href="subject/quantum-computing.html">
                <span>
                 क्वांटम कम्प्यूटिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Human-Computer Interaction (HCI)"}" data-track-props="{" type":"Subject","title":"Human-Computer href="subject/hci.html">
                <span>
                 मानव-कंप्यूटर इंटरेक्शन (HCI)
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Distributed Systems"}" data-track-props="{" type":"Subject","title":"Distributed href="subject/distributed-systems.html">
                <span>
                 वितरित प्रणाली
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Blockchain Development"}" data-track-props="{" type":"Subject","title":"Blockchain href="subject/blockchain.html">
                <span>
                 ब्लॉकचेन विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Operating Systems"}" data-track-props="{" type":"Subject","title":"Operating href="subject/operating-systems.html">
                <span>
                 ऑपरेटिंग सिस्टम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Computer Graphics"}" data-track-props="{" type":"Subject","title":"Computer href="subject/computer-graphics.html">
                <span>
                 कंप्यूटर चित्रलेख
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Computer Science"}" data-track-props="{" type":"Subject","title":"Computer href="subject/cs.html">
                <span>
                 सभी कम्प्यूटर साइंस देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-health" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              स्वास्थ्य और चिकित्सा
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Nutrition & Wellness"}" data-track-props="{" type":"Subject","title":"Nutrition href="subject/nutrition-and-wellness.html">
                <span>
                 पोषण और कल्याण
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Disease & Disorders"}" data-track-props="{" type":"Subject","title":"Disease href="subject/disease-and-disorders.html">
                <span>
                 रोग और विकार
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Public Health"}" data-track-props="{" type":"Subject","title":"Public href="subject/public-health.html">
                <span>
                 सार्वजनिक स्वास्थ्य
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Health Care"}" data-track-props="{" type":"Subject","title":"Health href="subject/health-care.html">
                <span>
                 स्वास्थ्य देखभाल
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Nursing"}" data-track-props="{" type":"Subject","title":"Nursing"}" href="subject/nursing.html">
                <span>
                 नर्सिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Anatomy"}" data-track-props="{" type":"Subject","title":"Anatomy"}" href="subject/anatomy.html">
                <span>
                 शरीर रचना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Veterinary Science"}" data-track-props="{" type":"Subject","title":"Veterinary href="subject/veterinary-science.html">
                <span>
                 पशु चिकित्सा विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Continuing Medical Education (CME)"}" data-track-props="{" type":"Subject","title":"Continuing href="subject/cme.html">
                <span>
                 सतत चिकित्सा शिक्षा (सीएमई)
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Health & Medicine"}" data-track-props="{" type":"Subject","title":"Health href="subject/health.html">
                <span>
                 सभी स्वास्थ्य व चिकित्सा देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-maths" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              अंक शास्त्र
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Statistics & Probability"}" data-track-props="{" type":"Subject","title":"Statistics href="subject/statistics.html">
                <span>
                 सांख्यिकी और संभावना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Foundations of Mathematics"}" data-track-props="{" type":"Subject","title":"Foundations href="subject/foundations-of-mathematics.html">
                <span>
                 गणित की नींव
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Calculus"}" data-track-props="{" type":"Subject","title":"Calculus"}" href="subject/calculus.html">
                <span>
                 गणना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Discrete Mathematics"}" data-track-props="{" type":"Subject","title":"Discrete href="subject/discrete-mathematics.html">
                <span>
                 गणित पृथक करें
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Trigonometry"}" data-track-props="{" type":"Subject","title":"Trigonometry"}" href="subject/trigonometry.html">
                <span>
                 त्रिकोणमिति
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Geometry"}" data-track-props="{" type":"Subject","title":"Geometry"}" href="subject/geometry.html">
                <span>
                 ज्यामिति
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Algebra"}" data-track-props="{" type":"Subject","title":"Algebra"}" href="subject/algebra.html">
                <span>
                 बीजगणित
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Precalculus"}" data-track-props="{" type":"Subject","title":"Precalculus"}" href="subject/precalculus.html">
                <span>
                 प्रीकैलकुलस
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Number Theory"}" data-track-props="{" type":"Subject","title":"Number href="subject/number-theory.html">
                <span>
                 संख्या सिद्धांत
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Combinatorics"}" data-track-props="{" type":"Subject","title":"Combinatorics"}" href="subject/combinatorics.html">
                <span>
                 साहचर्य
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Mathematical logic"}" data-track-props="{" type":"Subject","title":"Mathematical href="subject/mathematical-logic.html">
                <span>
                 गणितीय तर्क
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Linear Programming"}" data-track-props="{" type":"Subject","title":"Linear href="subject/linear-programming.html">
                <span>
                 रैखिक प्रोग्रामिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Mathematics"}" data-track-props="{" type":"Subject","title":"Mathematics"}" href="subject/maths.html">
                <span>
                 सभी गणित देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-business" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              व्यवसाय
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Management & Leadership"}" data-track-props="{" type":"Subject","title":"Management href="subject/management-and-leadership.html">
                <span>
                 प्रबंधन और नेतृत्व
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Finance"}" data-track-props="{" type":"Subject","title":"Finance"}" href="subject/finance.html">
                <span>
                 वित्त
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Entrepreneurship"}" data-track-props="{" type":"Subject","title":"Entrepreneurship"}" href="subject/entrepreneurship.html">
                <span>
                 उद्यमशीलता
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Marketing"}" data-track-props="{" type":"Subject","title":"Marketing"}" href="subject/marketing.html">
                <span>
                 विपणन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Strategic Management"}" data-track-props="{" type":"Subject","title":"Strategic href="subject/strategic-management.html">
                <span>
                 कूटनीतिक प्रबंधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Industry Specific"}" data-track-props="{" type":"Subject","title":"Industry href="subject/industry-specific.html">
                <span>
                 उद्योग विशिष्ट
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Business Intelligence"}" data-track-props="{" type":"Subject","title":"Business href="subject/business-intelligence.html">
                <span>
                 व्यापारिक सूचना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Accounting"}" data-track-props="{" type":"Subject","title":"Accounting"}" href="subject/accounting.html">
                <span>
                 लेखांकन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Human Resources"}" data-track-props="{" type":"Subject","title":"Human href="subject/human-resources.html">
                <span>
                 मानव संसाधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Project Management"}" data-track-props="{" type":"Subject","title":"Project href="subject/project-management.html">
                <span>
                 परियोजना प्रबंधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Sales"}" data-track-props="{" type":"Subject","title":"Sales"}" href="subject/sales.html">
                <span>
                 बिक्री
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Design Thinking"}" data-track-props="{" type":"Subject","title":"Design href="subject/design-thinking.html">
                <span>
                 सोच को आकार दें
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Business Software"}" data-track-props="{" type":"Subject","title":"Business href="subject/business-software.html">
                <span>
                 व्यापार सॉफ्टवेयर
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Risk Management"}" data-track-props="{" type":"Subject","title":"Risk href="subject/risk-management.html">
                <span>
                 जोखिम प्रबंधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Corporate Social Responsibility"}" data-track-props="{" type":"Subject","title":"Corporate href="subject/csr.html">
                <span>
                 कॉर्पोरेट की सामाजिक जिम्मेदारी
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Customer Service"}" data-track-props="{" type":"Subject","title":"Customer href="subject/customer-service.html">
                <span>
                 ग्राहक सेवा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Nonprofit Management"}" data-track-props="{" type":"Subject","title":"Nonprofit href="subject/nonprofit.html">
                <span>
                 गैर-लाभकारी प्रबंधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Innovation"}" data-track-props="{" type":"Subject","title":"Innovation"}" href="subject/innovation.html">
                <span>
                 नवाचार
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Operations Management"}" data-track-props="{" type":"Subject","title":"Operations href="subject/operations-management.html">
                <span>
                 संचालन प्रबंधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Business"}" data-track-props="{" type":"Subject","title":"Business"}" href="subject/business.html">
                <span>
                 सभी व्यवसाय देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-humanities" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              मानविकी
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"History"}" data-track-props="{" type":"Subject","title":"History"}" href="subject/history.html">
                <span>
                 इतिहास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Literature"}" data-track-props="{" type":"Subject","title":"Literature"}" href="subject/literature.html">
                <span>
                 साहित्य
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Language Learning"}" data-track-props="{" type":"Subject","title":"Language href="subject/language-learning.html">
                <span>
                 भाषा सीखने
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Grammar & Writing"}" data-track-props="{" type":"Subject","title":"Grammar href="subject/grammar-writing.html">
                <span>
                 व्याकरण और लेखन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Philosophy"}" data-track-props="{" type":"Subject","title":"Philosophy"}" href="subject/philosophy.html">
                <span>
                 दर्शन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Religion"}" data-track-props="{" type":"Subject","title":"Religion"}" href="subject/religion.html">
                <span>
                 धर्म
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"ESL"}" data-track-props="{" type":"Subject","title":"ESL"}" href="subject/esl.html">
                <span>
                 ईएसएल
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Culture"}" data-track-props="{" type":"Subject","title":"Culture"}" href="subject/culture.html">
                <span>
                 संस्कृति
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Sports"}" data-track-props="{" type":"Subject","title":"Sports"}" href="subject/sports.html">
                <span>
                 खेल
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Journalism"}" data-track-props="{" type":"Subject","title":"Journalism"}" href="subject/journalism.html">
                <span>
                 पत्रकारिता
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Ethics"}" data-track-props="{" type":"Subject","title":"Ethics"}" href="subject/ethics.html">
                <span>
                 नीति
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Linguistics"}" data-track-props="{" type":"Subject","title":"Linguistics"}" href="subject/linguistics.html">
                <span>
                 भाषा विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Food"}" data-track-props="{" type":"Subject","title":"Food"}" href="subject/food.html">
                <span>
                 खाना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Library Science"}" data-track-props="{" type":"Subject","title":"Library href="subject/library-science.html">
                <span>
                 पुस्तकालय विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Reading"}" data-track-props="{" type":"Subject","title":"Reading"}" href="subject/reading.html">
                <span>
                 अध्ययन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Crisis Management"}" data-track-props="{" type":"Subject","title":"Crisis href="subject/crisis-management.html">
                <span>
                 संकट प्रबंधन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Humanities"}" data-track-props="{" type":"Subject","title":"Humanities"}" href="subject/humanities.html">
                <span>
                 सभी मानविकी देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-engineering" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              अभियांत्रिकी
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Electrical Engineering"}" data-track-props="{" type":"Subject","title":"Electrical href="subject/electrical-engineering.html">
                <span>
                 विद्युत अभियन्त्रण
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Mechanical Engineering"}" data-track-props="{" type":"Subject","title":"Mechanical href="subject/mechanical-engineering.html">
                <span>
                 मैकेनिकल इंजीनियरिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Civil Engineering"}" data-track-props="{" type":"Subject","title":"Civil href="subject/civil-engineering.html">
                <span>
                 असैनिक अभियंत्रण
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Robotics"}" data-track-props="{" type":"Subject","title":"Robotics"}" href="subject/robotics.html">
                <span>
                 रोबोटिक
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Nanotechnology"}" data-track-props="{" type":"Subject","title":"Nanotechnology"}" href="subject/nanotechnology.html">
                <span>
                 नैनो
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"GIS"}" data-track-props="{" type":"Subject","title":"GIS"}" href="subject/gis.html">
                <span>
                 गिस
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Textiles"}" data-track-props="{" type":"Subject","title":"Textiles"}" href="subject/textiles.html">
                <span>
                 कपड़ा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Manufacturing"}" data-track-props="{" type":"Subject","title":"Manufacturing"}" href="subject/manufacturing.html">
                <span>
                 उत्पादन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"BIM"}" data-track-props="{" type":"Subject","title":"BIM"}" href="subject/bim.html">
                <span>
                 बीआईएम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"CAD"}" data-track-props="{" type":"Subject","title":"CAD"}" href="subject/cad.html">
                <span>
                 पाजी
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Chemical Engineering"}" data-track-props="{" type":"Subject","title":"Chemical href="subject/chemical-engineering.html">
                <span>
                 केमिकल इंजीनियरिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Energy Systems"}" data-track-props="{" type":"Subject","title":"Energy href="subject/energy-systems.html">
                <span>
                 ऊर्जा प्रणाली
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Aerospace Engineering"}" data-track-props="{" type":"Subject","title":"Aerospace href="subject/aerospace-engineering.html">
                <span>
                 अंतरिक्ष इंजिनीयरिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Engineering"}" data-track-props="{" type":"Subject","title":"Engineering"}" href="subject/engineering.html">
                <span>
                 सभी इंजीनियरिंग देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-science" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              विज्ञान
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Chemistry"}" data-track-props="{" type":"Subject","title":"Chemistry"}" href="subject/chemistry.html">
                <span>
                 रसायन विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Physics"}" data-track-props="{" type":"Subject","title":"Physics"}" href="subject/physics.html">
                <span>
                 भौतिक विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Environmental Science"}" data-track-props="{" type":"Subject","title":"Environmental href="subject/environmental-science.html">
                <span>
                 पर्यावरण विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Astronomy"}" data-track-props="{" type":"Subject","title":"Astronomy"}" href="subject/astronomy.html">
                <span>
                 खगोल
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Biology"}" data-track-props="{" type":"Subject","title":"Biology"}" href="subject/biology.html">
                <span>
                 जीवविज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Agriculture"}" data-track-props="{" type":"Subject","title":"Agriculture"}" href="subject/agriculture.html">
                <span>
                 कृषि
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Materials Science"}" data-track-props="{" type":"Subject","title":"Materials href="subject/materials-science.html">
                <span>
                 पदार्थ विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Earth Science"}" data-track-props="{" type":"Subject","title":"Earth href="subject/earth-science.html">
                <span>
                 भू - विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Applied Science"}" data-track-props="{" type":"Subject","title":"Applied href="subject/applied-science.html">
                <span>
                 व्यावहारिक विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Forensic Science"}" data-track-props="{" type":"Subject","title":"Forensic href="subject/forensic-science.html">
                <span>
                 फोरेंसिक विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Science"}" data-track-props="{" type":"Subject","title":"Science"}" href="subject/science.html">
                <span>
                 सभी विज्ञान देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-education" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              शिक्षा और शिक्षण
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"K12"}" data-track-props="{" type":"Subject","title":"K12"}" href="subject/k12.html">
                <span>
                 K12
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Higher Education"}" data-track-props="{" type":"Subject","title":"Higher href="subject/higher-education.html">
                <span>
                 उच्च शिक्षा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"STEM"}" data-track-props="{" type":"Subject","title":"STEM"}" href="subject/stem.html">
                <span>
                 तना
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Teacher Professional Development"}" data-track-props="{" type":"Subject","title":"Teacher href="subject/teacher-development.html">
                <span>
                 शिक्षक व्यावसायिक विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Course Development"}" data-track-props="{" type":"Subject","title":"Course href="subject/course-development.html">
                <span>
                 पाठ्यक्रम विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Online Education"}" data-track-props="{" type":"Subject","title":"Online href="subject/online-education.html">
                <span>
                 ऑनलाइन शिक्षा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Test Prep"}" data-track-props="{" type":"Subject","title":"Test href="subject/test-prep.html">
                <span>
                 परीक्षण तैयारी
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Pedagogy"}" data-track-props="{" type":"Subject","title":"Pedagogy"}" href="subject/pedagogy.html">
                <span>
                 शिक्षा शास्त्र
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Education & Teaching"}" data-track-props="{" type":"Subject","title":"Education href="subject/education.html">
                <span>
                 सभी शिक्षा और शिक्षण देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-social-sciences" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              सामाजिक विज्ञान
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Sociology"}" data-track-props="{" type":"Subject","title":"Sociology"}" href="subject/sociology.html">
                <span>
                 समाज शास्त्र
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Economics"}" data-track-props="{" type":"Subject","title":"Economics"}" href="subject/economics.html">
                <span>
                 अर्थशास्त्र
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Psychology"}" data-track-props="{" type":"Subject","title":"Psychology"}" href="subject/psychology.html">
                <span>
                 मनोविज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Anthropology"}" data-track-props="{" type":"Subject","title":"Anthropology"}" href="subject/anthropology.html">
                <span>
                 मनुष्य जाति का विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Political Science"}" data-track-props="{" type":"Subject","title":"Political href="subject/political-science.html">
                <span>
                 राजनीति विज्ञान
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Law"}" data-track-props="{" type":"Subject","title":"Law"}" href="subject/law.html">
                <span>
                 कानून
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Urban Planning"}" data-track-props="{" type":"Subject","title":"Urban href="subject/urban-planning.html">
                <span>
                 शहरी नियोजन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Human Rights"}" data-track-props="{" type":"Subject","title":"Human href="subject/human-rights.html">
                <span>
                 मानव अधिकार
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Sustainability"}" data-track-props="{" type":"Subject","title":"Sustainability"}" href="subject/sustainability.html">
                <span>
                 वहनीयता
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Governance"}" data-track-props="{" type":"Subject","title":"Governance"}" href="subject/governance.html">
                <span>
                 शासन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Archaeology"}" data-track-props="{" type":"Subject","title":"Archaeology"}" href="subject/archaeology.html">
                <span>
                 पुरातत्त्व
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Social Work"}" data-track-props="{" type":"Subject","title":"Social href="subject/social-work.html">
                <span>
                 सामाजिक कार्य
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Early Childhood Development"}" data-track-props="{" type":"Subject","title":"Early href="subject/childhood-development.html">
                <span>
                 बचपन के विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Social Sciences"}" data-track-props="{" type":"Subject","title":"Social href="subject/social-sciences.html">
                <span>
                 सभी सामाजिक विज्ञान देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-art-and-design" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              कला डिजाइन
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Music"}" data-track-props="{" type":"Subject","title":"Music"}" href="subject/music.html">
                <span>
                 संगीत
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Digital Media"}" data-track-props="{" type":"Subject","title":"Digital href="subject/digital-media.html">
                <span>
                 डिजीटल मीडिया
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Visual Arts"}" data-track-props="{" type":"Subject","title":"Visual href="subject/visual-arts.html">
                <span>
                 दृश्य कला
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Design & Creativity"}" data-track-props="{" type":"Subject","title":"Design href="subject/design-and-creativity.html">
                <span>
                 डिजाइन और रचनात्मकता
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Art & Design"}" data-track-props="{" type":"Subject","title":"Art href="subject/art-and-design.html">
                <span>
                 सभी कला और डिज़ाइन देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-data-science" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              डेटा विज्ञान
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Bioinformatics"}" data-track-props="{" type":"Subject","title":"Bioinformatics"}" href="subject/bioinformatics.html">
                <span>
                 बायोइनफॉरमैटिक्स
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Big Data"}" data-track-props="{" type":"Subject","title":"Big href="subject/big-data.html">
                <span>
                 बड़ा डेटा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Data Mining"}" data-track-props="{" type":"Subject","title":"Data href="subject/data-mining.html">
                <span>
                 डेटा खनन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Data Analysis"}" data-track-props="{" type":"Subject","title":"Data href="subject/data-analysis.html">
                <span>
                 डेटा विश्लेषण
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Data Visualization"}" data-track-props="{" type":"Subject","title":"Data href="subject/data-visualization.html">
                <span>
                 डेटा विज़ुअलाइज़ेशन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Jupyter Notebooks"}" data-track-props="{" type":"Subject","title":"Jupyter href="subject/jupyter.html">
                <span>
                 ज्यूपिटर नोटबुक
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Data Science"}" data-track-props="{" type":"Subject","title":"Data href="subject/data-science.html">
                <span>
                 सभी डेटा विज्ञान देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-programming-and-software-development" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              प्रोग्रामिंग
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Mobile Development"}" data-track-props="{" type":"Subject","title":"Mobile href="subject/mobile-development.html">
                <span>
                 मोबाइल विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Web Development"}" data-track-props="{" type":"Subject","title":"Web href="subject/web-development.html">
                <span>
                 वेब विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Databases"}" data-track-props="{" type":"Subject","title":"Databases"}" href="subject/databases.html">
                <span>
                 डेटाबेस
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Game Development"}" data-track-props="{" type":"Subject","title":"Game href="subject/game-development.html">
                <span>
                 खेल का विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Programming Languages"}" data-track-props="{" type":"Subject","title":"Programming href="subject/programming-languages.html">
                <span>
                 प्रोग्रामिंग भाषा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Software Development"}" data-track-props="{" type":"Subject","title":"Software href="subject/software-development.html">
                <span>
                 सॉफ्टवेयर डेवलपमेंट
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Cloud Computing"}" data-track-props="{" type":"Subject","title":"Cloud href="subject/cloud-computing.html">
                <span>
                 क्लाउड कम्प्यूटिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Programming"}" data-track-props="{" type":"Subject","title":"Programming"}" href="subject/programming-and-software-development.html">
                <span>
                 सभी प्रोग्रामिंग देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-personal-development" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              व्यक्तिगत विकास
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Communication Skills"}" data-track-props="{" type":"Subject","title":"Communication href="subject/communication-skills.html">
                <span>
                 संचार कौशल
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Career Development"}" data-track-props="{" type":"Subject","title":"Career href="subject/career-development.html">
                <span>
                 कैरियर विकास
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Self Improvement"}" data-track-props="{" type":"Subject","title":"Self href="subject/self-improvement.html">
                <span>
                 आत्म सुधार
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Presentation Skills"}" data-track-props="{" type":"Subject","title":"Presentation href="subject/presentation-skills.html">
                <span>
                 कौशल प्रस्तुति
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Resilience"}" data-track-props="{" type":"Subject","title":"Resilience"}" href="subject/resilience.html">
                <span>
                 लचीलापन
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Personal Development"}" data-track-props="{" type":"Subject","title":"Personal href="subject/personal-development.html">
                <span>
                 सभी व्यक्तिगत विकास देखें
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
           <div class="main-nav-dropdown__subsection js-main-nav-subsection" data-list-id="subject-infosec" hidden>
            <div class="main-nav-dropdown__subsection-header large-up-hidden">
             <button aria-label="Back to main menu" class="main-nav-dropdown__subsection-back-button" data-name="MAIN_NAV_SUBSECTION_BACK">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <h3 class="main-nav-dropdown__subsection-title">
              सूचना सुरक्षा (इन्फोसेक)
             </h3>
            </div>
            <section class="main-nav-dropdown__section">
             <ul class="list-no-style">
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Cybersecurity"}" data-track-props="{" type":"Subject","title":"Cybersecurity"}" href="subject/cybersecurity.html">
                <span>
                 साइबर सुरक्षा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Network Security"}" data-track-props="{" type":"Subject","title":"Network href="subject/network-security.html">
                <span>
                 नेटवर्क सुरक्षा
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Ethical Hacking"}" data-track-props="{" type":"Subject","title":"Ethical href="subject/ethical-hacking.html">
                <span>
                 नैतिक हैकिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Digital Forensics"}" data-track-props="{" type":"Subject","title":"Digital href="subject/digital-forensics.html">
                <span>
                 डिजिटल फोरेंसिक
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Reverse Engineering"}" data-track-props="{" type":"Subject","title":"Reverse href="subject/reverse-engineering.html">
                <span>
                 रिवर्स इंजीनियरिंग
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Penetration Testing"}" data-track-props="{" type":"Subject","title":"Penetration href="subject/pentesting.html">
                <span>
                 भेदन परीक्षण
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Malware Analysis"}" data-track-props="{" type":"Subject","title":"Malware href="subject/malware-analysis.html">
                <span>
                 मैलवेयर विश्लेषण
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"DevSecOps"}" data-track-props="{" type":"Subject","title":"DevSecOps"}" href="subject/devsecops.html">
                <span>
                 DevSecOps
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"OSINT (Open Source Intelligence)"}" data-track-props="{" type":"Subject","title":"OSINT href="subject/osint.html">
                <span>
                 OSINT (ओपन सोर्स इंटेलिजेंस)
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Threat Intelligence"}" data-track-props="{" type":"Subject","title":"Threat href="subject/threat-intelligence.html">
                <span>
                 धमकी खुफिया
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Information Security Certifications"}" data-track-props="{" type":"Subject","title":"Information href="subject/infosec-certifications.html">
                <span>
                 सूचना सुरक्षा प्रमाणपत्र
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Red Team"}" data-track-props="{" type":"Subject","title":"Red href="subject/red-team.html">
                <span>
                 रेड टीम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control color-charcoal" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject-child","label":"Blue Team"}" data-track-props="{" type":"Subject","title":"Blue href="subject/blue-team.html">
                <span>
                 नीली टीम
                </span>
               </a>
              </li>
              <li class="main-nav-dropdown__item">
               <a class="main-nav-dropdown__item-control--highlighted" data-track-click="nav_click" data-track-ga="{" category":"nav_click","action":"subject","label":"Information Security (InfoSec)"}" data-track-props="{" type":"Subject","title":"Information href="subject/infosec.html">
                <span>
                 सभी सूचना सुरक्षा देखें (इन्फोसेक)
                </span>
               </a>
              </li>
             </ul>
            </section>
           </div>
          </div>
         </nav>
        </div>
        <div class="hidden xlarge-up-flex" data-detail="{" name": "report"}" data-menu="report" data-name="NAV_DROPDOWN" style="align-items: center; height: 100%;">
         <a class="relative inline-block symbol-report" data-detail="{" name": "report"}" data-track-ga="{" category": "nav_click", "action": "news", "label":"top"}" href="report/index.html" style="width: 80px; top: 4px;">
          रिपोर्ट
         </a>
         <div class="animate-fade-hidden bg-white z-top absolute width-1-3 border-all border-gray-light shadow-light padding-medium" data-menu-dropdown="report">
          <div class="row nowrap">
           <div class="width-1-2 border-box padding-right-small">
            <a data-track-ga="[
            { " category": "News", "action": "Featured — Coursera’s New Deal with Google Could Cost the Company Millions", "label": "Navbar"}, { "category": "nav_click", "news", "featured Millions"} ]" href="report/coursera-google-new-deal/index.html">
             <img alt class="width-100 margin-bottom-xsmall shadow-light" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2Fcoursera-google-revenue-banner.png?auto=format&amp;ixlib=php-3.3.1&amp;s=68fd3ac08872ec505ab5f4a612b3f9d0">
            </a>
            <h4 class="head-3 margin-bottom-xsmall">
             <a class="color-charcoal" data-track-ga="[
              { " category": "News", "action": "Featured — Coursera’s New Deal with Google Could Cost the Company Millions", "label": "Navbar"}, { "category": "nav_click", "news", "featured Millions"} ]" href="report/coursera-google-new-deal/index.html">
              कौरसेरा की Google के साथ नई डील से कंपनी को लाखों का नुकसान हो सकता है
             </a>
            </h4>
            <p class="text-2 line-tight margin-bottom-xsmall">
             कौरसेरा सीएफओ के अनुसार, नई शर्तें एक महत्वपूर्ण "बदलाव" का प्रतिनिधित्व करती हैं।
                      आइए संख्याओं में खुदाई करें।
            </p>
            <div class="row text-2">
             <a class="color-charcoal weight-semi margin-right-small" href="report/author/dhawal/index.html">
              धवल शाह
             </a>
             <time class="color-gray" datetime="2023-02-27T05:47:43">
              फरवरी 27, 2023
             </time>
            </div>
           </div>
           <div class="width-1-2 border-box padding-left-small">
            <h5 class="text-2 border-bottom padding-bottom-xsmall weight-semi upper">
             नवीनतम
            </h5>
            <ol class="list-no-style">
             <li class="text-2 border-bottom border-gray-light">
              <a class="color-charcoal padding-vert-small block" data-track-ga="[
                  { " category": "News", "action": "Latest — FutureLearn’s Turbulent Year Culminates in Price Hike as CEO Departs", "label": "Navbar"}, { "category": "nav_click", "news", "latest Departs"} ]" href="report/futurelearn-price-hike-ceo-exit/index.html">
               फ़्यूचरलर्न का अशांत वर्ष सीईओ के प्रस्थान के रूप में मूल्य वृद्धि में समाप्त होता है
              </a>
             </li>
             <li class="text-2 border-bottom border-gray-light">
              <a 14 class="color-charcoal padding-vert-small block" data-track-ga="[
                  { " category": "News", "action": "Latest — Best Free CSS Layout Courses to Take in 2023", "label": "Navbar"}, { "category": "nav_click", "news", "latest 2023"} ]" href="report/best-css-layout-courses/index.html">
               2023 में लेने के लिए 14 सर्वश्रेष्ठ मुफ्त सीएसएस लेआउट पाठ्यक्रम
              </a>
             </li>
             <li class="text-2 border-bottom border-gray-light">
              <a 250 class="color-charcoal padding-vert-small block" data-track-ga="[
                  { " category": "News", "action": "Latest — [2023] The Most Popular Online Courses of All Time", "label": "Navbar"}, { "category": "nav_click", "news", "latest Time"} ]" href="report/most-popular-online-courses/index.html">
               [2023] अब तक के 250 सर्वाधिक लोकप्रिय ऑनलाइन पाठ्यक्रम
              </a>
             </li>
             <li class="text-2 border-bottom border-gray-light">
              <a class="color-charcoal padding-vert-small block" data-track-ga="[
                  { " category": "News", "action": "Latest — MasterClass’s Struggles Continue with Third Round of Layoffs", "label": "Navbar"}, { "category": "nav_click", "news", "latest Layoffs"} ]" href="report/masterclass-layoffs-round-three/index.html">
               छंटनी के तीसरे दौर के साथ मास्टरक्लास का संघर्ष जारी है
              </a>
             </li>
             <li class="text-2">
              <a class="color-charcoal padding-vert-small block" data-track-ga="[
                  { " category": "News", "action": "Latest — Academic Writing Made Easy: Improve Your Skills With TUM", "label": "Navbar"}, { "category": "nav_click", "news", "latest TUM"} ]" href="report/review-academic-writing-made-easy/index.html">
               अकादमिक लेखन को आसान बनाया गया: TUM के साथ अपने लेखन कौशल में सुधार करें
              </a>
             </li>
            </ol>
           </div>
          </div>
          <div class="row border-top margin-top-medium padding-top-medium">
           <a class="btn-white btn-medium horz-align-right relative" data-track-ga="[
          { " category": "News", "action": "Index", "label": "Navbar"}, { "category": "nav_click", "news", "index"} ]" href="report/index.html">
            मिलने जाना
            <i class="relative inline-block symbol-report" style="width: 80px; top: 1px;">
             रिपोर्ट
            </i>
           </a>
          </div>
         </div>
        </div>
        <div class="row nowrap horz-align-right vert-align-middle">
         <div class="xsmall-only-hidden margin-horz-xsmall" data-detail="{" name": "lists"}" data-menu="lists" data-name="NAV_DROPDOWN">
          <button aria-label="Your lists" class="cmpt-nav-add-item btn-circle btn-medium btn-white text-center" data-detail="{" name": "lists"}" data-name="NAV_TRIGGER" data-track-ga="[
                  { " category": "Lists", "action": "Add Item", "label": "Navbar"}, { "category": "nav_click", "lists", "label":"add item"} ]">
           <i class="icon-small icon-list-add-charcoal">
           </i>
          </button>
          <button aria-label="Close Lists menu" class="btn-circle btn-medium btn-white text-center animate-fade-hidden row vert-align-middle horz-align-center" data-detail="{" name": "lists"}" data-name="NAV_SUBMENU_CLOSE">
           <i class="icon-small icon-x-charcoal">
           </i>
          </button>
          <div class="animate-fade-hidden bg-white z-top absolute border-all border-gray-light shadow-light" data-menu-dropdown="lists">
           <div class="text-center padding-medium">
            <img alt src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flists%2Flist-empty.png?auto=format&amp;ixlib=php-3.3.1&amp;w=100&amp;s=7005d0a45465e44b0327c67458186ec5" width="100">
            <div>
             <p class="text-2 padding-top-small padding-horz-small">
              क्लास सेंट्रल लिस्ट के साथ अपने सीखने को व्यवस्थित और साझा करें।
             </p>
             <p class="text-2">
              हमारा देखें
              <a data-track-ga="{" category":"nav_click","action":"lists","label":"showcase"}" href="lists.html">
               सूची शोकेस
              </a>
             </p>
             <a class="text-right btn-blue margin-top-small" data-detail="{" source": "navbar lists" }" data-name="SIGNUP_LINK" data-track-ga="{ " category": "nav_click", "action": "lists", "label": "sign up"}" href="signup.html">
              साइन अप करें
             </a>
            </div>
           </div>
          </div>
         </div>
         <div class="hidden xlarge-up-inline-block">
          <a class="text-1 weight-semi color-charcoal" data-track-click="nav_click" data-track-ga="{" category": "nav_click", "action": "user", "label":"login"}" data-track-props="{ " type": "User", "title": "Login" }" href="login.html">
           लॉग इन करें
          </a>
          <span class="inline-block padding-horz-xxsmall color-charcoal">
           या
          </span>
          <a class="text-1 weight-semi color-charcoal" data-detail="{" source": "navbar" }" data-name="SIGNUP_LINK" data-track-click="nav_click" data-track-ga="{" category": "nav_click", "action": "user", "label":"register"}" data-track-props="{ " type": "User", "title": "Register" href="signup.html">
           साइन अप करें
          </a>
         </div>
         <div class="xlarge-up-hidden" data-detail="{" name": "user"}" data-menu="user" data-name="NAV_DROPDOWN">
          <button aria-label="Profile & Settings" data-detail="{" name": "user"}" data-name="NAV_TRIGGER">
           <i class="icon-profile-charcoal icon-medium">
           </i>
          </button>
          <button aria-label="Close Profile & Settings menu" class="animate-fade-hidden" data-detail="{" name": "user"}" data-name="NAV_SUBMENU_CLOSE">
           <i class="icon-medium icon-x-charcoal">
           </i>
          </button>
          <div class="animate-fade-hidden bg-white z-top absolute border-all border-gray-light shadow-light" data-menu-dropdown="user">
           <ol class="border-top border-gray-light padding-vert-xsmall list-no-style">
            <li>
             <a class="block text-2 hover-no-underline hover-bg-gray-light color-charcoal padding-horz-small padding-vert-xxsmall" data-track-click="nav_click" data-track-ga="{" category": "nav_click", "action": "user", "label":"login"}" data-track-props="{ " type": "User", "title": "login" }" href="login.html">
              लॉग इन करें
             </a>
            </li>
            <li>
             <a class="block text-2 hover-no-underline hover-bg-gray-light color-charcoal padding-horz-small padding-vert-xxsmall" data-detail="{ " source": "navbar dropdown" }" data-name="SIGNUP_LINK" data-track-click="nav_click" data-track-ga="{" category": "nav_click", "action": "user", "label":"sign_up"}" data-track-props="{ " type": "User", "title": "sign_up" href="signup.html">
              साइन अप करें
             </a>
            </li>
           </ol>
          </div>
         </div>
        </div>
       </nav>
      </div>
      <div class="animate-fade-hidden width-100 height-100 fixed top left" data-detail="{}" data-header-blanket data-name="BLANKET">
      </div>
     </header>
     <main>
      <section class="max-950 row vert-align-middle width-centered padding-horz-medium margin-vert-large large-up-padding-vert-large large-up-padding-vert-xxlarge border-box">
       <div class="width-100 medium-up-width-1-3 text-center border-box" id="learning-illus">
        <img alt="Never stop learning." class="width-2-3 medium-up-width-100 inline-block" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fillustrations%2Flearning-illustration-holi.png?auto=format&h=650&ixlib=php-3.3.1&s=2367f95a04f9d0237239831d72054f0b" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fillustrations%2Flearning-illustration-holi.png?auto=format&amp;h=650&amp;ixlib=php-3.3.1&amp;s=2367f95a04f9d0237239831d72054f0b">
       </div>
       <div class="width-100 medium-up-width-2-3 border-box medium-up-padding-left-large horz-align-right">
        <h2 class="head-2 medium-up-head-1 medium-down-padding-horz-xlarge text-center medium-up-text-left weight-bold margin-bottom-small">
         अपना अगला कोर्स खोजें।
        </h2>
        <div class="cc-search cc-search-body form relative margin-bottom-large" data-name="SEARCH_TOGGLE" data-search-container>
         <div class="relative" style="z-index: 1;">
          <form action="https://www.classcentral.com/search" class="search-input--fancy" method="GET">
           <i class="icon-search-charcoal icon-medium search-input__search-icon">
           </i>
           <input aria-label="Search courses and more…" autocomplete="off" class="search-input__input is-blank" data-name="AUTOCOMPLETE_SEARCHBOX" data-track-ga="{" category":"autocomplete","action":"open searchbox","label":"homepage"}" id="autocomplete-search-510503566" name="q" placeholder="Search 100,000 courses…" type="search" value>
           <button aria-controls="autocomplete-search-510503566" aria-label="Clear" class="search-input__clear-button" data-name="AUTOCOMPLETE_CLEAR" hidden type="button">
            <i class="icon-x-charcoal icon-xsmall">
            </i>
           </button>
          </form>
          <div class="search-results">
           <div class="search-results__container">
            <div class="search-results__small-header">
             <button aria-label="Back to main menu" class="search-results__small-header-back" data-name="MOBILE_AUTOCOMPLETE_EXIT" type="button">
              <i class="icon-chevron-left-charcoal icon-small">
              </i>
             </button>
             <form action="https://www.classcentral.com/search" class="search-input--compact" method="GET">
              <i class="icon-search-charcoal icon-medium search-input__search-icon">
              </i>
              <input aria-label="Search courses and more…" autocomplete="off" class="search-input__input is-blank" data-name="MOBILE_AUTOCOMPLETE_SEARCHBOX" data-track-ga="{" category":"autocomplete","action":"open searchbox","label":"navbar"}" id="autocomplete-search-1464383502" name="q" placeholder="Search courses and more…" type="search" value>
              <button aria-controls="autocomplete-search-1464383502" aria-label="Clear" class="search-input__clear-button" data-name="AUTOCOMPLETE_CLEAR" hidden type="button">
               <i class="icon-x-charcoal icon-xsmall">
               </i>
              </button>
             </form>
            </div>
            <div class="search-results__results js-autocomplete-results">
             <div class="search-results__group js-search-result-featured_articles">
              <ol class="list-no-style">
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"mooc_report_article","label":"Entry: \u201c700+ Free Google Certifications\u201d"}" href="report/google-free-certificates/index.html">
                 <i class="search-results__result-icon icon-paper-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info" style="--offset-right: 91px;">
                  <p class="search-results__result-name--bold">
                   700+ निःशुल्क Google प्रमाणन
                  </p>
                  <span class="search-results__result-tag">
                   <i class="icon-xsmall icon-megaphone-charcoal">
                   </i>
                   रुझान
                  </span>
                 </div>
                </a>
               </li>
              </ol>
             </div>
             <div class="search-results__group js-search-result-search_term_suggestions" data-template="suggested_search_tokens">
              <h2 class="search-results__group-heading">
               अत्यन्त साधारण
              </h2>
              <ol class="list-no-style">
               <li>
                <button class="search-results__result js-autocomplete-result" data-detail="{" term":"digital marketing"}" data-name="SUGGESTED_SEARCH_TERM" data-track-ga="{" category":"autocomplete empty state","action":"suggested_search_term","label":"Entry: \u201cdigital marketing\u201d"}" type="button">
                 <i class="search-results__result-icon icon-search-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <span class="search-results__result-name">
                   डिजिटल विपणन
                  </span>
                 </div>
                </button>
               </li>
               <li>
                <button class="search-results__result js-autocomplete-result" data-detail="{" term":"cyber security"}" data-name="SUGGESTED_SEARCH_TERM" data-track-ga="{" category":"autocomplete empty state","action":"suggested_search_term","label":"Entry: \u201ccyber security\u201d"}" type="button">
                 <i class="search-results__result-icon icon-search-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <span class="search-results__result-name">
                   साइबर सुरक्षा
                  </span>
                 </div>
                </button>
               </li>
               <li>
                <button class="search-results__result js-autocomplete-result" data-detail="{" term":"html"}" data-name="SUGGESTED_SEARCH_TERM" data-track-ga="{" category":"autocomplete empty state","action":"suggested_search_term","label":"Entry: \u201chtml\u201d"}" type="button">
                 <i class="search-results__result-icon icon-search-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <span class="search-results__result-name">
                   एचटीएमएल
                  </span>
                 </div>
                </button>
               </li>
              </ol>
             </div>
             <div class="search-results__group js-search-result-popular_subjects">
              <h2 class="search-results__group-heading">
               लोकप्रिय विषय
              </h2>
              <ol class="list-no-style">
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"subject","label":"Entry: \u201cDigital Skills\u201d"}" href="subject/digital-skills.html">
                 <i class="search-results__result-icon icon-subject-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <p class="search-results__result-name">
                   डिजिटल कौशल
                  </p>
                  <span class="search-results__result-extra">
                   226 पाठ्यक्रम
                  </span>
                 </div>
                </a>
               </li>
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"subject","label":"Entry: \u201cInformation Technology (IT) Certifications\u201d"}" href="subject/it-certifications.html">
                 <i class="search-results__result-icon icon-subject-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <p class="search-results__result-name">
                   सूचना प्रौद्योगिकी (आईटी) प्रमाणपत्र
                  </p>
                  <span class="search-results__result-extra">
                   505 पाठ्यक्रम
                  </span>
                 </div>
                </a>
               </li>
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"subject","label":"Entry: \u201cWeb Design\u201d"}" href="subject/web-design.html">
                 <i class="search-results__result-icon icon-subject-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <p class="search-results__result-name">
                   वेब डिजाइन
                  </p>
                  <span class="search-results__result-extra">
                   338 पाठ्यक्रम
                  </span>
                 </div>
                </a>
               </li>
              </ol>
             </div>
             <div class="search-results__group js-search-result-popular_courses">
              <h2 class="search-results__group-heading">
               लोकप्रिय पाठ्यक्रम
              </h2>
              <ol class="list-no-style">
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"course","label":"Entry: \u201cEducaci\u00f3n de calidad para todos: equidad, inclusi\u00f3n y atenci\u00f3n a la diversidad\u201d"}" href="course/edx-educacion-de-calidad-para-todos-equidad-inclusion-y-atencion-a-la-diversidad-3920.html">
                 <i class="search-results__result-icon icon-course-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <p class="search-results__result-name">
                   सभी के लिए गुणवत्तापूर्ण शिक्षा: समानता, समावेश और विविधता पर ध्यान
                  </p>
                  <span class="search-results__result-extra">
                   मैड्रिड के स्वायत्त विश्वविद्यालय
                  </span>
                 </div>
                </a>
               </li>
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"course","label":"Entry: \u201cIntroducci\u00f3n a la inversi\u00f3n burs\u00e1til\u201d"}" href="course/edx-introduccion-a-la-inversion-bursatil-5316.html">
                 <i class="search-results__result-icon icon-course-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <p class="search-results__result-name">
                   स्टॉक निवेश का परिचय
                  </p>
                  <span class="search-results__result-extra">
                   वालेंसिया के पॉलिटेक्निक विश्वविद्यालय
                  </span>
                 </div>
                </a>
               </li>
               <li>
                <a class="search-results__result js-autocomplete-result" data-track-ga="{" category":"autocomplete empty state","action":"course","label":"Entry: \u201cThe Bible's Prehistory, Purpose, and Political Future\u201d"}" href="course/biblefuture-1406.html">
                 <i class="search-results__result-icon icon-course-charcoal icon-small">
                 </i>
                 <div class="search-results__result-info">
                  <p class="search-results__result-name">
                   बाइबिल का प्रागितिहास, उद्देश्य और राजनीतिक भविष्य
                  </p>
                  <span class="search-results__result-extra">
                   एमोरी विश्वविद्यालय
                  </span>
                 </div>
                </a>
               </li>
              </ol>
             </div>
            </div>
           </div>
           <div class="search-results__blanket" data-name="AUTOCOMPLETE_BLANKET">
           </div>
          </div>
         </div>
         <p class="row vert-align-top horz-align-left text-2 medium-up-text-1 margin-top-xsmall padding-horz-xxsmall">
          या ब्राउज़ करें  
          <a class="link-gray-underline" href="subjects.html">
           विषय  
          </a>
          या  
          <a class="link-gray-underline" href="universities.html">
           विश्वविद्यालय  
          </a>
          <a class="horz-align-right text-1 icon-help-charcoal icon-right-small link-gray-underline" href="help/moocs.html">
           <span class="small-down-hidden">
            और अधिक जानें  
           </span>
          </a>
         </p>
        </div>
        <h3 class="text-1 weight-bold margin-bottom-xsmall">
         लोकप्रिय पाठ्यक्रम
        </h3>
        <ul class="list-not-style" id="home-subjects">
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Free Certificates"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Free Certificates" }" href="report/free-certificates/index.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-free-certificates.png?auto=format&h=50&ixlib=php-3.3.1&s=5eaf2bfa5357e8a666c9708da88c95c8" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-free-certificates.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=5eaf2bfa5357e8a666c9708da88c95c8" width="25">
           <span class="padding-right-xxsmall">
            नि: शुल्क प्रमाण पत्र
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Ivy League"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Ivy League" }" href="collection/ivy-league-moocs/index.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-ivy-league.png?auto=format&h=50&ixlib=php-3.3.1&s=494e82d5da0aa527d6a627ec69bfbb39" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-ivy-league.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=494e82d5da0aa527d6a627ec69bfbb39" width="25">
           <span class="padding-right-xxsmall">
            आइवी लीग
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Stanford"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Stanford" }" href="university/stanford.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Fstanford-trn-sq.png?auto=format&h=50&ixlib=php-3.3.1&s=f7a38d0e8610e9db640b8c41881489fc" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Fstanford-trn-sq.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=f7a38d0e8610e9db640b8c41881489fc" width="25">
           <span class="padding-right-xxsmall">
            स्टैनफोर्ड
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Best of All Time"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Best Time" }" href="collection/top-free-online-courses.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-best-all-time.png?auto=format&h=50&ixlib=php-3.3.1&s=57729919423ae4e0cc20fea3df56747d" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-best-all-time.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=57729919423ae4e0cc20fea3df56747d" width="25">
           <span class="padding-right-xxsmall">
            बेस्ट ऑफ ऑल टाइम
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Computer Science"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Computer Science" }" href="subject/cs.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-cs.png?auto=format&h=50&ixlib=php-3.3.1&s=353c0b4c8dc148c83069620078ca0ebe" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-cs.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=353c0b4c8dc148c83069620078ca0ebe" width="25">
           <span class="padding-right-xxsmall">
            कंप्यूटर विज्ञान
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Sustainability"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Sustainability" }" href="collection/sustainability-online-courses.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-sustainability.png?auto=format&h=50&ixlib=php-3.3.1&s=d154c083ace7d9bd4779c95563bda007" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-sustainability.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=d154c083ace7d9bd4779c95563bda007" width="25">
           <span class="padding-right-xxsmall">
            वहनीयता
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"MIT"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "MIT" }" href="university/mit.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Fmit-trn-sq.png?auto=format&h=50&ixlib=php-3.3.1&s=23432d71793524105bee93b332ab7424" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Fmit-trn-sq.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=23432d71793524105bee93b332ab7424" width="25">
           <span class="padding-right-xxsmall">
            साथ
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Google"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Google" }" href="institution/google.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Fgoogle-trn-sq.png?auto=format&h=50&ixlib=php-3.3.1&s=43d21ab54c9c89dac23dd72c80bc887b" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Fgoogle-trn-sq.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=43d21ab54c9c89dac23dd72c80bc887b" width="25">
           <span class="padding-right-xxsmall">
            गूगल
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Amazon"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Amazon" }" href="institution/amazon.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Famazon-trn-sq.png?auto=format&h=50&ixlib=php-3.3.1&s=74217eb4aea11f57834caf58c19ba539" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Finstitutions%2Famazon-trn-sq.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=74217eb4aea11f57834caf58c19ba539" width="25">
           <span class="padding-right-xxsmall">
            वीरांगना
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Business"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Business" }" href="subject/business.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-business.png?auto=format&h=50&ixlib=php-3.3.1&s=b98c8d8725c5d944054f9637460927f1" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Ficon-business.png?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=b98c8d8725c5d944054f9637460927f1" width="25">
           <span class="padding-right-xxsmall">
            व्यवसाय
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Best Courses Guides"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Best Guides" }" href="report/category/best-courses/index.html" target="_blank">
           <span class="icon-lettermark-charcoal icon-large margin-right-xxsmall">
           </span>
           <span class="padding-right-xxsmall">
            सर्वश्रेष्ठ पाठ्यक्रम मार्गदर्शिकाएँ
           </span>
          </a>
         </li>
         <li class="inline-block margin-right-xxsmall margin-bottom-xxsmall">
          <a class="bg-gray-xlight text-3 scale-on-hover hover-no-underline color-charcoal border-all border-gray-light radius-large padding-xxsmall row vert-align-middle" data-track-click="homepage_click" data-track-ga="{" category":"homepage header","action":"browse links","label":"Deals and Discounts"}" data-track-props="{ 
              " category": "homepage header", "action": "browse links", "label": "Deals Discounts" }" href="report/online-learning-deals/index.html" target="_blank">
           <img alt class="radius-circle margin-right-xxsmall" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fpromobar%2Fdeal.svg?auto=format&h=50&ixlib=php-3.3.1&s=9c3031e6bc3996defc5c59def7d6290c" height="25" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fpromobar%2Fdeal.svg?auto=format&amp;h=50&amp;ixlib=php-3.3.1&amp;s=9c3031e6bc3996defc5c59def7d6290c" width="25">
           <span class="padding-right-xxsmall">
            सौदे और छूट
           </span>
          </a>
         </li>
        </ul>
       </div>
      </section>
      <section class="padding-vert-xxlarge large-down-padding-horz-medium border-box" id="home-discover">
       <div class="width-page width-centered margin-bottom-xlarge">
        <header class="max-750 width-centered text-center margin-bottom-small">
         <h2 class="head-2 medium-up-head-1 margin-bottom-xsmall" style="color: #2B0380;">
          सर्वोत्तम पाठ्यक्रम खोजें, चाहे वे कहीं भी हों
         </h2>
        </header>
        <img alt="Never stop learning." class="width-100 inline-block" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fillustrations%2Fhomepage-discover-01.png?auto=format&h=650&ixlib=php-3.3.1&s=b97e70faf45e76b8e5910e7c97b41617" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fillustrations%2Fhomepage-discover-01.png?auto=format&amp;h=650&amp;ixlib=php-3.3.1&amp;s=b97e70faf45e76b8e5910e7c97b41617">
        <ul class="list-no-style row large-up-nowrap">
         <li class="border-box width-100 large-up-width-3-7 padding-horz-small relative">
          <h3 class="head-2 text-center large-up-text-left margin-bottom-large">
           1200+ विश्वविद्यालय
          </h3>
          <ul class="width-100 row list-no-style margin-bottom-xlarge">
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/harvard.html">
             <img alt="Harvard University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fharvard.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=e177bee72e03d5df7c50177940004b51" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fharvard.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=e177bee72e03d5df7c50177940004b51" width="50">
             <strong class="margin-left-xsmall fill-space">
              विदेश महाविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/stanford.html">
             <img alt="Stanford University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fstanford.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=88952c24aeee5f18451e40581c99deac" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fstanford.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=88952c24aeee5f18451e40581c99deac" width="50">
             <strong class="margin-left-xsmall fill-space">
              स्टैनफोर्ड विश्वविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/iit-kharagpur.html">
             <img alt="IIT Kharagpur Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fiit-kharagpur.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=240da08e01eed98192e99ce4f1d6ce97" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fiit-kharagpur.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=240da08e01eed98192e99ce4f1d6ce97" width="50">
             <strong class="margin-left-xsmall fill-space">
              आईआईटी खड़गपुर
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/mit.html">
             <img alt="MIT Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fmit.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=5e57f727cf0057460f8bee7213cd3539" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fmit.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=5e57f727cf0057460f8bee7213cd3539" width="50">
             <strong class="margin-left-xsmall fill-space">
              साथ
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/rice.html">
             <img alt="Rice University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Frice.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=a4cd65fffbdcfa9e4f713a0f8727ca9f" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Frice.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=a4cd65fffbdcfa9e4f713a0f8727ca9f" width="50">
             <strong class="margin-left-xsmall fill-space">
              चावल विश्वविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/iitm.html">
             <img alt="IIT Madras Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fiitm.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=78fd57bad00a8445c4a83e942421bdfa" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fiitm.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=78fd57bad00a8445c4a83e942421bdfa" width="50">
             <strong class="margin-left-xsmall fill-space">
              आईआईटी मद्रास
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/columbia.html">
             <img alt="Columbia University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fcolumbia.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=cda5c4e367a8d8597981733b1a1e2020" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fcolumbia.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=cda5c4e367a8d8597981733b1a1e2020" width="50">
             <strong class="margin-left-xsmall fill-space">
              कोलम्बिया विश्वविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/cornell.html">
             <img alt="Cornell University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fcornell.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=c281a17cd599f91a73543731494ff4de" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fcornell.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=c281a17cd599f91a73543731494ff4de" width="50">
             <strong class="margin-left-xsmall fill-space">
              कॉर्नेल विश्वविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/edinburgh.html">
             <img alt="U. of Edinburgh Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fedinburgh.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=02e1424f140c413a5f4bff39345aade7" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fedinburgh.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=02e1424f140c413a5f4bff39345aade7" width="50">
             <strong class="margin-left-xsmall fill-space">
              एडिनबर्ग के यू
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/purdue.html">
             <img alt="Purdue University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fpurdue.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=57260d55af3c798ab3c3c38fd644d5dc" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fpurdue.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=57260d55af3c798ab3c3c38fd644d5dc" width="50">
             <strong class="margin-left-xsmall fill-space">
              पर्ड्यू विश्वविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/penn.html">
             <img alt="U. of Pennsylvania Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fpenn.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=9be4953459c0a57a968f58552de3da24" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fpenn.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=9be4953459c0a57a968f58552de3da24" width="50">
             <strong class="margin-left-xsmall fill-space">
              पेंसिल्वेनिया के यू
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/duke.html">
             <img alt="Duke University Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fduke.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=7badaeb1866525d65f9e1b769fd1c8a8" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fduke.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=7badaeb1866525d65f9e1b769fd1c8a8" width="50">
             <strong class="margin-left-xsmall fill-space">
              ड्यूक विश्वविद्यालय
             </strong>
            </a>
           </li>
           <li class="width-100 large-up-width-1-2">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="university/umich.html">
             <img alt="U. of Michigan Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fumich.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=c3639dfc0b29edccbff274081475d99f" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fumich.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=c3639dfc0b29edccbff274081475d99f" width="50">
             <strong class="margin-left-xsmall fill-space">
              मिशिगन के यू
             </strong>
            </a>
           </li>
          </ul>
          <div class="text-left margin-bottom-xlarge">
           <a class="btn-gradient-purple scale-on-hover" href="universities.html">
            <span class="text-1 weight-semi icon-chevron-right-charcoal icon-right-small color-charcoal">
             विश्वविद्यालयों को ब्राउज़ करें
            </span>
           </a>
          </div>
         </li>
         <li class="medium-down-hidden decor-grid-line border-box width-100 large-up-width-2-7 padding-horz-small large-up-padding-horz-large relative">
          <h3 class="head-2 text-left margin-bottom-large">
           80 प्रदाता
          </h3>
          <ul class="width-100 row list-no-style margin-bottom-xlarge">
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/coursera.html">
             <img alt="Coursera Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fcoursera-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=25870ffbba482c2c8dca6ab7233fa851" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fcoursera-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=25870ffbba482c2c8dca6ab7233fa851" width="50">
             <strong class="margin-left-xsmall fill-space">
              Coursera
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/edx.html">
             <img alt="edX Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fedx-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=86be374faaa2c332611cd8a1cb508975" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fedx-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=86be374faaa2c332611cd8a1cb508975" width="50">
             <strong class="margin-left-xsmall fill-space">
              एडएक्स
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/futurelearn.html">
             <img alt="FutureLearn Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Ffuturelearn-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=890afa9595255a6e9b8884ddc515d769" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Ffuturelearn-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=890afa9595255a6e9b8884ddc515d769" width="50">
             <strong class="margin-left-xsmall fill-space">
              फ्यूचरलर्न
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/udemy.html">
             <img alt="Udemy Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fudemy-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=918f4790c5c5818a022e23be21061434" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fudemy-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=918f4790c5c5818a022e23be21061434" width="50">
             <strong class="margin-left-xsmall fill-space">
              Udemy
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/swayam.html">
             <img alt="Swayam Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fswayam-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=d66b9084f03e29797282e157f846187f" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fswayam-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=d66b9084f03e29797282e157f846187f" width="50">
             <strong class="margin-left-xsmall fill-space">
              Swayam
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/linkedin-learning.html">
             <img alt="LinkedIn Learning Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Flinkedin-learning-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=7deeee41ea2d12f795bfdc405a89c496" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Flinkedin-learning-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=7deeee41ea2d12f795bfdc405a89c496" width="50">
             <strong class="margin-left-xsmall fill-space">
              लिंक्डइन लर्निंग
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="provider/skillshare.html">
             <img alt="Skillshare Logo" class="radius" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fskillshare-trn-sq.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=d9e51a1e711dbb0e1cb34e4c63551231" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fproviders%2Fskillshare-trn-sq.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=d9e51a1e711dbb0e1cb34e4c63551231" width="50">
             <strong class="margin-left-xsmall fill-space">
              skillshare
             </strong>
            </a>
           </li>
          </ul>
          <div class="text-left margin-bottom-xlarge">
           <a class="btn-gradient-purple scale-on-hover" href="providers.html">
            <span class="text-1 weight-semi icon-chevron-right-charcoal icon-right-small color-charcoal">
             प्रदाताओं को ब्राउज़ करें
            </span>
           </a>
          </div>
         </li>
         <li class="medium-down-hidden decor-grid-line border-box width-100 large-up-width-2-7 padding-horz-small large-up-padding-horz-large relative">
          <h3 class="head-2 text-left margin-bottom-large">
           1000+ संस्थान
          </h3>
          <ul class="width-100 row list-no-style margin-bottom-xlarge">
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/google.html">
             <img alt="Google Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fgoogle.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=28a13d6dddffe8d861ff5decfb83a695" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fgoogle.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=28a13d6dddffe8d861ff5decfb83a695" width="50">
             <strong class="margin-left-xsmall fill-space">
              गूगल
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/amazon.html">
             <img alt="Amazon Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Famazon.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=41e781e76e91b5059a7fbc2168283667" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Famazon.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=41e781e76e91b5059a7fbc2168283667" width="50">
             <strong class="margin-left-xsmall fill-space">
              वीरांगना
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/microsoft.html">
             <img alt="Microsoft Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fmicrosoft.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=2e82f16f3e381d409b5b2924c9665bd7" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fmicrosoft.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=2e82f16f3e381d409b5b2924c9665bd7" width="50">
             <strong class="margin-left-xsmall fill-space">
              माइक्रोसॉफ्ट
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/ibm.html">
             <img alt="IBM Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fibm.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=fbb4ccdbbb895bfc02137b42107f2edf" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fibm.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=fbb4ccdbbb895bfc02137b42107f2edf" width="50">
             <strong class="margin-left-xsmall fill-space">
              आईबीएम
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/smithsonian.html">
             <img alt="Smithsonian Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fsmithsonian.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=ce8c63e4445f3cfed1a9f95579a52d11" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fsmithsonian.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=ce8c63e4445f3cfed1a9f95579a52d11" width="50">
             <strong class="margin-left-xsmall fill-space">
              स्मिथसोनियन
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/united-nations.html">
             <img alt="United Nations Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Funited-nations.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=6d29c7e53511de20226e41e2ea583662" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Funited-nations.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=6d29c7e53511de20226e41e2ea583662" width="50">
             <strong class="margin-left-xsmall fill-space">
              संयुक्त राष्ट्र
             </strong>
            </a>
           </li>
           <li class="width-100">
            <a class="scale-on-hover text-1 row horz-align-left nowrap color-charcoal hover-no-underline text-no-underline vert-align-middle radius-small hover-bg-purple-light padding-horz-xsmall padding-vert-xxsmall" href="institution/british-council.html">
             <img alt="British Council Logo" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fbritish-council.png?auto=format&cs=strip&fit=&h=50&ixlib=php-3.3.1&w=50&s=ce4a3136cf6152a19e7e89a15dc790a7" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Flogos%2Fhomepage%2Fbritish-council.png?auto=format&amp;cs=strip&amp;fit=&amp;h=50&amp;ixlib=php-3.3.1&amp;w=50&amp;s=ce4a3136cf6152a19e7e89a15dc790a7" width="50">
             <strong class="margin-left-xsmall fill-space">
              ब्रिटिश परिषद
             </strong>
            </a>
           </li>
          </ul>
          <div class="text-left margin-bottom-xlarge">
           <a class="btn-gradient-purple scale-on-hover" href="institutions.html">
            <span class="text-1 weight-semi icon-chevron-right-charcoal icon-right-small color-charcoal">
             संस्थानों को ब्राउज़ करें
            </span>
           </a>
          </div>
         </li>
        </ul>
       </div>
      </section>
      <section class="width-100 large-down-padding-horz-medium padding-vert-xxlarge border-box" style="background: linear-gradient(136.79deg, #FFF4EA 2.06%, #FFF7EE 97.86%);">
       <div class="width-page width-centered">
        <header class="max-750 width-centered text-center margin-bottom-xxlarge">
         <h2 class="head-2 medium-up-head-1 row horz-align-center vert-align-middle text-center margin-bottom-xsmall" style="color: #EA5918;">
          <svg class="margin-right-xsmall" fill="none" viewBox="0 0 54 40" width="45" xmlns="http://www.w3.org/2000/svg">
           <path d="M0 0L54 1.11315e-05L54 39.0034L0 39.0034L16.1273 19.4042L0 0Z" fill="#0D4DF1">
           </path>
           <path d="M38.9577 22.0208C38.803 21.5515 38.9607 21.0248 39.3365 20.7552L43.5606 17.7255C44.3595 17.1525 43.9976 15.7647 43.0494 15.7647H37.5488C37.1516 15.7647 36.7965 15.4873 36.6587 15.0695L34.8884 9.69909C34.5829 8.77218 33.4139 8.77218 33.1084 9.69909L31.3381 15.0695C31.2003 15.4873 30.8452 15.7647 30.448 15.7647H24.9506C24.0021 15.7647 23.6405 17.1531 24.4398 17.7258L28.668 20.7549C29.0444 21.0245 29.2021 21.5521 29.0469 22.0217L27.3984 27.007C27.082 27.9641 28.0321 28.8234 28.7991 28.2738L33.4875 24.914C33.799 24.6908 34.1978 24.6908 34.5093 24.914L39.2017 28.2766C39.9683 28.826 40.9181 27.9678 40.6026 27.0108L38.9577 22.0208Z" fill="white">
           </path>
          </svg>
          रैंकिंग
         </h2>
         <p class="head-3 weight-semi max-450 width-centered border-box">
          क्लास सेंट्रल उपयोगकर्ताओं द्वारा लिखी गई दसियों हज़ार समीक्षाएँ आपको सर्वोत्तम पाठ्यक्रम चुनने में मदद
                करती हैं।
         </p>
        </header>
        <ul class="max-850 width-centered list-no-style row large-up-nowrap margin-bottom-xxlarge">
         <li class="width-100 border-box padding-small large-up-width-1-2 border-box">
          <a data-track-click="homepage_click" data-track-props="{ " type": "Best Courses", "title": "All-Time", "section": "Class Central" }" href="collection/top-free-online-courses.html">
           <img alt="Best Online Courses of All Time" class="width-100 block radius scale-on-hover" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&ixlib=php-3.3.1&s=2243a68cbc2b37e04fdf74e1b8ea98f9" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-all-time.png?auto=format&amp;ixlib=php-3.3.1&amp;s=2243a68cbc2b37e04fdf74e1b8ea98f9" style="box-shadow: 0px 0px 5px rgba(236, 176, 149, 0.7);">
          </a>
         </li>
         <li class="width-100 border-box padding-small large-up-width-1-2 border-box">
          <a data-track-click="homepage_click" data-track-props="{ " type": "Best Courses", "title": "2021", "section": "Class Central" }" href="">
           <img alt="Class Central’s Best Online Courses of the Year (2022 Edition)" class="width-100 block radius scale-on-hover" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-2022.png?auto=format&ixlib=php-3.3.1&s=14c4ca36ec8c064ed28b180491257b48" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fbest-courses%2Fmini-banner-best-of-2022.png?auto=format&amp;ixlib=php-3.3.1&amp;s=14c4ca36ec8c064ed28b180491257b48" style="box-shadow: 0px 0px 5px rgba(236, 176, 149, 0.7);">
          </a>
         </li>
        </ul>
        <div class="text-center margin-bottom-xlarge">
         <a class="btn-gradient-orange scale-on-hover" href="rankings.html">
          <span class="text-1 weight-semi icon-chevron-right-charcoal icon-right-small color-charcoal">
           रैंकिंग देखें
          </span>
         </a>
        </div>
       </div>
      </section>
      <section class="padding-vert-xxlarge large-down-padding-horz-medium margin-bottom-large border-box">
       <header class="max-850 width-centered border-center border-blue-light text-center margin-bottom-xlarge">
        <h2 class="head-2 bg-white inline-block padding-horz-medium">
         में जैसा दिखा
        </h2>
       </header>
       <ul class="max-850 width-centered row vert-align-middle wrap list-no-style">
        <li class="width-1-2 large-up-width-1-3 border-box padding-horz-small padding-vert-xsmall">
         <!-- the new york times -->
         <svg fill="#06213d" viewBox="0 0 184 25" width="100%">
          <path d="M13.8 2.9c0-2-1.9-2.5-3.4-2.5v.3c.9 0 1.6.3 1.6 1 0 .4-.3 1-1.2 1-.7 0-2.2-.4-3.3-.8C6.2 1.4 5 1 4 1 2 1 .6 2.5.6 4.2c0 1.5 1.1 2 1.5 2.2l.1-.2c-.2-.2-.5-.4-.5-1 0-.4.4-1.1 1.4-1.1.9 0 2.1.4 3.7.9 1.4.4 2.9.7 3.7.8v3.1L9 10.2v.1l1.5 1.3v4.3c-.8.5-1.7.6-2.5.6-1.5 0-2.8-.4-3.9-1.6l4.1-2V6l-5 2.2C3.6 6.9 4.7 6 5.8 5.4l-.1-.3c-3 .8-5.7 3.6-5.7 7 0 4 3.3 7 7 7 4 0 6.6-3.2 6.6-6.5h-.2c-.6 1.3-1.5 2.5-2.6 3.1v-4.1l1.6-1.3v-.1l-1.6-1.3V5.8c1.5 0 3-1 3-2.9zm-8.7 11l-1.2.6c-.7-.9-1.1-2.1-1.1-3.8 0-.7 0-1.5.2-2.1l2.1-.9v6.2zm10.6 2.3l-1.3 1 .2.2.6-.5 2.2 2 3-2-.1-.2-.8.5-1-1V9.4l.8-.6 1.7 1.4v6.1c0 3.8-.8 4.4-2.5 5v.3c2.8.1 5.4-.8 5.4-5.7V9.3l.9-.7-.2-.2-.8.6-2.5-2.1L18.5 9V.8h-.2l-3.5 2.4v.2c.4.2 1 .4 1 1.5l-.1 11.3zM34 15.1L31.5 17 29 15v-1.2l4.7-3.2v-.1l-2.4-3.6-5.2 2.8v6.6l-1 .8.2.2.9-.7 3.4 2.5 4.5-3.6-.1-.4zm-5-1.7V8.5l.2-.1 2.2 3.5-2.4 1.5zM53.1 2c0-.3-.1-.6-.2-.9h-.2c-.3.8-.7 1.2-1.7 1.2-.9 0-1.5-.5-1.9-.9l-2.9 3.3.2.2 1-.9c.6.5 1.1.9 2.5 1v8.3L44 3.2c-.5-.8-1.2-1.9-2.6-1.9-1.6 0-3 1.4-2.8 3.6h.3c.1-.6.4-1.3 1.1-1.3.5 0 1 .5 1.3 1v3.3c-1.8 0-3 .8-3 2.3 0 .8.4 2 1.6 2.3v-.2c-.2-.2-.3-.4-.3-.7 0-.5.4-.9 1.1-.9h.5v4.2c-2.1 0-3.8 1.2-3.8 3.2 0 1.9 1.6 2.8 3.4 2.7v-.2c-1.1-.1-1.6-.6-1.6-1.3 0-.9.6-1.3 1.4-1.3.8 0 1.5.5 2 1.1l2.9-3.2-.2-.2-.7.8c-1.1-1-1.7-1.3-3-1.5V5l8 14h.6V5c1.5-.1 2.9-1.3 2.9-3zm7.3 13.1L57.9 17l-2.5-2v-1.2l4.7-3.2v-.1l-2.4-3.6-5.2 2.8v6.6l-1 .8.2.2.9-.7 3.4 2.5 4.5-3.6-.1-.4zm-5-1.7V8.5l.2-.1 2.2 3.5-2.4 1.5zM76.7 8l-.7.5-1.9-1.6-2.2 2 .9.9v7.5l-2.4-1.5V9.6l.8-.5-2.3-2.2-2.2 2 .9.9V17l-.3.2-2.1-1.5v-6c0-1.4-.7-1.8-1.5-2.3-.7-.5-1.1-.8-1.1-1.5 0-.6.6-.9.9-1.1v-.2c-.8 0-2.9.8-2.9 2.7 0 1 .5 1.4 1 1.9s1 .9 1 1.8v5.8l-1.1.8.2.2 1-.8 2.3 2 2.5-1.7 2.8 1.7 5.3-3.1V9.2l1.3-1-.2-.2zm18.6-5.5l-1 .9-2.2-2-3.3 2.4V1.6h-.3l.1 16.2c-.3 0-1.2-.2-1.9-.4l-.2-13.5c0-1-.7-2.4-2.5-2.4s-3 1.4-3 2.8h.3c.1-.6.4-1.1 1-1.1s1.1.4 1.1 1.7v3.9c-1.8.1-2.9 1.1-2.9 2.4 0 .8.4 2 1.6 2V13c-.4-.2-.5-.5-.5-.7 0-.6.5-.8 1.3-.8h.4v6.2c-1.5.5-2.1 1.6-2.1 2.8 0 1.7 1.3 2.9 3.3 2.9 1.4 0 2.6-.2 3.8-.5 1-.2 2.3-.5 2.9-.5.8 0 1.1.4 1.1.9 0 .7-.3 1-.7 1.1v.2c1.6-.3 2.6-1.3 2.6-2.8s-1.5-2.4-3.1-2.4c-.8 0-2.5.3-3.7.5-1.4.3-2.8.5-3.2.5-.7 0-1.5-.3-1.5-1.3 0-.8.7-1.5 2.4-1.5.9 0 2 .1 3.1.4 1.2.3 2.3.6 3.3.6 1.5 0 2.8-.5 2.8-2.6V3.7l1.2-1-.2-.2zm-4.1 6.1c-.3.3-.7.6-1.2.6s-1-.3-1.2-.6V4.2l1-.7 1.4 1.3v3.8zm0 3c-.2-.2-.7-.5-1.2-.5s-1 .3-1.2.5V9c.2.2.7.5 1.2.5s1-.3 1.2-.5v2.6zm0 4.7c0 .8-.5 1.6-1.6 1.6h-.8V12c.2-.2.7-.5 1.2-.5s.9.3 1.2.5v4.3zm13.7-7.1l-3.2-2.3-4.9 2.8v6.5l-1 .8.1.2.8-.6 3.2 2.4 5-3V9.2zm-5.4 6.3V8.3l2.5 1.8v7.1l-2.5-1.7zm14.9-8.4h-.2c-.3.2-.6.4-.9.4-.4 0-.9-.2-1.1-.5h-.2l-1.7 1.9-1.7-1.9-3 2 .1.2.8-.5 1 1.1v6.3l-1.3 1 .2.2.6-.5 2.4 2 3.1-2.1-.1-.2-.9.5-1.2-1V9c.5.5 1.1 1 1.8 1 1.4.1 2.2-1.3 2.3-2.9zm12 9.6L123 19l-4.6-7 3.3-5.1h.2c.4.4 1 .8 1.7.8s1.2-.4 1.5-.8h.2c-.1 2-1.5 3.2-2.5 3.2s-1.5-.5-2.1-.8l-.3.5 5 7.4 1-.6v.1zm-11-.5l-1.3 1 .2.2.6-.5 2.2 2 3-2-.2-.2-.8.5-1-1V.8h-.1l-3.6 2.4v.2c.4.2 1 .3 1 1.5v11.3zM143 2.9c0-2-1.9-2.5-3.4-2.5v.3c.9 0 1.6.3 1.6 1 0 .4-.3 1-1.2 1-.7 0-2.2-.4-3.3-.8-1.3-.4-2.5-.8-3.5-.8-2 0-3.4 1.5-3.4 3.2 0 1.5 1.1 2 1.5 2.2l.1-.2c-.3-.2-.6-.4-.6-1 0-.4.4-1.1 1.4-1.1.9 0 2.1.4 3.7.9 1.4.4 2.9.7 3.7.8V9l-1.5 1.3v.1l1.5 1.3V16c-.8.5-1.7.6-2.5.6-1.5 0-2.8-.4-3.9-1.6l4.1-2V6l-5 2.2c.5-1.3 1.6-2.2 2.6-2.9l-.1-.2c-3 .8-5.7 3.5-5.7 6.9 0 4 3.3 7 7 7 4 0 6.6-3.2 6.6-6.5h-.2c-.6 1.3-1.5 2.5-2.6 3.1v-4.1l1.6-1.3v-.1L140 8.8v-3c1.5 0 3-1 3-2.9zm-8.7 11l-1.2.6c-.7-.9-1.1-2.1-1.1-3.8 0-.7.1-1.5.3-2.1l2.1-.9-.1 6.2zm12.2-12h-.1l-2 1.7v.1l1.7 1.9h.2l2-1.7v-.1l-1.8-1.9zm3 14.8l-.8.5-1-1V9.3l1-.7-.2-.2-.7.6-1.8-2.1-2.9 2 .2.3.7-.5.9 1.1v6.5l-1.3 1 .1.2.7-.5 2.2 2 3-2-.1-.3zm16.7-.1l-.7.5-1.1-1V9.3l1-.8-.2-.2-.8.7-2.3-2.1-3 2.1-2.3-2.1L154 9l-1.8-2.1-2.9 2 .1.3.7-.5 1 1.1v6.5l-.8.8 2.3 1.9 2.2-2-.9-.9V9.3l.9-.6 1.5 1.4v6l-.8.8 2.3 1.9 2.2-2-.9-.9V9.3l.8-.5 1.6 1.4v6l-.7.7 2.3 2.1 3.1-2.1v-.3zm8.7-1.5l-2.5 1.9-2.5-2v-1.2l4.7-3.2v-.1l-2.4-3.6-5.2 2.8v6.8l3.5 2.5 4.5-3.6-.1-.3zm-5-1.7V8.5l.2-.1 2.2 3.5-2.4 1.5zm14.1-.9l-1.9-1.5c1.3-1.1 1.8-2.6 1.8-3.6v-.6h-.2c-.2.5-.6 1-1.4 1-.8 0-1.3-.4-1.8-1L176 9.3v3.6l1.7 1.3c-1.7 1.5-2 2.5-2 3.3 0 1 .5 1.7 1.3 2l.1-.2c-.2-.2-.4-.3-.4-.8 0-.3.4-.8 1.2-.8 1 0 1.6.7 1.9 1l4.3-2.6v-3.6h-.1zm-1.1-3c-.7 1.2-2.2 2.4-3.1 3l-1.1-.9V8.1c.4 1 1.5 1.8 2.6 1.8.7 0 1.1-.1 1.6-.4zm-1.7 8c-.5-1.1-1.7-1.9-2.9-1.9-.3 0-1.1 0-1.9.5.5-.8 1.8-2.2 3.5-3.2l1.2 1 .1 3.6z">
          </path>
         </svg>
        </li>
        <li class="width-1-2 large-up-width-1-3 border-box padding-horz-small padding-vert-xsmall">
         <!-- the philadelphia inquirer -->
         <svg viewBox="0 0 375 39" width="100%">
          <path d="M27.46,1.42l-.73-.35a4.7,4.7,0,0,1-4.36,2.68c-4.59,0-7.31-2.13-12.25-2.13C7.28,1.62,3,4.14.83,9l.77.31C3,6.56,4.87,5.47,6.7,5.47a25.87,25.87,0,0,1,6.42.93c-5.06,2-10.74,6.07-10.74,13.85A11.83,11.83,0,0,0,14,32.22c6.54,0,10-4.39,12.06-8.28l-.62-.31a9.51,9.51,0,0,1-4.24,4V7.18c2.91-1,4.66-3,6.29-5.76ZM17,7.42A22.25,22.25,0,0,0,15,8.89c-1.52,1.13-2.14,1.63-2.14,4V23.51c0,2.8-.2,2.84-1.28,3.62-2.14-1.44-4.16-4.2-4.16-8.75,0-5.09,2.21-9.45,6.69-11.71C15.14,7,16.22,7.26,17,7.42Zm3.19,20.49a12.39,12.39,0,0,1-3.81.5,9,9,0,0,1-4.2-.89,27.63,27.63,0,0,0,3-1.9c1.56-1.17,2.14-1.68,2.14-4.09V11c0-2.3.12-2.84.51-3.38a9,9,0,0,0,2.33-.2Z" fill="#06213d">
          </path>
          <path d="M43.1,27.13l-.47-.47c-.35.35-.89.94-1.28.94-.7,0-1.48-.94-1.48-.94V15.11l1.83-1.86-.51-.47-1.43,1.44-3.89-3.39h-.24l-4.24,4,0,0V4.34a3.41,3.41,0,0,0,2.71,1C35.91,5.31,38,3,39.25.8L38.62.49c-1.2,1.75-2,1.75-3.3,1.75A4.67,4.67,0,0,1,32.64,1h-.27a54.49,54.49,0,0,1-6.19,4.2v.43s.85.11.85.58v21c0,.27-.73.58-.73.58v.35l3.92,3.11h.24l3.07-3.11-.08-.43a2.44,2.44,0,0,1-2.09-1.17V16l1.86-1.63a16.38,16.38,0,0,1,2.34,2V27.21c0,.39-.51.58-.51.58v.35l3.69,3.07H39l4.13-4.08Z" fill="#06213d">
          </path>
          <path d="M56.36,17.64v-.31l-4.62-6.69h-.47l-7.78,5.6v.35s.82.31.82.59v8.94c0,.23-.75.43-.75.43v.35l5.53,4.31h.31l6.07-5.37-.55-.61L51.65,28c-.85-.55-3-2.42-3-2.42V22.46l7.74-4.82Zm-4,1.48-3.78,2.45v-7.2L49,14.1Z" fill="#06213d">
          </path>
          <path d="M94.08,11.34c0-4.58-5.79-8.44-6.33-10.69h-.48s-4.16,2.88-6.6,4.66c-1.52,1.13-2.22,1.83-2.22,4.24v24l-.24.11a9.57,9.57,0,0,0-2.06-2.29V6.17c0-2.38-.47-2.61-2-3.74-.38-.31-1.48-1-1.48-1h-.27A4.46,4.46,0,0,1,70,2.12,3.57,3.57,0,0,1,66.39.3l-.54.31c.93,2.64,2.6,4.9,5.76,4.9v4.86h-1c-2.1,0-3.85,2.52-3.85,4.59l.59,0A2.43,2.43,0,0,1,70,13.33a4.05,4.05,0,0,1,1.6.19v3.26h-.86c-2.1,0-3.85,2.53-3.85,4.6l.58,0a2.45,2.45,0,0,1,2.64-1.67,4.56,4.56,0,0,1,1.49.16V30.13c-3.62.26-5.45,4-5.45,6.06l.58.08a3.69,3.69,0,0,1,4-2.91c2.73,0,4.31,2.13,4.94,2.91H76s4.32-3.11,8.09-5.25v-.39s-1.06-.24-1.06-.5V7.18c0-2.64.7-2.8,1.25-3.23a12.3,12.3,0,0,0,1.6,3V20.09c-1,.23-2.1.78-2.1,2.18,0,1.17.89,2,2.21,2.6l.55-.19a3,3,0,0,1-.08-.55,4.45,4.45,0,0,1,1.75-4.07c2.88-2.31,5.83-4.68,5.83-8.72Zm-3.81,3.42A5.37,5.37,0,0,1,87,19.82c-.07,0-.11,0-.19.08V8l.08-.07C88.52,10.14,90.27,12.16,90.27,14.76Z" fill="#06213d">
          </path>
          <path d="M112.17,27.13l-.47-.47c-.35.35-.89.94-1.28.94-.71,0-1.48-.94-1.48-.94V15.11l1.83-1.86-.51-.47-1.44,1.44-3.88-3.39h-.24l-4.24,4,0,0V4.34a3.43,3.43,0,0,0,2.72,1C105,5.31,107,3,108.32.8l-.63-.31c-1.2,1.75-2,1.75-3.3,1.75A4.67,4.67,0,0,1,101.71,1h-.28a53.88,53.88,0,0,1-6.18,4.2v.43s.85.11.85.58v21c0,.27-.73.58-.73.58v.35l3.92,3.11h.24l3.07-3.11-.08-.43a2.48,2.48,0,0,1-2.1-1.17V16l1.87-1.63a16.05,16.05,0,0,1,2.33,2V27.21c0,.39-.5.58-.5.58v.35l3.69,3.07H108l4.13-4.08Z" fill="#06213d">
          </path>
          <path d="M119.16,5.7V5.35a23.61,23.61,0,0,1-2.91-2.88h-.35a13.32,13.32,0,0,1-2.8,2.92v.35A26.8,26.8,0,0,1,116,8.54h.35A17.33,17.33,0,0,1,119.16,5.7Zm2.38,21.55-.39-.51c-.35.31-.86.82-1.17.82-.73,0-1.55-.9-1.55-.9V14.76L120.26,13l-.51-.55-1.44,1.43-3.42-3.06h-.23l-3.58,3.65.46.51.63-.59A14.82,14.82,0,0,1,114.11,16V27.17c0,.39-.7.58-.7.58v.35l4,3.11h.24l3.85-4Z" fill="#06213d">
          </path>
          <path d="M130.64,27.32l-.47-.5a2,2,0,0,1-1,.62c-.54,0-1.48-.81-1.48-.81V3.17c0-1,1.41-2,1.41-2l-.43-.54s-4.17,3-6.89,4.66l.28.63,1.28-.66,0,.07V27.17c0,.39-.66.58-.66.58v.35l4,3.11h.24l3.73-3.89Z" fill="#06213d">
          </path>
          <path d="M146.7,27.36l-.39-.5c-.35.31-.77.7-1.12.7-.75,0-1.72-1.21-1.72-1.21V14.72l1.76-1.67-.51-.54-1.25,1.13-3.07-2.81h-.23a6.47,6.47,0,0,1-3.23,2.06,2.69,2.69,0,0,1-2.65-2.06H134l-2.61,3.74v.15a3,3,0,0,0,2.72,1.83c1.32,0,2.42-1.71,3.15-2.45l1.95,1.48v2.64c-4.28.32-8.09,2.72-8.09,7.12a5.92,5.92,0,0,0,4.35,5.87h.31l3.35-3h.08l3.34,3h.23l4-3.85Zm-7.54-.11a2.16,2.16,0,0,1-1.52.5c-1.25,0-2.26-1.71-2.26-4.24A4.13,4.13,0,0,1,139.16,19Z" fill="#06213d">
          </path>
          <path d="M162.26,13.05l-.51-.55-1.44,1.41c-2-2.18-9.6-10.35-11.51-13h-.16a2.75,2.75,0,0,0-.77,1.55,2.29,2.29,0,0,0,.54,1.64,10.16,10.16,0,0,0-3.34,1.17v.42a4,4,0,0,1,3.15,1.4c.89.93,2.8,3,4.51,4.94L147,15.35v.38s.75.28.75.55v9.65c0,.27-.75.46-.75.46v.35l5.76,4.47h.55l8-5.37v-.35s-.89-.22-.89-.5V14.88l1.83-1.83ZM156,28l-.38.24-3.58-3V14.1c0-.7.66-1.16,1.21-1.51,1.63,1.78,2.75,3.18,2.75,3.18V28Z" fill="#06213d">
          </path>
          <path d="M175.87,17.64v-.31l-4.63-6.69h-.47L163,16.24v.35s.83.31.83.59v8.94c0,.23-.75.43-.75.43v.35l5.52,4.31h.31L175,25.84l-.54-.61L171.16,28c-.85-.55-3-2.42-3-2.42V22.46l7.74-4.82Zm-4,1.48-3.77,2.45v-7.2l.35-.27Z" fill="#06213d">
          </path>
          <path d="M184.69,27.32l-.46-.5a2,2,0,0,1-1,.62c-.55,0-1.48-.81-1.48-.81V3.17c0-1,1.4-2,1.4-2l-.43-.54s-4.16,3-6.88,4.66l.27.63,1.29-.66,0,.07V27.17c0,.39-.65.58-.65.58v.35l4,3.11H181l3.73-3.89Z" fill="#06213d">
          </path>
          <path d="M201.54,13.4l-.51-.55-1.44,1.45-3.88-3.47h-.24l-3.81,3.58c-.55-1.47-3.7-3.61-3.7-3.61h-.23l-3.85,4.12.42.46c.36-.31.86-.93,1.25-.93.55,0,1.48.9,1.48.9V26.86a4.67,4.67,0,0,0-2.95,4.39l.46.08A2.39,2.39,0,0,1,187,29.69v6.77c0,.66-.86,1.36-.86,1.36l.28.51s2.8-2,6.38-4.35l-.28-.59-1.2.59,0,0V30.44l0-.05a10.33,10.33,0,0,1,1.75.82h.46l6.88-4.74v-.39s-.73-.24-.73-.5V15.19l1.83-1.79Zm-6.15,14.9-.35.19a8,8,0,0,0-3.69-1.94V15.73L193,14.37a16.89,16.89,0,0,1,2.37,2V28.3Z" fill="#06213d">
          </path>
          <path d="M219.07,27.13l-.47-.47c-.34.35-.89.94-1.27.94-.71,0-1.48-.94-1.48-.94V15.11l1.83-1.86-.51-.47-1.44,1.44-3.89-3.39h-.23l-4.24,4,0,0V4.34a3.43,3.43,0,0,0,2.72,1c1.83,0,3.89-2.29,5.17-4.51L214.6.49c-1.21,1.75-2,1.75-3.3,1.75A4.67,4.67,0,0,1,208.62,1h-.28a53.88,53.88,0,0,1-6.18,4.2v.43s.85.11.85.58v21c0,.27-.74.58-.74.58v.35l3.93,3.11h.24l3.06-3.11-.07-.43a2.48,2.48,0,0,1-2.1-1.17V16l1.86-1.63a15.78,15.78,0,0,1,2.34,2V27.21c0,.39-.51.58-.51.58v.35l3.69,3.07H215l4.12-4.08Z" fill="#06213d">
          </path>
          <path d="M226.07,5.7V5.35a24.07,24.07,0,0,1-2.92-2.88h-.34A13.58,13.58,0,0,1,220,5.39v.35a26.8,26.8,0,0,1,2.92,2.8h.35A17.33,17.33,0,0,1,226.07,5.7Zm2.38,21.55-.39-.51c-.35.31-.86.82-1.17.82-.73,0-1.55-.9-1.55-.9V14.76L227.17,13l-.51-.55-1.44,1.43L221.8,10.8h-.23L218,14.45l.46.51.63-.59A14.82,14.82,0,0,1,221,16V27.17c0,.39-.7.58-.7.58v.35l4,3.11h.24l3.85-4Z" fill="#06213d">
          </path>
          <path d="M244.59,27.36l-.39-.5c-.35.31-.78.7-1.13.7-.74,0-1.71-1.21-1.71-1.21V14.72l1.75-1.67-.51-.54-1.24,1.13-3.07-2.81h-.24a6.39,6.39,0,0,1-3.23,2.06,2.69,2.69,0,0,1-2.64-2.06h-.35l-2.6,3.74v.15A2.94,2.94,0,0,0,232,16.55c1.32,0,2.41-1.71,3.15-2.45L237,15.58v2.64c-4.27.32-8.09,2.72-8.09,7.12a5.92,5.92,0,0,0,4.36,5.87h.31l3.35-3H237l3.34,3h.24l4-3.85ZM237,27.25a2.13,2.13,0,0,1-1.52.5c-1.24,0-2.25-1.71-2.25-4.24A4.13,4.13,0,0,1,237,19Z" fill="#06213d">
          </path>
          <path d="M271.42,1.11l-.35-.5S267.26,3.25,264.53,5v.43s.9.2.9.51v24l-1,.66a2.84,2.84,0,0,1-1.4-2.25v-22c0-2.37-.51-2.65-2-3.78-.4-.31-1.48-1-1.48-1h-.27a4.43,4.43,0,0,1-2.37.81A3.39,3.39,0,0,1,253.45.3l-.54.31c.89,2.64,2.45,4.94,5.6,4.94V10h-.9c-2.09,0-3.88,2.53-3.88,4.59l.54,0A2.52,2.52,0,0,1,257,12.94a4.78,4.78,0,0,1,1.52.15v3.3h-.78c-2.1,0-3.89,2.53-3.89,4.59l.55.05a2.53,2.53,0,0,1,2.72-1.68,6.06,6.06,0,0,1,1.4.12v5.8c0,.26-.93.54-.93.54v.39a35.76,35.76,0,0,1,6,4.9l-1.41.81c-2-1.71-3.85-4-7.19-4-4.32,0-5.64,4.24-5.64,6.49l.58,0c.4-1.71,1.06-3,3.62-3s5,2.72,5.68,3.45h.47s7.58-5.28,11.35-7.42v-.43S270,26.82,270,26.5V2.9c0-.7,1.4-1.79,1.4-1.79Z" fill="#06213d">
          </path>
          <path d="M290.48,27.32l-.43-.46c-.35.31-.78.74-1.13.74-.7,0-1.47-.94-1.47-.94V15.11l1.82-1.78-.5-.55-1.45,1.44-3.89-3.39h-.22l-3.89,3.62c-.7-1.51-3.78-3.62-3.78-3.62h-.23l-3.42,3.74.39.5c.35-.31.62-.54.93-.54.55,0,1.4.85,1.4.85V27.09c0,.27-.78.58-.78.58V28L278,31.21h.23l3.07-3.34-.23-.43a1,1,0,0,1-.66.2c-.47,0-1.44-.9-1.44-.9V15.85l1.75-1.48a16.51,16.51,0,0,1,2.44,2V27.17c0,.39-.5.58-.5.58v.35l3.85,3.11h.24l3.77-3.89Z" fill="#06213d">
          </path>
          <path d="M306,13.09l-.59-.58L303.74,14l-4.28-3.16h-.39l-8.32,5.25v.35s.86.28.86.55v9.3c0,.27-.78.46-.78.46v.35l4.89,4.12H296l3.85-3.89h.08v9.14c0,.66-.85,1.36-.85,1.36l.3.51s2.88-2,6.46-4.35l-.35-.59-1.2.59-.05,0V14.61L306,13.09Zm-6.07,13.06-1.79,1.6a17,17,0,0,1-2.18-1.86V14.1l.31-.24c1,.59,3.66,2.73,3.66,2.73v9.56Z" fill="#06213d">
          </path>
          <path d="M324.9,27.13l-.44-.47c-.35.32-.93.94-1.23.94-.48,0-1.76-1.21-1.76-1.21V14.92l1.71-1.63-.54-.59-1.09,1-3.38-2.85h-.24l-3.3,3.47.31.46a1.22,1.22,0,0,1,.62-.31,8.29,8.29,0,0,1,1.6,1V26.28l-1.8,1.51a14.16,14.16,0,0,1-2.29-2v-11c0-.39.51-.62.51-.62v-.39l-3.5-3h-.24l-3.42,3.74.35.5c.35-.31.47-.5.78-.5s1.21.94,1.21.94V26.86L307,28.41l.55.59,1.32-1.21,3.85,3.42H313L317,27.44h.08v.7l3.58,3.07h.22l4-4.08Z" fill="#06213d">
          </path>
          <path d="M331.89,5.7V5.35A24.07,24.07,0,0,1,329,2.47h-.35a13.4,13.4,0,0,1-2.79,2.92v.35a26.8,26.8,0,0,1,2.92,2.8h.35A17.33,17.33,0,0,1,331.89,5.7Zm2.38,21.55-.39-.51c-.35.31-.86.82-1.17.82-.74,0-1.56-.9-1.56-.9V14.76L333,13l-.5-.55L331,13.86l-3.43-3.06h-.22l-3.58,3.65.46.51.62-.59A14.48,14.48,0,0,1,326.84,16V27.17c0,.39-.7.58-.7.58v.35l4,3.11h.24l3.85-4Z" fill="#06213d">
          </path>
          <path d="M349.36,11.34l-.47-.23a2.52,2.52,0,0,1-2.34,1.17,4,4,0,0,1-2.6-1.45h-.35l-2.57,3-3.34-3h-.27l-3.51,3.74.48.46c.34-.31.53-.54.85-.54a7.49,7.49,0,0,1,1.48,1V27.09c0,.27-.63.58-.63.58V28l4.17,3.19h.23l5.05-4.55-.5-.51a9.79,9.79,0,0,1-2.1,1.56A7.5,7.5,0,0,1,341,26.63v-12h.59a4.1,4.1,0,0,0,3,1.36c1.83,0,4-3.07,4.71-4.67Z" fill="#06213d">
          </path>
          <path d="M360,17.64v-.31l-4.62-6.69h-.47l-7.78,5.6v.35s.82.31.82.59v8.94c0,.23-.75.43-.75.43v.35l5.53,4.31h.31l6.07-5.37-.55-.61L355.3,28c-.85-.55-3-2.42-3-2.42V22.46L360,17.64Zm-4,1.48-3.78,2.45v-7.2l.35-.27Z" fill="#06213d">
          </path>
          <path d="M374.83,11.34l-.47-.23A2.51,2.51,0,0,1,372,12.28a4,4,0,0,1-2.61-1.45h-.35l-2.57,3-3.34-3h-.27l-3.5,3.74.47.46c.35-.31.54-.54.85-.54a7.49,7.49,0,0,1,1.48,1V27.09c0,.27-.62.58-.62.58V28l4.16,3.19H366L371,26.66l-.51-.51a9.55,9.55,0,0,1-2.1,1.56,7.5,7.5,0,0,1-1.91-1.08v-12h.59a4.1,4.1,0,0,0,3,1.36c1.83,0,4-3.07,4.71-4.67Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-3 border-box padding-horz-small padding-vert-xsmall">
         <!-- chicago tribune -->
         <svg viewBox="0 0 283 43" width="100%">
          <path d="M59.77,4.33a14.64,14.64,0,0,0-3.23,3.31,17.91,17.91,0,0,0-3.38-3.08A22.36,22.36,0,0,0,56.54,1.1,19.73,19.73,0,0,0,59.77,4.33Z" fill="#06213d">
          </path>
          <path d="M79.36,12.85c-.17,2.24-1.89,4.49-4.27,4.49a4.34,4.34,0,0,1-4.35-2.49l-.3.19V30.1c1.27.67,3.25,1.87,4.35,2.6l2.38-2.45.37.32-5.69,5.92a60,60,0,0,0-8.14-5v-.11c1-.63,1.38-1.6,1.38-4V17.16a31.08,31.08,0,0,0,9.18-5.62A3.31,3.31,0,0,0,77,13.14a4.22,4.22,0,0,0,2.27-.52l.14.23Z" fill="#06213d">
          </path>
          <path d="M63.19,31.58l-4.76,4.94A38.17,38.17,0,0,0,53.12,33v-.12c.7-.29,1.19-1.44,1.19-2.89V16.41L52.6,15.22l-1.38,1.41-.33-.33,4.64-4.86a38.88,38.88,0,0,0,5.25,3.45V15c-.77.46-1.12,1.94-1.12,3.64v13l1.78,1.12,1.38-1.46.37.34Z" fill="#06213d">
          </path>
          <path d="M52.26,31.65l-4.72,4.87a36.82,36.82,0,0,0-4.2-2.75V17.42a14,14,0,0,1-3-2.05l-1.67,1.75V31.54L41,32.87V33l-3.46,3.53A33.18,33.18,0,0,0,32.19,33V33c.63-.59,1.08-1.64,1.08-3.64V4.78a4.89,4.89,0,0,0-.71-3.05l.26-.11a3.81,3.81,0,0,1,1.53,2.56h.07A6.91,6.91,0,0,1,40,.5l.07.15a5.52,5.52,0,0,0-1.41,3.72v12l4.61-4.87a40.13,40.13,0,0,0,6.5,4.54v.11c-.63.67-1,2-1,4.21V31.65l1.75,1.12,1.41-1.45.33.33Z" fill="#06213d">
          </path>
          <path d="M23.72,35h-.41V7.42h.41Z" fill="#06213d">
          </path>
          <path d="M31.22,30.91c-2.4,2.8-6.95,7.4-14,7.4C7.69,38.31.67,31.81.67,20.73.67,10.55,9.06,4.91,14.5,2.81l.44.22c-5.12,3.4-7.88,7.52-7.88,14.68,0,6.33,2.27,10.83,5.69,13.46l1.15-.78V14.55c0-2.86-.52-4.86-1.38-5.56V8.75A49.16,49.16,0,0,0,24.09,1a4.37,4.37,0,0,0,3.53,1.56A5.47,5.47,0,0,0,31,1.44l.26.22c-.14,3.23-1.85,6.24-5.9,6.24a6.09,6.09,0,0,1-5.17-2.31l-.19,0V27.05a74.1,74.1,0,0,0-6.76,4.49c2.31,1.6,5.69,1.9,9.14,1.9A15.17,15.17,0,0,0,31,30.36l.18.55Z" fill="#06213d">
          </path>
          <path d="M129.65,33.06V17.68c-1.25-.78-3.28-2.36-4.08-3L125,15V30.39c.86.51,2.53,1.78,4.1,3l.58-.34Zm6.63-16.87c-.75.33-1.19,1.37-1.19,3.5V30.76a57.83,57.83,0,0,0-9.78,5.8,53.09,53.09,0,0,0-7-4.57v-.11c.74-.45,1.22-1.68,1.22-3.61V17.34a68.56,68.56,0,0,0,9.67-5.83,72.25,72.25,0,0,0,7,4.57v.11Z" fill="#06213d">
          </path>
          <path d="M109.17,31.88V17.53a36.81,36.81,0,0,1-4.12-2.9l-.56.33V30.28c.91.52,2.84,1.92,3.72,2.56l1-1Zm7.62,2.9c0,1.44-2.06,3-4.27,4.75-2.89,2.34-4.39,3.46-4.39,3.46a7.26,7.26,0,0,0-4.38-1,14.58,14.58,0,0,0-6.1,1l-.11,0a9.8,9.8,0,0,1,8.81-5.2,10.7,10.7,0,0,1,5.43,1.71c.37-.23,1.56-1.1,1.56-1.75,0-1.9-3.51-1.72-4.09-5.2l-4,4.05A60.43,60.43,0,0,0,98,31.88v-.15c.82-.53,1.16-1.23,1.16-3.05V17.34a76.69,76.69,0,0,0,9.74-5.83,55,55,0,0,0,6.91,4.57v.11c-.85.52-1.15,1.34-1.15,4.31v9c0,3,2.15,2.78,2.15,5.28" fill="#06213d">
          </path>
          <path d="M88.06,32.55V22.62a5.37,5.37,0,0,0-5,5.54A5.57,5.57,0,0,0,87,33.32Zm0-10.41V17.71a46.33,46.33,0,0,1-4.61-3.16l-.59.38c.18,2.62.55,6.05,2.3,7.81A19.3,19.3,0,0,1,88.06,22.14Zm9.33,9.55-4.76,4.8a30.65,30.65,0,0,0-4.72-3.2h0c-1.62,1.15-2.93,2.12-4.5,3.23a7.09,7.09,0,0,1-5.09-6.42c0-4,3.21-6,6.16-7.11v0a9.41,9.41,0,0,1-5.2-6.39l8.18-5a59.39,59.39,0,0,0,7.32,4.9v.11c-1,.68-1.26,1.5-1.26,3.61V31.35l2.15,1.38L97,31.32Z" fill="#06213d">
          </path>
          <path d="M265.86,31.73l-4.76,4.83a38.09,38.09,0,0,0-4.2-2.79V17.31a24.3,24.3,0,0,1-2.52-1.87l-2.24,2.27V31.58a14.65,14.65,0,0,1,2.31,1.34V33L251,36.56a36.11,36.11,0,0,0-5.4-3.5V33c.78-.44,1.16-1.37,1.16-3.49V17.38l-2.56-2-1.38,1.42-.34-.34,4.76-4.87a31.1,31.1,0,0,0,4.9,3.87v1.45l5.06-5.32a68.87,68.87,0,0,0,6.21,4.17v.11c-.89.48-1.15,1.67-1.15,3.79v12l1.85,1.23,1.41-1.42.34.34Z" fill="#06213d">
          </path>
          <path d="M244.63,31.62l-4.72,4.9a39,39,0,0,0-4.64-3.16V31.65l-5.39,4.91a29.49,29.49,0,0,0-5.91-3.9v-.11c1-.54,1.23-1.53,1.23-3.87V16.49l-1.71-1.2L222,16.78l-.38-.33,4.72-4.91a22.77,22.77,0,0,0,4.17,2.79v16.8a25.79,25.79,0,0,1,2.52,1.74l2.16-2V16.45a15.43,15.43,0,0,0-2.23-1.3V15a31,31,0,0,0,3.46-3.5A45.06,45.06,0,0,0,241.78,15V15c-.83.38-1.16,1.26-1.16,3.19V31.35L243,32.7l1.34-1.38.29.3Z" fill="#06213d">
          </path>
          <path d="M199.06,4.37a17.06,17.06,0,0,0-3.23,3.31,22.5,22.5,0,0,0-3.31-3.16A21.87,21.87,0,0,0,195.83,1,31.38,31.38,0,0,0,199.06,4.37Z" fill="#06213d">
          </path>
          <path d="M202.56,31.62l-4.76,4.94A39,39,0,0,0,192.44,33v-.11c.82-.53,1.16-1.57,1.16-3.13V16.49l-1.75-1.23-1.34,1.37-.33-.33,4.64-4.83a26.68,26.68,0,0,0,5.25,3.46V15c-.77.46-1.12,1.19-1.12,3.16V31.62l1.86,1.11,1.41-1.45.34.34Z" fill="#06213d">
          </path>
          <path d="M190.51,13c-.17,1.93-1.89,4.43-4,4.43a4.24,4.24,0,0,1-3.6-1.87l-.56.56V30.61a39.57,39.57,0,0,1,3.75,2.12l1.38-1.41.37.33L183,36.56a54.21,54.21,0,0,0-7.1-4.53v0c.79-.29,1.12-.94,1.12-2.22V17.34l-2.39-2.08-1.33,1.45-.34-.34,4.57-4.83a34.57,34.57,0,0,0,4.73,4l3.79-4a3.5,3.5,0,0,0,2.82,1.63,3.74,3.74,0,0,0,1.49-.33l.18.15Z" fill="#06213d">
          </path>
          <path d="M176,1.39c-.53,4.12-2.23,7.78-6.59,7.78-.51,0-1.48-.08-1.81-.11V33.44a18,18,0,0,0,7.13-2.68l.19.48a18.63,18.63,0,0,1-14.28,7.22c-8.59,0-15.24-5.66-15.24-14.8,0-7.87,6.5-13.55,10.74-15l.38.14c-3,2.7-5.06,6.38-5.06,12.16a12.44,12.44,0,0,0,5,10.41l1.34-.85v-12c0-2.52-.21-4.37-1.67-4.91V13.4a65.09,65.09,0,0,0,7.73-3.94V27.08a70.36,70.36,0,0,0-7,4.61,13.84,13.84,0,0,0,7.69,2,14.36,14.36,0,0,0,2.61-.22V9c-5.35-.44-11.06-2.66-15.43-2.66-3.07,0-5.39,1.25-5.39,3.59a2.59,2.59,0,0,0,1.82,2.35l-.59.33a5.1,5.1,0,0,1-2.94-5c0-4.37,3.52-7.24,8.25-7.24,6.55,0,12.7,3.45,18.48,3.45a4.67,4.67,0,0,0,4.27-2.67Z" fill="#06213d">
          </path>
          <path d="M277.49,21.21c-.76-1.09-3.17-4.67-4.23-6.36l-.37.3v9.14Zm5-2.57c-3.1,1.9-6.78,4.34-9.59,6.36v5.25a38.86,38.86,0,0,1,4.35,2.52l2.52-2.6.34.3-5.91,6.09a85.61,85.61,0,0,0-8-5v-.11c.82-.23,1.27-1.41,1.27-4V17.34a43,43,0,0,0,9.33-5.83l5.65,7.13Z" fill="#06213d">
          </path>
          <path d="M214.64,33V17.46l-2.94-2L210,17.12V30.36l4,3,.71-.37Zm6.58-16.8c-.91.37-1.15,1.52-1.15,4.17V30.84c-2.31.81-7.41,3.45-9.78,5.72-1.79-1.25-4.65-3.21-7-4.57v-.11c1.08-.6,1.23-1.6,1.23-4.62V5a6.09,6.09,0,0,0-.67-3.19l.23-.11a4.3,4.3,0,0,1,1.52,2.52h.08A6.86,6.86,0,0,1,211.29.54l0,.22A5.22,5.22,0,0,0,210,4.56V16.41l4.58-4.87a63.15,63.15,0,0,0,6.69,4.58v.11Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- npr -->
         <svg viewBox="0 0 165 55" width="100%">
          <title>
           नेशनल पब्लिक रेडियो
          </title>
          <path d="M33.63,42.15V25.8c0-2.41-.45-4.16-1.39-5.3s-2.44-1.66-4.55-1.66a7.29,7.29,0,0,0-3.11.81A7,7,0,0,0,22,21.7V42.18H15.4V13.73h4.77L21.4,16.4c1.78-2.08,4.45-3.12,8-3.12a10.57,10.57,0,0,1,8,3c2,2,2.92,4.85,2.92,8.46V42.18Z" fill="#06213d">
          </path>
          <path d="M82.56,42.7c4.31,0,7.75-1.26,10.25-3.77s3.76-6.08,3.76-10.73q0-15-13.56-14.95a8.36,8.36,0,0,0-6.1,2.37V13.73H70.29v36h6.59V41.47A12.76,12.76,0,0,0,82.56,42.7ZM81.1,18.9c3.05,0,5.22.69,6.55,2.05s2,3.74,2,7.09c0,3.15-.68,5.43-2,6.89s-3.5,2.18-6.55,2.18a6.37,6.37,0,0,1-4.19-1.46V20.76A5.87,5.87,0,0,1,81.1,18.9Z" fill="#06213d">
          </path>
          <path d="M145.76,19.94a6.92,6.92,0,0,0-3.86-1.1,5.17,5.17,0,0,0-4.06,2.08,7.52,7.52,0,0,0-1.78,5.1V42.15h-6.62V13.73h6.62v2.74a9.26,9.26,0,0,1,7.36-3.19,10.59,10.59,0,0,1,5.16,1Z" fill="#06213d">
          </path>
          <path d="M110.38,2.15H56.78V52.88h53.6Zm1.64,0V52.88h51.14V2.15ZM2.37,2.15H55.15V52.88H2.37ZM.73,54.52H164.79V.51H.73Z" fill="#06213d" fill-rule="evenodd">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- cnbc 0 0 168 131 -->
         <svg viewBox="-25 -15 208 161" width="100%">
          <title>
           सीएनबीसी
          </title>
          <path d="M22.27,26.41c-6.69,6.05-9.12,19.76,2.93,27.77l48.06,33L50,33.76C45.07,21.16,31.71,18.42,22.27,26.41Z" fill="#06213d">
          </path>
          <path d="M63.64.45C55.83.61,44.1,9.91,49.32,24.12L73.42,81l8.47-59.79C83.85,6.32,72.61-.54,63.64.45Z" fill="#06213d">
          </path>
          <path d="M85.65,18.89h4.56s2.43,0,2.76,1.15c-1.79,1.46-6.67,1.65-6,9.47L94.61,81l23.94-57C123.44,11.23,113.17.61,104.05.28c-.43,0-.85-.05-1.3-.05C94.57.23,85.19,6.17,85.65,18.89Z" fill="#06213d">
          </path>
          <path d="M117.58,34.25,94.94,87,143,53.85c11.08-7.86,9.29-20.42,3.09-26.63A17.22,17.22,0,0,0,133.65,22C127.68,22,121.29,25.21,117.58,34.25Z" fill="#06213d">
          </path>
          <path d="M137.61,61.35,92.49,92.87h55.56c11.4,0,18.72-11.75,15.47-22.53-2.18-6.78-8.64-12.11-16.13-12.11A17.67,17.67,0,0,0,137.61,61.35Z" fill="#06213d">
          </path>
          <path d="M21,92.87H75.71L30.58,61.35c-10.43-6.7-22.16-2.78-26.39,8.34C.6,82.42,9.56,92.87,21,92.87Z" fill="#06213d">
          </path>
          <path d="M.41,115.68c0,5.37,4.39,15.14,21.15,15.14,15.45,0,20.33-7.08,20.33-10.33h-12s-.56,4.29-7.31,4.29S14,119.14,14,115.89s1.83-8.58,8.58-8.58,7.31,3.74,7.31,3.74h12c0-3.26-3.58-10.24-20.33-10.24S.41,111.21.41,115.68Z" fill="#06213d">
          </path>
          <path d="M125.84,115.68c0,5.37,4.4,15.14,21.15,15.14,15.44,0,20.33-7.08,20.33-10.33H155.37s-.58,4.29-7.32,4.29-8.58-5.64-8.58-8.89,1.82-8.58,8.58-8.58,7.32,3.74,7.32,3.74h11.95c0-3.26-3.58-10.24-20.33-10.24S125.84,111.21,125.84,115.68Z" fill="#06213d">
          </path>
          <path d="M74.57,101.31v18.17L60.65,101.31H45v28.78H55.73V111.71l13.68,18.38h15.9V101.31Z" fill="#06213d">
          </path>
          <path d="M109,123.21v0H100V118H109c1.91,0,3.45,1.18,3.45,2.62S110.88,123.21,109,123.21Zm-8.86-16.31h8.62v0a2.19,2.19,0,1,1,0,4.28h-8.62Zm17.64,7.89a6.83,6.83,0,0,0,6-6.67c0-6.25-11.65-6.81-13.44-6.81H88.88v28.78h21.47c10.33,0,14.48-3.26,14.48-8.71S117.75,114.79,117.75,114.79Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- gma -->
         <svg viewBox="0 0 187 80" width="100%">
          <path d="M96.51,32.12c.24-.67.48-1.3.67-2,2.77-8.9,5.58-17.76,8.27-26.66C106,1.7,106.8,1,108.73,1c4,.16,8,.08,12,0,1.54,0,2.21.4,2.21,2.1,0,15.66,0,31.37,0,47,0,1.58-.55,2.06-2,2-2.49-.08-5-.12-7.48,0-1.58.08-2-.52-2-2.06q.06-14.48,0-28.92V18.91l-.51-.12c-.2.56-.48,1.07-.63,1.62C107.19,30.3,104.07,40.15,101,50a2.56,2.56,0,0,1-2.89,2.18c-6.17-.08-6.17,0-8-5.9C87.45,37.9,84.84,29.43,82.19,21c-.24-.75-.59-1.51-.87-2.26l-.59.12v2.22c0,9.57,0,19.14,0,28.71,0,1.94-.63,2.5-2.49,2.38-2.42-.16-4.87-.08-7.28,0-1.23,0-1.78-.36-1.78-1.66q.06-23.81,0-47.63c0-1.38.55-1.86,1.86-1.82,4.27,0,8.54.08,12.81,0a2.42,2.42,0,0,1,2.81,2C89.39,12.07,92.2,21,95,30c.24.79.59,1.5.91,2.29A1.29,1.29,0,0,1,96.51,32.12Z" fill="#06213d">
          </path>
          <path d="M62.69,19.11c-4.75,0-9.06.08-13.37-.08-.83,0-1.62-1-2.37-1.58-8.47-6.61-20.1-2.57-22.43,7.79a15,15,0,0,0,12.54,18c5.1.67,11.27-2.81,12.85-7.56a17.64,17.64,0,0,0-2.45-.27c-2.25,0-4.47,0-6.72,0-1.15,0-1.66-.48-1.66-1.67q.06-3.14,0-6.29c0-1.1.47-1.54,1.54-1.54H62.73c1.11,0,1.42.56,1.54,1.58C65.58,40.43,55.73,53,42.83,54.91,26.93,57.28,14,47.47,11.94,31.61A26.1,26.1,0,0,1,35.24,2.3,26,26,0,0,1,61.82,17.09,15.54,15.54,0,0,1,62.69,19.11Z" fill="#06213d">
          </path>
          <path d="M.67,70.65A99.66,99.66,0,0,1,24.6,63.93c12.26-1.78,24.56-3.64,36.9-4.71a389.41,389.41,0,0,1,52.26-.63c9.89.51,19.82,1.1,29.67,2.09,13.33,1.39,26.62,3.09,39.39,7.44.91.31,1.82.67,3.21,1.19A77.86,77.86,0,0,0,161.46,79a2.5,2.5,0,0,1-2,.08c-11.83-4.55-24.17-7.12-36.67-8.94a398.77,398.77,0,0,0-46.68-4,375.34,375.34,0,0,0-41.77.87c-10.8.91-21.52,2.29-32.28,3.48A6,6,0,0,1,.67,70.65Z" fill="#06213d">
          </path>
          <path d="M175,53.25c-4.23,0-8.07,0-11.87,0-.51,0-1.22-.72-1.46-1.27a37.71,37.71,0,0,1-1.58-4.67A1.86,1.86,0,0,0,158,45.73c-4.67,0-9.33.08-14,0a2,2,0,0,0-2.3,1.58,33,33,0,0,1-1.5,4.47c-.24.56-.91,1.35-1.38,1.35-3.8.12-7.6.08-11.75.08.32-1,.47-1.74.75-2.46,5.9-15.7,11.83-31.44,17.68-47.15.44-1.15,1-1.7,2.26-1.62a52.23,52.23,0,0,0,6.13,0,2.29,2.29,0,0,1,2.61,1.78Q163.77,23.4,171.15,43C172.42,46.32,173.65,49.61,175,53.25ZM156.32,35.41c-1.74-5.74-3.4-11.16-5.06-16.58-.28,0-.52,0-.79,0-1.62,5.46-3.25,10.88-4.95,16.54Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- yahoo finance -->
         <svg viewBox="0 0 302 111" width="100%">
          <path d="M0,20.3H17.9L28.3,47,38.9,20.3H56.4L30.1,83.6H12.5l7.2-16.8Z" fill="#06213d">
          </path>
          <path d="M74.7,19.3c-13.5,0-22,12.1-22,24.1C52.7,57,62,67.7,74.5,67.7c9.3,0,12.7-5.6,12.7-5.6v4.4h15.7V20.4H87.2v4.2C87.2,24.5,83.3,19.3,74.7,19.3ZM78,34.1a9.18,9.18,0,0,1,9.4,9.4A9.21,9.21,0,0,1,78,53a9.52,9.52,0,0,1-9.5-9.3C68.6,38.4,72.2,34.1,78,34.1Z" fill="#06213d">
          </path>
          <path d="M108.2,66.5V0h16.4V24.7a15.17,15.17,0,0,1,12-5.4c10,0,15.8,7.4,15.8,18V66.4H136.1V41.3c0-3.6-1.7-7.1-5.6-7.1s-6,3.5-6,7.1V66.5Z" fill="#06213d">
          </path>
          <path d="M180.3,19.3c-15.4,0-24.6,11.7-24.6,24.3,0,14.3,11.1,24.1,24.7,24.1,13.1,0,24.6-9.3,24.6-23.9C205,28,193,19.3,180.3,19.3Zm.2,14.9a9.21,9.21,0,0,1,9.2,9.4c0,4.1-3.5,9.2-9.2,9.2a9.2,9.2,0,0,1-9.2-9.3C171.3,38.7,174.6,34.2,180.5,34.2Z" fill="#06213d">
          </path>
          <path d="M232.3,19.3c-15.4,0-24.6,11.7-24.6,24.3,0,14.3,11.1,24.1,24.7,24.1,13.1,0,24.6-9.3,24.6-23.8C257,28,245,19.3,232.3,19.3Zm.2,14.9a9.21,9.21,0,0,1,9.2,9.4c0,4.1-3.5,9.2-9.2,9.2a9.2,9.2,0,0,1-9.2-9.3C223.3,38.7,226.6,34.2,232.5,34.2Z" fill="#06213d">
          </path>
          <path d="M269.9,67.5A10.9,10.9,0,1,0,259,56.6,10.9,10.9,0,0,0,269.9,67.5Z" fill="#06213d">
          </path>
          <path d="M284.4,41.7H264.8L282.2,0h19.5Z" fill="#06213d">
          </path>
          <path d="M200.45,83.79v25.7h-9.3c0-.8-.11-1.5-.11-2.5a10.23,10.23,0,0,1-8.8,3.1,10.53,10.53,0,0,1-8.79-5.9c-3-5.6-2.8-11.3.9-16.6,4.3-6.1,12.6-5.7,16.3-1.9.09.1.2.1.39.3v-2.3C194.15,83.79,197.24,83.79,200.45,83.79Zm-14.3,17.9a5.19,5.19,0,0,0,5.2-5,5.16,5.16,0,0,0-10.31,0A5.11,5.11,0,0,0,186.15,101.69Z" fill="#06213d">
          </path>
          <path d="M214.54,109.49H205V83.79h9.41v2.4c.2-.1.4-.1.4-.2,2.6-3.2,6-3.6,9.69-2.6a7.52,7.52,0,0,1,5.81,7.1c.3,6.3.1,12.5.1,18.9h-9.3V96.49a9.74,9.74,0,0,0-.2-2.4,2.89,2.89,0,0,0-2.8-2.4,2.94,2.94,0,0,0-3.2,2.1,7.28,7.28,0,0,0-.41,2.5v13.2Z" fill="#06213d">
          </path>
          <path d="M144,83.79h9.4v2.7a25.39,25.39,0,0,1,1.8-1.8A8.9,8.9,0,0,1,169,89.59a15,15,0,0,1,.41,3.7v15.4a2.49,2.49,0,0,1-.1.8h-9.5V96.39a10.69,10.69,0,0,0-.31-2.5,2.59,2.59,0,0,0-2.69-2,2.86,2.86,0,0,0-3.11,1.9,7.69,7.69,0,0,0-.39,2.6v13.2h-9.5C144,101,144,92.49,144,83.79Z" fill="#06213d">
          </path>
          <path d="M282,99.09H264a14.23,14.23,0,0,0,1.29,2.2,5.08,5.08,0,0,0,7.21-.2,1.09,1.09,0,0,1,1-.5c2.6.8,5.1,1.7,7.69,2.7a10.24,10.24,0,0,1-5.69,5.7c-5.71,2.2-11.31,2.1-16.21-1.9-4.2-3.4-5.59-9.7-3.7-15a13.25,13.25,0,0,1,12-8.9c4.9-.2,9.09,1.2,12,5.3C281.74,91.59,282.24,95.19,282,99.09Zm-17.6-5.6h8.2c0-1.9-2.41-3.2-4.31-3.1C266.14,90.49,264.55,91.69,264.35,93.49Z" fill="#06213d">
          </path>
          <path d="M112.25,91.39h-3.4v-7.6H112c.21-1.5.31-2.9.6-4.2a9.41,9.41,0,0,1,7.4-7.3,14.67,14.67,0,0,1,7.21,0,1.25,1.25,0,0,1,1.1,1.4c-.11,2.3,0,4.5,0,6.8-4.81-1-6.6-.1-6.6,3.3h6.1v7.6h-6.21v18.1h-9.5C112.25,103.59,112.25,97.59,112.25,91.39Z" fill="#06213d">
          </path>
          <path d="M252.74,100.09v8.1a1.31,1.31,0,0,1-.89,1c-8.11,3.2-18.4-.9-19.11-11.5-.7-10.9,9.21-17,18.8-13.9a1.58,1.58,0,0,1,1.31,1.8c-.11,2.4,0,4.8,0,7.2a23.92,23.92,0,0,0-3.5-1.1c-3.81-.8-7,1.7-6.9,5.2a5,5,0,0,0,4.59,4.7A7.85,7.85,0,0,0,252.74,100.09Z" fill="#06213d">
          </path>
          <path d="M140.15,109.49h-9.41V83.79h9.41Z" fill="#06213d">
          </path>
          <path d="M130.15,76.59a5.3,5.3,0,0,1,10.59.1,5.12,5.12,0,0,1-5.29,5.2A5.27,5.27,0,0,1,130.15,76.59Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- lifehacker -->
         <svg viewBox="0 0 247 62" width="100%">
          <path d="M10.08,60.81H.67V1l9.41.61Z" fill="#06213d">
          </path>
          <path d="M25.5,60.81H16.08V18.13l9.42.53ZM20.79,5.14a5.4,5.4,0,1,1-5.39,5.39,5.41,5.41,0,0,1,5.39-5.39" fill="#06213d">
          </path>
          <path d="M48,26.71v9.42H40.92V60.77H31.5V14C31.5,6.81,37.43.36,44.41.36a10.55,10.55,0,0,1,4.71,1l-.38,9H44.41A3.55,3.55,0,0,0,40.92,14V26.71Z" fill="#06213d">
          </path>
          <path d="M61.21,34.91h7.06v-4.4a3.53,3.53,0,1,0-7.06,0Zm-9.42-4.4a13,13,0,1,1,25.9,0v9.11A4.68,4.68,0,0,1,73,44.33H61.21v4.1A3.57,3.57,0,0,0,64.78,52h9l.3,8-8.5,1.29c-8.21,1.37-13.83-5.7-13.83-12.84Z" fill="#06213d">
          </path>
          <path d="M85.75,60.81V1.34h6.07V19.42A23.61,23.61,0,0,1,98,18.66c6.46,0,11.47,5.85,11.47,12.46V60.81h-5.92V31.12a5.87,5.87,0,0,0-5.93-5.85H91.82V60.81Z" fill="#06213d">
          </path>
          <path d="M131.67,49.34V39.09h-5.85A5.81,5.81,0,0,0,120,44.94v4.4a5.85,5.85,0,1,0,11.7,0Zm0-19.21c0-3.42-1.59-6.15-5.92-5.7h.07c-2.43.08-5.54.38-8.12.53-.08-2.2-.16-3-.23-4.7a26,26,0,0,1,7.52-1.6A12.35,12.35,0,0,1,137.6,31.27V49.34a11.87,11.87,0,0,1-11.78,11.93A12,12,0,0,1,113.9,49.34V45.62c0-6.53,4.48-11.47,11.92-11.47a18.93,18.93,0,0,1,5.85.76Z" fill="#06213d">
          </path>
          <path d="M154.61,18.66a12,12,0,0,1,11.93,11.92v.76c-2.36.08-4.26.08-6,.16v-.92a5.91,5.91,0,0,0-5.93-5.84,5.83,5.83,0,0,0-5.77,5.84v19a5.74,5.74,0,0,0,5.77,5.85,5.83,5.83,0,0,0,5.93-5.62c3,.23,5.77.38,6,.38a11.9,11.9,0,0,1-23.78-.61v-19a11.88,11.88,0,0,1,11.85-11.92" fill="#06213d">
          </path>
          <path d="M190.48,60.81,178.93,40.69c-1.14-2-1.14-2.21.23-4.56l10.18-16.86h6.91L184.78,38.71l12.38,22.1ZM177.41,1.5V60.81h-6.07V1.5Z" fill="#06213d">
          </path>
          <path d="M204.51,37h11.7V30.66a5.85,5.85,0,1,0-11.7,0Zm-6.07-6.38a11.89,11.89,0,1,1,23.77,0V40a3,3,0,0,1-3,3H204.51V49.5a5.87,5.87,0,0,0,5.85,5.92H218c.08,2,.15,3.34.31,4.71l-7.29,1.14c-7.45,1.29-12.61-5.17-12.61-11.77V30.66" fill="#06213d">
          </path>
          <path d="M233.62,60.81h-6.08V31.19A12.47,12.47,0,0,1,240.3,18.58a13.41,13.41,0,0,1,5.92,1.52c-.07,1.83-.15,3.34-.22,4.71l-6.61-.15c-3.19,0-5.77,3.42-5.77,6.53V60.81" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-4 border-box padding-horz-small padding-vert-xsmall">
         <!-- the times of india -->
         <svg viewBox="0 0 372 26" width="100%">
          <path d="M14.39,22.85c0,2.4,3.54,1.25,3.54,2.15,0,.43-.36.5-.93.5-1.68,0-2.61-.07-4.76-.07s-3.08.07-4.76.07c-.57,0-.93-.07-.93-.5,0-.9,3.54.25,3.54-2.15L10.06,2C6.44,2,3.33,5.21,1.93,8.11c-.39.82-.57,1.29-.78,1.29S.83,9.25.83,9.11a14.05,14.05,0,0,1,.35-2L2.33,1.28c0-.22.07-.68.39-.68s.29.14.47.28a2.14,2.14,0,0,0,1.29.29H20A2.18,2.18,0,0,0,21.26.88c.17-.14.25-.28.46-.28s.36.46.39.68l1.15,5.86a14.28,14.28,0,0,1,.36,2,.28.28,0,0,1-.32.29c-.22,0-.4-.47-.79-1.29C21.11,5.21,18,2,14.39,2V22.85Z" fill="#06213d">
          </path>
          <path d="M32.88,13.05v9.8c0,2.4,3,1.25,3,2.15,0,.43-.22.5-.79.5-1.25,0-2.18-.07-4.33-.07s-3.07.07-4.33.07c-.57,0-.78-.07-.78-.5,0-.9,3,.25,3-2.15V3.74c0-2.39-3-1.25-3-2.14,0-.43.21-.5.78-.5,1.26,0,2.19.07,4.33.07s3.08-.07,4.33-.07c.57,0,.79.07.79.5,0,.89-3-.25-3,2.14v8.45H43.22V3.74c0-2.39-3-1.25-3-2.14,0-.43.21-.5.79-.5,1.25,0,2.18.07,4.33.07s3.07-.07,4.32-.07c.58,0,.79.07.79.5,0,.89-3-.25-3,2.14V22.85c0,2.4,3,1.25,3,2.15,0,.43-.21.5-.79.5-1.25,0-2.18-.07-4.32-.07s-3.08.07-4.33.07c-.58,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15v-9.8Z" fill="#06213d">
          </path>
          <path d="M55.84,3.74c0-2.39-3-1.25-3-2.14,0-.43.22-.5.79-.5,1.25,0,2.18.07,4.33.07,7.91,0,10.56-.07,13.13-.07l1.72,6.69a6.29,6.29,0,0,1,.21.93c0,.25-.07.36-.28.36-.43,0-.32-.9-2.08-3.4C68.51,2.56,65.47,2,61.21,2H60.14V12.48h.78c3.08,0,5.41-1.22,5.41-4.84,0-.53.18-.67.43-.67s.43.14.43.67v10.7c0,.54-.15.65-.43.65s-.43-.11-.43-.65c0-3.75-2.33-5-5.41-5h-.78v9.31c0,1.36.86,2,3,2,6.62,0,9.45-4.37,10.48-7.91.18-.54.29-.71.54-.71s.32.17.32.35a4.8,4.8,0,0,1-.1,1L72.87,25.5c-3,0-6-.07-14.88-.07-2.15,0-3.08.07-4.33.07-.57,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15V3.74Z" fill="#06213d">
          </path>
          <path d="M100.17,22.85c0,2.4,3.54,1.25,3.54,2.15,0,.43-.36.5-.93.5-1.68,0-2.61-.07-4.76-.07s-3.07.07-4.76.07c-.57,0-.93-.07-.93-.5,0-.9,3.54.25,3.54-2.15L95.84,2c-3.61,0-6.73,3.18-8.12,6.08-.4.82-.58,1.29-.79,1.29s-.32-.15-.32-.29a12.91,12.91,0,0,1,.36-2l1.14-5.86c0-.22.07-.68.39-.68s.29.14.47.28a2.16,2.16,0,0,0,1.29.29h15.49A2.18,2.18,0,0,0,107,.88c.18-.14.25-.28.46-.28s.36.46.4.68L109,7.14a14.28,14.28,0,0,1,.36,2c0,.14-.07.29-.32.29s-.4-.47-.79-1.29c-1.4-2.9-4.51-6.08-8.12-6.08V22.85Z" fill="#06213d">
          </path>
          <path d="M114.73,3.74c0-2.39-3-1.25-3-2.14,0-.43.21-.5.78-.5,1.26,0,2.19.07,4.33.07S120,1.1,121.2,1.1c.57,0,.79.07.79.5,0,.89-3-.25-3,2.14V22.85c0,2.4,3,1.25,3,2.15,0,.43-.22.5-.79.5-1.25,0-2.18-.07-4.33-.07s-3.07.07-4.33.07c-.57,0-.78-.07-.78-.5,0-.9,3,.25,3-2.15Z" fill="#06213d">
          </path>
          <path d="M139.16,19.45l7.69-18.28h1.65c2.15,0,3.08-.07,4.33-.07.57,0,.79.07.79.5,0,.89-3-.25-3,2.14V22.85c0,2.4,3,1.25,3,2.15,0,.43-.22.5-.79.5-1.25,0-2.18-.07-4.33-.07s-3.08.07-4.33.07c-.57,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15V4.24h-.07L138,24.67c-.15.33-.29.76-.54.76s-.32-.36-.47-.76L128.79,4.53h-.08v15c0,3,1,4.51,2.4,4.94.93.29,1.36.14,1.36.64,0,.33-.21.4-.79.4-1,0-2-.07-3.39-.07-2.22,0-3.15.07-3.8.07-.5,0-.82,0-.82-.36,0-.57.39-.39,1.32-.68,2.54-.72,2.87-3.51,2.87-7.84V4.53c0-3.18-3.69-2-3.69-2.93,0-.43.22-.5.79-.5,1.25,0,2.18.07,4.33.07h2.29Z" fill="#06213d">
          </path>
          <path d="M158.83,3.74c0-2.39-3-1.25-3-2.14,0-.43.22-.5.79-.5,1.25,0,2.18.07,4.33.07,7.91,0,10.56-.07,13.13-.07l1.72,6.69a6.29,6.29,0,0,1,.21.93c0,.25-.07.36-.28.36-.43,0-.33-.9-2.08-3.4C171.5,2.56,168.46,2,164.2,2h-1.07V12.48h.78c3.08,0,5.41-1.22,5.41-4.84,0-.53.18-.67.43-.67s.43.14.43.67v10.7c0,.54-.15.65-.43.65s-.43-.11-.43-.65c0-3.75-2.33-5-5.41-5h-.78v9.31c0,1.36.86,2,3,2,6.62,0,9.45-4.37,10.48-7.91.18-.54.29-.71.54-.71s.32.17.32.35a4.8,4.8,0,0,1-.1,1l-1.51,8.09c-3,0-6-.07-14.88-.07-2.15,0-3.08.07-4.33.07-.57,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15V3.74Z" fill="#06213d">
          </path>
          <path d="M180.62,15.59c0-.33.18-.43.36-.43s.39.28.5,1.07c.61,4.4,2.5,8.91,7.23,8.91,3.58,0,5.18-2.15,5.18-4.58,0-7.23-13.27-4.29-13.27-13.09,0-3.73,3.43-6.87,7.51-6.87,3.19,0,4.41,1.43,5.8,1.43,1,0,.57-1.15,1.25-1.15.25,0,.32.14.36.54.47,5,.61,7.48.61,7.94s-.18.5-.4.5-.35-.46-.46-.86c-1.22-4.07-3.15-7.54-7.19-7.54-2.72,0-4.33,1.6-4.33,3.86,0,6.58,13.27,4.37,13.27,13.06,0,3.79-2.72,7.62-8.55,7.62-2.61,0-5-1.36-5.94-1.36-1.46,0-.93,1.22-1.61,1.22-.14,0-.32-.07-.32-.43V15.59Z" fill="#06213d">
          </path>
          <path d="M235.71,13.3A12.77,12.77,0,0,1,222.87,26C216.82,26,210,21.31,210,13.3S216.82.6,222.87.6A12.76,12.76,0,0,1,235.71,13.3ZM222.87,1.45c-4.69,0-8.12,3.76-8.12,11.85s3.43,11.84,8.12,11.84S231,21.38,231,13.3,227.56,1.45,222.87,1.45Z" fill="#06213d">
          </path>
          <path d="M241.32,3.74c0-2.39-3-1.25-3-2.14,0-.43.22-.5.79-.5,1.26,0,2.19.07,4.33.07,7.91,0,10.56-.07,12.85-.07L258,7.79a8,8,0,0,1,.21.93c0,.25-.07.36-.29.36-.43,0-.32-.9-2.07-3.4C253.71,2.56,250.66,2,246.41,2h-.79V12.48h.79c3.07,0,5.4-1.22,5.4-4.84,0-.53.18-.67.43-.67s.43.14.43.67v10.7c0,.54-.15.65-.43.65s-.43-.11-.43-.65c0-3.75-2.33-5-5.4-5h-.79v9.52c0,2.4,3,1.25,3,2.15,0,.43-.22.5-.79.5-1.25,0-2.18-.07-4.33-.07s-3.08.07-4.33.07c-.57,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15V3.74Z" fill="#06213d">
          </path>
          <path d="M273.7,3.74c0-2.39-3-1.25-3-2.14,0-.43.22-.5.79-.5,1.25,0,2.18.07,4.33.07s3.07-.07,4.33-.07c.57,0,.78.07.78.5,0,.89-3-.25-3,2.14V22.85c0,2.4,3,1.25,3,2.15,0,.43-.21.5-.78.5-1.26,0-2.19-.07-4.33-.07s-3.08.07-4.33.07c-.57,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15Z" fill="#06213d">
          </path>
          <path d="M302.75,7.07c0-3-1.32-4.51-2.68-4.94-.93-.28-1.36-.14-1.36-.64,0-.32.21-.4.78-.4,1.29,0,2.26.08,3.76.08s2.47-.08,3.76-.08c.57,0,.79.08.79.4,0,.5-.43.36-1.36.64-1.36.43-2.69,1.9-2.69,4.94V25.5a.45.45,0,0,1-.43.5.88.88,0,0,1-.71-.36L287.44,5.46h-.08V19.52c0,3,1.33,4.51,2.69,4.94.93.29,1.36.14,1.36.64,0,.33-.22.4-.79.4-1.29,0-2.25-.07-3.76-.07s-2.47.07-3.75.07c-.58,0-.79-.07-.79-.4,0-.5.43-.35,1.36-.64,1.36-.43,2.68-1.9,2.68-4.94V4.21c-2.07-3-4-1.93-4-2.61,0-.4.25-.5.79-.5.86,0,1.57.07,2.72.07h3.33l13.49,18.1h.07V7.07Z" fill="#06213d">
          </path>
          <path d="M311.87,3.74c0-2.39-3-1.25-3-2.14,0-.43.22-.5.79-.5,1.25,0,2.18.07,4.33.07,1.46,0,3.11-.07,5.08-.07,8.48,0,13.67,5,13.67,12.3,0,6.69-4.12,12.1-12.17,12.1-2.4,0-4.47-.07-6.58-.07s-3.08.07-4.33.07c-.57,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15V3.74Zm4.29,17.68c0,2.29,1.33,3.22,3.9,3.22,4.08,0,8-1.86,8-11C328,6.82,325.32,2,319.85,2h-3.69Z" fill="#06213d">
          </path>
          <path d="M338.63,3.74c0-2.39-3-1.25-3-2.14,0-.43.21-.5.79-.5,1.25,0,2.18.07,4.33.07s3.07-.07,4.32-.07c.58,0,.79.07.79.5,0,.89-3-.25-3,2.14V22.85c0,2.4,3,1.25,3,2.15,0,.43-.21.5-.79.5-1.25,0-2.18-.07-4.32-.07s-3.08.07-4.33.07c-.58,0-.79-.07-.79-.5,0-.9,3,.25,3-2.15Z" fill="#06213d">
          </path>
          <path d="M354,16.7c-1,2.75-1.43,3.79-1.43,4.83,0,3.57,3,2.71,3,3.57,0,.4-.18.4-.57.4-.75,0-1.61-.07-4-.07-1.18,0-2.33.07-3.62.07-.36,0-.46-.15-.46-.43,0-.65,1.39-.29,2.39-1.15a13.93,13.93,0,0,0,3.08-5.11c4.3-10.74,4.91-12.06,4.91-12.35s-.86-.93-.86-1.36.6-.46,1.61-2.57c.75-1.58.57-2.08,1-2.08s.43,1.18,2.58,5.91l7.62,16.85c1,2.11,2.65,1.07,2.65,1.86,0,.39-.25.43-.61.43-1.43,0-2.86-.07-4.29-.07s-2.83.07-4.3.07c-.36,0-.57-.11-.57-.43,0-.89,2.5.14,2.5-1.79a8.11,8.11,0,0,0-.6-1.93l-2-4.65ZM357.7,7l-3.37,8.8h7.23Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-4 border-box padding-horz-small padding-vert-xsmall">
         <!-- quartz -->
         <svg viewBox="0 0 198 31" width="100%">
          <path d="M197.92,5.54,182,24.44h15.91v4.81H175.75V24.19l16-18.65H176.86V.85h21.06V5.54ZM165.4.8V5.54h-8.87V29.25h-4.8V5.54h-8.88V.8ZM127.24,19.61a9.84,9.84,0,0,0,5.5-8.83,10.08,10.08,0,0,0-9.66-10H112.55V29.25h4.8V20.68h4.36l9.9,10,3.34-3.3-7.7-7.8ZM122.74,16h-5.39V5.57h5.39a5.27,5.27,0,0,1,5.31,5.21A5.27,5.27,0,0,1,122.74,16ZM91.24.8H85.47l-11,28.45h5l2-5.55H95.12l2,5.55h5L91.24.8ZM83.42,19.27,88.36,6.43l4.93,12.84ZM65.2.8v18a11.07,11.07,0,0,1-22.13,0V.8h4.8v18a6.29,6.29,0,1,0,12.57,0V.8Zm-37.33,23a14.92,14.92,0,1,0-3.34,3.3l3.74,3.74,3.32-3.32-3.72-3.72ZM24.5,20.42,19,14.91l-3.31,3.32,5.48,5.48a10.24,10.24,0,1,1,3.35-3.29Z" fill="#06213d" fill-rule="evenodd">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-4 border-box padding-horz-small padding-vert-xsmall">
         <!-- edsurge -->
         <svg viewBox="0 0 243 57" width="100%">
          <path d="M57.36,54.93a2.08,2.08,0,0,1-2.06,2H3a2.2,2.2,0,0,1-2-2V2.64A2.2,2.2,0,0,1,3,.59H55.13a2.25,2.25,0,0,1,2.23,2.05Zm-47-9,27.85-13.5s1-.69,1-1.2a1.3,1.3,0,0,0-.34-.85l-4.27-3.76a1.23,1.23,0,0,1-.34-.69,2.09,2.09,0,0,1,.34-.85L47.79,10.84,21,25.2s-1,.68-1,1.19a1.29,1.29,0,0,0,.35.86L24.55,31a1.19,1.19,0,0,1,.34.68,2.16,2.16,0,0,1-.34.86Zm60-1.71V13.07H93.75v6H77.18v6.32H91.7v6H77.18v6.49H93.92v6H70.34Zm43.4,0V40.75a8.88,8.88,0,0,1-7.35,3.93c-5.46,0-10.76-4.27-10.76-12.3V32.2c0-7.86,5.13-12.3,10.76-12.3a9,9,0,0,1,7.35,3.59V11.7h6.84V44h-6.84Zm.17-12c0-3.93-2.56-6.49-5.81-6.49-3.07,0-5.81,2.56-5.81,6.49v.18c0,3.93,2.74,6.49,5.81,6.49C111.35,38.87,113.91,36.13,113.91,32.2ZM136,44.51a20.33,20.33,0,0,1-13.16-5l4.1-4.78c2.73,2.22,5.64,3.76,9.23,3.76,2.73,0,4.44-1,4.44-2.91v-.17c0-1.71-1-2.56-6.32-3.93C127.92,30,124,28.27,124,22.12V22c0-5.64,4.45-9.4,10.77-9.4a17.59,17.59,0,0,1,11.45,3.93l-3.59,5.13c-2.74-1.88-5.47-3.08-8-3.08s-3.93,1.2-3.93,2.74v.17c0,2,1.36,2.73,6.66,4.1,6.32,1.71,9.74,3.93,9.74,9.23v.17C147.4,41.09,142.62,44.51,136,44.51Zm29.21-.34V40.75a8.27,8.27,0,0,1-7,3.76c-5.13,0-8-3.42-8-8.89V20.24h6.66V33.4c0,3.25,1.54,4.79,4.1,4.79s4.27-1.71,4.27-4.79V20.24h6.67V44h-6.67Zm25-17.26c-4.44,0-7.18,2.73-7.18,8.37V44h-6.66V20.41h6.66V25.2c1.37-3.25,3.59-5.47,7.52-5.3v7Zm13,24.26a20.52,20.52,0,0,1-10.43-2.56l2.22-5.13a15.26,15.26,0,0,0,8,2.22c4.61,0,6.83-2.22,6.83-6.49V38c-2.05,2.4-4.1,3.93-7.69,3.93-5.47,0-10.59-4.1-10.59-11.1v-.17c0-7,5.12-11.11,10.59-11.11a9.76,9.76,0,0,1,7.69,3.59V20.07h6.66V38.36C216.26,47.58,212,51.17,203.11,51.17ZM209.77,31a5.82,5.82,0,0,0-11.62,0v.17A5.48,5.48,0,0,0,204,36.65,5.62,5.62,0,0,0,209.77,31Zm32.81,3.59H226a5.45,5.45,0,0,0,5.81,4.61,8,8,0,0,0,5.81-2.39l3.93,3.42a12.05,12.05,0,0,1-9.74,4.44c-7.17,0-12.47-5-12.47-12.3V32.2c0-6.83,4.78-12.3,11.79-12.3,7.86,0,11.62,6.15,11.62,12.82v.17A5.88,5.88,0,0,1,242.58,34.6Zm-11.45-9.23c-2.73,0-4.61,2.05-5.13,5.13h10.08C235.74,27.42,234,25.37,231.13,25.37Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-4 border-box padding-horz-small padding-vert-xsmall">
         <!-- venturebeat -->
         <svg viewBox="0 0 264 35" width="100%">
          <path d="M0,.46H14.2V7.27l-2.91,0,4.82,19.1,5.21-19.1-2.9,0V.46h13V7.27l-2.21,0L21,33.84H10.35L2.06,7.22,0,7.27Z" fill="#06213d">
          </path>
          <path d="M51.77,25.42a10.38,10.38,0,0,1-2.9,6.15c-2.15,2.07-5.26,2.84-8.3,2.84-6.46,0-12.13-3.17-12.13-12.72a16.41,16.41,0,0,1,.66-4.92c1.63-5.62,6.18-8,11.18-8a12,12,0,0,1,8.55,3.12c3.56,3.5,3.37,9.17,3.33,11.35H37.34c0,1.89,0,5.24,3.09,5.24,2.53,0,2.86-2.17,3-3.07Zm-8.34-6.81a6.07,6.07,0,0,0-.23-1.94,2.84,2.84,0,0,0-1.07-1.35,2.76,2.76,0,0,0-1.65-.44c-2.81,0-2.91,2.74-2.91,3.73Z" fill="#06213d">
          </path>
          <path d="M78,27h2v6.81H69.29V19.45a6,6,0,0,0-.18-1.79,2.14,2.14,0,0,0-.81-1,2.17,2.17,0,0,0-1.21-.31,2.48,2.48,0,0,0-1,.2,2.51,2.51,0,0,0-.81.56c-.84.85-.89,1.93-.94,3.32v6.63H66v6.75H53.73V27h2V16.13h-2V9.35h9.61l.28,3.73a7.48,7.48,0,0,1,1.45-2A8.51,8.51,0,0,1,67.9,9.26a8.32,8.32,0,0,1,3.31-.58,6.92,6.92,0,0,1,5.11,1.89c1.59,1.61,1.64,3.6,1.68,5.31Z" fill="#06213d">
          </path>
          <path d="M91.64,1.69V9.35h3.88v6.78H91.64V25c0,.9.14,2.74,2.39,2.74a3.39,3.39,0,0,0,1.26-.23V33.7a28.3,28.3,0,0,1-5.11.61c-2.71,0-4.77-.76-5.8-1.8A5.85,5.85,0,0,1,83,28.07V16.13H80.9V9.35h2.77V3.52Z" fill="#06213d">
          </path>
          <path d="M107.61,9.35V23.68c0,1,.1,3.25,2.3,3.25s2.29-2.45,2.29-3.73V16.13l-1.77.05V9.35H121V27.07l2,0v6.81H113V31.09a7.1,7.1,0,0,1-3.29,2.66,9.94,9.94,0,0,1-3.7.71,7.08,7.08,0,0,1-2.77-.42,7.24,7.24,0,0,1-2.38-1.47c-1.83-1.79-1.92-4.16-2-6.43v-10l-2,.05V9.35Z" fill="#06213d">
          </path>
          <path d="M134.55,13.6c.38-1.33,1.27-4.53,5.92-4.53a8.48,8.48,0,0,1,2.3.28V17.2a8.92,8.92,0,0,0-2.06-.24,5.93,5.93,0,0,0-4.12,1.42c-1.13,1.13-1.18,2.41-1.18,4.64l-.09,4h2.86v6.83H124.85V27h2V16.13h-2V9.35h9.42Z" fill="#06213d">
          </path>
          <path d="M167.9,25.42A10.3,10.3,0,0,1,165,31.57a11.87,11.87,0,0,1-8.3,2.84c-6.46,0-12.13-3.17-12.13-12.72a16.08,16.08,0,0,1,.65-4.92c1.64-5.62,6.19-8,11.15-8a12,12,0,0,1,8.55,3.12c3.56,3.5,3.38,9.17,3.33,11.35H153.48c0,1.89.05,5.24,3.09,5.24,2.53,0,2.86-2.17,3-3.07Zm-8.33-6.81a5.56,5.56,0,0,0-.23-1.94,2.84,2.84,0,0,0-1.07-1.35,2.76,2.76,0,0,0-1.65-.44c-2.82,0-2.91,2.74-2.91,3.73Z" fill="#06213d">
          </path>
          <path d="M184.91.46c3.33.09,7.36.24,9.8,2.79a9.49,9.49,0,0,1,2.2,6.14,7.07,7.07,0,0,1-.48,2.88,7,7,0,0,1-1.58,2.43,11.68,11.68,0,0,1-3.33,2.09,9.27,9.27,0,0,1,4,2.08,9.12,9.12,0,0,1,2.27,6.27,8.14,8.14,0,0,1-2.3,5.86c-2.63,2.7-6.09,2.74-9.86,2.84H170.48V27l3,0V7.22l-3,0V.46ZM182,13.89a16.46,16.46,0,0,0,3.71-.1,3.23,3.23,0,0,0,2.52-3.31,3.32,3.32,0,0,0-1.62-3.07C185.89,7,185.42,7,182.09,7ZM182,27h2.63c1.83,0,4.4-.05,4.4-3.22a3.25,3.25,0,0,0-2-3.21c-.79-.33-1.17-.33-5-.33Z" fill="#06213d">
          </path>
          <path d="M222.59,25.42a10.4,10.4,0,0,1-2.91,6.15,11.83,11.83,0,0,1-8.29,2.84c-6.47,0-12.14-3.17-12.14-12.72a16.41,16.41,0,0,1,.66-4.92c1.64-5.62,6.19-8,11.18-8a12,12,0,0,1,8.55,3.12c3.57,3.5,3.38,9.17,3.33,11.35H208.15c0,1.89,0,5.24,3.09,5.24,2.53,0,2.86-2.17,3-3.07Zm-8.33-6.81a5.81,5.81,0,0,0-.24-1.94,2.74,2.74,0,0,0-2.71-1.79c-2.82,0-2.91,2.74-2.91,3.73Z" fill="#06213d">
          </path>
          <path d="M247.74,27v6.81H237.62L237.44,31a7.64,7.64,0,0,1-6.7,3.41c-4.36,0-7.08-2.61-7.08-7.34a7.48,7.48,0,0,1,.8-3.69A7.36,7.36,0,0,1,227,20.56c3.09-2.13,7.89-1.95,10.26-1.9a12.55,12.55,0,0,0-.09-2.6,2.12,2.12,0,0,0-.72-1.31,2.1,2.1,0,0,0-1.4-.49,2.31,2.31,0,0,0-.86.17,2.26,2.26,0,0,0-.73.5,3.11,3.11,0,0,0-.6,1.1,3.18,3.18,0,0,0-.13,1.26H224.5a9.9,9.9,0,0,1,.84-4c1.74-3.54,6.15-4.59,9.52-4.59,3.18,0,6.84.95,8.85,3a7.56,7.56,0,0,1,2,5.77V27ZM237.22,23a6.68,6.68,0,0,0-2.63.19A2.87,2.87,0,0,0,233,24.28a2.93,2.93,0,0,0-.55,1.9c0,1.65.85,2.55,2.11,2.55a2.32,2.32,0,0,0,1.21-.31,2.35,2.35,0,0,0,.9-.87,4.42,4.42,0,0,0,.56-2.22Z" fill="#06213d">
          </path>
          <path d="M259.55,1.69V9.35h3.89v6.78h-3.89V25c.05.9.14,2.74,2.39,2.74a3.6,3.6,0,0,0,1.26-.23V33.7a28.3,28.3,0,0,1-5.1.61c-2.72,0-4.78-.76-5.82-1.8a5.88,5.88,0,0,1-1.35-4.44V16.13h-2.11V9.35h2.77V3.52Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-medium padding-vert-xsmall">
         <!-- techcrunch 0 0 114 57 -->
         <svg viewBox="-15 -5 140 65" width="100%">
          <path d="M57.14.24V19.13H38.25V56.91H19.37V19.13H.48V.24Z" fill="#06213d">
          </path>
          <path d="M113.81.24H76V19.13h37.78Z" fill="#06213d">
          </path>
          <path d="M113.81,38V56.91H57.14V19.13H76V38Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- observer -->
         <svg viewBox="0 0 293 40" width="100%">
          <path d="M24.47.32c.59.2,1.17.44,1.81.59,10.37,2.53,16.84,12.17,15,22.25a20.08,20.08,0,0,1-22.39,16.4C9.33,38.39,3.44,33.14,1.06,23.79a8.45,8.45,0,0,0-.39-.88V17.12c.19-.59.39-1.22.53-1.8a19.43,19.43,0,0,1,13.49-14C15.81.91,17,.66,18.14.32ZM21,8.06A11.59,11.59,0,0,0,9.48,19.85,11.79,11.79,0,0,0,21,32,11.71,11.71,0,0,0,32.7,20,11.76,11.76,0,0,0,21,8.06Z" fill="#06213d">
          </path>
          <path d="M97.89.32c3.12,1.07,6.23,2.1,9.3,3.22a15.56,15.56,0,0,1,2.63,1.7c-1.46,2.14-2.87,4.14-4.28,6.23-1.71-.87-3.17-2-4.83-2.38a21.82,21.82,0,0,0-6.86-.93,4.84,4.84,0,0,0-3.12,2.68c-.68,1.61.49,2.92,2.1,3.5s3.5,1.22,5.26,1.76,3.4.92,5.06,1.55c5.65,2.15,8.08,5.6,7.79,10.86s-3.6,9-9.2,10.42c-7.06,1.8-16.26-.63-21-5.7,1.56-1.85,3.17-3.7,4.82-5.69,3.56,2.68,7.16,4.72,11.64,4.53a10,10,0,0,0,2.14-.25c1.71-.44,3-1.26,3.17-3.16s-1-2.83-2.58-3.36c-3.8-1.32-7.74-2.24-11.49-3.8a10.35,10.35,0,0,1-4.34-16A12.36,12.36,0,0,1,92.29.76l2.1-.44Z" fill="#06213d">
          </path>
          <path d="M72.19,19.31l1.36.73c3.65,1.85,5.16,4.87,5.06,8.81a8.86,8.86,0,0,1-5.5,8.33,12,12,0,0,1-4.38,1.31c-7.5.15-15,0-22.64,0V.91H49.4c5.79.14,11.54-.05,17.24.39,7.4.53,11.68,6.57,9.29,12.8C75.2,16,73.55,17.51,72.19,19.31ZM54.32,31.53c4.09,0,8,.15,12-.05a3.79,3.79,0,0,0,3.95-3.75,3.7,3.7,0,0,0-3.75-4.14c-4-.24-8,0-12.12,0C54.32,26.17,54.32,28.71,54.32,31.53Zm0-15.38c3.46,0,6.77.14,10,0a3.72,3.72,0,0,0,3.8-3.65c.09-2-1.07-3.61-3-3.75-3.56-.3-7.16-.1-10.81-.1C54.27,11.08,54.27,13.47,54.27,16.15Z" fill="#06213d">
          </path>
          <path d="M182.8,39c-3.41,0-6.28.05-9.15,0-.54,0-1.22-.73-1.56-1.27-2-2.77-3.94-5.5-5.65-8.37-1.12-1.9-2.43-2.77-4.67-2.43a30.05,30.05,0,0,1-3.61.05v12h-8.32V1.49c7.4,0,14.65-.44,21.86.15,5.45.44,9.05,4.67,9.79,9.59.87,6.18-1.32,10.81-6.43,13.58-.44.25-.83.44-1.51.78C176.57,29.92,179.54,34.21,182.8,39ZM158.21,19.31c3.41,0,6.72.24,10,0A5,5,0,0,0,173.11,14c0-2.87-1.7-4.91-5-5.21s-6.58,0-9.94,0Z" fill="#06213d">
          </path>
          <path d="M283,25.59c3,4.28,5.89,8.57,9.15,13.34-3.46,0-6.43,0-9.45,0-.48,0-1.07-.87-1.46-1.46-1.9-2.73-3.84-5.35-5.5-8.18-1.12-1.9-2.48-2.72-4.67-2.43a29.39,29.39,0,0,1-3.56.05V38.78H259V1h4.33c5.16.05,10.37-.09,15.53.25,6.67.48,10.76,4,11.83,9.49,1.22,6.28-1.16,11.15-7.06,14.32A8.11,8.11,0,0,0,283,25.59ZM267.66,8.7V19.31c3.45,0,6.67.24,9.88,0a5,5,0,0,0,5-5.21,5,5,0,0,0-4.92-5.26A96.75,96.75,0,0,0,267.66,8.7Z" fill="#06213d">
          </path>
          <path d="M144.43,1.15V8.36H124.28v7.69h20.15V23.4H124.28v8h20.15v7.26H115.81V1.1C125.25,1.15,134.75,1.15,144.43,1.15Z" fill="#06213d">
          </path>
          <path d="M233.14,8.45V16.1h20.25v7.4H233.14v8h20.35v7.3H224.86V1h4.38c7.36,0,14.76.05,22.11,0,1.85,0,2.48.53,2.33,2.33s0,3.31,0,5.21C246.63,8.45,240,8.45,233.14,8.45Z" fill="#06213d">
          </path>
          <path d="M221.31,1c-3.75,9.25-7.26,18-10.81,26.77-1.31,3.26-2.73,6.53-3.94,9.79a2.38,2.38,0,0,1-2.63,1.8c-5.55,0-5.55,0-7.64-5.11C192.15,24,188,13.71,183.82,3.49c-.29-.73-.53-1.46-1-2.53,3,0,5.69-.1,8.37.09.54.05,1.22,1.07,1.51,1.8,2.87,7.55,5.75,15.15,8.57,22.69.19.54.39,1,.78,2.05.49-1.17.83-2,1.17-2.83,2.77-7.35,5.55-14.65,8.23-22A2.28,2.28,0,0,1,214.1.91C216.39,1,218.63,1,221.31,1Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-medium padding-vert-xsmall">
         <!-- people -->
         <svg viewBox="0 0 131 53" width="100%">
          <path d="M118.52,35.87c1.63,0,2.5-1.55,2.83-3.5h9c-1.13,13.65-20,13.76-21.67,2.93v7.05h-13V35.22c-1.13,7-5.12,7.94-6.87,7.93a7.5,7.5,0,0,1-6.39-4.88l.13,4a4.09,4.09,0,0,0,3.3,4.28v5.77H70.6V46.55a3.83,3.83,0,0,0,3.34-4.08V32c-.46,2.63-2.41,11.14-11.76,11.14s-11.35-9-11.75-10.3c-1.73,9.78-8.24,10.32-11.1,10.29a11.81,11.81,0,0,1-8.28-3.68c-3.09-3.13-3.69-7.89-3.56-13,0-1,.26-3,.35-4-3.32,3.57-6.4,3.13-10,3.26H14.72v5.85c0,2.36.86,3.76,3.49,3.78v7H.16V35.47c2.63,0,3.53-1.55,3.52-3.91V10.69c0-.5-.12-3.73-3.51-3.75V0H19.64a12.7,12.7,0,0,1,8,2.5c3.25,2.56,3.9,7,4.16,10.21,5-4.31,16.72-5.27,18.69,7.64C52.65,10.51,59.91,9.77,61.6,9.76c3.05,0,8.26,1.83,9.95,6.81V10.43H82.22v4A6.21,6.21,0,0,1,88.3,9.76c2.58,0,7.85,2.84,9.2,13.72V9c0-2.09-1.29-3.17-3.38-3.16V.06h12.42V23.49c1.13-10.38,6.92-13.7,11.8-13.7a11.21,11.21,0,0,1,10.26,6.3c2.3,4.51,2.14,9.29,2,12.39H115.48a22.29,22.29,0,0,0,0,2.51C115.66,33.56,116.5,35.88,118.52,35.87Zm-78.91,0c1.64,0,2.51-1.53,2.84-3.49h7.87a17,17,0,0,1-.49-3.9H36.58A22.29,22.29,0,0,0,36.63,31c.13,2.57,1,4.89,3,4.88Zm19.28-9.36c0,5.21.94,9.4,3.29,9.43s3.28-4.22,3.28-9.43-.93-9.4-3.29-9.43S58.89,21.3,58.89,26.51ZM39.56,16.9c-2,0-2.92,2.45-3.05,5a8,8,0,0,0,0,1.56h6a8,8,0,0,0,0-1.56c-.13-2.57-.91-5-2.92-5Zm78.9.19c-2,0-2.86,2.26-3,4.83a8.93,8.93,0,0,0,0,1.56h6a7.31,7.31,0,0,0,0-1.56C121.32,19.35,120.47,17.08,118.46,17.09ZM82.78,31.25c0,2.62.65,4.61,2.48,4.61,2.06,0,3.28-2.78,3.28-9.32,0-7.18-1.11-9.64-3-9.73s-2.83,1.51-2.73,4.78Zm-68-13.44h2.54c2.29-.07,3.09-1.45,3.09-4.95C20.37,9.67,19.25,8,17.28,8H14.74Z" fill="#06213d" fill-rule="evenodd">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-small padding-vert-xsmall">
         <!-- fast company -->
         <svg viewBox="0 0 265 39" width="100%">
          <path d="M232.82,5.64c0-2.59.8-3.48,2.14-3.48s2.42.54,3.67,3.48l7.61,17.19V33.7c0,2.59-1.08,3.3-4,3.66v.71h14v-.71c-3-.36-4-1.16-4-3.66V22.83l7.33-16.57c1.43-3.21,2.87-3.92,5-4.28V1.27H254.29V2c3.48.36,4.74,1.34,3.75,3.66l-6.44,14.7L245,5.28c-.89-2.05-.36-2.67,3.49-3.21V1.36h-22.1v.71c3.49.54,4.57,1.16,4.57,3.66V25.86l-16.2-24.5h-8v.71c2.6.36,3.4,1.16,3.4,3.66V33.79c0,2.59-.71,3.48-1.61,3.48s-1.25-.36-2.41-3.48l-12-32.61h-.72L181.91,32.37c-1.25,3.47-3.22,4.63-5.19,5.08v.71h10.56v-.71c-3.67-.36-4.83-1.79-4-4.1l2.59-7.13h10.91l2.51,6.68c1.07,3,.44,3.92-2.69,4.46v.71h20v-.71c-3.49-.54-4.56-1.16-4.56-3.66V8.58l19.59,29.58h1.17Zm-141.26,14C91.56,8.22,97,2.25,103.37,2.25c3.75,0,6.17.8,7.6,2.32a13.33,13.33,0,0,1,2.77,5h.72V1.9A53,53,0,0,0,104.17.74c-9.57,0-19.5,6.15-19.5,18.89s9.93,18.89,18.88,18.89a37.14,37.14,0,0,0,10.73-1.61l1.08-7.22-.63-.17a19.56,19.56,0,0,1-2.86,4,12.27,12.27,0,0,1-8.59,3.56C97.19,37,91.56,31.21,91.56,19.63Zm79.35,1.07a18.74,18.74,0,0,1-2.95-.27V2.61h2.95c4.92,0,7.07,2.58,7.07,9S175.74,20.7,170.91,20.7ZM56,1.27v8.82h.72C57.74,4.48,60,2.7,63.74,2.7h1.79v31c0,2.59-1.08,3.3-4,3.66v.71h14v-.71c-3-.36-4-1.16-4-3.66V2.61h1.79c3.76,0,6,1.78,7.07,7.39h.71V1.18H56ZM44.77,38.52c6.08,0,12.52-3.48,12.52-10.61a10.94,10.94,0,0,0-6.17-9.8l-7-3.83c-3.66-2-4.74-3.92-4.74-6.59,0-3,2.24-5.44,6.44-5.44A6.65,6.65,0,0,1,50.67,4C51.75,5,52.82,6.8,53.81,10h.62V1.9A28.67,28.67,0,0,0,46.29.74c-6,0-10.47,3.74-10.47,10.07a11.39,11.39,0,0,0,5.91,9.8l6.44,3.56c3.67,2,4.83,4,4.83,7,0,3.48-3.58,6-7.51,6a8.64,8.64,0,0,1-6.27-2.41,12.42,12.42,0,0,1-2.77-4.45h4.21v-.71c-1.17-.27-1.88-.45-2.87-2.77L29.56,7.24h-.71l-8,19.07c-1.08,2.58-1.79,3-3.05,3.21v.71h7.16v-.71c-2.59-.27-3.31-1.52-2.68-3.12l1.25-3h7.25l1.61,3.74c.71,1.69-.36,2.14-3,2.32v.71h5.73v7A38.37,38.37,0,0,0,44.77,38.52Zm90.89-.36L146.31,8.67l.8,25.12c.09,2.5-.89,3.21-3.93,3.57v.71h29.34v-.71C169,36.82,168,36.2,168,33.7V21.85a22,22,0,0,0,3.22.27c7.06,0,13.15-2.58,13.15-10.42S178.24,1.27,171.18,1.27H158.56V2c2.6.36,3.4,1.16,3.4,3.66V33.7c0,2.59-1.07,3.66-4,3.66h-.09c-3.13,0-4.47-1.16-4.56-3.57L152.21,5.73c-.09-2.59.81-3.39,3.58-3.75V1.27h-8.68l-9.48,26.46L128.15,1.27h-9.31V2c2.78.36,3.67,1.25,3.58,3.75l-1,26.91a4.53,4.53,0,0,1-4.12,4.72v.71h9.84v-.71c-2.5-.36-3.93-2-3.84-4.72l.8-24.51L135,38.07Zm-28.54-7.75c4.75,0,10.83-4.19,10.83-10.78S112,8.85,107.12,8.85,96.3,13,96.3,19.63,102.29,30.41,107.12,30.41Zm0-20c3,0,5.1,2.49,5.1,9.27s-2.14,9.26-5.1,9.26S102,26.4,102,19.63,104.08,10.36,107.12,10.36Zm89.2,14.35h-9.93l4.92-13.55Zm-166-2.77H24.19l3-7.39ZM18.65,23.81h.71v-11h-.71c-1.16,3.92-2.33,4.81-4.47,4.81H10.06v-15h6.53c3.76,0,6,1.78,7.07,7.39h.71V1.18H.67V1.9c2.59.35,3.4,1.15,3.4,3.65V33.62c0,2.58-.81,3.29-3.4,3.65V38h14v-.71c-3.49-.54-4.56-1.16-4.56-3.65V18.91h4.12C16.23,19,17.49,19.89,18.65,23.81Z" fill="#06213d">
          </path>
         </svg>
        </li>
        <li class="width-1-3 large-up-width-1-5 border-box padding-horz-medium padding-vert-xsmall">
         <!-- inc -->
         <svg viewBox="0 0 119 42" width="100%">
          <path d="M.17,10.4H5.41V32.47H.17v8.74h28V32.47H22.9V10.4h5.28V1H.17Z" fill="#06213d">
          </path>
          <path d="M71.31,32.47V20.87c0-7.4-5.4-10.09-12.09-10.09-4.75,0-8.37,1.29-11.5,4.91a5.33,5.33,0,0,1-.81.86v-6.1H29.64v8.8h3.94V32.47H29.64v8.8H51.55v-8.8H47.4V24.86a5.48,5.48,0,0,1,5.66-5.61c2.54,0,4.54,1.24,4.54,4v9.18H53.55v8.79H75V32.58s-.06-.11-.06-.16H71.31Z" fill="#06213d">
          </path>
          <path d="M109.84,29.88H98.07c0,3.24-2.37,4.75-5,4.75-5.07,0-5.5-4.26-5.5-8.31v-.11c0-4.05.38-8.31,5.5-8.31,4,0,4.7,3.45,4.81,6.75l11.82-1.3c-1.24-12-13.12-12.79-16.09-12.79H93c-9.77,0-19.38,4.8-19.38,15.71a14.71,14.71,0,0,0,1.24,6.15h.06v.16C77.78,39.06,85.34,42,93,42c6.2,0,14.89-1.51,16.84-11.06Z" fill="#06213d">
          </path>
          <path d="M113.89,41.38a5,5,0,1,0-5-5A5,5,0,0,0,113.89,41.38Z" fill="#06213d">
          </path>
         </svg>
        </li>
       </ul>
      </section>
      <section class="padding-vert-xxlarge large-down-padding-horz-medium border-box" id="home-stats">
       <div class="relative row vert-align-middle large-up-nowrap width-page width-centered">
        <div class="large-up-width-3-5 border-box width-100 large-up-padding-right-xxlarge large-down-padding-horz-medium">
         <h2 class="head-2 medium-up-head-1 color-white margin-bottom-medium large-up-margin-bottom-xxlarge">
          इसका अधिकतम लाभ उठाएं
          <span style="white-space: nowrap;">
           क्लास सेंट्रल
          </span>
          के साथ
          <a class="head-2 medium-up-head-1 color-yellow" data-detail="{ " source": "homepage_stats" }" data-name="SIGNUP_LINK" href="signup.html" title="Sign up for Class Central">
           नि: शुल्क खाता
          </a>
         </h2>
         <div class="row large-up-nowrap large-up-margin-bottom-xxlarge">
          <p class="width-100 large-up-width-1-2 text-left large-up-padding-right-medium border-box margin-bottom-xlarge">
           <strong class="head-1 color-white block">
            50 मीटर
           </strong>
           <span class="width-12-16 btn-gradient-navy-flip head-3 xlarge-up-head-2 block weight-semi upper color-white" style="margin-left: -20px;">
            आगंतुकों
           </span>
          </p>
          <p class="width-100 large-up-width-1-2 text-left large-up-padding-right-medium border-box margin-bottom-xlarge">
           <strong class="head-1 color-white block">
            3एम
           </strong>
           <span class="width-12-16 btn-gradient-navy-flip head-3 xlarge-up-head-2 block weight-semi upper color-white" style="margin-left: -20px;">
            साइन-अप
           </span>
          </p>
         </div>
         <p class="head-2 weight-semi color-white margin-bottom-xxlarge relative padding-left-xlarge">
          <strong class="head-2 color-yellow target-yellow">
           15,039
          </strong>
          पिछले 7 दिनों में साइन अप करें
         </p>
        </div>
        <aside class="relative large-up-width-2-5 border-box">
         <ul class="relative list-no-style">
          <li class="text-left padding-left-medium padding-bottom-large large-up-margin-bottom-large">
           <strong class="head-2 padding-left-medium color-white margin-bottom-xxsmall" style="font-size: 75px;">
            30 मी
           </strong>
           <span class="text-1 weight-semi upper btn-gradient-navy btn-small block color-white margin-bottom-medium">
            इस प्रकार
           </span>
           <p class="text-1 color-white relative padding-left-xlarge">
            <strong class="text- weight-bold color-yellow target-yellow">
             58,923
            </strong>
            पिछले 7 दिनों में अनुसरण करता है
           </p>
          </li>
          <li class="text-left padding-left-medium padding-bottom-large large-up-margin-bottom-large">
           <strong class="head-2 padding-left-medium color-white margin-bottom-xxsmall" style="font-size: 75px;">
            13मी
           </strong>
           <span class="text-1 weight-semi upper btn-gradient-navy btn-small block color-white margin-bottom-medium">
            बुकमार्क
           </span>
           <p class="text-1 color-white relative padding-left-xlarge">
            <strong class="text-1 weight-bold color-yellow target-yellow">
             66,667
            </strong>
            पिछले 7 दिनों में बुकमार्क किए गए पाठ्यक्रम
           </p>
          </li>
          <li class="text-left padding-left-medium margin-bottom-large">
           <strong class="head-2 padding-left-medium color-white margin-bottom-xxsmall" style="font-size: 75px;">
            700k
           </strong>
           <span class="text-1 weight-semi upper btn-gradient-navy btn-small block color-white margin-bottom-medium">
            सूचियाँ बनाई
           </span>
           <p class="text-1 color-white relative padding-left-xlarge">
            <strong class="text-1 weight-bold color-yellow target-yellow">
             13,407
            </strong>
            पिछले 7 दिनों में बनाई गई सूचियाँ
           </p>
          </li>
         </ul>
        </aside>
       </div>
      </section>
      <section class="width-page width-centered padding-vert-xxlarge large-down-padding-horz-medium border-box">
       <header class="max-750 width-centered text-center margin-bottom-xxlarge">
        <h2 class="head-2 medium-up-head-1 margin-bottom-xsmall color-charcoal">
         लाओ
         <strong class="weight-bold color-blue">
          ताजा खबर
         </strong>
         और
         <strong class="weight-bold color-blue">
          विश्लेषण
         </strong>
         में
         <span style="white-space: nowrap">
          ऑनलाइन शिक्षा।
         </span>
        </h2>
       </header>
       <div class="row margin-bottom-medium">
        <div class="width-100 border-box large-up-padding-right-large large-up-width-1-2">
         <h3 class="text-2 weight-semi upper padding-bottom-xxsmall border-bottom border-gray margin-bottom-medium">
          तात्कालिक लेख
          <a class="margin-left-xxsmall icon-center icon-small icon-rss-charcoal" href="https://classcentral.com/report/feed">
           आरएसएस फीड
          </a>
         </h3>
         <ul class="row list-no-style" id="home-report-recent">
          <li class="width-100 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div class="width-100 large-up-width-1-3 border-box large-up-padding-right-medium">
             <a data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "FutureLearn’s Turbulent Year Culminates in Price Hike as CEO Departs", "sub_section": "Latest Articles" }" href="">
              <img alt class="width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F03%2Ffuturelearn-raises-sub-price.png?auto=format&ixlib=php-3.3.1&w=375&s=b8be43f9345882e359926f1c541dd037" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F03%2Ffuturelearn-raises-sub-price.png?auto=format&amp;ixlib=php-3.3.1&amp;w=375&amp;s=b8be43f9345882e359926f1c541dd037">
             </a>
            </div>
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "FutureLearn’s Turbulent Year Culminates in Price Hike as CEO Departs", "sub_section": "Latest Articles" }" href="">
               फ़्यूचरलर्न का अशांत वर्ष सीईओ के प्रस्थान के रूप में मूल्य वृद्धि में समाप्त होता है
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 मनोएल कोर्टेस मेंडेज़ द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                मार्च 7, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "MasterClass’s Struggles Continue with Third Round of Layoffs", "sub_section": "Latest Articles" }" href="">
               छंटनी के तीसरे दौर के साथ मास्टरक्लास का संघर्ष जारी है
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 धवल शाह द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                5 मार्च, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "20 Most Cited Research Papers on MOOCs", "sub_section": "Latest Articles" }" href="">
               एमओओसी पर 20 सर्वाधिक उद्धृत शोध पत्र
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 हेबा लेडवोन द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                Mar 1st, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "EMOOCs 2023: Call for Papers [Deadline March 15]", "sub_section": "Latest Articles" }" href="">
               EMOOCs 2023: कागजात के लिए बुलावा [समय सीमा 15 मार्च]
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="report/author/manoel/index.html">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 मनोएल कोर्टेस मेंडेज़ द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                फरवरी 28, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "Coursera’s New Deal with Google Could Cost the Company Millions", "sub_section": "Latest Articles" }" href="report/coursera-google-new-deal/index.html">
               कौरसेरा की Google के साथ नई डील से कंपनी को लाखों का नुकसान हो सकता है
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="report/author/dhawal/index.html">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 धवल शाह द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                फरवरी 27, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "1700 Coursera Courses that Are Still Completely Free", "sub_section": "Latest Articles" }" href="report/coursera-free-online-courses/index.html">
               1700 कौरसेरा पाठ्यक्रम जो अभी भी पूरी तरह नि:शुल्क हैं
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="report/author/dhawal/index.html">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 धवल शाह द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                20 फरवरी, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top border-bottom border-gray padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "Udemy Lays Off ~200 Staff, After Being Only Major Player to Avoid Layoffs in 2022", "sub_section": "Latest Articles" }" href="report/udemy-layoffs/index.html">
               उडेमी ने ~200 कर्मचारियों की छंटनी की, 2022 में छंटनी से बचने वाला एकमात्र प्रमुख खिलाड़ी होने
                          के बाद
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="report/author/dhawal/index.html">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 धवल शाह द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                15 फरवरी, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "Harvard CS50 Guide: How to Pick the Right Course (with Free Certificate)", "sub_section": "Latest Articles" }" href="report/harvard-cs50-guide/index.html">
               हार्वर्ड CS50 गाइड: सही कोर्स कैसे चुनें (मुफ्त प्रमाणपत्र के साथ)
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="report/author/manoel/index.html">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 मनोएल कोर्टेस मेंडेज़ द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                फरवरी 7, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
          <li class="width-100 large-up-width-1-2 border-box large-up-padding-horz-small">
           <div class="row large-up-nowrap vert-align-top padding-bottom-medium margin-bottom-medium">
            <div>
             <h3>
              <a class="head-3 weight-semi line-tight color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "Massive List of Chinese Online Course Platforms in 2023", "sub_section": "Latest Articles" }" href="report/chinese-mooc-platforms/index.html">
               2023 में चीनी ऑनलाइन पाठ्यक्रम प्लेटफार्मों की विशाल सूची
              </a>
             </h3>
             <div class="row nowrap">
              <div>
               <a href="report/author/ruima/index.html">
                <span class="text-2 color-charcoal inline-block margin-top-xxsmall margin-right-xsmall inline-block hover-underline">
                 रुई मा द्वारा
                </span>
               </a>
               <span class="text-2 inline-block color-gray inline-block">
                फरवरी 6, 2023
               </span>
              </div>
             </div>
            </div>
           </div>
          </li>
         </ul>
        </div>
        <div class="width-100 border-box larage-up-padding-left-large large-up-width-1-2">
         <h3 class="text-2 padding-bottom-xxsmall weight-semi upper border-bottom border-gray margin-bottom-medium">
          सर्वश्रेष्ठ पाठ्यक्रम मार्गदर्शिकाएँ
         </h3>
         <ul class="margin-bottom-xlarge list-no-style">
          <li class="row margin-bottom-medium border-bottom border-gray padding-bottom-medium">
           <div class="width-100 medium-up-width-1-3 horz-align-left row">
            <a data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "10 Best Bookkeeping Courses", "sub_section": "Best Courses Guides" }" href="report/best-bookkeeping-courses/index.html">
             <img alt class="width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F03%2FBookkeeping-BCG-Banner.png?auto=format&ixlib=php-3.3.1&w=300&s=1871ff2bf209d5a6a9c8d7bbf4b4d637" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F03%2FBookkeeping-BCG-Banner.png?auto=format&amp;ixlib=php-3.3.1&amp;w=300&amp;s=1871ff2bf209d5a6a9c8d7bbf4b4d637">
            </a>
           </div>
           <div class="border-box width-100 medium-up-width-2-3 medium-up-padding-left-medium">
            <h2 class="margin-bottom-xxsmall">
             <a class="head-3 medium-up-head-2 color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "10 Best Bookkeeping Courses", "sub_section": "Best Courses Guides" }" href="report/best-bookkeeping-courses/index.html">
              10 सर्वश्रेष्ठ बहीखाता पाठ्यक्रम
             </a>
            </h2>
            <p class="text-2 color-charcoal">
             <strong class="weight-semi">
              अर्चिशा भर
             </strong>
             <span class="margin-left-xsmall inline-block color-gray">
              मार्च 7, 2023
             </span>
            </p>
           </div>
          </li>
          <li class="row margin-bottom-medium border-bottom border-gray padding-bottom-medium">
           <div class="width-100 medium-up-width-1-3 horz-align-left row">
            <a data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "14 Best Free CSS Layout Courses", "sub_section": "Best Courses Guides" }" href="report/best-css-layout-courses/index.html">
             <img alt class="width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F03%2FCSS-Layout-BCG-Banner.png?auto=format&ixlib=php-3.3.1&w=300&s=8a6d81c9e97df3fd08d287bd36e8638f" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F03%2FCSS-Layout-BCG-Banner.png?auto=format&amp;ixlib=php-3.3.1&amp;w=300&amp;s=8a6d81c9e97df3fd08d287bd36e8638f">
            </a>
           </div>
           <div class="border-box width-100 medium-up-width-2-3 medium-up-padding-left-medium">
            <h2 class="margin-bottom-xxsmall">
             <a class="head-3 medium-up-head-2 color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "14 Best Free CSS Layout Courses", "sub_section": "Best Courses Guides" }" href="report/best-css-layout-courses/index.html">
              14 सर्वश्रेष्ठ मुफ्त सीएसएस लेआउट पाठ्यक्रम
             </a>
            </h2>
            <p class="text-2 color-charcoal">
             <strong class="weight-semi">
              Kinjal Vora
             </strong>
             <span class="margin-left-xsmall inline-block color-gray">
              मार्च 6, 2023
             </span>
            </p>
           </div>
          </li>
          <li class="row margin-bottom-medium border-bottom border-gray padding-bottom-medium">
           <div class="width-100 medium-up-width-1-3 horz-align-left row">
            <a data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "10 Best Digital Art Courses", "sub_section": "Best Courses Guides" }" href="report/best-digital-art-courses/index.html">
             <img alt class="width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2FDigital-Art-BCG-Banner.png?auto=format&ixlib=php-3.3.1&w=300&s=886c4125a4f223041b21253ebb43bb32" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2FDigital-Art-BCG-Banner.png?auto=format&amp;ixlib=php-3.3.1&amp;w=300&amp;s=886c4125a4f223041b21253ebb43bb32">
            </a>
           </div>
           <div class="border-box width-100 medium-up-width-2-3 medium-up-padding-left-medium">
            <h2 class="margin-bottom-xxsmall">
             <a class="head-3 medium-up-head-2 color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "10 Best Digital Art Courses", "sub_section": "Best Courses Guides" }" href="report/best-digital-art-courses/index.html">
              10 सर्वश्रेष्ठ डिजिटल कला पाठ्यक्रम
             </a>
            </h2>
            <p class="text-2 color-charcoal">
             <strong class="weight-semi">
              अर्चिशा भर
             </strong>
             <span class="margin-left-xsmall inline-block color-gray">
              फरवरी 28, 2023
             </span>
            </p>
           </div>
          </li>
          <li class="row margin-bottom-medium border-bottom border-gray padding-bottom-medium">
           <div class="width-100 medium-up-width-1-3 horz-align-left row">
            <a data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "7 Best Elm Courses", "sub_section": "Best Courses Guides" }" href="report/best-elm-courses/index.html">
             <img alt class="width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2FElm-BCG-Banner.png?auto=format&ixlib=php-3.3.1&w=300&s=e17362530ac2886153d51465cb6d4b59" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2FElm-BCG-Banner.png?auto=format&amp;ixlib=php-3.3.1&amp;w=300&amp;s=e17362530ac2886153d51465cb6d4b59">
            </a>
           </div>
           <div class="border-box width-100 medium-up-width-2-3 medium-up-padding-left-medium">
            <h2 class="margin-bottom-xxsmall">
             <a class="head-3 medium-up-head-2 color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "7 Best Elm Courses", "sub_section": "Best Courses Guides" }" href="report/best-elm-courses/index.html">
              7 सर्वश्रेष्ठ एल्म पाठ्यक्रम
             </a>
            </h2>
            <p class="text-2 color-charcoal">
             <strong class="weight-semi">
              एल्हम नजीफ
             </strong>
             <span class="margin-left-xsmall inline-block color-gray">
              फरवरी 27, 2023
             </span>
            </p>
           </div>
          </li>
          <li class="row margin-bottom-medium padding-bottom-medium">
           <div class="width-100 medium-up-width-1-3 horz-align-left row">
            <a data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "10 Best Resume Writing Courses", "sub_section": "Best Courses Guides" }" href="report/best-resume-writing-courses/index.html">
             <img alt class="width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2FResume-Writing-BCG-Banner.png?auto=format&ixlib=php-3.3.1&w=300&s=e92cf7c600bb5aba5ffd00eca9409f07" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Freport%2Fwp-content%2Fuploads%2F2023%2F02%2FResume-Writing-BCG-Banner.png?auto=format&amp;ixlib=php-3.3.1&amp;w=300&amp;s=e92cf7c600bb5aba5ffd00eca9409f07">
            </a>
           </div>
           <div class="border-box width-100 medium-up-width-2-3 medium-up-padding-left-medium">
            <h2 class="margin-bottom-xxsmall">
             <a class="head-3 medium-up-head-2 color-charcoal" data-track-click="homepage_click" data-track-props="{ " type": "MOOC Report", "title": "10 Best Resume Writing Courses", "sub_section": "Best Courses Guides" }" href="report/best-resume-writing-courses/index.html">
              10 सर्वश्रेष्ठ रिज्यूमे राइटिंग कोर्स
             </a>
            </h2>
            <p class="text-2 color-charcoal">
             <strong class="weight-semi">
              अर्चिशा भर
             </strong>
             <span class="margin-left-xsmall inline-block color-gray">
              फरवरी 21, 2023
             </span>
            </p>
           </div>
          </li>
         </ul>
        </div>
       </div>
       <div class="text-center margin-bottom-large">
        <a class="btn-gradient-blue scale-on-hover" href="report/index.html">
         <span class="text-1 weight-semi icon-chevron-right-charcoal icon-right-small color-charcoal">
          अधिक
          <i class="margin-left-xxsmall relative inline-block symbol-report" style="width: 80px; top: 2px;">
           रिपोर्ट
          </i>
         </span>
        </a>
       </div>
      </section>
      <section class="decor-grid-line relative padding-vert-xxlarge large-down-padding-horz-medium border-box" id="home-collections">
       <div class="z-mid relative width-page width-centered">
        <header class="max-750 width-centered text-center margin-bottom-xxlarge">
         <h2 class="head-2 medium-up-head-1 margin-bottom-xsmall color-charcoal">
          हमारे लोकप्रिय ब्राउज़ करें
          <strong class="head-2 medium-up-head-1" style="white-space: nowrap; color: #007671;">
           चुनिंदा संग्रह
          </strong>
         </h2>
        </header>
        <ul class="list-no-style row wrap margin-bottom-xxlarge">
         <li class="border-box width-100 large-up-width-1-3 padding-small">
          <a class="scale-on-hover block bg-white radius" href="report/udemy-top-courses/index.html" style="box-shadow: 0px 0px 5px rgba(144, 216, 210, 0.7)">
           <img alt="250 Top Udemy Courses of All Time (2021)" class="block radius width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollections-udemy-top-courses.png?auto=format&ixlib=php-3.3.1&w=450&s=243e8b030c78e5cd68b2e3ddd8e1bc7f" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollections-udemy-top-courses.png?auto=format&amp;ixlib=php-3.3.1&amp;w=450&amp;s=243e8b030c78e5cd68b2e3ddd8e1bc7f">
          </a>
         </li>
         <li class="border-box width-100 large-up-width-1-3 padding-small">
          <a class="scale-on-hover block bg-white radius" href="report/india-online-degrees/index.html" style="box-shadow: 0px 0px 5px rgba(144, 216, 210, 0.7)">
           <img alt="500+ UGC Approved Online Degrees from India’s Top Universities" class="block radius width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-india-ugc-approved-online-degrees.png?auto=format&ixlib=php-3.3.1&w=450&s=0165b8c5462a88d74b09d1ec21533264" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-india-ugc-approved-online-degrees.png?auto=format&amp;ixlib=php-3.3.1&amp;w=450&amp;s=0165b8c5462a88d74b09d1ec21533264">
          </a>
         </li>
         <li class="border-box width-100 large-up-width-1-3 padding-small">
          <a class="scale-on-hover block bg-white radius" href="report/mooc-based-masters-degree/index.html" style="box-shadow: 0px 0px 5px rgba(144, 216, 210, 0.7)">
           <img alt="70+ Legit Master’s Degrees You Can Now Earn Completely Online" class="block radius width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-earn-a-masters-degree-social.png?auto=format&ixlib=php-3.3.1&w=450&s=b6c23348d8c869ee66cab69691933e49" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-earn-a-masters-degree-social.png?auto=format&amp;ixlib=php-3.3.1&amp;w=450&amp;s=b6c23348d8c869ee66cab69691933e49">
          </a>
         </li>
         <li class="border-box width-100 large-up-width-1-3 padding-small">
          <a class="scale-on-hover block bg-white radius" href="report/list-of-mooc-based-microcredentials/index.html" style="box-shadow: 0px 0px 5px rgba(144, 216, 210, 0.7)">
           <img alt="Massive List of MOOC-based Microcredentials" class="block radius width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-microcredentials-social.png?auto=format&ixlib=php-3.3.1&w=450&s=ac00a29f643507e6d6ae41dd49791dce" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-microcredentials-social.png?auto=format&amp;ixlib=php-3.3.1&amp;w=450&amp;s=ac00a29f643507e6d6ae41dd49791dce">
          </a>
         </li>
         <li class="border-box width-100 large-up-width-1-3 padding-small">
          <a class="scale-on-hover block bg-white radius" href="collection/ivy-league-moocs/index.html" style="box-shadow: 0px 0px 5px rgba(144, 216, 210, 0.7)">
           <img alt="Free Online Ivy League Corses" class="block radius width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&ixlib=php-3.3.1&w=450&s=9fd82b0b3f0af3174ed36f9701d84ba2" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-ivy-league-moocs-social.jpg?auto=format&amp;ixlib=php-3.3.1&amp;w=450&amp;s=9fd82b0b3f0af3174ed36f9701d84ba2">
          </a>
         </li>
         <li class="border-box width-100 large-up-width-1-3 padding-small">
          <a class="scale-on-hover block bg-white radius" href="report/most-popular-online-courses/index.html" style="box-shadow: 0px 0px 5px rgba(144, 216, 210, 0.7)">
           <img alt="The 100 Most Popular Online Courses of All Time" class="block radius width-100" data-src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-most-popular-all-time-social.png?auto=format&ixlib=php-3.3.1&w=450&s=1f90fe42cee7ab47ab240f59cfb697e1" src="https://ccweb.imgix.net/https%3A%2F%2Fwww.classcentral.com%2Fimages%2Fcollections%2Fcollection-most-popular-all-time-social.png?auto=format&amp;ixlib=php-3.3.1&amp;w=450&amp;s=1f90fe42cee7ab47ab240f59cfb697e1">
          </a>
         </li>
        </ul>
        <div class="text-center margin-bottom-xlarge">
         <a class="btn-gradient scale-on-hover" href="collections.html" style="--gradient-one: rgb(131,197,200); --gradient-two: rgba(131,197,200,0.3); --gradient-three: rgba(131,197,200,0);">
          <span class="text-1 weight-semi icon-chevron-right-charcoal icon-right-small color-charcoal">
           संग्रह ब्राउज़ करें
          </span>
         </a>
        </div>
       </div>
      </section>
     </main>
    </div>
   
   
   
   
   
    
@endsection