<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class importCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'import';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Import data from old database.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$type = $this->option('type');
        switch($type)
        {
            case 'users':
            	$this->users();
            	break;
            case 'events':
                $this->events();
                break;
            default:
                $this->info('Possible --type= values: users, events');
            	break;
        }
	}

	public function users()
    {
    	set_time_limit(30*60); // 30 Mins
        ini_set('memory_limit', '1024M');
        $this->info("Begin Loading Users");
        $counter='';

        if (($handle = fopen(url('/')."/data/user.csv", "r")) !== FALSE)
        {
            if(($data = fgetcsv($handle, null, ",")) !== FALSE)
            {
                //skip the label row
                //var_dump($data);
                $num = count($data);
                $this->info("user.csv ".$num." columns\n");
            }

            $counter=0;
            while (($data = fgetcsv($handle, null, ",")) !== FALSE)
            {  
                $counter++;
                if(count($data)!=$num)
                {
                    $this->info($counter.": column # mismatch ".count($data)."\n");
                }
                else
                {
                	$user = User::where("username","=",$data[1])->first();
                	if(empty($user))
                	{
                		/*DB::table('clients')->insert(array(
                        	'name' => $data[0],
                        	'slug' => $this->toAscii($data[0]),
                        ));*/
                		$user = new User;
                		$user->username = $data[1];
                		$user->password = $data[2];
						$user->first_name = $data[4];
						$user->last_name = $data[5];
						$user->is_admin = ($data[3] == 'Y')?1:0;
                		$user->save();
                	} else {
                		$user->username = $data[1];
                		$user->password = $data[2];
						$user->first_name = $data[4];
						$user->last_name = $data[5];
						$user->is_admin = ($data[3] == 'Y')?1:0;
                		$user->save();
                	}
                }
            }
        fclose($handle);
        }
        $this->info("Loaded $counter Users\n");
    }

    public function events()
    {
    	set_time_limit(30*60); // 30 Mins
        ini_set('memory_limit', '1024M');
        $this->info("Begin Loading Events");
        $counter=0;
        $updateCounter=0;

        if (($handle = fopen(url('/')."/data/event.csv", "r")) !== FALSE)
        {
            if(($data = fgetcsv($handle, null, ",")) !== FALSE)
            {
                //skip the label row
                //var_dump($data);
                $num = count($data);
                $this->info("event.csv ".$num." columns\n");
            }

            while (($data = fgetcsv($handle, null, ",")) !== FALSE)
            {  
                $counter++;
                if(count($data)!=$num)
                {
                    $this->info($counter.": column # mismatch ".count($data)."\n");
                }
                else
                {
                	$event = CalendarEvent::where("old_id","=",$data[0])->first();
                	if(empty($user))
                	{
                		/*DB::table('clients')->insert(array(
                        	'name' => $data[0],
                        	'slug' => $this->toAscii($data[0]),
                        ));*/
                		$event = new CalendarEvent;
                		$event->name = $data[3];
                		$event->slug = $this->toAscii($data[3]);
						$event->starts_at = $data[1];
						$event->ends_at = $data[2];
						$event->description = $data[4];
                        $event->is_featured = ($data[5]=='Y'?1:0);
                        $event->is_all_day = ($data[6]=='Y'?1:0);
						$event->old_id = $data[0];
                		$event->save();
                		$counter++;
                	} else {
                		$event->name = $data[3];
                		$event->slug = $this->toAscii($data[3]);
						$event->starts_at = $data[1];
						$event->ends_at = $data[2];
						$event->description = $data[4];
                        $event->is_featured = ($data[5]=='Y'?1:0);
                        $event->is_all_day = ($data[6]=='Y'?1:0);
						$event->old_id = $data[0];
                		$updateCounter++;
                	}
                }
            }
        fclose($handle);
        }
        $this->info("Loaded $counter and updated $updateCounter events\n");
    }

    public function toAscii($str, $replace=array(), $delimiter='-')
	{
		if( !empty($replace) ) {
			$str = str_replace((array)$replace, ' ', $str);
		}

		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

		return $clean;
	}

    public function fixMSWord($string)
    {
        $map = Array(
            '33' => '!', '34' => '"', '35' => '#', '36' => '$', '37' => '%', '38' => '&', '39' => "'", '40' => '(', '41' => ')', '42' => '*', 
            '43' => '+', '44' => ',', '45' => '-', '46' => '.', '47' => '/', '48' => '0', '49' => '1', '50' => '2', '51' => '3', '52' => '4', 
            '53' => '5', '54' => '6', '55' => '7', '56' => '8', '57' => '9', '58' => ':', '59' => ';', '60' => '<', '61' => '=', '62' => '>', 
            '63' => '?', '64' => '@', '65' => 'A', '66' => 'B', '67' => 'C', '68' => 'D', '69' => 'E', '70' => 'F', '71' => 'G', '72' => 'H', 
            '73' => 'I', '74' => 'J', '75' => 'K', '76' => 'L', '77' => 'M', '78' => 'N', '79' => 'O', '80' => 'P', '81' => 'Q', '82' => 'R', 
            '83' => 'S', '84' => 'T', '85' => 'U', '86' => 'V', '87' => 'W', '88' => 'X', '89' => 'Y', '90' => 'Z', '91' => '[', '92' => '\\', 
            '93' => ']', '94' => '^', '95' => '_', '96' => '`', '97' => 'a', '98' => 'b', '99' => 'c', '100'=> 'd', '101'=> 'e', '102'=> 'f', 
            '103'=> 'g', '104'=> 'h', '105'=> 'i', '106'=> 'j', '107'=> 'k', '108'=> 'l', '109'=> 'm', '110'=> 'n', '111'=> 'o', '112'=> 'p', 
            '113'=> 'q', '114'=> 'r', '115'=> 's', '116'=> 't', '117'=> 'u', '118'=> 'v', '119'=> 'w', '120'=> 'x', '121'=> 'y', '122'=> 'z', 
            '123'=> '{', '124'=> '|', '125'=> '}', '126'=> '~', '127'=> ' ', '128'=> '&#8364;', '129'=> ' ', '130'=> ',', '131'=> ' ', '132'=> '"', 
            '133'=> '.', '134'=> ' ', '135'=> ' ', '136'=> '^', '137'=> ' ', '138'=> ' ', '139'=> '<', '140'=> ' ', '141'=> ' ', '142'=> ' ', 
            '143'=> ' ', '144'=> ' ', '145'=> "'", '146'=> "'", '147'=> '"', '148'=> '"', '149'=> '.', '150'=> '-', '151'=> '-', '152'=> '~', 
            '153'=> ' ', '154'=> ' ', '155'=> '>', '156'=> ' ', '157'=> ' ', '158'=> ' ', '159'=> ' ', '160'=> ' ', '161'=> '¡', '162'=> '¢', 
            '163'=> '£', '164'=> '¤', '165'=> '¥', '166'=> '¦', '167'=> '§', '168'=> '¨', '169'=> '©', '170'=> 'ª', '171'=> '«', '172'=> '¬', 
            '173'=> '­', '174'=> '®', '175'=> '¯', '176'=> '°', '177'=> '±', '178'=> '²', '179'=> '³', '180'=> '´', '181'=> 'µ', '182'=> '¶', 
            '183'=> '·', '184'=> '¸', '185'=> '¹', '186'=> 'º', '187'=> '»', '188'=> '¼', '189'=> '½', '190'=> '¾', '191'=> '¿', '192'=> 'À', 
            '193'=> 'Á', '194'=> 'Â', '195'=> 'Ã', '196'=> 'Ä', '197'=> 'Å', '198'=> 'Æ', '199'=> 'Ç', '200'=> 'È', '201'=> 'É', '202'=> 'Ê', 
            '203'=> 'Ë', '204'=> 'Ì', '205'=> 'Í', '206'=> 'Î', '207'=> 'Ï', '208'=> 'Ð', '209'=> 'Ñ', '210'=> 'Ò', '211'=> 'Ó', '212'=> 'Ô', 
            '213'=> 'Õ', '214'=> 'Ö', '215'=> '×', '216'=> 'Ø', '217'=> 'Ù', '218'=> 'Ú', '219'=> 'Û', '220'=> 'Ü', '221'=> 'Ý', '222'=> 'Þ', 
            '223'=> 'ß', '224'=> 'à', '225'=> 'á', '226'=> 'â', '227'=> 'ã', '228'=> 'ä', '229'=> 'å', '230'=> 'æ', '231'=> 'ç', '232'=> 'è', 
            '233'=> 'é', '234'=> 'ê', '235'=> 'ë', '236'=> 'ì', '237'=> 'í', '238'=> 'î', '239'=> 'ï', '240'=> 'ð', '241'=> 'ñ', '242'=> 'ò', 
            '243'=> 'ó', '244'=> 'ô', '245'=> 'õ', '246'=> 'ö', '247'=> '÷', '248'=> 'ø', '249'=> 'ù', '250'=> 'ú', '251'=> 'û', '252'=> 'ü', 
            '253'=> 'ý', '254'=> 'þ', '255'=> 'ÿ'
        );

        $search = Array();
        $replace = Array();

        foreach ($map as $s => $r) {
            $search[] = chr((int)$s);
            $replace[] = $r;
        }

        return str_replace($search, $replace, $string); 
    }

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			//array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
            array('type', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
        );
	}

}
