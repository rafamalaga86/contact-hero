<?php

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ContactsMigration_100
 */
class ContactsMigration_100 extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        self::$_connection->createTable('Contacts', null, [
            'columns' => [
                new Column(
                    'id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'unsigned'      => true,
                        'size'          => 10,
                        'notNull'       => true,
                        'autoIncrement' => true,
                        'primary'       => true,
                    ]
                ),
                new Column(
                    'firstName',
                    [
                        'type'    => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size'    => 255,
                    ]
                ),
                new Column(
                    'lastName',
                    [
                        'type'    => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size'    => 255,
                    ]
                ),
                new Column(
                    'email',
                    [
                        'type'    => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size'    => 255,
                    ]
                ),
                new Column(
                    'picture',
                    [
                        'type'    => Column::TYPE_VARCHAR,
                        'size'    => 255,
                    ]
                ),
                new Column(
                    'description',
                    [
                        'type' => Column::TYPE_TEXT,
                    ]
                ),
                new Column(
                    'createdAt',
                    [
                        'type' => Column::TYPE_DATETIME,
                    ]
                ),
            ],
        ]);

        $shortLoremIpsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do'
            . ' eiusmod tempor incididunt ut labore et dolore magna aliqua.';

        $mediumLoremIpsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do '
            . 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,'
            . ' quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequt.';

        $longLoremIpsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod '
            . 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis '
            . 'nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '
            . 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore '
            . 'eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt '
            . 'in culpa qui officia deserunt mollit anim id est laborum.';

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Ana',
            'lastName'    => 'Jimenez',
            'email'       => 'ana@jimenez.es',
            'picture'     => 'ana.png',
            'description' => $mediumLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Cindy',
            'lastName'    => 'Sheppard',
            'email'       => 'cindy@normandy.com',
            'picture'     => 'cyndi.png',
            'description' => $mediumLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Frank',
            'lastName'    => 'Peterson',
            'email'       => 'blabla@peterson.com',
            'picture'     => 'frank.png',
            'description' => $longLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Graham',
            'lastName'    => 'Grahamson',
            'email'       => 'dfgewtr@wrtedfgsd.com',
            'picture'     => 'graham.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2013-06-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Jan',
            'lastName'    => 'Strapovska',
            'email'       => 'jan@jimeno.com',
            'picture'     => 'jan.png',
            'description' => $mediumLoremIpsum,
            'createdAt'   => '2017-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Jana',
            'lastName'    => 'Muller',
            'email'       => 'asfd@asdf.es',
            'picture'     => 'cristina.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2011-10-07 14:12:50',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Jasmina',
            'lastName'    => 'Petr',
            'email'       => 'jasmina@jimeno.com',
            'picture'     => 'jasmina.png',
            'description' => $longLoremIpsum,
            'createdAt'   => '2017-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'John',
            'lastName'    => 'Smith',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'john.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2017-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Juan',
            'lastName'    => 'García',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'juan.png',
            'description' => $longLoremIpsum,
            'createdAt'   => '2017-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Laura',
            'lastName'    => 'Ruiz',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'laura.png',
            'description' => $mediumLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Maria',
            'lastName'    => 'Stokarova',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'maria.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2013-12-21 05:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Miranda',
            'lastName'    => 'Lawson',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'miranda.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Peter',
            'lastName'    => 'Bros',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'peter.png',
            'description' => $longLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Rita',
            'lastName'    => 'Thumeyer',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'rita.png',
            'description' => $mediumLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Sandra',
            'lastName'    => 'Bennewitz',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'sandra.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2013-02-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Sascha',
            'lastName'    => 'Gloel',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'sascha.png',
            'description' => $shortLoremIpsum,
            'createdAt'   => '2014-12-01 10:59:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Sebastian',
            'lastName'    => 'Silva',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'sebastian.png',
            'description' => $longLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Tania',
            'lastName'    => 'Van Houten',
            'email'       => 'pedro@jimeno.com',
            'picture'     => 'tania.png',
            'description' => $mediumLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);

        self::$_connection->insertAsDict('contacts', [
            'firstName'   => 'Volker',
            'lastName'    => 'Doblas',
            'email'       => '1234@hotmal.com',
            'picture'     => 'volker.png',
            'description' => $longLoremIpsum,
            'createdAt'   => '2013-12-01 10:32:05',
        ]);
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('contacts');
    }
}
