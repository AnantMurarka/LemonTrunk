<?php
 
 class DoctorHospitalTableSeeder extends Seeder {

 	public function run()
 	{
 		$count = 10000;
		$faker = Faker\Factory::create();

    	$faker->addProvider(new Faker\Provider\en_GB\Address($faker));
    	$faker->addProvider(new Faker\Provider\en_GB\Internet($faker));
    	$faker->addProvider(new Faker\Provider\Image($faker));
    	$faker->addProvider(new Faker\Provider\Lorem($faker));
    	$faker->addProvider(new Faker\Provider\en_US\Address($faker));
		
		$this->command->info('Inserting '.$count.' sample records using Faker ...');
	
    	// $faker->seed(1234);
    	for( $x=0 ; $x<$count; $x++ )
	
    	{
	
    	    DoctorHospital::create(array(
	           'doctor_id'             => $faker->numberBetween($min = 11231, $max = 15230),
               'hospital_id'             => $faker->numberBetween($min = 30, $max = 189),
               // 'comment'                => $faker->text($maxNbChars = 280)
    	        // 'firstname' 			=> $faker->firstName($gender = null|'male'|'female'),
				// 'middlename' 			=> $faker->lastName,
				// 'lastname' 				=> $faker->lastName,
    // 	        'email' 				=> $faker->freeEmail,
    // 	        'password'				=> Hash::make('test123'),
    	        'contact'				=> $faker->phoneNumber
    // 	        'address1' 				=> $faker->streetAddress,
    // 	        // 'address3' 				=> '990',
    // 	        'address4' 				=> $faker->numberBetween($min = 1, $max = 82),
    // 	        'address5' 				=> 'RP',
    // 	        'status'				=> '0',
    // 	        'confirmation'			=> '1',
    // 	        'profilePic'			=> $faker->imageUrl($width = 100, $height = 100, 'people')
    	    ));
	
    	}
    	$this->command->info('Doctors table seeded using Faker ...');
 		}

 }