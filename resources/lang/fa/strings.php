<?php
return [
    'Orders' => 'سفارشات',
    'Customers' => 'مشتریان',
    'Users' => 'کاربر',
    'Owners' => 'مالک',
    'Category' => 'دسته بندی',
    'Estate' => 'ملک',
    'Apartment' => 'آپارتمان',
    'House' => 'خانه ویلایی',
    'Rent' => 'رهن',
    'Sell' => 'فروش',
    'Edit' => 'تغییر',
    'Create' => 'افزودن',
    'Enter' => 'ورود',
    'Name' => 'نام',
    'Cases' => 'موردها',
    'Email' => 'ایمیل',
    'Management' => 'مدیریت',
    'CaseList' => 'لیست مورد ها',
    'AddCase' => ' افزودن مورد جدید',
    'OrderList' => 'لیست سفارش ها ',
    'AddOrder' => 'ثبت سفارش جدید',
    'CustomerList' => 'لیست مشتریان',
    'AddCustomer' => 'افزودن مشتری',
    'OwnerList' => 'لیست مالکان',
    'AddOwner' => 'افزودن مالک',
    'CategoryManagement' => 'مدیریت دسته بندی ها ',
    'Category.All' => 'همه ی دسته بندی ها ',
    'Search' => ' جست و جو',
    'Search.PlaceHolder' => 'دنبال چی میگردی ؟! ',

    'Nav' => [
        'title' => 'خانه',
        'dashboard' => 'داشبورد',
        'cases' => 'موردها ',
        'main category' => 'دسته بندی های اصلی',
        'order list' => 'لیست سفارشات',
        'logout' => 'خروج',
        'login' => 'ورود',
        'register' => 'ثبت نام ',
        'category_all' => 'همه',
        'category_sell' => 'فروش',
        'category_rent' => 'رهن'

    ],

    "estate" => [
        'create' => [
            'cardHeader' => 'افزودن مورد جدید',
            'title' => 'عنوان',
            'title placeholder' => 'عنوان مورد را وارد کنید',
            'type' => 'نوع آگهی',
            'price' => 'قیمت فروش یا رهن ',
            'price placeholder' => 'قیمت فروش (در صورتی که نوع آگهی رهن و اجاره است قیمت رهن را وارد کنید)',
            'rentPrice' => 'قیمت اجاره ',
            'rentPrice placeholder' => 'قیمت اجاره را وارد کنید(در صورتی که نوع آگهی اجاره است در غیر این صورت این مورد را خالی بگذارید)',
            'usage' => 'کاربری',
            'area' => 'متراژ',
            'usage placeholder' => 'کاربری ملک را وارد کنید',
            'area placeholder' => 'متراژ ملک را بر حسب متر مربع وارد کنید',
            'address' => 'آدرس ',
            'address placeholder' => 'آدرس دقیق ملک را وارد کنید',
            'picture' => 'تصویر',
            'owner' => 'مالک',
            'categories' => 'دسته بندی(ها)',
            'description' => 'توضیحات',
            'description placeholder' => 'توضیحات ملک',
            'addBtn' => 'افزودن ملک',
            'elevator' => 'آسانسور',
            'anbari' => 'انباری',
            'parking' => 'پارکینگ',
            'features' => 'امکانات',
            'build_date' => 'سال ساخت ',
            'room_count' => 'تعداد اتاق',
            'room_count placeholder' => 'تعداد اتاق'

        ],

        'index' => [
            'search' => 'جست و جو',
            'category' => 'دسته بندی',
            'view' => 'نمایش',
            'order' => 'ثبت سفارش'
        ]


    ],

    'Customer' => [
        "Create" => [
            'cardTitle' => 'افزودن مشتری',
            'name' => 'نام و نام خانوادگی',
            'fatherName' => 'نام پدر',
            'email' => 'آدرس ایمیل',
            'phone' => 'شماره تلفن همراه',
            'nationalCode' => 'کد ملی',
            'birthDate' => 'تاریخ تولد',
            'address' => 'آدرس',
            'postCode' => 'کد پستی',
            'createBtn' => 'افزودن مشتری',
            'placeHolder' => [
                'name' => 'نام و نام خانوادگی را وارد کنید',
                'fatherName' => 'نام پدر را وارد کنید',
                'email' => 'آدرس ایمیل را وارد کنید',
                'phone' => 'شماره تلفن همراه  را وارد کنید',
                'nationalCode' => 'کد ملی 10 رقمی را وارد کنید',
                'birthDate' => ' تاریخ تولد  را وارد کنید',
                'address' => ' آدرس محل سکونت  را وارد کنید',
                'postCode' => 'کد پستی محل سکونت '
            ]
        ],
        'index' => [
            'cardHeader' => 'لیست مشتریان',
            'searchBtn' => 'جست و جو',
            'searchPlaceHolder' => 'دنبال چی میگردی؟',
            'name' => 'نام',
            'national code' => 'کد ملی',
            'email' => 'آدرس ایمیل',
            'phone number' => 'شماره تلفن',
            'action' => 'عملیات',
            'edit' => 'تغییر مشخصات',
            'delete' => 'حذف',
            'not found' => 'هیچ مشتری در سیستم وجود ندارد'
        ]
    ],

    'Owner' => [
        "Create" => [
            'cardTitle' => 'افزودن مالک',
            'name' => 'نام و نام خانوادگی',
            'fatherName' => 'نام پدر',
            'email' => 'آدرس ایمیل',
            'phone' => 'شماره تلفن همراه',
            'nationalCode' => 'کد ملی',
            'birthDate' => 'تاریخ تولد',
            'address' => 'آدرس',
            'postCode' => 'کد پستی',
            'createBtn' => 'افزودن مالک',
            'placeHolder' => [
                'name' => 'نام و نام خانوادگی را وارد کنید',
                'fatherName' => 'نام پدر را وارد کنید',
                'email' => 'آدرس ایمیل را وارد کنید',
                'phone' => 'شماره تلفن همراه  را وارد کنید',
                'nationalCode' => 'کد ملی 10 رقمی را وارد کنید',
                'birthDate' => ' تاریخ تولد  را وارد کنید',
                'address' => ' آدرس محل سکونت  را وارد کنید',
                'postCode' => 'کد پستی محل سکونت '
            ]
        ],
        'index' => [
            'cardHeader' => 'لیست مالک ها',
            'searchBtn' => 'جست و جو',
            'searchPlaceHolder' => 'دنبال چی میگردی؟',
            'name' => 'نام',
            'national code' => 'کد ملی',
            'email' => 'آدرس ایمیل',
            'phone number' => 'شماره تلفن',
            'action' => 'عملیات',
            'edit' => 'تغییر مشخصات',
            'delete' => 'حذف',
            'not found' => 'هیچ مالکی در سیستم وجود ندارد'
        ]
    ],

    'Category management' => [
        'name' => 'نام',
        'action' => 'عملیات',
        'title' => 'مدیریت دسته بندی ها',
        'addBtn' => 'افزودن',
        'addPlaceHolder' => 'نام دسته بندی',
        'edit' => 'تغییر',
        'delete' => 'حذف',
    ]


];
