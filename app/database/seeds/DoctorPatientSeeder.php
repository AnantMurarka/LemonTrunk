<?php
 
 class DoctorPatientSeeder extends Seeder {

 	public function run()
 	{
 		$count = 40;
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
	       $this->command->info('Inserting '.$x.' sample records using Faker ...');
    	    DoctorPatient::create(array(
    	        'doctor_id' 			=> '24', //$faker->numberBetween($min = 11231, $max = 15230),
				'patient_id' 			=> $faker->numberBetween($min = 30, $max = 9030),
    	    ));
	
    	}
    	$this->command->info('Doctors_patient seeded using Faker ...');
 		}

 }