<?php
namespace Mesd\Standard\UnitBundle\DataFixtures\ORM;

use Mesd\Standard\UnitBundle\Entity\Unit;
use Doctrine\Common\Persistence\ObjectManager;
use MESD\DoctrineExtensions\DependentFixtureBundle\DataFixtures\AbstractDependentFixture;

class UnitFixtures extends AbstractDependentFixture
{
    static public $count;

    public function load( ObjectManager $manager ) {
        $i = 0;

        $object = new Unit();
        $object->setLongName( 'Each' );
        $object->setShortName( 'ea' );
        $object->setTime( true );
        $object->setDescription('Session(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_each', $object );

        $object = new Unit();
        $object->setLongName( 'Time(s)' );
        $object->setShortName( 'x' );
        $object->setTime( true );
        $object->setDescription('Time(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_time', $object );

        $object = new Unit();
        $object->setLongName( 'Second' );
        $object->setShortName( 's' );
        $object->setTime( true );
        $object->setDescription('Second(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_second', $object );

        $object = new Unit();
        $object->setLongName( 'Minute' );
        $object->setShortName( 'm' );
        $object->setTime( true );
        $object->setDescription('Minute(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_minute', $object );

        $object = new Unit();
        $object->setLongName( 'Hour' );
        $object->setShortName( 'h' );
        $object->setTime( true );
        $object->setDescription('Hour(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_hour', $object );

        $object = new Unit();
        $object->setLongName( 'Day' );
        $object->setShortName( 'd' );
        $object->setTime( true );
        $object->setDescription('Day(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_day', $object );

        $object = new Unit();
        $object->setLongName( 'Week' );
        $object->setShortName( 'w' );
        $object->setTime( true );
        $object->setDescription('Week(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_week', $object );

        $object = new Unit();
        $object->setLongName( 'Month' );
        $object->setShortName( 'M' );
        $object->setTime( true );
        $object->setDescription('Month(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_month', $object );

        $object = new Unit();
        $object->setLongName( 'Quarter' );
        $object->setShortName( 'q' );
        $object->setTime( true );
        $object->setDescription('Quarter(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_quarter', $object );

        $object = new Unit();
        $object->setLongName( 'Trimester' );
        $object->setShortName( 't' );
        $object->setTime( true );
        $object->setDescription('Trimester(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_trimester', $object );

        $object = new Unit();
        $object->setLongName( 'Semester' );
        $object->setShortName( 'S' );
        $object->setTime( true );
        $object->setDescription('Semester(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_semester', $object );

        $object = new Unit();
        $object->setLongName( 'Year' );
        $object->setShortName( 'y' );
        $object->setTime( true );
        $object->setDescription('Year(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_year', $object );


        $object = new Unit();
        $object->setLongName( 'Cent' );
        $object->setShortName( 'c' );
        $object->setTime( false );
        $object->setDescription('Cent(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_cent', $object );

        $object = new Unit();
        $object->setLongName( 'Dollar' );
        $object->setShortName( '$' );
        $object->setTime( false );
        $object->setDescription('Dollar(s)');
        $manager->persist( $object );
        $this->addReference( 'unit_' . $i, $object );
        $i++;
        $this->addReference( 'unit_dollar', $object );

        self::$count = $i;
        $manager->flush();
    }
}
