<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafee9189260536c9f8005d6cfc1efada
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vulhata\\' => 8,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vulhata\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $classMap = array (
        'Articles' => __DIR__ . '/../..' . '/core/moduls/Articles.php',
        'ArticlesController' => __DIR__ . '/../..' . '/core/controllers/ArticlesController.php',
        'Authorization' => __DIR__ . '/../..' . '/core/classes/auth/Authorization.php',
        'Cars' => __DIR__ . '/../..' . '/core/moduls/Cars.php',
        'CarsController' => __DIR__ . '/../..' . '/core/controllers/CarsController.php',
        'CreateCategoryRentTable' => __DIR__ . '/../..' . '/core/classes/migrate/create_category_rent_table.php',
        'CreateCategoryRentTypeTable' => __DIR__ . '/../..' . '/core/classes/migrate/create_category_rent_type_table.php',
        'CreateHomeTypeHomeTable' => __DIR__ . '/../..' . '/core/classes/migrate/create_home_type_home_table.php',
        'CreateHomeTypeParcingTable' => __DIR__ . '/../..' . '/core/classes/migrate/create_home_type_parcing_table.php',
        'Db' => __DIR__ . '/../..' . '/core/library/Db.php',
        'Feed' => __DIR__ . '/../..' . '/core/moduls/Feed.php',
        'FeedController' => __DIR__ . '/../..' . '/core/controllers/FeedController.php',
        'Ficha' => __DIR__ . '/../..' . '/core/library/Ficha.php',
        'Fichadb' => __DIR__ . '/../..' . '/core/library/Fichadb.php',
        'Handler' => __DIR__ . '/../..' . '/core/moduls/Handler.php',
        'HandlerController' => __DIR__ . '/../..' . '/core/controllers/HandlerController.php',
        'HousingController' => __DIR__ . '/../..' . '/core/controllers/HousingController.php',
        'InfoController' => __DIR__ . '/../..' . '/core/controllers/InfoController.php',
        'Lyamb' => __DIR__ . '/../..' . '/core/library/Lyamb.php',
        'MainControllers' => __DIR__ . '/../..' . '/core/controllers/MainControllers.php',
        'Obuchenie' => __DIR__ . '/../..' . '/core/moduls/Obuchenie.php',
        'ProfilController' => __DIR__ . '/../..' . '/core/controllers/ProfilController.php',
        'Registration' => __DIR__ . '/../..' . '/core/classes/auth/Registration.php',
        'RentController' => __DIR__ . '/../..' . '/core/controllers/RentController.php',
        'ShopController' => __DIR__ . '/../..' . '/core/controllers/ShopController.php',
        'SystemController' => __DIR__ . '/../..' . '/core/controllers/SystemController.php',
        'Teachers' => __DIR__ . '/../..' . '/core/moduls/Teachers.php',
        'User' => __DIR__ . '/../..' . '/core/moduls/User.php',
        'UserController' => __DIR__ . '/../..' . '/core/controllers/UserController.php',
        'Valid' => __DIR__ . '/../..' . '/core/library/Valid.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafee9189260536c9f8005d6cfc1efada::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafee9189260536c9f8005d6cfc1efada::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitafee9189260536c9f8005d6cfc1efada::$classMap;

        }, null, ClassLoader::class);
    }
}
