<?php 

include('../conn.php') ;
 set_time_limit(99999999);
	$arr =  array(
		'wilayas' => array(
			'01' => array(
				'id' => '1',
				'code' => '01',
				'name_ar' => 'أدرار',
				'name' => 'Adrar',
				'dairas' => array(
					'101' => array(
						'id' => '101',
						'code' => '101',
						'name_ar' => 'أدرار',
						'name' => 'Adrar',
						'communes' => array(
							'1' => array(
								'id' => '1',
								'code' => '1',
								'name_ar' => 'أدرار',
								'name' => 'Adrar',
							),
							'6' => array(
								'id' => '6',
								'code' => '6',
								'name_ar' => 'بودة',
								'name' => 'Bouda',
							),
							'13' => array(
								'id' => '13',
								'code' => '13',
								'name_ar' => 'أولاد أحمد تيمي',
								'name' => 'Ouled Ahmed Timmi',
							),
						),
					),
					'103' => array(
						'id' => '103',
						'code' => '103',
						'name_ar' => 'شروين',
						'name' => 'Charouine',
						'communes' => array(
							'7' => array(
								'id' => '7',
								'code' => '7',
								'name_ar' => 'شروين',
								'name' => 'Charouine',
							),
							'14' => array(
								'id' => '14',
								'code' => '14',
								'name_ar' => 'أولاد عيسى',
								'name' => 'Ouled Aissa',
							),
							'19' => array(
								'id' => '19',
								'code' => '19',
								'name_ar' => 'طالمين',
								'name' => 'Talmine',
							),
						),
					),
					'104' => array(
						'id' => '104',
						'code' => '104',
						'name_ar' => 'رقان',
						'name' => 'Reggane',
						'communes' => array(
							'16' => array(
								'id' => '16',
								'code' => '16',
								'name_ar' => 'رقان',
								'name' => 'Reggane',
							),
							'17' => array(
								'id' => '17',
								'code' => '17',
								'name_ar' => 'سالي',
								'name' => 'Sali',
							),
						),
					),
					'108' => array(
						'id' => '108',
						'code' => '108',
						'name_ar' => 'تسابيت',
						'name' => 'Tsabit',
						'communes' => array(
							'18' => array(
								'id' => '18',
								'code' => '18',
								'name_ar' => 'السبع',
								'name' => 'Sebaa',
							),
							'27' => array(
								'id' => '27',
								'code' => '27',
								'name_ar' => 'تسابيت',
								'name' => 'Tsabit',
							),
						),
					),
					'109' => array(
						'id' => '109',
						'code' => '109',
						'name_ar' => 'تيميمون',
						'name' => 'Timimoun  ',
						'communes' => array(
							'15' => array(
								'id' => '15',
								'code' => '15',
								'name_ar' => 'أولاد السعيد',
								'name' => 'Ouled Said',
							),
							'24' => array(
								'id' => '24',
								'code' => '24',
								'name_ar' => 'تيميمون',
								'name' => 'Timimoun',
							),
						),
					),
					'111' => array(
						'id' => '111',
						'code' => '111',
						'name_ar' => 'زاوية كنتة',
						'name' => 'Zaouiat Kounta',
						'communes' => array(
							'10' => array(
								'id' => '10',
								'code' => '10',
								'name_ar' => 'إن زغمير',
								'name' => 'In Zghmir',
							),
							'28' => array(
								'id' => '28',
								'code' => '28',
								'name_ar' => 'زاوية كنتة',
								'name' => 'Zaouiet Kounta',
							),
						),
					),
					'112' => array(
						'id' => '112',
						'code' => '112',
						'name_ar' => 'أولف',
						'name' => 'Aoulef',
						'communes' => array(
							'2' => array(
								'id' => '2',
								'code' => '2',
								'name_ar' => 'اقبلي',
								'name' => 'Akabli',
							),
							'4' => array(
								'id' => '4',
								'code' => '4',
								'name_ar' => 'أولف',
								'name' => 'Aoulef',
							),
							'22' => array(
								'id' => '22',
								'code' => '22',
								'name_ar' => 'تيمقتن',
								'name' => 'Timekten',
							),
							'26' => array(
								'id' => '26',
								'code' => '26',
								'name_ar' => 'تيت',
								'name' => 'Tit',
							),
						),
					),
					'115' => array(
						'id' => '115',
						'code' => '115',
						'name_ar' => 'فنوغيل',
						'name' => 'Fenoughil',
						'communes' => array(
							'9' => array(
								'id' => '9',
								'code' => '9',
								'name_ar' => 'فنوغيل',
								'name' => 'Fenoughil',
							),
							'20' => array(
								'id' => '20',
								'code' => '20',
								'name_ar' => 'تامنطيط',
								'name' => 'Tamantit',
							),
							'21' => array(
								'id' => '21',
								'code' => '21',
								'name_ar' => 'تامست',
								'name' => 'Tamest',
							),
						),
					),
					'116' => array(
						'id' => '116',
						'code' => '116',
						'name_ar' => 'تنركوك',
						'name' => 'Tinerkouk',
						'communes' => array(
							'11' => array(
								'id' => '11',
								'code' => '11',
								'name_ar' => 'قصر قدور',
								'name' => 'Ksar Kaddour',
							),
							'25' => array(
								'id' => '25',
								'code' => '25',
								'name_ar' => 'تنركوك',
								'name' => 'Tinerkouk',
							),
						),
					),
					'123' => array(
						'id' => '123',
						'code' => '123',
						'name_ar' => 'أوقروت',
						'name' => 'Aougrout',
						'communes' => array(
							'3' => array(
								'id' => '3',
								'code' => '3',
								'name_ar' => 'أوقروت',
								'name' => 'Aougrout',
							),
							'8' => array(
								'id' => '8',
								'code' => '8',
								'name_ar' => 'دلدول',
								'name' => 'Deldoul',
							),
							'12' => array(
								'id' => '12',
								'code' => '12',
								'name_ar' => 'المطارفة',
								'name' => 'Metarfa',
							),
						),
					),
					'125' => array(
						'id' => '125',
						'code' => '125',
						'name_ar' => 'برج باجي مختار',
						'name' => 'Bordj Badji Mokhtar',
						'communes' => array(
							'5' => array(
								'id' => '5',
								'code' => '5',
								'name_ar' => 'برج باجي مختار',
								'name' => 'Bordj Badji Mokhtar',
							),
							'23' => array(
								'id' => '23',
								'code' => '23',
								'name_ar' => 'تيمياوين',
								'name' => 'Timiaouine',
							),
						),
					),
					'10901' => array(
						'id' => '10901',
						'code' => '10901',
						'name_ar' => 'تيميمون (ولاية منتدبة)',
						'name' => 'Timimoun (Wilaya Déléguée)',
					),
					'12501' => array(
						'id' => '12501',
						'code' => '12501',
						'name_ar' => 'برج باجي مختار (ولاية منتدبة)',
						'name' => 'Bordj Badji Mokhtar (Wilaya Déléguée)',
					),
				),
			),
			'02' => array(
				'id' => '2',
				'code' => '02',
				'name_ar' => 'الشلف',
				'name' => 'Chlef',
				'dairas' => array(
					'201' => array(
						'id' => '201',
						'code' => '201',
						'name_ar' => 'الشلف',
						'name' => 'Chlef',
						'communes' => array(
							'39' => array(
								'id' => '39',
								'code' => '39',
								'name_ar' => 'الشلف',
								'name' => 'Chlef',
							),
							'54' => array(
								'id' => '54',
								'code' => '54',
								'name_ar' => 'أم الدروع',
								'name' => 'Oum Drou',
							),
							'55' => array(
								'id' => '55',
								'code' => '55',
								'name_ar' => 'سنجاس',
								'name' => 'Sendjas',
							),
						),
					),
					'202' => array(
						'id' => '202',
						'code' => '202',
						'name_ar' => 'تنس',
						'name' => 'Tenes',
						'communes' => array(
							'56' => array(
								'id' => '56',
								'code' => '56',
								'name_ar' => 'سيدي عبد الرحمن',
								'name' => 'Sidi Abderrahmane',
							),
							'57' => array(
								'id' => '57',
								'code' => '57',
								'name_ar' => 'سيدي عكاشة',
								'name' => 'Sidi Akkacha',
							),
							'62' => array(
								'id' => '62',
								'code' => '62',
								'name_ar' => 'تنس',
								'name' => 'Tenes',
							),
						),
					),
					'204' => array(
						'id' => '204',
						'code' => '204',
						'name_ar' => 'الكريمية',
						'name' => 'El Karimia',
						'communes' => array(
							'32' => array(
								'id' => '32',
								'code' => '32',
								'name_ar' => 'بني بوعتاب',
								'name' => 'Beni  Bouattab',
							),
							'42' => array(
								'id' => '42',
								'code' => '42',
								'name_ar' => 'الكريمية',
								'name' => 'El Karimia',
							),
							'44' => array(
								'id' => '44',
								'code' => '44',
								'name_ar' => 'حرشون',
								'name' => 'Harchoun',
							),
						),
					),
					'206' => array(
						'id' => '206',
						'code' => '206',
						'name_ar' => 'تاوقريت',
						'name' => 'Taougrit',
						'communes' => array(
							'40' => array(
								'id' => '40',
								'code' => '40',
								'name_ar' => 'الظهرة',
								'name' => 'Dahra',
							),
							'61' => array(
								'id' => '61',
								'code' => '61',
								'name_ar' => 'تاوقريت',
								'name' => 'Taougrit',
							),
						),
					),
					'207' => array(
						'id' => '207',
						'code' => '207',
						'name_ar' => 'بني حواء',
						'name' => 'Beni Haoua',
						'communes' => array(
							'33' => array(
								'id' => '33',
								'code' => '33',
								'name_ar' => 'بني حواء',
								'name' => 'Beni Haoua',
							),
							'37' => array(
								'id' => '37',
								'code' => '37',
								'name_ar' => 'بريرة',
								'name' => 'Breira',
							),
							'49' => array(
								'id' => '49',
								'code' => '49',
								'name_ar' => 'وادي قوسين',
								'name' => 'Oued Goussine',
							),
						),
					),
					'210' => array(
						'id' => '210',
						'code' => '210',
						'name_ar' => 'أولاد فارس',
						'name' => 'Ouled Fares',
						'communes' => array(
							'38' => array(
								'id' => '38',
								'code' => '38',
								'name_ar' => 'الشطية',
								'name' => 'Chettia',
							),
							'46' => array(
								'id' => '46',
								'code' => '46',
								'name_ar' => 'الأبيض مجاجة',
								'name' => 'Labiod Medjadja',
							),
							'53' => array(
								'id' => '53',
								'code' => '53',
								'name_ar' => 'أولاد فارس',
								'name' => 'Ouled Fares',
							),
						),
					),
					'212' => array(
						'id' => '212',
						'code' => '212',
						'name_ar' => 'بوقادير',
						'name' => 'Boukadir',
						'communes' => array(
							'35' => array(
								'id' => '35',
								'code' => '35',
								'name_ar' => 'بوقادير',
								'name' => 'Boukadir',
							),
							'50' => array(
								'id' => '50',
								'code' => '50',
								'name_ar' => 'وادي سلي',
								'name' => 'Oued Sly',
							),
							'58' => array(
								'id' => '58',
								'code' => '58',
								'name_ar' => 'الصبحة',
								'name' => 'Sobha',
							),
						),
					),
					'220' => array(
						'id' => '220',
						'code' => '220',
						'name_ar' => 'الزبوجة',
						'name' => 'Zeboudja',
						'communes' => array(
							'31' => array(
								'id' => '31',
								'code' => '31',
								'name_ar' => 'بنايرية',
								'name' => 'Benairia',
							),
							'36' => array(
								'id' => '36',
								'code' => '36',
								'name_ar' => 'بوزغاية',
								'name' => 'Bouzeghaia',
							),
							'63' => array(
								'id' => '63',
								'code' => '63',
								'name_ar' => 'الزبوجة',
								'name' => 'Zeboudja',
							),
						),
					),
					'222' => array(
						'id' => '222',
						'code' => '222',
						'name_ar' => 'أبو الحسن',
						'name' => 'Abou El Hassane',
						'communes' => array(
							'29' => array(
								'id' => '29',
								'code' => '29',
								'name_ar' => 'أبو الحسن',
								'name' => 'Abou El Hassane',
							),
							'59' => array(
								'id' => '59',
								'code' => '59',
								'name_ar' => 'تاجنة',
								'name' => 'Tadjena',
							),
							'60' => array(
								'id' => '60',
								'code' => '60',
								'name_ar' => 'تلعصة',
								'name' => 'Talassa',
							),
						),
					),
					'223' => array(
						'id' => '223',
						'code' => '223',
						'name_ar' => 'المرسى',
						'name' => 'El Marsa',
						'communes' => array(
							'43' => array(
								'id' => '43',
								'code' => '43',
								'name_ar' => 'المرسى',
								'name' => 'El Marsa',
							),
							'47' => array(
								'id' => '47',
								'code' => '47',
								'name_ar' => 'مصدق',
								'name' => 'Moussadek',
							),
						),
					),
					'229' => array(
						'id' => '229',
						'code' => '229',
						'name_ar' => 'وادي الفضة',
						'name' => 'Oued Fodda',
						'communes' => array(
							'34' => array(
								'id' => '34',
								'code' => '34',
								'name_ar' => 'بني راشد',
								'name' => 'Beni Rached',
							),
							'48' => array(
								'id' => '48',
								'code' => '48',
								'name_ar' => 'وادي الفضة',
								'name' => 'Oued Fodda',
							),
							'51' => array(
								'id' => '51',
								'code' => '51',
								'name_ar' => 'أولاد عباس',
								'name' => 'Ouled Abbes',
							),
						),
					),
					'230' => array(
						'id' => '230',
						'code' => '230',
						'name_ar' => 'أولاد بن عبد القادر',
						'name' => 'Ouled Ben Abdelkader',
						'communes' => array(
							'41' => array(
								'id' => '41',
								'code' => '41',
								'name_ar' => 'الحجاج',
								'name' => 'El Hadjadj',
							),
							'52' => array(
								'id' => '52',
								'code' => '52',
								'name_ar' => 'أولاد بن عبد القادر',
								'name' => 'Ouled Ben Abdelkader',
							),
						),
					),
					'232' => array(
						'id' => '232',
						'code' => '232',
						'name_ar' => 'عين مران',
						'name' => 'Ain Merane',
						'communes' => array(
							'30' => array(
								'id' => '30',
								'code' => '30',
								'name_ar' => 'عين مران',
								'name' => 'Ain Merane',
							),
							'45' => array(
								'id' => '45',
								'code' => '45',
								'name_ar' => 'الهرانفة',
								'name' => 'Herenfa',
							),
						),
					),
				),
			),
			'03' => array(
				'id' => '3',
				'code' => '03',
				'name_ar' => 'الأغواط',
				'name' => 'Laghouat',
				'dairas' => array(
					'301' => array(
						'id' => '301',
						'code' => '301',
						'name_ar' => 'الأغواط',
						'name' => 'Laghouat',
						'communes' => array(
							'79' => array(
								'id' => '79',
								'code' => '79',
								'name_ar' => 'الأغواط',
								'name' => 'Laghouat',
							),
						),
					),
					'302' => array(
						'id' => '302',
						'code' => '302',
						'name_ar' => 'قصر الحيران',
						'name' => 'Ksar El Hirane',
						'communes' => array(
							'68' => array(
								'id' => '68',
								'code' => '68',
								'name_ar' => 'بن ناصر بن شهرة',
								'name' => 'Benacer Benchohra',
							),
							'78' => array(
								'id' => '78',
								'code' => '78',
								'name_ar' => 'قصر الحيران',
								'name' => 'Ksar El Hirane',
							),
						),
					),
					'304' => array(
						'id' => '304',
						'code' => '304',
						'name_ar' => 'سيدي مخلوف',
						'name' => 'Sidi Makhlouf',
						'communes' => array(
							'70' => array(
								'id' => '70',
								'code' => '70',
								'name_ar' => 'العسافية',
								'name' => 'El Assafia',
							),
							'84' => array(
								'id' => '84',
								'code' => '84',
								'name_ar' => 'سيدي مخلوف',
								'name' => 'Sidi Makhlouf',
							),
						),
					),
					'306' => array(
						'id' => '306',
						'code' => '306',
						'name_ar' => 'حاسي الرمل',
						'name' => 'Hassi R\'mel',
						'communes' => array(
							'75' => array(
								'id' => '75',
								'code' => '75',
								'name_ar' => 'حاسي الدلاعة',
								'name' => 'Hassi Delaa',
							),
							'76' => array(
								'id' => '76',
								'code' => '76',
								'name_ar' => 'حاسي الرمل',
								'name' => 'Hassi R\'mel',
							),
						),
					),
					'307' => array(
						'id' => '307',
						'code' => '307',
						'name_ar' => 'عين ماضي',
						'name' => 'Ain Madhi',
						'communes' => array(
							'65' => array(
								'id' => '65',
								'code' => '65',
								'name_ar' => 'عين ماضي',
								'name' => 'Ain Madhi',
							),
							'72' => array(
								'id' => '72',
								'code' => '72',
								'name_ar' => 'الحويطة',
								'name' => 'El Haouaita',
							),
							'77' => array(
								'id' => '77',
								'code' => '77',
								'name_ar' => 'الخنق',
								'name' => 'Kheneg',
							),
							'85' => array(
								'id' => '85',
								'code' => '85',
								'name_ar' => 'تاجموت',
								'name' => 'Tadjemout',
							),
							'86' => array(
								'id' => '86',
								'code' => '86',
								'name_ar' => 'تاجرونة',
								'name' => 'Tadjrouna',
							),
						),
					),
					'310' => array(
						'id' => '310',
						'code' => '310',
						'name_ar' => 'قتلة سيدي سعيد',
						'name' => 'Gueltat Sidi Saad',
						'communes' => array(
							'66' => array(
								'id' => '66',
								'code' => '66',
								'name_ar' => 'عين سيدي علي',
								'name' => 'Ain Sidi Ali',
							),
							'67' => array(
								'id' => '67',
								'code' => '67',
								'name_ar' => 'البيضاء',
								'name' => 'El Beidha',
							),
							'73' => array(
								'id' => '73',
								'code' => '73',
								'name_ar' => 'قلتة سيدي سعد',
								'name' => 'Gueltat Sidi Saad',
							),
						),
					),
					'313' => array(
						'id' => '313',
						'code' => '313',
						'name_ar' => 'بريدة',
						'name' => 'Brida',
						'communes' => array(
							'69' => array(
								'id' => '69',
								'code' => '69',
								'name_ar' => 'بريدة',
								'name' => 'Brida',
							),
							'74' => array(
								'id' => '74',
								'code' => '74',
								'name_ar' => 'الحاج مشري',
								'name' => 'Hadj Mechri',
							),
							'87' => array(
								'id' => '87',
								'code' => '87',
								'name_ar' => 'تاويالة',
								'name' => 'Taouiala',
							),
						),
					),
					'314' => array(
						'id' => '314',
						'code' => '314',
						'name_ar' => 'الغيشة',
						'name' => 'El Ghicha',
						'communes' => array(
							'71' => array(
								'id' => '71',
								'code' => '71',
								'name_ar' => 'الغيشة',
								'name' => 'El Ghicha',
							),
						),
					),
					'319' => array(
						'id' => '319',
						'code' => '319',
						'name_ar' => 'أفلو',
						'name' => 'Aflou',
						'communes' => array(
							'64' => array(
								'id' => '64',
								'code' => '64',
								'name_ar' => 'أفلو',
								'name' => 'Aflou',
							),
							'82' => array(
								'id' => '82',
								'code' => '82',
								'name_ar' => 'سبقاق',
								'name' => 'Sebgag',
							),
							'83' => array(
								'id' => '83',
								'code' => '83',
								'name_ar' => 'سيدي بوزيد',
								'name' => 'Sidi Bouzid',
							),
						),
					),
					'321' => array(
						'id' => '321',
						'code' => '321',
						'name_ar' => 'وادي مرة',
						'name' => 'Oued Morra',
						'communes' => array(
							'80' => array(
								'id' => '80',
								'code' => '80',
								'name_ar' => 'وادي مرة',
								'name' => 'Oued Morra',
							),
							'81' => array(
								'id' => '81',
								'code' => '81',
								'name_ar' => 'وادي مزي',
								'name' => 'Oued M\'zi',
							),
						),
					),
				),
			),
			'04' => array(
				'id' => '4',
				'code' => '04',
				'name_ar' => 'أم البواقي',
				'name' => 'Oum El Bouaghi',
				'dairas' => array(
					'401' => array(
						'id' => '401',
						'code' => '401',
						'name_ar' => 'أم البواقي',
						'name' => 'Oum El Bouaghi',
						'communes' => array(
							'94' => array(
								'id' => '94',
								'code' => '94',
								'name_ar' => 'عين الزيتون',
								'name' => 'Ain Zitoun',
							),
							'112' => array(
								'id' => '112',
								'code' => '112',
								'name_ar' => 'أم البواقي',
								'name' => 'Oum El Bouaghi',
							),
						),
					),
					'402' => array(
						'id' => '402',
						'code' => '402',
						'name_ar' => 'عين البيضاء',
						'name' => 'Ain Beida',
						'communes' => array(
							'89' => array(
								'id' => '89',
								'code' => '89',
								'name_ar' => 'عين البيضاء',
								'name' => 'Ain Beida',
							),
							'96' => array(
								'id' => '96',
								'code' => '96',
								'name_ar' => 'بريش',
								'name' => 'Berriche',
							),
							'116' => array(
								'id' => '116',
								'code' => '116',
								'name_ar' => 'الزرق',
								'name' => 'Zorg',
							),
						),
					),
					'403' => array(
						'id' => '403',
						'code' => '403',
						'name_ar' => 'عين مليلة',
						'name' => 'Ain M\'lila',
						'communes' => array(
							'93' => array(
								'id' => '93',
								'code' => '93',
								'name_ar' => 'عين مليلة',
								'name' => 'Ain M\'lila',
							),
							'109' => array(
								'id' => '109',
								'code' => '109',
								'name_ar' => 'أولاد قاسم',
								'name' => 'Ouled Gacem',
							),
							'110' => array(
								'id' => '110',
								'code' => '110',
								'name_ar' => 'أولاد حملة',
								'name' => 'Ouled Hamla',
							),
						),
					),
					'406' => array(
						'id' => '406',
						'code' => '406',
						'name_ar' => 'سيقوس',
						'name' => 'Sigus',
						'communes' => array(
							'99' => array(
								'id' => '99',
								'code' => '99',
								'name_ar' => 'العامرية',
								'name' => 'El Amiria',
							),
							'114' => array(
								'id' => '114',
								'code' => '114',
								'name_ar' => 'سيقوس',
								'name' => 'Sigus',
							),
						),
					),
					'408' => array(
						'id' => '408',
						'code' => '408',
						'name_ar' => 'عين ببوش',
						'name' => 'Ain Babouche',
						'communes' => array(
							'88' => array(
								'id' => '88',
								'code' => '88',
								'name_ar' => 'عين ببوش',
								'name' => 'Ain Babouche',
							),
							'90' => array(
								'id' => '90',
								'code' => '90',
								'name_ar' => 'عين الديس',
								'name' => 'Ain Diss',
							),
						),
					),
					'411' => array(
						'id' => '411',
						'code' => '411',
						'name_ar' => 'الضلعة',
						'name' => 'Dhalaa',
						'communes' => array(
							'98' => array(
								'id' => '98',
								'code' => '98',
								'name_ar' => 'الضلعة',
								'name' => 'Dhalaa',
							),
							'101' => array(
								'id' => '101',
								'code' => '101',
								'name_ar' => 'الجازية',
								'name' => 'El Djazia',
							),
						),
					),
					'412' => array(
						'id' => '412',
						'code' => '412',
						'name_ar' => 'عين كرشة',
						'name' => 'Ain Kercha',
						'communes' => array(
							'92' => array(
								'id' => '92',
								'code' => '92',
								'name_ar' => 'عين كرشة',
								'name' => 'Ain Kercha',
							),
							'103' => array(
								'id' => '103',
								'code' => '103',
								'name_ar' => 'الحرملية',
								'name' => 'El Harmilia',
							),
							'105' => array(
								'id' => '105',
								'code' => '105',
								'name_ar' => 'هنشير تومغني',
								'name' => 'Hanchir Toumghani',
							),
						),
					),
					'416' => array(
						'id' => '416',
						'code' => '416',
						'name_ar' => 'فكيرينة',
						'name' => 'F\'kirina',
						'communes' => array(
							'104' => array(
								'id' => '104',
								'code' => '104',
								'name_ar' => 'فكيرينة',
								'name' => 'Fkirina',
							),
							'108' => array(
								'id' => '108',
								'code' => '108',
								'name_ar' => 'وادي نيني',
								'name' => 'Oued Nini',
							),
						),
					),
					'417' => array(
						'id' => '417',
						'code' => '417',
						'name_ar' => 'سوق نعمان',
						'name' => 'Souk Naamane',
						'communes' => array(
							'97' => array(
								'id' => '97',
								'code' => '97',
								'name_ar' => 'بئر الشهداء',
								'name' => 'Bir Chouhada',
							),
							'111' => array(
								'id' => '111',
								'code' => '111',
								'name_ar' => 'أولاد زواي',
								'name' => 'Ouled Zouai',
							),
							'115' => array(
								'id' => '115',
								'code' => '115',
								'name_ar' => 'سوق نعمان',
								'name' => 'Souk Naamane',
							),
						),
					),
					'422' => array(
						'id' => '422',
						'code' => '422',
						'name_ar' => 'قصر الصباحي',
						'name' => 'Ksar Sbahi',
						'communes' => array(
							'106' => array(
								'id' => '106',
								'code' => '106',
								'name_ar' => 'قصر الصباحي',
								'name' => 'Ksar Sbahi',
							),
						),
					),
					'424' => array(
						'id' => '424',
						'code' => '424',
						'name_ar' => 'مسكيانة',
						'name' => 'Meskiana',
						'communes' => array(
							'95' => array(
								'id' => '95',
								'code' => '95',
								'name_ar' => 'بحير الشرقي',
								'name' => 'Behir Chergui',
							),
							'100' => array(
								'id' => '100',
								'code' => '100',
								'name_ar' => 'البلالة',
								'name' => 'El Belala',
							),
							'107' => array(
								'id' => '107',
								'code' => '107',
								'name_ar' => 'مسكيانة',
								'name' => 'Meskiana',
							),
							'113' => array(
								'id' => '113',
								'code' => '113',
								'name_ar' => 'الرحية',
								'name' => 'Rahia',
							),
						),
					),
					'425' => array(
						'id' => '425',
						'code' => '425',
						'name_ar' => 'عين فكرون',
						'name' => 'Ain Fekroun',
						'communes' => array(
							'91' => array(
								'id' => '91',
								'code' => '91',
								'name_ar' => 'عين فكرون',
								'name' => 'Ain Fekroun',
							),
							'102' => array(
								'id' => '102',
								'code' => '102',
								'name_ar' => 'الفجوج بوغرارة سعودي',
								'name' => 'El Fedjoudj Boughrara Sa',
							),
						),
					),
				),
			),
			'05' => array(
				'id' => '5',
				'code' => '05',
				'name_ar' => 'باتنة',
				'name' => 'Batna',
				'dairas' => array(
					'501' => array(
						'id' => '501',
						'code' => '501',
						'name_ar' => 'باتنة',
						'name' => 'Batna',
						'communes' => array(
							'123' => array(
								'id' => '123',
								'code' => '123',
								'name_ar' => 'باتنة',
								'name' => 'Batna',
							),
							'136' => array(
								'id' => '136',
								'code' => '136',
								'name_ar' => 'فسديس',
								'name' => 'Fesdis',
							),
							'154' => array(
								'id' => '154',
								'code' => '154',
								'name_ar' => 'وادي الشعبة',
								'name' => 'Oued Chaaba',
							),
						),
					),
					'504' => array(
						'id' => '504',
						'code' => '504',
						'name_ar' => 'مروانة',
						'name' => 'Merouana',
						'communes' => array(
							'141' => array(
								'id' => '141',
								'code' => '141',
								'name_ar' => 'حيدوسة',
								'name' => 'Hidoussa',
							),
							'145' => array(
								'id' => '145',
								'code' => '145',
								'name_ar' => 'قصر بلزمة',
								'name' => 'Ksar Bellezma',
							),
							'152' => array(
								'id' => '152',
								'code' => '152',
								'name_ar' => 'مروانة',
								'name' => 'Merouana',
							),
							'155' => array(
								'id' => '155',
								'code' => '155',
								'name_ar' => 'وادي الماء',
								'name' => 'Oued El Ma',
							),
						),
					),
					'505' => array(
						'id' => '505',
						'code' => '505',
						'name_ar' => 'سريانة',
						'name' => 'Seriana',
						'communes' => array(
							'147' => array(
								'id' => '147',
								'code' => '147',
								'name_ar' => 'لازرو',
								'name' => 'Lazrou',
							),
							'167' => array(
								'id' => '167',
								'code' => '167',
								'name_ar' => 'سريانة',
								'name' => 'Seriana',
							),
							'177' => array(
								'id' => '177',
								'code' => '177',
								'name_ar' => 'زانة البيضاء',
								'name' => 'Zanet El Beida',
							),
						),
					),
					'506' => array(
						'id' => '506',
						'code' => '506',
						'name_ar' => 'منعة',
						'name' => 'Menaa',
						'communes' => array(
							'151' => array(
								'id' => '151',
								'code' => '151',
								'name_ar' => 'منعة',
								'name' => 'Menaa',
							),
							'174' => array(
								'id' => '174',
								'code' => '174',
								'name_ar' => 'تغرغار',
								'name' => 'Tigharghar',
							),
						),
					),
					'507' => array(
						'id' => '507',
						'code' => '507',
						'name_ar' => 'المعذر',
						'name' => 'El Madher',
						'communes' => array(
							'119' => array(
								'id' => '119',
								'code' => '119',
								'name_ar' => 'عين ياقوت',
								'name' => 'Ain Yagout',
							),
							'128' => array(
								'id' => '128',
								'code' => '128',
								'name_ar' => 'بومية',
								'name' => 'Boumia',
							),
							'132' => array(
								'id' => '132',
								'code' => '132',
								'name_ar' => 'جرمة',
								'name' => 'Djerma',
							),
							'135' => array(
								'id' => '135',
								'code' => '135',
								'name_ar' => 'المعذر',
								'name' => 'El Madher',
							),
						),
					),
					'508' => array(
						'id' => '508',
						'code' => '508',
						'name_ar' => 'تازولت',
						'name' => 'Tazoult',
						'communes' => array(
							'162' => array(
								'id' => '162',
								'code' => '162',
								'name_ar' => 'عيون العصافير',
								'name' => 'Ouyoun El Assafir',
							),
							'171' => array(
								'id' => '171',
								'code' => '171',
								'name_ar' => 'تازولت',
								'name' => 'Tazoult',
							),
						),
					),
					'509' => array(
						'id' => '509',
						'code' => '509',
						'name_ar' => 'نقاوس',
						'name' => 'N\'gaous',
						'communes' => array(
							'127' => array(
								'id' => '127',
								'code' => '127',
								'name_ar' => 'بومقر',
								'name' => 'Boumagueur',
							),
							'153' => array(
								'id' => '153',
								'code' => '153',
								'name_ar' => 'نقاوس',
								'name' => 'N Gaous',
							),
							'165' => array(
								'id' => '165',
								'code' => '165',
								'name_ar' => 'سفيان',
								'name' => 'Sefiane',
							),
						),
					),
					'516' => array(
						'id' => '516',
						'code' => '516',
						'name_ar' => 'أريس',
						'name' => 'Arris',
						'communes' => array(
							'120' => array(
								'id' => '120',
								'code' => '120',
								'name_ar' => 'أريس',
								'name' => 'Arris',
							),
							'173' => array(
								'id' => '173',
								'code' => '173',
								'name_ar' => 'تيغانمين',
								'name' => 'Tighanimine',
							),
						),
					),
					'519' => array(
						'id' => '519',
						'code' => '519',
						'name_ar' => 'عين جاسر',
						'name' => 'Ain Djasser',
						'communes' => array(
							'117' => array(
								'id' => '117',
								'code' => '117',
								'name_ar' => 'عين جاسر',
								'name' => 'Ain Djasser',
							),
							'134' => array(
								'id' => '134',
								'code' => '134',
								'name_ar' => 'الحاسي',
								'name' => 'El Hassi',
							),
						),
					),
					'529' => array(
						'id' => '529',
						'code' => '529',
						'name_ar' => 'سقانة',
						'name' => 'Seggana',
						'communes' => array(
							'166' => array(
								'id' => '166',
								'code' => '166',
								'name_ar' => 'سقانة',
								'name' => 'Seggana',
							),
							'175' => array(
								'id' => '175',
								'code' => '175',
								'name_ar' => 'تيلاطو',
								'name' => 'Tilatou',
							),
						),
					),
					'530' => array(
						'id' => '530',
						'code' => '530',
						'name_ar' => 'إشمول',
						'name' => 'Ichemoul',
						'communes' => array(
							'137' => array(
								'id' => '137',
								'code' => '137',
								'name_ar' => 'فم الطوب',
								'name' => 'Foum Toub',
							),
							'142' => array(
								'id' => '142',
								'code' => '142',
								'name_ar' => 'إشمول',
								'name' => 'Ichemoul',
							),
							'143' => array(
								'id' => '143',
								'code' => '143',
								'name_ar' => 'إينوغيسن',
								'name' => 'Inoughissen',
							),
						),
					),
					'535' => array(
						'id' => '535',
						'code' => '535',
						'name_ar' => 'بوزينة',
						'name' => 'Bouzina',
						'communes' => array(
							'129' => array(
								'id' => '129',
								'code' => '129',
								'name_ar' => 'بوزينة',
								'name' => 'Bouzina',
							),
							'146' => array(
								'id' => '146',
								'code' => '146',
								'name_ar' => 'لارباع',
								'name' => 'Larbaa',
							),
						),
					),
					'536' => array(
						'id' => '536',
						'code' => '536',
						'name_ar' => 'الشمرة',
						'name' => 'Chemora',
						'communes' => array(
							'126' => array(
								'id' => '126',
								'code' => '126',
								'name_ar' => 'بولهيلات',
								'name' => 'Boulhilat',
							),
							'130' => array(
								'id' => '130',
								'code' => '130',
								'name_ar' => 'الشمرة',
								'name' => 'Chemora',
							),
						),
					),
					'542' => array(
						'id' => '542',
						'code' => '542',
						'name_ar' => 'بريكة',
						'name' => 'Barika',
						'communes' => array(
							'122' => array(
								'id' => '122',
								'code' => '122',
								'name_ar' => 'بريكة',
								'name' => 'Barika',
							),
							'125' => array(
								'id' => '125',
								'code' => '125',
								'name_ar' => 'بيطام',
								'name' => 'Bitam',
							),
							'149' => array(
								'id' => '149',
								'code' => '149',
								'name_ar' => 'إمدوكل',
								'name' => 'M Doukal',
							),
						),
					),
					'543' => array(
						'id' => '543',
						'code' => '543',
						'name_ar' => 'الجزار',
						'name' => 'Djezzar',
						'communes' => array(
							'121' => array(
								'id' => '121',
								'code' => '121',
								'name_ar' => 'عزيل عبد القادر',
								'name' => 'Azil Abedelkader',
							),
							'133' => array(
								'id' => '133',
								'code' => '133',
								'name_ar' => 'الجزار',
								'name' => 'Djezzar',
							),
							'157' => array(
								'id' => '157',
								'code' => '157',
								'name_ar' => 'أولاد عمار',
								'name' => 'Ouled Ammar',
							),
						),
					),
					'544' => array(
						'id' => '544',
						'code' => '544',
						'name_ar' => 'تكوت',
						'name' => 'Tkout',
						'communes' => array(
							'138' => array(
								'id' => '138',
								'code' => '138',
								'name_ar' => 'غسيرة',
								'name' => 'Ghassira',
							),
							'144' => array(
								'id' => '144',
								'code' => '144',
								'name_ar' => 'كيمل',
								'name' => 'Kimmel',
							),
							'168' => array(
								'id' => '168',
								'code' => '168',
								'name_ar' => 'تكوت',
								'name' => 'T Kout',
							),
						),
					),
					'545' => array(
						'id' => '545',
						'code' => '545',
						'name_ar' => 'عين التوتة',
						'name' => 'Ain Touta',
						'communes' => array(
							'118' => array(
								'id' => '118',
								'code' => '118',
								'name_ar' => 'عين التوتة',
								'name' => 'Ain Touta',
							),
							'124' => array(
								'id' => '124',
								'code' => '124',
								'name_ar' => 'بني فضالة الحقانية',
								'name' => 'Beni Foudhala El Hakania',
							),
							'150' => array(
								'id' => '150',
								'code' => '150',
								'name_ar' => 'معافة',
								'name' => 'Maafa',
							),
							'158' => array(
								'id' => '158',
								'code' => '158',
								'name_ar' => 'أولاد عوف',
								'name' => 'Ouled Aouf',
							),
						),
					),
					'547' => array(
						'id' => '547',
						'code' => '547',
						'name_ar' => 'ثنية العابد',
						'name' => 'Theniet El Abed',
						'communes' => array(
							'131' => array(
								'id' => '131',
								'code' => '131',
								'name_ar' => 'شير',
								'name' => 'Chir',
							),
							'156' => array(
								'id' => '156',
								'code' => '156',
								'name_ar' => 'وادي الطاقة',
								'name' => 'Oued Taga',
							),
							'172' => array(
								'id' => '172',
								'code' => '172',
								'name_ar' => 'ثنية العابد',
								'name' => 'Teniet El Abed',
							),
						),
					),
					'550' => array(
						'id' => '550',
						'code' => '550',
						'name_ar' => 'تيمقاد',
						'name' => 'Timgad',
						'communes' => array(
							'159' => array(
								'id' => '159',
								'code' => '159',
								'name_ar' => 'أولاد فاضل',
								'name' => 'Ouled Fadel',
							),
							'176' => array(
								'id' => '176',
								'code' => '176',
								'name_ar' => 'تيمقاد',
								'name' => 'Timgad',
							),
						),
					),
					'551' => array(
						'id' => '551',
						'code' => '551',
						'name_ar' => 'رأس العيون',
						'name' => 'Ras El Aioun',
						'communes' => array(
							'139' => array(
								'id' => '139',
								'code' => '139',
								'name_ar' => 'القصبات',
								'name' => 'Gosbat',
							),
							'140' => array(
								'id' => '140',
								'code' => '140',
								'name_ar' => 'القيقبة',
								'name' => 'Guigba',
							),
							'160' => array(
								'id' => '160',
								'code' => '160',
								'name_ar' => 'أولاد سلام',
								'name' => 'Ouled Sellem',
							),
							'163' => array(
								'id' => '163',
								'code' => '163',
								'name_ar' => 'الرحبات',
								'name' => 'Rahbat',
							),
							'164' => array(
								'id' => '164',
								'code' => '164',
								'name_ar' => 'رأس العيون',
								'name' => 'Ras El Aioun',
							),
							'169' => array(
								'id' => '169',
								'code' => '169',
								'name_ar' => 'تالخمت',
								'name' => 'Talkhamt',
							),
						),
					),
					'553' => array(
						'id' => '553',
						'code' => '553',
						'name_ar' => 'أولاد سي سليمان',
						'name' => 'Ouled Si Slimane',
						'communes' => array(
							'148' => array(
								'id' => '148',
								'code' => '148',
								'name_ar' => 'لمسان',
								'name' => 'Lemcene',
							),
							'161' => array(
								'id' => '161',
								'code' => '161',
								'name_ar' => 'أولاد سي سليمان',
								'name' => 'Ouled Si Slimane',
							),
							'170' => array(
								'id' => '170',
								'code' => '170',
								'name_ar' => 'تاكسلانت',
								'name' => 'Taxlent',
							),
						),
					),
				),
			),
			'06' => array(
				'id' => '6',
				'code' => '06',
				'name_ar' => 'بجاية',
				'name' => 'Béjaïa',
				'dairas' => array(
					'601' => array(
						'id' => '601',
						'code' => '601',
						'name_ar' => 'بجاية',
						'name' => 'Bejaia',
						'communes' => array(
							'187' => array(
								'id' => '187',
								'code' => '187',
								'name_ar' => 'بجاية',
								'name' => 'Bejaia',
							),
							'210' => array(
								'id' => '210',
								'code' => '210',
								'name_ar' => 'وادي غير',
								'name' => 'Oued Ghir',
							),
						),
					),
					'602' => array(
						'id' => '602',
						'code' => '602',
						'name_ar' => 'أميزور',
						'name' => 'Amizour',
						'communes' => array(
							'184' => array(
								'id' => '184',
								'code' => '184',
								'name_ar' => 'أميزور',
								'name' => 'Amizour',
							),
							'188' => array(
								'id' => '188',
								'code' => '188',
								'name_ar' => 'بني جليل',
								'name' => 'Beni Djellil',
							),
							'202' => array(
								'id' => '202',
								'code' => '202',
								'name_ar' => 'فرعون',
								'name' => 'Feraoun',
							),
							'214' => array(
								'id' => '214',
								'code' => '214',
								'name_ar' => 'سمعون',
								'name' => 'Smaoun',
							),
						),
					),
					'607' => array(
						'id' => '607',
						'code' => '607',
						'name_ar' => 'تيمزريت',
						'name' => 'Timezrit',
						'communes' => array(
							'226' => array(
								'id' => '226',
								'code' => '226',
								'name_ar' => 'تيمزريت',
								'name' => 'Timezrit',
							),
						),
					),
					'608' => array(
						'id' => '608',
						'code' => '608',
						'name_ar' => 'سوق الإثنين',
						'name' => 'Souk El Tenine',
						'communes' => array(
							'209' => array(
								'id' => '209',
								'code' => '209',
								'name_ar' => 'مالبو',
								'name' => 'Melbou',
							),
							'215' => array(
								'id' => '215',
								'code' => '215',
								'name_ar' => 'سوق لإثنين',
								'name' => 'Souk El Tenine',
							),
							'219' => array(
								'id' => '219',
								'code' => '219',
								'name_ar' => 'تامريجت',
								'name' => 'Tamridjet',
							),
						),
					),
					'611' => array(
						'id' => '611',
						'code' => '611',
						'name_ar' => 'تيشي',
						'name' => 'Tichy',
						'communes' => array(
							'194' => array(
								'id' => '194',
								'code' => '194',
								'name_ar' => 'بوخليفة',
								'name' => 'Boukhelifa',
							),
							'217' => array(
								'id' => '217',
								'code' => '217',
								'name_ar' => 'تالة حمزة',
								'name' => 'Tala Hamza',
							),
							'224' => array(
								'id' => '224',
								'code' => '224',
								'name_ar' => 'تيشي',
								'name' => 'Tichy',
							),
						),
					),
					'617' => array(
						'id' => '617',
						'code' => '617',
						'name_ar' => 'إغيل علي',
						'name' => 'Ighil Ali',
						'communes' => array(
							'179' => array(
								'id' => '179',
								'code' => '179',
								'name_ar' => 'أيت رزين',
								'name' => 'Ait R\'zine',
							),
							'204' => array(
								'id' => '204',
								'code' => '204',
								'name_ar' => 'إغيل علي',
								'name' => 'Ighil-Ali',
							),
						),
					),
					'620' => array(
						'id' => '620',
						'code' => '620',
						'name_ar' => 'درقينة',
						'name' => 'Darguina',
						'communes' => array(
							'180' => array(
								'id' => '180',
								'code' => '180',
								'name_ar' => 'أيت إسماعيل',
								'name' => 'Ait-Smail',
							),
							'197' => array(
								'id' => '197',
								'code' => '197',
								'name_ar' => 'درقينة',
								'name' => 'Darguina',
							),
							'221' => array(
								'id' => '221',
								'code' => '221',
								'name_ar' => 'تاسكريوت',
								'name' => 'Taskriout',
							),
						),
					),
					'622' => array(
						'id' => '622',
						'code' => '622',
						'name_ar' => 'أوقاس',
						'name' => 'Aokas',
						'communes' => array(
							'185' => array(
								'id' => '185',
								'code' => '185',
								'name_ar' => 'أوقاس',
								'name' => 'Aokas',
							),
							'228' => array(
								'id' => '228',
								'code' => '228',
								'name_ar' => 'تيزي نبربر',
								'name' => 'Tizi-N\'berber',
							),
						),
					),
					'624' => array(
						'id' => '624',
						'code' => '624',
						'name_ar' => 'أدكار',
						'name' => 'Adekar',
						'communes' => array(
							'178' => array(
								'id' => '178',
								'code' => '178',
								'name_ar' => 'أدكار',
								'name' => 'Adekar',
							),
							'189' => array(
								'id' => '189',
								'code' => '189',
								'name_ar' => 'بني كسيلة',
								'name' => 'Beni K\'sila',
							),
							'220' => array(
								'id' => '220',
								'code' => '220',
								'name_ar' => 'تاوريرت إغيل',
								'name' => 'Taourit Ighil',
							),
						),
					),
					'625' => array(
						'id' => '625',
						'code' => '625',
						'name_ar' => 'أقبو',
						'name' => 'Akbou',
						'communes' => array(
							'181' => array(
								'id' => '181',
								'code' => '181',
								'name_ar' => 'أقبو',
								'name' => 'Akbou',
							),
							'195' => array(
								'id' => '195',
								'code' => '195',
								'name_ar' => 'شلاطة',
								'name' => 'Chellata',
							),
							'205' => array(
								'id' => '205',
								'code' => '205',
								'name_ar' => 'اغرم',
								'name' => 'Ighram',
							),
							'218' => array(
								'id' => '218',
								'code' => '218',
								'name_ar' => 'تامقرة',
								'name' => 'Tamokra',
							),
						),
					),
					'626' => array(
						'id' => '626',
						'code' => '626',
						'name_ar' => 'صدوق',
						'name' => 'Seddouk',
						'communes' => array(
							'183' => array(
								'id' => '183',
								'code' => '183',
								'name_ar' => 'أمالو',
								'name' => 'Amalou',
							),
							'193' => array(
								'id' => '193',
								'code' => '193',
								'name_ar' => 'بوحمزة',
								'name' => 'Bouhamza',
							),
							'208' => array(
								'id' => '208',
								'code' => '208',
								'name_ar' => 'مسيسنة',
								'name' => 'M\'cisna',
							),
							'211' => array(
								'id' => '211',
								'code' => '211',
								'name_ar' => 'صدوق',
								'name' => 'Seddouk',
							),
						),
					),
					'627' => array(
						'id' => '627',
						'code' => '627',
						'name_ar' => 'تازملت',
						'name' => 'Tazmalt',
						'communes' => array(
							'190' => array(
								'id' => '190',
								'code' => '190',
								'name_ar' => 'بني مليكش',
								'name' => 'Beni-Mallikeche',
							),
							'192' => array(
								'id' => '192',
								'code' => '192',
								'name_ar' => 'بو جليل',
								'name' => 'Boudjellil',
							),
							'222' => array(
								'id' => '222',
								'code' => '222',
								'name_ar' => 'تازمالت',
								'name' => 'Tazmalt',
							),
						),
					),
					'629' => array(
						'id' => '629',
						'code' => '629',
						'name_ar' => 'شميني',
						'name' => 'Chemini',
						'communes' => array(
							'182' => array(
								'id' => '182',
								'code' => '182',
								'name_ar' => 'أكفادو',
								'name' => 'Akfadou',
							),
							'196' => array(
								'id' => '196',
								'code' => '196',
								'name_ar' => 'شميني',
								'name' => 'Chemini',
							),
							'216' => array(
								'id' => '216',
								'code' => '216',
								'name_ar' => 'سوق اوفلا',
								'name' => 'Souk Oufella',
							),
							'223' => array(
								'id' => '223',
								'code' => '223',
								'name_ar' => 'طيبان',
								'name' => 'Tibane',
							),
						),
					),
					'634' => array(
						'id' => '634',
						'code' => '634',
						'name_ar' => 'برباشة',
						'name' => 'Barbacha',
						'communes' => array(
							'186' => array(
								'id' => '186',
								'code' => '186',
								'name_ar' => 'برباشة',
								'name' => 'Barbacha',
							),
							'206' => array(
								'id' => '206',
								'code' => '206',
								'name_ar' => 'كنديرة',
								'name' => 'Kendira',
							),
						),
					),
					'636' => array(
						'id' => '636',
						'code' => '636',
						'name_ar' => 'إفري أوزلاقن',
						'name' => 'Ifri Ouzellaguene',
						'communes' => array(
							'203' => array(
								'id' => '203',
								'code' => '203',
								'name_ar' => 'أوزلاقن',
								'name' => 'Ouzellaguen',
							),
						),
					),
					'639' => array(
						'id' => '639',
						'code' => '639',
						'name_ar' => 'سيدي عيش',
						'name' => 'Sidi Aich',
						'communes' => array(
							'199' => array(
								'id' => '199',
								'code' => '199',
								'name_ar' => 'الفلاي',
								'name' => 'Leflaye',
							),
							'212' => array(
								'id' => '212',
								'code' => '212',
								'name_ar' => 'سيدي عياد',
								'name' => 'Sidi Ayad',
							),
							'213' => array(
								'id' => '213',
								'code' => '213',
								'name_ar' => 'سيدي عيش',
								'name' => 'Sidi-Aich',
							),
							'225' => array(
								'id' => '225',
								'code' => '225',
								'name_ar' => 'تيفرة',
								'name' => 'Tifra',
							),
							'227' => array(
								'id' => '227',
								'code' => '227',
								'name_ar' => 'تينبدار',
								'name' => 'Tinebdar',
							),
						),
					),
					'640' => array(
						'id' => '640',
						'code' => '640',
						'name_ar' => 'القصر',
						'name' => 'El Kseur',
						'communes' => array(
							'200' => array(
								'id' => '200',
								'code' => '200',
								'name_ar' => 'القصر',
								'name' => 'El Kseur',
							),
							'201' => array(
								'id' => '201',
								'code' => '201',
								'name_ar' => 'فناية الماثن',
								'name' => 'Fenaia Il Maten',
							),
							'229' => array(
								'id' => '229',
								'code' => '229',
								'name_ar' => 'توجة',
								'name' => 'Toudja',
							),
						),
					),
					'644' => array(
						'id' => '644',
						'code' => '644',
						'name_ar' => 'خراطة',
						'name' => 'Kherrata',
						'communes' => array(
							'198' => array(
								'id' => '198',
								'code' => '198',
								'name_ar' => 'ذراع القايد',
								'name' => 'Dra El Caid',
							),
							'207' => array(
								'id' => '207',
								'code' => '207',
								'name_ar' => 'خراطة',
								'name' => 'Kherrata',
							),
						),
					),
					'650' => array(
						'id' => '650',
						'code' => '650',
						'name_ar' => 'بني معوش',
						'name' => 'Beni Maouche',
						'communes' => array(
							'191' => array(
								'id' => '191',
								'code' => '191',
								'name_ar' => 'بني معوش',
								'name' => 'Benimaouche',
							),
						),
					),
				),
			),
			'07' => array(
				'id' => '7',
				'code' => '07',
				'name_ar' => 'بسكرة',
				'name' => 'Biskra',
				'dairas' => array(
					'701' => array(
						'id' => '701',
						'code' => '701',
						'name_ar' => 'بسكرة',
						'name' => 'Biskra',
						'communes' => array(
							'233' => array(
								'id' => '233',
								'code' => '233',
								'name_ar' => 'بسكرة',
								'name' => 'Biskra',
							),
							'243' => array(
								'id' => '243',
								'code' => '243',
								'name_ar' => 'الحاجب',
								'name' => 'El Hadjab',
							),
						),
					),
					'705' => array(
						'id' => '705',
						'code' => '705',
						'name_ar' => 'أولاد جلال',
						'name' => 'Ouled Djellal',
						'communes' => array(
							'237' => array(
								'id' => '237',
								'code' => '237',
								'name_ar' => 'الشعيبة',
								'name' => 'Chaiba',
							),
							'240' => array(
								'id' => '240',
								'code' => '240',
								'name_ar' => 'الدوسن',
								'name' => 'Doucen',
							),
							'255' => array(
								'id' => '255',
								'code' => '255',
								'name_ar' => 'أولاد جلال',
								'name' => 'Ouled Djellal',
							),
						),
					),
					'708' => array(
						'id' => '708',
						'code' => '708',
						'name_ar' => 'سيدي  خالد',
						'name' => 'Sidi Khaled',
						'communes' => array(
							'232' => array(
								'id' => '232',
								'code' => '232',
								'name_ar' => 'بسباس',
								'name' => 'Besbes',
							),
							'258' => array(
								'id' => '258',
								'code' => '258',
								'name_ar' => 'رأس الميعاد',
								'name' => 'Ras El Miad',
							),
							'259' => array(
								'id' => '259',
								'code' => '259',
								'name_ar' => 'سيدي  خالد',
								'name' => 'Sidi Khaled',
							),
						),
					),
					'711' => array(
						'id' => '711',
						'code' => '711',
						'name_ar' => 'سيدي عقبة',
						'name' => 'Sidi Okba',
						'communes' => array(
							'230' => array(
								'id' => '230',
								'code' => '230',
								'name_ar' => 'عين الناقة',
								'name' => 'Ain Naga',
							),
							'238' => array(
								'id' => '238',
								'code' => '238',
								'name_ar' => 'شتمة',
								'name' => 'Chetma',
							),
							'244' => array(
								'id' => '244',
								'code' => '244',
								'name_ar' => 'الحوش',
								'name' => 'El Haouch',
							),
							'260' => array(
								'id' => '260',
								'code' => '260',
								'name_ar' => 'سيدي عقبة',
								'name' => 'Sidi Okba',
							),
						),
					),
					'712' => array(
						'id' => '712',
						'code' => '712',
						'name_ar' => 'مشونش',
						'name' => 'Mechouneche',
						'communes' => array(
							'251' => array(
								'id' => '251',
								'code' => '251',
								'name_ar' => 'مشونش',
								'name' => 'M\'chouneche',
							),
						),
					),
					'715' => array(
						'id' => '715',
						'code' => '715',
						'name_ar' => 'زريبة الوادي',
						'name' => 'Zeribet El Oued',
						'communes' => array(
							'241' => array(
								'id' => '241',
								'code' => '241',
								'name_ar' => 'الفيض',
								'name' => 'El Feidh',
							),
							'248' => array(
								'id' => '248',
								'code' => '248',
								'name_ar' => 'خنقة سيدي ناجي',
								'name' => 'Khenguet Sidi Nadji',
							),
							'253' => array(
								'id' => '253',
								'code' => '253',
								'name_ar' => 'المزيرعة',
								'name' => 'Meziraa',
							),
							'262' => array(
								'id' => '262',
								'code' => '262',
								'name_ar' => 'زريبة الوادي',
								'name' => 'Zeribet El Oued',
							),
						),
					),
					'717' => array(
						'id' => '717',
						'code' => '717',
						'name_ar' => 'القنطرة',
						'name' => 'El Kantara',
						'communes' => array(
							'231' => array(
								'id' => '231',
								'code' => '231',
								'name_ar' => 'عين زعطوط',
								'name' => 'Ain Zaatout',
							),
							'245' => array(
								'id' => '245',
								'code' => '245',
								'name_ar' => 'القنطرة',
								'name' => 'El Kantara',
							),
						),
					),
					'719' => array(
						'id' => '719',
						'code' => '719',
						'name_ar' => 'الوطاية',
						'name' => 'El Outaya',
						'communes' => array(
							'246' => array(
								'id' => '246',
								'code' => '246',
								'name_ar' => 'الوطاية',
								'name' => 'El Outaya',
							),
						),
					),
					'720' => array(
						'id' => '720',
						'code' => '720',
						'name_ar' => 'جمورة',
						'name' => 'Djemorah',
						'communes' => array(
							'236' => array(
								'id' => '236',
								'code' => '236',
								'name_ar' => 'برانيس',
								'name' => 'Branis',
							),
							'239' => array(
								'id' => '239',
								'code' => '239',
								'name_ar' => 'جمورة',
								'name' => 'Djemorah',
							),
						),
					),
					'721' => array(
						'id' => '721',
						'code' => '721',
						'name_ar' => 'طولقة',
						'name' => 'Tolga',
						'communes' => array(
							'234' => array(
								'id' => '234',
								'code' => '234',
								'name_ar' => 'برج بن عزوز',
								'name' => 'Bordj Ben Azzouz',
							),
							'235' => array(
								'id' => '235',
								'code' => '235',
								'name_ar' => 'بوشقرون',
								'name' => 'Bouchakroun',
							),
							'249' => array(
								'id' => '249',
								'code' => '249',
								'name_ar' => 'ليشانة',
								'name' => 'Lichana',
							),
							'261' => array(
								'id' => '261',
								'code' => '261',
								'name_ar' => 'طولقة',
								'name' => 'Tolga',
							),
						),
					),
					'724' => array(
						'id' => '724',
						'code' => '724',
						'name_ar' => 'أورلال',
						'name' => 'Ourlal',
						'communes' => array(
							'250' => array(
								'id' => '250',
								'code' => '250',
								'name_ar' => 'ليوة',
								'name' => 'Lioua',
							),
							'252' => array(
								'id' => '252',
								'code' => '252',
								'name_ar' => 'مخادمة',
								'name' => 'Mekhadma',
							),
							'254' => array(
								'id' => '254',
								'code' => '254',
								'name_ar' => 'مليلي',
								'name' => 'M\'lili',
							),
							'256' => array(
								'id' => '256',
								'code' => '256',
								'name_ar' => 'أوماش',
								'name' => 'Oumache',
							),
							'257' => array(
								'id' => '257',
								'code' => '257',
								'name_ar' => 'أورلال',
								'name' => 'Ourlal',
							),
						),
					),
					'726' => array(
						'id' => '726',
						'code' => '726',
						'name_ar' => 'فوغالة',
						'name' => 'Foughala',
						'communes' => array(
							'242' => array(
								'id' => '242',
								'code' => '242',
								'name_ar' => 'الغروس',
								'name' => 'El Ghrous',
							),
							'247' => array(
								'id' => '247',
								'code' => '247',
								'name_ar' => 'فوغالة',
								'name' => 'Foughala',
							),
						),
					),
					'70507' => array(
						'id' => '70507',
						'code' => '70507',
						'name_ar' => 'أولاد جلال (ولاية منتدبة)',
						'name' => 'Ouled Djellal (Wilaya Déléguée)',
					),
				),
			),
			'08' => array(
				'id' => '8',
				'code' => '08',
				'name_ar' => 'بشار',
				'name' => 'Béchar',
				'dairas' => array(
					'801' => array(
						'id' => '801',
						'code' => '801',
						'name_ar' => 'بشار',
						'name' => 'Bechar',
						'communes' => array(
							'264' => array(
								'id' => '264',
								'code' => '264',
								'name_ar' => 'بشار',
								'name' => 'Bechar',
							),
						),
					),
					'803' => array(
						'id' => '803',
						'code' => '803',
						'name_ar' => 'أولاد خضير',
						'name' => 'Ouled Khodeir',
						'communes' => array(
							'274' => array(
								'id' => '274',
								'code' => '274',
								'name_ar' => 'القصابي',
								'name' => 'Ksabi',
							),
							'279' => array(
								'id' => '279',
								'code' => '279',
								'name_ar' => 'أولاد خضير',
								'name' => 'Ouled-Khodeir',
							),
						),
					),
					'806' => array(
						'id' => '806',
						'code' => '806',
						'name_ar' => 'لحمر',
						'name' => 'Lahmar',
						'communes' => array(
							'268' => array(
								'id' => '268',
								'code' => '268',
								'name_ar' => 'بوكايس',
								'name' => 'Boukais',
							),
							'275' => array(
								'id' => '275',
								'code' => '275',
								'name_ar' => 'لحمر',
								'name' => 'Lahmar',
							),
							'278' => array(
								'id' => '278',
								'code' => '278',
								'name_ar' => 'موغل',
								'name' => 'Mogheul',
							),
						),
					),
					'807' => array(
						'id' => '807',
						'code' => '807',
						'name_ar' => 'بني عباس',
						'name' => 'Beni Abbes',
						'communes' => array(
							'265' => array(
								'id' => '265',
								'code' => '265',
								'name_ar' => 'بني عباس',
								'name' => 'Beni-Abbes',
							),
							'282' => array(
								'id' => '282',
								'code' => '282',
								'name_ar' => 'تامترت',
								'name' => 'Tamtert',
							),
						),
					),
					'810' => array(
						'id' => '810',
						'code' => '810',
						'name_ar' => 'القنادسة',
						'name' => 'Kenadsa',
						'communes' => array(
							'272' => array(
								'id' => '272',
								'code' => '272',
								'name_ar' => 'القنادسة',
								'name' => 'Kenadsa',
							),
							'277' => array(
								'id' => '277',
								'code' => '277',
								'name_ar' => 'المريجة',
								'name' => 'Meridja',
							),
						),
					),
					'811' => array(
						'id' => '811',
						'code' => '811',
						'name_ar' => 'إقلي',
						'name' => 'Igli',
						'communes' => array(
							'271' => array(
								'id' => '271',
								'code' => '271',
								'name_ar' => 'إقلي',
								'name' => 'Igli',
							),
						),
					),
					'812' => array(
						'id' => '812',
						'code' => '812',
						'name_ar' => 'تبلبالة',
						'name' => 'Tabelbala',
						'communes' => array(
							'280' => array(
								'id' => '280',
								'code' => '280',
								'name_ar' => 'تبلبالة',
								'name' => 'Tabelbala',
							),
						),
					),
					'813' => array(
						'id' => '813',
						'code' => '813',
						'name_ar' => 'تاغيت',
						'name' => 'Taghit',
						'communes' => array(
							'281' => array(
								'id' => '281',
								'code' => '281',
								'name_ar' => 'تاغيت',
								'name' => 'Taghit',
							),
						),
					),
					'814' => array(
						'id' => '814',
						'code' => '814',
						'name_ar' => 'الواتة',
						'name' => 'El Ouata',
						'communes' => array(
							'269' => array(
								'id' => '269',
								'code' => '269',
								'name_ar' => 'الواتة',
								'name' => 'El Ouata',
							),
						),
					),
					'817' => array(
						'id' => '817',
						'code' => '817',
						'name_ar' => 'العبادلة',
						'name' => 'Abadla',
						'communes' => array(
							'263' => array(
								'id' => '263',
								'code' => '263',
								'name_ar' => 'العبادلة',
								'name' => 'Abadla',
							),
							'270' => array(
								'id' => '270',
								'code' => '270',
								'name_ar' => 'عرق فراج',
								'name' => 'Erg-Ferradj',
							),
							'276' => array(
								'id' => '276',
								'code' => '276',
								'name_ar' => 'مشرع هواري بومدين',
								'name' => 'Machraa-Houari-Boumediene',
							),
						),
					),
					'818' => array(
						'id' => '818',
						'code' => '818',
						'name_ar' => 'كرزاز',
						'name' => 'Kerzaz',
						'communes' => array(
							'266' => array(
								'id' => '266',
								'code' => '266',
								'name_ar' => 'بن يخلف',
								'name' => 'Beni-Ikhlef',
							),
							'273' => array(
								'id' => '273',
								'code' => '273',
								'name_ar' => 'كرزاز',
								'name' => 'Kerzaz',
							),
							'283' => array(
								'id' => '283',
								'code' => '283',
								'name_ar' => 'تيمودي',
								'name' => 'Timoudi',
							),
						),
					),
					'821' => array(
						'id' => '821',
						'code' => '821',
						'name_ar' => 'بني ونيف',
						'name' => 'Beni Ounif',
						'communes' => array(
							'267' => array(
								'id' => '267',
								'code' => '267',
								'name_ar' => 'بني ونيف',
								'name' => 'Beni-Ounif',
							),
						),
					),
					'80708' => array(
						'id' => '80708',
						'code' => '80708',
						'name_ar' => 'بني عباس (ولاية منتدبة)',
						'name' => 'Beni Abbes (Wilaya Déléguée)',
					),
				),
			),
			'09' => array(
				'id' => '9',
				'code' => '09',
				'name_ar' => 'البليدة',
				'name' => 'Blida',
				'dairas' => array(
					'901' => array(
						'id' => '901',
						'code' => '901',
						'name_ar' => 'البليدة',
						'name' => 'Blida',
						'communes' => array(
							'288' => array(
								'id' => '288',
								'code' => '288',
								'name_ar' => 'البليدة',
								'name' => 'Blida',
							),
							'289' => array(
								'id' => '289',
								'code' => '289',
								'name_ar' => 'بوعرفة',
								'name' => 'Bouarfa',
							),
						),
					),
					'903' => array(
						'id' => '903',
						'code' => '903',
						'name_ar' => 'بوعينان',
						'name' => 'Bouinan',
						'communes' => array(
							'292' => array(
								'id' => '292',
								'code' => '292',
								'name_ar' => 'بوعينان',
								'name' => 'Bouinan',
							),
							'293' => array(
								'id' => '293',
								'code' => '293',
								'name_ar' => 'الشبلي',
								'name' => 'Chebli',
							),
						),
					),
					'904' => array(
						'id' => '904',
						'code' => '904',
						'name_ar' => 'وادي العلايق',
						'name' => 'Oued El Alleug',
						'communes' => array(
							'286' => array(
								'id' => '286',
								'code' => '286',
								'name_ar' => 'بني تامو',
								'name' => 'Beni-Tamou',
							),
							'287' => array(
								'id' => '287',
								'code' => '287',
								'name_ar' => 'بن خليل',
								'name' => 'Benkhelil',
							),
							'304' => array(
								'id' => '304',
								'code' => '304',
								'name_ar' => 'وادي العلايق',
								'name' => 'Oued El Alleug',
							),
						),
					),
					'905' => array(
						'id' => '905',
						'code' => '905',
						'name_ar' => 'أولاد يعيش',
						'name' => 'Ouled Yaich',
						'communes' => array(
							'285' => array(
								'id' => '285',
								'code' => '285',
								'name_ar' => 'بني مراد',
								'name' => 'Beni Mered',
							),
							'295' => array(
								'id' => '295',
								'code' => '295',
								'name_ar' => 'الشريعة',
								'name' => 'Chrea',
							),
							'306' => array(
								'id' => '306',
								'code' => '306',
								'name_ar' => 'أولاد يعيش',
								'name' => 'Ouled Yaich',
							),
						),
					),
					'907' => array(
						'id' => '907',
						'code' => '907',
						'name_ar' => 'العفرون',
						'name' => 'El Affroun',
						'communes' => array(
							'297' => array(
								'id' => '297',
								'code' => '297',
								'name_ar' => 'العفرون',
								'name' => 'El-Affroun',
							),
							'303' => array(
								'id' => '303',
								'code' => '303',
								'name_ar' => 'وادي جر',
								'name' => 'Oued  Djer',
							),
						),
					),
					'912' => array(
						'id' => '912',
						'code' => '912',
						'name_ar' => 'موزاية',
						'name' => 'Mouzaia',
						'communes' => array(
							'284' => array(
								'id' => '284',
								'code' => '284',
								'name_ar' => 'عين الرمانة',
								'name' => 'Ain Romana',
							),
							'294' => array(
								'id' => '294',
								'code' => '294',
								'name_ar' => 'الشفة',
								'name' => 'Chiffa',
							),
							'302' => array(
								'id' => '302',
								'code' => '302',
								'name_ar' => 'موزاية',
								'name' => 'Mouzaia',
							),
						),
					),
					'914' => array(
						'id' => '914',
						'code' => '914',
						'name_ar' => 'مفتاح',
						'name' => 'Meftah',
						'communes' => array(
							'296' => array(
								'id' => '296',
								'code' => '296',
								'name_ar' => 'جبابرة',
								'name' => 'Djebabra',
							),
							'301' => array(
								'id' => '301',
								'code' => '301',
								'name_ar' => 'مفتاح',
								'name' => 'Meftah',
							),
						),
					),
					'916' => array(
						'id' => '916',
						'code' => '916',
						'name_ar' => 'بوفاريك',
						'name' => 'Boufarik',
						'communes' => array(
							'290' => array(
								'id' => '290',
								'code' => '290',
								'name_ar' => 'بوفاريك',
								'name' => 'Boufarik',
							),
							'298' => array(
								'id' => '298',
								'code' => '298',
								'name_ar' => 'قرواو',
								'name' => 'Guerrouaou',
							),
							'308' => array(
								'id' => '308',
								'code' => '308',
								'name_ar' => 'الصومعة',
								'name' => 'Soumaa',
							),
						),
					),
					'917' => array(
						'id' => '917',
						'code' => '917',
						'name_ar' => 'الأربعاء',
						'name' => 'Larbaa',
						'communes' => array(
							'300' => array(
								'id' => '300',
								'code' => '300',
								'name_ar' => 'الأربعاء',
								'name' => 'Larbaa',
							),
							'307' => array(
								'id' => '307',
								'code' => '307',
								'name_ar' => 'صوحان',
								'name' => 'Souhane',
							),
						),
					),
					'922' => array(
						'id' => '922',
						'code' => '922',
						'name_ar' => 'بوقرة',
						'name' => 'Bougara',
						'communes' => array(
							'291' => array(
								'id' => '291',
								'code' => '291',
								'name_ar' => 'بوقرة',
								'name' => 'Bougara',
							),
							'299' => array(
								'id' => '299',
								'code' => '299',
								'name_ar' => 'حمام ملوان',
								'name' => 'Hammam Elouane',
							),
							'305' => array(
								'id' => '305',
								'code' => '305',
								'name_ar' => 'اولاد سلامة',
								'name' => 'Ouled Slama',
							),
						),
					),
				),
			),
			'10' => array(
				'id' => '10',
				'code' => '10',
				'name_ar' => 'البويرة',
				'name' => 'Bouira',
				'dairas' => array(
					'1001' => array(
						'id' => '1001',
						'code' => '1001',
						'name_ar' => 'البويرة',
						'name' => 'Bouira',
						'communes' => array(
							'313' => array(
								'id' => '313',
								'code' => '313',
								'name_ar' => 'عين الترك',
								'name' => 'Ain Turk',
							),
							'315' => array(
								'id' => '315',
								'code' => '315',
								'name_ar' => 'أيت لعزيز',
								'name' => 'Ait Laaziz',
							),
							'321' => array(
								'id' => '321',
								'code' => '321',
								'name_ar' => 'البويرة',
								'name' => 'Bouira',
							),
						),
					),
					'1004' => array(
						'id' => '1004',
						'code' => '1004',
						'name_ar' => 'سوق الخميس',
						'name' => 'Souk El Khemis',
						'communes' => array(
							'332' => array(
								'id' => '332',
								'code' => '332',
								'name_ar' => 'المقراني',
								'name' => 'El-Mokrani',
							),
							'348' => array(
								'id' => '348',
								'code' => '348',
								'name_ar' => 'سوق الخميس',
								'name' => 'Souk El Khemis',
							),
						),
					),
					'1005' => array(
						'id' => '1005',
						'code' => '1005',
						'name_ar' => 'القادرية',
						'name' => 'Kadiria',
						'communes' => array(
							'316' => array(
								'id' => '316',
								'code' => '316',
								'name_ar' => 'أعمر',
								'name' => 'Aomar',
							),
							'326' => array(
								'id' => '326',
								'code' => '326',
								'name_ar' => 'جباحية',
								'name' => 'Djebahia',
							),
							'337' => array(
								'id' => '337',
								'code' => '337',
								'name_ar' => 'قادرية',
								'name' => 'Kadiria',
							),
						),
					),
					'1012' => array(
						'id' => '1012',
						'code' => '1012',
						'name_ar' => 'الحيزر',
						'name' => 'Haizer',
						'communes' => array(
							'335' => array(
								'id' => '335',
								'code' => '335',
								'name_ar' => 'حيزر',
								'name' => 'Haizer',
							),
							'350' => array(
								'id' => '350',
								'code' => '350',
								'name_ar' => 'تاغزوت',
								'name' => 'Taghzout',
							),
						),
					),
					'1013' => array(
						'id' => '1013',
						'code' => '1013',
						'name_ar' => 'الأخضرية',
						'name' => 'Lakhdaria',
						'communes' => array(
							'320' => array(
								'id' => '320',
								'code' => '320',
								'name_ar' => 'بودربالة',
								'name' => 'Bouderbala',
							),
							'322' => array(
								'id' => '322',
								'code' => '322',
								'name_ar' => 'بوكرم',
								'name' => 'Boukram',
							),
							'333' => array(
								'id' => '333',
								'code' => '333',
								'name_ar' => 'قرومة',
								'name' => 'Guerrouma',
							),
							'338' => array(
								'id' => '338',
								'code' => '338',
								'name_ar' => 'الأخضرية',
								'name' => 'Lakhdaria',
							),
							'340' => array(
								'id' => '340',
								'code' => '340',
								'name_ar' => 'معلة',
								'name' => 'Maala',
							),
							'353' => array(
								'id' => '353',
								'code' => '353',
								'name_ar' => 'زبربر',
								'name' => 'Z\'barbar (El Isseri )',
							),
						),
					),
					'1015' => array(
						'id' => '1015',
						'code' => '1015',
						'name_ar' => 'الهاشمية',
						'name' => 'El Hachimia',
						'communes' => array(
							'329' => array(
								'id' => '329',
								'code' => '329',
								'name_ar' => 'الهاشمية',
								'name' => 'El Hachimia',
							),
							'343' => array(
								'id' => '343',
								'code' => '343',
								'name_ar' => 'وادي البردي',
								'name' => 'Oued El Berdi',
							),
						),
					),
					'1018' => array(
						'id' => '1018',
						'code' => '1018',
						'name_ar' => 'برج أوخريص',
						'name' => 'Bordj Okhriss',
						'communes' => array(
							'319' => array(
								'id' => '319',
								'code' => '319',
								'name_ar' => 'برج أوخريص',
								'name' => 'Bordj Okhriss',
							),
							'334' => array(
								'id' => '334',
								'code' => '334',
								'name_ar' => 'الحجرة الزرقاء',
								'name' => 'Hadjera Zerga',
							),
							'342' => array(
								'id' => '342',
								'code' => '342',
								'name_ar' => 'مزدور',
								'name' => 'Mezdour',
							),
							'351' => array(
								'id' => '351',
								'code' => '351',
								'name_ar' => 'تاقديت',
								'name' => 'Taguedite',
							),
						),
					),
					'1033' => array(
						'id' => '1033',
						'code' => '1033',
						'name_ar' => 'بشلول',
						'name' => 'Bechloul',
						'communes' => array(
							'310' => array(
								'id' => '310',
								'code' => '310',
								'name_ar' => 'أهل القصر',
								'name' => 'Ahl El Ksar',
							),
							'317' => array(
								'id' => '317',
								'code' => '317',
								'name_ar' => 'بشلول',
								'name' => 'Bechloul',
							),
							'327' => array(
								'id' => '327',
								'code' => '327',
								'name_ar' => 'العجيبة',
								'name' => 'El Adjiba',
							),
							'328' => array(
								'id' => '328',
								'code' => '328',
								'name_ar' => 'الأسنام',
								'name' => 'El Asnam',
							),
							'344' => array(
								'id' => '344',
								'code' => '344',
								'name_ar' => 'أولاد راشد',
								'name' => 'Ouled Rached',
							),
						),
					),
					'1035' => array(
						'id' => '1035',
						'code' => '1035',
						'name_ar' => 'عين بسام',
						'name' => 'Ain Bessem',
						'communes' => array(
							'311' => array(
								'id' => '311',
								'code' => '311',
								'name_ar' => 'عين الحجر',
								'name' => 'Ain El Hadjar',
							),
							'312' => array(
								'id' => '312',
								'code' => '312',
								'name_ar' => 'عين العلوي',
								'name' => 'Ain Laloui',
							),
							'314' => array(
								'id' => '314',
								'code' => '314',
								'name_ar' => 'عين بسام',
								'name' => 'Ain-Bessem',
							),
						),
					),
					'1036' => array(
						'id' => '1036',
						'code' => '1036',
						'name_ar' => 'بئر غبالو',
						'name' => 'Bir Ghbalou',
						'communes' => array(
							'318' => array(
								'id' => '318',
								'code' => '318',
								'name_ar' => 'بئر غبالو',
								'name' => 'Bir Ghbalou',
							),
							'330' => array(
								'id' => '330',
								'code' => '330',
								'name_ar' => 'الخبوزية',
								'name' => 'El Khabouzia',
							),
							'345' => array(
								'id' => '345',
								'code' => '345',
								'name_ar' => 'روراوة',
								'name' => 'Raouraoua',
							),
						),
					),
					'1037' => array(
						'id' => '1037',
						'code' => '1037',
						'name_ar' => 'مشد الله',
						'name' => 'M\'chedallah',
						'communes' => array(
							'309' => array(
								'id' => '309',
								'code' => '309',
								'name_ar' => 'أغبالو',
								'name' => 'Aghbalou',
							),
							'323' => array(
								'id' => '323',
								'code' => '323',
								'name_ar' => 'شرفة',
								'name' => 'Chorfa',
							),
							'336' => array(
								'id' => '336',
								'code' => '336',
								'name_ar' => 'حنيف',
								'name' => 'Hanif',
							),
							'339' => array(
								'id' => '339',
								'code' => '339',
								'name_ar' => 'أمشدالة',
								'name' => 'M Chedallah',
							),
							'347' => array(
								'id' => '347',
								'code' => '347',
								'name_ar' => 'سحاريج',
								'name' => 'Saharidj',
							),
							'352' => array(
								'id' => '352',
								'code' => '352',
								'name_ar' => 'آث  منصور',
								'name' => 'Ath Mansour',
							),
						),
					),
					'1038' => array(
						'id' => '1038',
						'code' => '1038',
						'name_ar' => 'سور الغزلان',
						'name' => 'Sour El Ghozlane',
						'communes' => array(
							'324' => array(
								'id' => '324',
								'code' => '324',
								'name_ar' => 'الدشمية',
								'name' => 'Dechmia',
							),
							'325' => array(
								'id' => '325',
								'code' => '325',
								'name_ar' => 'ديرة',
								'name' => 'Dirah',
							),
							'331' => array(
								'id' => '331',
								'code' => '331',
								'name_ar' => 'الحاكمية',
								'name' => 'El-Hakimia',
							),
							'341' => array(
								'id' => '341',
								'code' => '341',
								'name_ar' => 'المعمورة',
								'name' => 'Maamora',
							),
							'346' => array(
								'id' => '346',
								'code' => '346',
								'name_ar' => 'ريدان',
								'name' => 'Ridane',
							),
							'349' => array(
								'id' => '349',
								'code' => '349',
								'name_ar' => 'سور الغزلان',
								'name' => 'Sour El Ghozlane',
							),
						),
					),
				),
			),
			'11' => array(
				'id' => '11',
				'code' => '11',
				'name_ar' => 'تمنراست',
				'name' => 'Tamanrasset',
				'dairas' => array(
					'1101' => array(
						'id' => '1101',
						'code' => '1101',
						'name_ar' => 'تمنراست',
						'name' => 'Tamanrasset',
						'communes' => array(
							'355' => array(
								'id' => '355',
								'code' => '355',
								'name_ar' => 'عين امقل',
								'name' => 'Ain Amguel',
							),
							'361' => array(
								'id' => '361',
								'code' => '361',
								'name_ar' => 'تمنراست',
								'name' => 'Tamanrasset',
							),
						),
					),
					'1102' => array(
						'id' => '1102',
						'code' => '1102',
						'name_ar' => 'سيلت',
						'name' => 'Silet',
						'communes' => array(
							'354' => array(
								'id' => '354',
								'code' => '354',
								'name_ar' => 'ابلسة',
								'name' => 'Abelsa',
							),
						),
					),
					'1103' => array(
						'id' => '1103',
						'code' => '1103',
						'name_ar' => 'إينغر',
						'name' => 'In Ghar',
						'communes' => array(
							'360' => array(
								'id' => '360',
								'code' => '360',
								'name_ar' => 'إينغر',
								'name' => 'Inghar',
							),
						),
					),
					'1104' => array(
						'id' => '1104',
						'code' => '1104',
						'name_ar' => 'عين قزام',
						'name' => 'In Guezzam',
						'communes' => array(
							'356' => array(
								'id' => '356',
								'code' => '356',
								'name_ar' => 'عين قزام',
								'name' => 'Ain Guezzam',
							),
						),
					),
					'1106' => array(
						'id' => '1106',
						'code' => '1106',
						'name_ar' => 'تاظروك',
						'name' => 'Tazrouk',
						'communes' => array(
							'359' => array(
								'id' => '359',
								'code' => '359',
								'name_ar' => 'أدلس',
								'name' => 'Idles',
							),
							'362' => array(
								'id' => '362',
								'code' => '362',
								'name_ar' => 'تاظروك',
								'name' => 'Tazrouk',
							),
						),
					),
					'1107' => array(
						'id' => '1107',
						'code' => '1107',
						'name_ar' => 'تين زواتين',
						'name' => 'Tin Zouatine',
						'communes' => array(
							'363' => array(
								'id' => '363',
								'code' => '363',
								'name_ar' => 'تين زواتين',
								'name' => 'Tin Zouatine',
							),
						),
					),
					'1108' => array(
						'id' => '1108',
						'code' => '1108',
						'name_ar' => 'عين صالح',
						'name' => 'In Salah',
						'communes' => array(
							'357' => array(
								'id' => '357',
								'code' => '357',
								'name_ar' => 'عين صالح',
								'name' => 'Ain Salah',
							),
							'358' => array(
								'id' => '358',
								'code' => '358',
								'name_ar' => 'فقارة الزوى',
								'name' => 'Foggaret Ezzoua',
							),
						),
					),
					'110411' => array(
						'id' => '110411',
						'code' => '110411',
						'name_ar' => 'عين قزام (ولاية منتدبة)',
						'name' => 'In Guezzam (Wilaya Déléguée)',
					),
					'110811' => array(
						'id' => '110811',
						'code' => '110811',
						'name_ar' => 'عين صالح (ولاية منتدبة)',
						'name' => 'In Salah (Wilaya Déléguée)',
					),
				),
			),
			'12' => array(
				'id' => '12',
				'code' => '12',
				'name_ar' => 'تبسة',
				'name' => 'Tébessa',
				'dairas' => array(
					'1201' => array(
						'id' => '1201',
						'code' => '1201',
						'name_ar' => 'تبسة',
						'name' => 'Tebessa',
						'communes' => array(
							'390' => array(
								'id' => '390',
								'code' => '390',
								'name_ar' => 'تبسة',
								'name' => 'Tebessa',
							),
						),
					),
					'1202' => array(
						'id' => '1202',
						'code' => '1202',
						'name_ar' => 'بئر العاتر',
						'name' => 'Bir El Ater',
						'communes' => array(
							'369' => array(
								'id' => '369',
								'code' => '369',
								'name_ar' => 'بئر العاتر',
								'name' => 'Bir-El-Ater',
							),
							'378' => array(
								'id' => '378',
								'code' => '378',
								'name_ar' => 'العقلة المالحة',
								'name' => 'El Ogla El Malha',
							),
						),
					),
					'1203' => array(
						'id' => '1203',
						'code' => '1203',
						'name_ar' => 'الشريعة',
						'name' => 'Cheria',
						'communes' => array(
							'372' => array(
								'id' => '372',
								'code' => '372',
								'name_ar' => 'الشريعة',
								'name' => 'Cheria',
							),
							'391' => array(
								'id' => '391',
								'code' => '391',
								'name_ar' => 'ثليجان',
								'name' => 'Telidjen',
							),
						),
					),
					'1205' => array(
						'id' => '1205',
						'code' => '1205',
						'name_ar' => 'العوينات',
						'name' => 'El Aouinet',
						'communes' => array(
							'370' => array(
								'id' => '370',
								'code' => '370',
								'name_ar' => 'بوخضرة',
								'name' => 'Boukhadra',
							),
							'379' => array(
								'id' => '379',
								'code' => '379',
								'name_ar' => 'العوينات',
								'name' => 'El-Aouinet',
							),
						),
					),
					'1209' => array(
						'id' => '1209',
						'code' => '1209',
						'name_ar' => 'نقرين',
						'name' => 'Negrine',
						'communes' => array(
							'381' => array(
								'id' => '381',
								'code' => '381',
								'name_ar' => 'فركان',
								'name' => 'Ferkane',
							),
							'385' => array(
								'id' => '385',
								'code' => '385',
								'name_ar' => 'نقرين',
								'name' => 'Negrine',
							),
						),
					),
					'1210' => array(
						'id' => '1210',
						'code' => '1210',
						'name_ar' => 'بئر مقدم',
						'name' => 'Bir Mokadem',
						'communes' => array(
							'368' => array(
								'id' => '368',
								'code' => '368',
								'name_ar' => 'بئر مقدم',
								'name' => 'Bir Mokkadem',
							),
							'382' => array(
								'id' => '382',
								'code' => '382',
								'name_ar' => 'قريقر',
								'name' => 'Guorriguer',
							),
							'383' => array(
								'id' => '383',
								'code' => '383',
								'name_ar' => 'الحمامات',
								'name' => 'Hammamet',
							),
						),
					),
					'1211' => array(
						'id' => '1211',
						'code' => '1211',
						'name_ar' => 'الكويف',
						'name' => 'El Kouif',
						'communes' => array(
							'366' => array(
								'id' => '366',
								'code' => '366',
								'name_ar' => 'بكارية',
								'name' => 'Bekkaria',
							),
							'371' => array(
								'id' => '371',
								'code' => '371',
								'name_ar' => 'بولحاف الدير',
								'name' => 'Boulhaf Dyr',
							),
							'373' => array(
								'id' => '373',
								'code' => '373',
								'name_ar' => 'الكويف',
								'name' => 'El Kouif',
							),
						),
					),
					'1212' => array(
						'id' => '1212',
						'code' => '1212',
						'name_ar' => 'مرسط',
						'name' => 'Morsott',
						'communes' => array(
							'367' => array(
								'id' => '367',
								'code' => '367',
								'name_ar' => 'بئر الذهب',
								'name' => 'Bir Dheheb',
							),
							'384' => array(
								'id' => '384',
								'code' => '384',
								'name_ar' => 'مرسط',
								'name' => 'Morsott',
							),
						),
					),
					'1213' => array(
						'id' => '1213',
						'code' => '1213',
						'name_ar' => 'العقلة',
						'name' => 'El Ogla',
						'communes' => array(
							'365' => array(
								'id' => '365',
								'code' => '365',
								'name_ar' => 'بجن',
								'name' => 'Bedjene',
							),
							'376' => array(
								'id' => '376',
								'code' => '376',
								'name_ar' => 'المزرعة',
								'name' => 'El Mezeraa',
							),
							'377' => array(
								'id' => '377',
								'code' => '377',
								'name_ar' => 'العقلة',
								'name' => 'El Ogla',
							),
							'389' => array(
								'id' => '389',
								'code' => '389',
								'name_ar' => 'سطح قنطيس',
								'name' => 'Stah Guentis',
							),
						),
					),
					'1219' => array(
						'id' => '1219',
						'code' => '1219',
						'name_ar' => 'الونزة',
						'name' => 'Ouenza',
						'communes' => array(
							'364' => array(
								'id' => '364',
								'code' => '364',
								'name_ar' => 'عين الزرقاء',
								'name' => 'Ain Zerga',
							),
							'375' => array(
								'id' => '375',
								'code' => '375',
								'name_ar' => 'المريج',
								'name' => 'El Meridj',
							),
							'386' => array(
								'id' => '386',
								'code' => '386',
								'name_ar' => 'الونزة',
								'name' => 'Ouenza',
							),
						),
					),
					'1220' => array(
						'id' => '1220',
						'code' => '1220',
						'name_ar' => 'الماء الابيض',
						'name' => 'El Malabiod',
						'communes' => array(
							'374' => array(
								'id' => '374',
								'code' => '374',
								'name_ar' => 'الماء الابيض',
								'name' => 'El Malabiod',
							),
							'380' => array(
								'id' => '380',
								'code' => '380',
								'name_ar' => 'الحويجبات',
								'name' => 'El-Houidjbet',
							),
						),
					),
					'1221' => array(
						'id' => '1221',
						'code' => '1221',
						'name_ar' => 'أم علي',
						'name' => 'Oum Ali',
						'communes' => array(
							'387' => array(
								'id' => '387',
								'code' => '387',
								'name_ar' => 'أم علي',
								'name' => 'Oum Ali',
							),
							'388' => array(
								'id' => '388',
								'code' => '388',
								'name_ar' => 'صفصاف الوسرى',
								'name' => 'Saf Saf El Ouesra',
							),
						),
					),
				),
			),
			'13' => array(
				'id' => '13',
				'code' => '13',
				'name_ar' => 'تلمسان',
				'name' => 'Tlemcen',
				'dairas' => array(
					'1301' => array(
						'id' => '1301',
						'code' => '1301',
						'name_ar' => 'تلمسان',
						'name' => 'Tlemcen',
						'communes' => array(
							'443' => array(
								'id' => '443',
								'code' => '443',
								'name_ar' => 'تلمسان',
								'name' => 'Tlemcen',
							),
						),
					),
					'1303' => array(
						'id' => '1303',
						'code' => '1303',
						'name_ar' => 'عين تالوت',
						'name' => 'Ain Tellout',
						'communes' => array(
							'396' => array(
								'id' => '396',
								'code' => '396',
								'name_ar' => 'عين النحالة',
								'name' => 'Ain Nehala',
							),
							'397' => array(
								'id' => '397',
								'code' => '397',
								'name_ar' => 'عين تالوت',
								'name' => 'Ain Tellout',
							),
						),
					),
					'1304' => array(
						'id' => '1304',
						'code' => '1304',
						'name_ar' => 'الرمشي',
						'name' => 'Remchi',
						'communes' => array(
							'398' => array(
								'id' => '398',
								'code' => '398',
								'name_ar' => 'عين يوسف',
								'name' => 'Ain Youcef',
							),
							'405' => array(
								'id' => '405',
								'code' => '405',
								'name_ar' => 'بني وارسوس',
								'name' => 'Beni Ouarsous',
							),
							'416' => array(
								'id' => '416',
								'code' => '416',
								'name_ar' => 'الفحول',
								'name' => 'El Fehoul',
							),
							'431' => array(
								'id' => '431',
								'code' => '431',
								'name_ar' => 'الرمشي',
								'name' => 'Remchi',
							),
							'433' => array(
								'id' => '433',
								'code' => '433',
								'name_ar' => 'سبعة شيوخ',
								'name' => 'Sebbaa Chioukh',
							),
						),
					),
					'1306' => array(
						'id' => '1306',
						'code' => '1306',
						'name_ar' => 'صبرة',
						'name' => 'Sabra',
						'communes' => array(
							'409' => array(
								'id' => '409',
								'code' => '409',
								'name_ar' => 'بوحلو',
								'name' => 'Bouhlou',
							),
							'432' => array(
								'id' => '432',
								'code' => '432',
								'name_ar' => 'صبرة',
								'name' => 'Sabra',
							),
						),
					),
					'1307' => array(
						'id' => '1307',
						'code' => '1307',
						'name_ar' => 'الغزوات',
						'name' => 'Ghazaouet',
						'communes' => array(
							'412' => array(
								'id' => '412',
								'code' => '412',
								'name_ar' => 'دار يغمراسن',
								'name' => 'Dar Yaghmoracen',
							),
							'419' => array(
								'id' => '419',
								'code' => '419',
								'name_ar' => 'الغزوات',
								'name' => 'Ghazaouet',
							),
							'438' => array(
								'id' => '438',
								'code' => '438',
								'name_ar' => 'السواحلية',
								'name' => 'Souahlia',
							),
							'442' => array(
								'id' => '442',
								'code' => '442',
								'name_ar' => 'تيانت',
								'name' => 'Tianet',
							),
						),
					),
					'1313' => array(
						'id' => '1313',
						'code' => '1313',
						'name_ar' => 'أولاد ميمون',
						'name' => 'Ouled Mimoun',
						'communes' => array(
							'406' => array(
								'id' => '406',
								'code' => '406',
								'name_ar' => 'بني صميل',
								'name' => 'Beni Smiel',
							),
							'428' => array(
								'id' => '428',
								'code' => '428',
								'name_ar' => 'وادي الخضر',
								'name' => 'Oued Lakhdar',
							),
							'429' => array(
								'id' => '429',
								'code' => '429',
								'name_ar' => 'أولاد ميمون',
								'name' => 'Ouled Mimoun',
							),
						),
					),
					'1317' => array(
						'id' => '1317',
						'code' => '1317',
						'name_ar' => 'بني سنوس',
						'name' => 'Beni Snous',
						'communes' => array(
							'401' => array(
								'id' => '401',
								'code' => '401',
								'name_ar' => 'بني بهدل',
								'name' => 'Beni Bahdel',
							),
							'407' => array(
								'id' => '407',
								'code' => '407',
								'name_ar' => 'بني سنوس',
								'name' => 'Beni Snous',
							),
							'415' => array(
								'id' => '415',
								'code' => '415',
								'name_ar' => 'العزايل',
								'name' => 'Azail',
							),
						),
					),
					'1318' => array(
						'id' => '1318',
						'code' => '1318',
						'name_ar' => 'باب العسة',
						'name' => 'Bab El Assa',
						'communes' => array(
							'400' => array(
								'id' => '400',
								'code' => '400',
								'name_ar' => 'باب العسة',
								'name' => 'Bab El Assa',
							),
							'439' => array(
								'id' => '439',
								'code' => '439',
								'name_ar' => 'السواني',
								'name' => 'Souani',
							),
							'440' => array(
								'id' => '440',
								'code' => '440',
								'name_ar' => 'سوق الثلاثاء',
								'name' => 'Souk Tleta',
							),
						),
					),
					'1320' => array(
						'id' => '1320',
						'code' => '1320',
						'name_ar' => 'فلاوسن',
						'name' => 'Fellaoucene',
						'communes' => array(
							'392' => array(
								'id' => '392',
								'code' => '392',
								'name_ar' => 'عين فتاح',
								'name' => 'Ain Fetah',
							),
							'395' => array(
								'id' => '395',
								'code' => '395',
								'name_ar' => 'عين الكبيرة',
								'name' => 'Ain Kebira',
							),
							'418' => array(
								'id' => '418',
								'code' => '418',
								'name_ar' => 'فلاوسن',
								'name' => 'Fellaoucene',
							),
						),
					),
					'1324' => array(
						'id' => '1324',
						'code' => '1324',
						'name_ar' => 'بن سكران',
						'name' => 'Bensekrane',
						'communes' => array(
							'408' => array(
								'id' => '408',
								'code' => '408',
								'name_ar' => 'بن سكران',
								'name' => 'Bensekrane',
							),
							'435' => array(
								'id' => '435',
								'code' => '435',
								'name_ar' => 'سيدي العبدلي',
								'name' => 'Sidi Abdelli',
							),
						),
					),
					'1326' => array(
						'id' => '1326',
						'code' => '1326',
						'name_ar' => 'الحناية',
						'name' => 'Hennaya',
						'communes' => array(
							'421' => array(
								'id' => '421',
								'code' => '421',
								'name_ar' => 'الحناية',
								'name' => 'Hennaya',
							),
							'430' => array(
								'id' => '430',
								'code' => '430',
								'name_ar' => 'أولاد رياح',
								'name' => 'Ouled Riyah',
							),
							'444' => array(
								'id' => '444',
								'code' => '444',
								'name_ar' => 'زناتة',
								'name' => 'Zenata',
							),
						),
					),
					'1327' => array(
						'id' => '1327',
						'code' => '1327',
						'name_ar' => 'مغنية',
						'name' => 'Maghnia',
						'communes' => array(
							'420' => array(
								'id' => '420',
								'code' => '420',
								'name_ar' => 'حمام بوغرارة',
								'name' => 'Hammam Boughrara',
							),
							'423' => array(
								'id' => '423',
								'code' => '423',
								'name_ar' => 'مغنية',
								'name' => 'Maghnia',
							),
						),
					),
					'1335' => array(
						'id' => '1335',
						'code' => '1335',
						'name_ar' => 'سبدو',
						'name' => 'Sebdou',
						'communes' => array(
							'414' => array(
								'id' => '414',
								'code' => '414',
								'name_ar' => 'العريشة',
								'name' => 'El Aricha',
							),
							'417' => array(
								'id' => '417',
								'code' => '417',
								'name_ar' => 'القور',
								'name' => 'El Gor',
							),
							'434' => array(
								'id' => '434',
								'code' => '434',
								'name_ar' => 'سبدو',
								'name' => 'Sebdou',
							),
						),
					),
					'1338' => array(
						'id' => '1338',
						'code' => '1338',
						'name_ar' => 'بني بوسعيد',
						'name' => 'Beni Boussaid',
						'communes' => array(
							'402' => array(
								'id' => '402',
								'code' => '402',
								'name_ar' => 'بني بوسعيد',
								'name' => 'Beni Boussaid',
							),
							'437' => array(
								'id' => '437',
								'code' => '437',
								'name_ar' => 'سيدي مجاهد',
								'name' => 'Sidi Medjahed',
							),
						),
					),
					'1339' => array(
						'id' => '1339',
						'code' => '1339',
						'name_ar' => 'مرسى بن مهيدي',
						'name' => 'Marsa Ben Mehdi',
						'communes' => array(
							'425' => array(
								'id' => '425',
								'code' => '425',
								'name_ar' => 'مرسى بن مهيدي',
								'name' => 'Marsa Ben M\'hidi',
							),
							'426' => array(
								'id' => '426',
								'code' => '426',
								'name_ar' => 'مسيردة الفواقة',
								'name' => 'M\'sirda Fouaga',
							),
						),
					),
					'1340' => array(
						'id' => '1340',
						'code' => '1340',
						'name_ar' => 'ندرومة',
						'name' => 'Nedroma',
						'communes' => array(
							'413' => array(
								'id' => '413',
								'code' => '413',
								'name_ar' => 'جبالة',
								'name' => 'Djebala',
							),
							'427' => array(
								'id' => '427',
								'code' => '427',
								'name_ar' => 'ندرومة',
								'name' => 'Nedroma',
							),
						),
					),
					'1341' => array(
						'id' => '1341',
						'code' => '1341',
						'name_ar' => 'سيدي الجيلالي',
						'name' => 'Sidi Djillali',
						'communes' => array(
							'410' => array(
								'id' => '410',
								'code' => '410',
								'name_ar' => 'البويهي',
								'name' => 'Bouihi',
							),
							'436' => array(
								'id' => '436',
								'code' => '436',
								'name_ar' => 'سيدي الجيلالي',
								'name' => 'Sidi Djillali',
							),
						),
					),
					'1344' => array(
						'id' => '1344',
						'code' => '1344',
						'name_ar' => 'هنين',
						'name' => 'Honnaine',
						'communes' => array(
							'403' => array(
								'id' => '403',
								'code' => '403',
								'name_ar' => 'بني خلاد',
								'name' => 'Beni Khellad',
							),
							'422' => array(
								'id' => '422',
								'code' => '422',
								'name_ar' => 'هنين',
								'name' => 'Honnaine',
							),
						),
					),
					'1350' => array(
						'id' => '1350',
						'code' => '1350',
						'name_ar' => 'شتوان',
						'name' => 'Chetouane',
						'communes' => array(
							'393' => array(
								'id' => '393',
								'code' => '393',
								'name_ar' => 'عين فزة',
								'name' => 'Ain Fezza',
							),
							'399' => array(
								'id' => '399',
								'code' => '399',
								'name_ar' => 'عمير',
								'name' => 'Amieur',
							),
							'411' => array(
								'id' => '411',
								'code' => '411',
								'name_ar' => 'شتوان',
								'name' => 'Chetouane',
							),
						),
					),
					'1351' => array(
						'id' => '1351',
						'code' => '1351',
						'name_ar' => 'منصورة',
						'name' => 'Mansourah',
						'communes' => array(
							'394' => array(
								'id' => '394',
								'code' => '394',
								'name_ar' => 'عين غرابة',
								'name' => 'Ain Ghoraba',
							),
							'404' => array(
								'id' => '404',
								'code' => '404',
								'name_ar' => 'بني مستر',
								'name' => 'Beni Mester',
							),
							'424' => array(
								'id' => '424',
								'code' => '424',
								'name_ar' => 'منصورة',
								'name' => 'Mansourah',
							),
							'441' => array(
								'id' => '441',
								'code' => '441',
								'name_ar' => 'تيرني بني هديل',
								'name' => 'Terny Beni Hediel',
							),
						),
					),
				),
			),
			'14' => array(
				'id' => '14',
				'code' => '14',
				'name_ar' => 'تيارت',
				'name' => 'Tiaret',
				'dairas' => array(
					'1401' => array(
						'id' => '1401',
						'code' => '1401',
						'name_ar' => 'تيارت',
						'name' => 'Tiaret',
						'communes' => array(
							'483' => array(
								'id' => '483',
								'code' => '483',
								'name_ar' => 'تيارت',
								'name' => 'Tiaret',
							),
						),
					),
					'1402' => array(
						'id' => '1402',
						'code' => '1402',
						'name_ar' => 'مدروسة',
						'name' => 'Medroussa',
						'communes' => array(
							'464' => array(
								'id' => '464',
								'code' => '464',
								'name_ar' => 'مدروسة',
								'name' => 'Medroussa',
							),
							'466' => array(
								'id' => '466',
								'code' => '466',
								'name_ar' => 'ملاكو',
								'name' => 'Mellakou',
							),
							'478' => array(
								'id' => '478',
								'code' => '478',
								'name_ar' => 'سيدي بختي',
								'name' => 'Sidi Bakhti',
							),
						),
					),
					'1406' => array(
						'id' => '1406',
						'code' => '1406',
						'name_ar' => 'عين الذهب',
						'name' => 'Ain Deheb',
						'communes' => array(
							'446' => array(
								'id' => '446',
								'code' => '446',
								'name_ar' => 'عين الذهب',
								'name' => 'Ain Deheb',
							),
							'451' => array(
								'id' => '451',
								'code' => '451',
								'name_ar' => 'شحيمة',
								'name' => 'Chehaima',
							),
							'468' => array(
								'id' => '468',
								'code' => '468',
								'name_ar' => 'النعيمة',
								'name' => 'Naima',
							),
						),
					),
					'1413' => array(
						'id' => '1413',
						'code' => '1413',
						'name_ar' => 'دحموني',
						'name' => 'Dahmouni',
						'communes' => array(
							'445' => array(
								'id' => '445',
								'code' => '445',
								'name_ar' => 'عين بوشقيف',
								'name' => 'Ain Bouchekif',
							),
							'452' => array(
								'id' => '452',
								'code' => '452',
								'name_ar' => 'دحموني',
								'name' => 'Dahmouni',
							),
						),
					),
					'1414' => array(
						'id' => '1414',
						'code' => '1414',
						'name_ar' => 'رحوية',
						'name' => 'Rahouia',
						'communes' => array(
							'457' => array(
								'id' => '457',
								'code' => '457',
								'name_ar' => 'قرطوفة',
								'name' => 'Guertoufa',
							),
							'470' => array(
								'id' => '470',
								'code' => '470',
								'name_ar' => 'الرحوية',
								'name' => 'Rahouia',
							),
						),
					),
					'1415' => array(
						'id' => '1415',
						'code' => '1415',
						'name_ar' => 'مهدية',
						'name' => 'Mahdia',
						'communes' => array(
							'447' => array(
								'id' => '447',
								'code' => '447',
								'name_ar' => 'عين دزاريت',
								'name' => 'Ain Dzarit',
							),
							'461' => array(
								'id' => '461',
								'code' => '461',
								'name_ar' => 'مهدية',
								'name' => 'Mahdia',
							),
							'467' => array(
								'id' => '467',
								'code' => '467',
								'name_ar' => 'الناظورة',
								'name' => 'Nadorah',
							),
							'472' => array(
								'id' => '472',
								'code' => '472',
								'name_ar' => 'السبعين',
								'name' => 'Sebaine',
							),
						),
					),
					'1416' => array(
						'id' => '1416',
						'code' => '1416',
						'name_ar' => 'السوقر',
						'name' => 'Sougueur',
						'communes' => array(
							'455' => array(
								'id' => '455',
								'code' => '455',
								'name_ar' => 'الفايجة',
								'name' => 'Faidja',
							),
							'475' => array(
								'id' => '475',
								'code' => '475',
								'name_ar' => 'سي عبد الغني',
								'name' => 'Si Abdelghani',
							),
							'480' => array(
								'id' => '480',
								'code' => '480',
								'name_ar' => 'السوقر',
								'name' => 'Sougueur',
							),
							'485' => array(
								'id' => '485',
								'code' => '485',
								'name_ar' => 'توسنينة',
								'name' => 'Tousnina',
							),
						),
					),
					'1421' => array(
						'id' => '1421',
						'code' => '1421',
						'name_ar' => 'مغيلة',
						'name' => 'Meghila',
						'communes' => array(
							'465' => array(
								'id' => '465',
								'code' => '465',
								'name_ar' => 'مغيلة',
								'name' => 'Meghila',
							),
							'473' => array(
								'id' => '473',
								'code' => '473',
								'name_ar' => 'السبت',
								'name' => 'Sebt',
							),
							'479' => array(
								'id' => '479',
								'code' => '479',
								'name_ar' => 'سيدي حسني',
								'name' => 'Sidi Hosni',
							),
						),
					),
					'1427' => array(
						'id' => '1427',
						'code' => '1427',
						'name_ar' => 'فرندة',
						'name' => 'Frenda',
						'communes' => array(
							'448' => array(
								'id' => '448',
								'code' => '448',
								'name_ar' => 'عين الحديد',
								'name' => 'Ain El Hadid',
							),
							'456' => array(
								'id' => '456',
								'code' => '456',
								'name_ar' => 'فرندة',
								'name' => 'Frenda',
							),
							'482' => array(
								'id' => '482',
								'code' => '482',
								'name_ar' => 'تخمرت',
								'name' => 'Takhemaret',
							),
						),
					),
					'1428' => array(
						'id' => '1428',
						'code' => '1428',
						'name_ar' => 'عين كرمس',
						'name' => 'Ain Kermes',
						'communes' => array(
							'449' => array(
								'id' => '449',
								'code' => '449',
								'name_ar' => 'عين كرمس',
								'name' => 'Ain Kermes',
							),
							'453' => array(
								'id' => '453',
								'code' => '453',
								'name_ar' => 'جبيلات الرصفاء',
								'name' => 'Djebilet Rosfa',
							),
							'460' => array(
								'id' => '460',
								'code' => '460',
								'name_ar' => 'مادنة',
								'name' => 'Madna',
							),
							'463' => array(
								'id' => '463',
								'code' => '463',
								'name_ar' => 'مدريسة',
								'name' => 'Medrissa',
							),
							'476' => array(
								'id' => '476',
								'code' => '476',
								'name_ar' => 'سيدي عبد الرحمن',
								'name' => 'Sidi Abderrahmane',
							),
						),
					),
					'1429' => array(
						'id' => '1429',
						'code' => '1429',
						'name_ar' => 'قصر الشلالة',
						'name' => 'Ksar Chellala',
						'communes' => array(
							'459' => array(
								'id' => '459',
								'code' => '459',
								'name_ar' => 'قصر الشلالة',
								'name' => 'Ksar Chellala',
							),
							'474' => array(
								'id' => '474',
								'code' => '474',
								'name_ar' => 'سرغين',
								'name' => 'Serghine',
							),
							'486' => array(
								'id' => '486',
								'code' => '486',
								'name_ar' => 'زمالة  الأمير عبد القادر',
								'name' => 'Zmalet El Emir Abdelkade',
							),
						),
					),
					'1433' => array(
						'id' => '1433',
						'code' => '1433',
						'name_ar' => 'وادي ليلي',
						'name' => 'Oued Lili',
						'communes' => array(
							'469' => array(
								'id' => '469',
								'code' => '469',
								'name_ar' => 'وادي ليلي',
								'name' => 'Oued Lilli',
							),
							'477' => array(
								'id' => '477',
								'code' => '477',
								'name_ar' => 'سيدي علي ملال',
								'name' => 'Sidi Ali Mellal',
							),
							'484' => array(
								'id' => '484',
								'code' => '484',
								'name_ar' => 'تيدة',
								'name' => 'Tidda',
							),
						),
					),
					'1434' => array(
						'id' => '1434',
						'code' => '1434',
						'name_ar' => 'مشرع الصفا',
						'name' => 'Mechraa Sfa',
						'communes' => array(
							'454' => array(
								'id' => '454',
								'code' => '454',
								'name_ar' => 'جيلالي بن عمار',
								'name' => 'Djillali Ben Amar',
							),
							'462' => array(
								'id' => '462',
								'code' => '462',
								'name_ar' => 'مشرع الصفا',
								'name' => 'Mechraa Safa',
							),
							'481' => array(
								'id' => '481',
								'code' => '481',
								'name_ar' => 'تاقدمت',
								'name' => 'Tagdempt',
							),
						),
					),
					'1435' => array(
						'id' => '1435',
						'code' => '1435',
						'name_ar' => 'حمادية',
						'name' => 'Hamadia',
						'communes' => array(
							'450' => array(
								'id' => '450',
								'code' => '450',
								'name_ar' => 'بوقرة',
								'name' => 'Bougara',
							),
							'458' => array(
								'id' => '458',
								'code' => '458',
								'name_ar' => 'حمادية',
								'name' => 'Hamadia',
							),
							'471' => array(
								'id' => '471',
								'code' => '471',
								'name_ar' => 'الرشايقة',
								'name' => 'Rechaiga',
							),
						),
					),
				),
			),
			'15' => array(
				'id' => '15',
				'code' => '15',
				'name_ar' => 'تيزي وزو',
				'name' => 'Tizi Ouzou',
				'dairas' => array(
					'1501' => array(
						'id' => '1501',
						'code' => '1501',
						'name_ar' => 'تيزي وزو',
						'name' => 'Tizi Ouzou',
						'communes' => array(
							'549' => array(
								'id' => '549',
								'code' => '549',
								'name_ar' => 'تيزي وزو',
								'name' => 'Tizi-Ouzou',
							),
						),
					),
					'1502' => array(
						'id' => '1502',
						'code' => '1502',
						'name_ar' => 'عين الحمام',
						'name' => 'Ain El Hammam',
						'communes' => array(
							'487' => array(
								'id' => '487',
								'code' => '487',
								'name_ar' => 'أبي يوسف',
								'name' => 'Abi-Youcef',
							),
							'490' => array(
								'id' => '490',
								'code' => '490',
								'name_ar' => 'عين الحمام',
								'name' => 'Ain-El-Hammam',
							),
							'502' => array(
								'id' => '502',
								'code' => '502',
								'name_ar' => 'أيت يحيى',
								'name' => 'Ait-Yahia',
							),
							'503' => array(
								'id' => '503',
								'code' => '503',
								'name_ar' => 'اقبيل',
								'name' => 'Akbil',
							),
						),
					),
					'1509' => array(
						'id' => '1509',
						'code' => '1509',
						'name_ar' => 'ماكودة',
						'name' => 'Makouda',
						'communes' => array(
							'514' => array(
								'id' => '514',
								'code' => '514',
								'name_ar' => 'بوجيمة',
								'name' => 'Boudjima',
							),
							'532' => array(
								'id' => '532',
								'code' => '532',
								'name_ar' => 'ماكودة',
								'name' => 'Makouda',
							),
						),
					),
					'1510' => array(
						'id' => '1510',
						'code' => '1510',
						'name_ar' => 'ذراع الميزان',
						'name' => 'Draa El Mizan',
						'communes' => array(
							'491' => array(
								'id' => '491',
								'code' => '491',
								'name_ar' => 'عين الزاوية',
								'name' => 'Ain-Zaouia',
							),
							'496' => array(
								'id' => '496',
								'code' => '496',
								'name_ar' => 'أيت يحي موسى',
								'name' => 'Ait Yahia Moussa',
							),
							'518' => array(
								'id' => '518',
								'code' => '518',
								'name_ar' => 'ذراع الميزان',
								'name' => 'Draa-El-Mizan',
							),
							'520' => array(
								'id' => '520',
								'code' => '520',
								'name_ar' => 'فريقات',
								'name' => 'Frikat',
							),
						),
					),
					'1511' => array(
						'id' => '1511',
						'code' => '1511',
						'name_ar' => 'تيزي غنيف',
						'name' => 'Tizi-Ghenif',
						'communes' => array(
							'536' => array(
								'id' => '536',
								'code' => '536',
								'name_ar' => 'مكيرة',
								'name' => 'M\'kira',
							),
							'548' => array(
								'id' => '548',
								'code' => '548',
								'name_ar' => 'تيزي غنيف',
								'name' => 'Tizi-Gheniff',
							),
						),
					),
					'1517' => array(
						'id' => '1517',
						'code' => '1517',
						'name_ar' => 'إفرحونان',
						'name' => 'Iferhounene',
						'communes' => array(
							'523' => array(
								'id' => '523',
								'code' => '523',
								'name_ar' => 'إفــرحــونان',
								'name' => 'Iferhounene',
							),
							'526' => array(
								'id' => '526',
								'code' => '526',
								'name_ar' => 'إيلـيــلتـن',
								'name' => 'Illilten',
							),
							'528' => array(
								'id' => '528',
								'code' => '528',
								'name_ar' => 'إمســوحال',
								'name' => 'Imsouhal',
							),
						),
					),
					'1518' => array(
						'id' => '1518',
						'code' => '1518',
						'name_ar' => 'عزازقة',
						'name' => 'Azazga',
						'communes' => array(
							'506' => array(
								'id' => '506',
								'code' => '506',
								'name_ar' => 'عزازقة',
								'name' => 'Azazga',
							),
							'519' => array(
								'id' => '519',
								'code' => '519',
								'name_ar' => 'فريحة',
								'name' => 'Freha',
							),
							'524' => array(
								'id' => '524',
								'code' => '524',
								'name_ar' => 'إيفيغاء',
								'name' => 'Ifigha',
							),
							'551' => array(
								'id' => '551',
								'code' => '551',
								'name_ar' => 'إعــكورن',
								'name' => 'Yakourene',
							),
							'553' => array(
								'id' => '553',
								'code' => '553',
								'name_ar' => 'زكري',
								'name' => 'Zekri',
							),
						),
					),
					'1521' => array(
						'id' => '1521',
						'code' => '1521',
						'name_ar' => 'الأربعاء ناث إيراثن',
						'name' => 'Larbaa Nath Iraten',
						'communes' => array(
							'492' => array(
								'id' => '492',
								'code' => '492',
								'name_ar' => 'أيت عقـواشة',
								'name' => 'Ait Aggouacha',
							),
							'529' => array(
								'id' => '529',
								'code' => '529',
								'name_ar' => 'إيرجـــن',
								'name' => 'Irdjen',
							),
							'530' => array(
								'id' => '530',
								'code' => '530',
								'name_ar' => 'الأربعــاء ناث إيراثن',
								'name' => 'Larbaa Nath Irathen',
							),
						),
					),
					'1522' => array(
						'id' => '1522',
						'code' => '1522',
						'name_ar' => 'تيزي راشد',
						'name' => 'Tizi Rached',
						'communes' => array(
							'500' => array(
								'id' => '500',
								'code' => '500',
								'name_ar' => 'أيت  أومالو',
								'name' => 'Ait-Oumalou',
							),
							'550' => array(
								'id' => '550',
								'code' => '550',
								'name_ar' => 'تيزي راشد',
								'name' => 'Tizi-Rached',
							),
						),
					),
					'1524' => array(
						'id' => '1524',
						'code' => '1524',
						'name_ar' => 'واقنون',
						'name' => 'Ouaguenoun',
						'communes' => array(
							'497' => array(
								'id' => '497',
								'code' => '497',
								'name_ar' => 'أيت عيسى ميمون',
								'name' => 'Ait-Aissa-Mimoun',
							),
							'539' => array(
								'id' => '539',
								'code' => '539',
								'name_ar' => 'واقنون',
								'name' => 'Ouaguenoun',
							),
							'545' => array(
								'id' => '545',
								'code' => '545',
								'name_ar' => 'تيمـيزار',
								'name' => 'Timizart',
							),
						),
					),
					'1529' => array(
						'id' => '1529',
						'code' => '1529',
						'name_ar' => 'معاتقة',
						'name' => 'Maatkas',
						'communes' => array(
							'531' => array(
								'id' => '531',
								'code' => '531',
								'name_ar' => 'معـــاتقة',
								'name' => 'Maatkas',
							),
							'542' => array(
								'id' => '542',
								'code' => '542',
								'name_ar' => 'سوق الإثنين',
								'name' => 'Souk-El-Tenine',
							),
						),
					),
					'1532' => array(
						'id' => '1532',
						'code' => '1532',
						'name_ar' => 'بني دوالة',
						'name' => 'Beni Douala',
						'communes' => array(
							'499' => array(
								'id' => '499',
								'code' => '499',
								'name_ar' => 'أيت محمود',
								'name' => 'Ait-Mahmoud',
							),
							'508' => array(
								'id' => '508',
								'code' => '508',
								'name_ar' => 'بنــــي زمنزار',
								'name' => 'Beni Zmenzer',
							),
							'509' => array(
								'id' => '509',
								'code' => '509',
								'name_ar' => 'بني عيسي',
								'name' => 'Beni-Aissi',
							),
							'510' => array(
								'id' => '510',
								'code' => '510',
								'name_ar' => 'بني دوالة',
								'name' => 'Beni-Douala',
							),
						),
					),
					'1534' => array(
						'id' => '1534',
						'code' => '1534',
						'name_ar' => 'بوزقن',
						'name' => 'Bouzeguene',
						'communes' => array(
							'512' => array(
								'id' => '512',
								'code' => '512',
								'name_ar' => 'بني زيكــي',
								'name' => 'Beni-Zikki',
							),
							'516' => array(
								'id' => '516',
								'code' => '516',
								'name_ar' => 'بوزقــن',
								'name' => 'Bouzeguene',
							),
							'522' => array(
								'id' => '522',
								'code' => '522',
								'name_ar' => 'إيجــار',
								'name' => 'Idjeur',
							),
							'527' => array(
								'id' => '527',
								'code' => '527',
								'name_ar' => 'إيلولة أومـــالو',
								'name' => 'Illoula Oumalou',
							),
						),
					),
					'1536' => array(
						'id' => '1536',
						'code' => '1536',
						'name_ar' => 'واضية',
						'name' => 'Ouadhias',
						'communes' => array(
							'489' => array(
								'id' => '489',
								'code' => '489',
								'name_ar' => 'أقني قغران',
								'name' => 'Agouni-Gueghrane',
							),
							'493' => array(
								'id' => '493',
								'code' => '493',
								'name_ar' => 'أيت بــوادو',
								'name' => 'Ait Bouaddou',
							),
							'538' => array(
								'id' => '538',
								'code' => '538',
								'name_ar' => 'واضية',
								'name' => 'Ouadhias',
							),
							'547' => array(
								'id' => '547',
								'code' => '547',
								'name_ar' => 'تيزي نثلاثة',
								'name' => 'Tizi N\'tleta',
							),
						),
					),
					'1537' => array(
						'id' => '1537',
						'code' => '1537',
						'name_ar' => 'أزفون',
						'name' => 'Azeffoun',
						'communes' => array(
							'488' => array(
								'id' => '488',
								'code' => '488',
								'name_ar' => 'أغريب',
								'name' => 'Aghribs',
							),
							'498' => array(
								'id' => '498',
								'code' => '498',
								'name_ar' => 'أيت شافع',
								'name' => 'Ait-Chafaa',
							),
							'504' => array(
								'id' => '504',
								'code' => '504',
								'name_ar' => 'أقرو',
								'name' => 'Akerrou',
							),
							'507' => array(
								'id' => '507',
								'code' => '507',
								'name_ar' => 'أزفون',
								'name' => 'Azeffoun',
							),
						),
					),
					'1538' => array(
						'id' => '1538',
						'code' => '1538',
						'name_ar' => 'تيقزيرت',
						'name' => 'Tigzirt',
						'communes' => array(
							'525' => array(
								'id' => '525',
								'code' => '525',
								'name_ar' => 'إفليـــسن',
								'name' => 'Iflissen',
							),
							'535' => array(
								'id' => '535',
								'code' => '535',
								'name_ar' => 'ميزرانـــة',
								'name' => 'Mizrana',
							),
							'544' => array(
								'id' => '544',
								'code' => '544',
								'name_ar' => 'تيقـزيرت',
								'name' => 'Tigzirt',
							),
						),
					),
					'1540' => array(
						'id' => '1540',
						'code' => '1540',
						'name_ar' => 'بوغني',
						'name' => 'Boghni',
						'communes' => array(
							'505' => array(
								'id' => '505',
								'code' => '505',
								'name_ar' => 'أسي يوسف',
								'name' => 'Assi-Youcef',
							),
							'513' => array(
								'id' => '513',
								'code' => '513',
								'name_ar' => 'بوغني',
								'name' => 'Boghni',
							),
							'515' => array(
								'id' => '515',
								'code' => '515',
								'name_ar' => 'بونوح',
								'name' => 'Bounouh',
							),
							'533' => array(
								'id' => '533',
								'code' => '533',
								'name_ar' => 'مشطراس',
								'name' => 'Mechtras',
							),
						),
					),
					'1547' => array(
						'id' => '1547',
						'code' => '1547',
						'name_ar' => 'ذراع بن خدة',
						'name' => 'Draa Ben Khedda',
						'communes' => array(
							'517' => array(
								'id' => '517',
								'code' => '517',
								'name_ar' => 'ذراع بن خدة',
								'name' => 'Draa-Ben-Khedda',
							),
							'540' => array(
								'id' => '540',
								'code' => '540',
								'name_ar' => 'سيدي نعمان',
								'name' => 'Sidi Namane',
							),
							'543' => array(
								'id' => '543',
								'code' => '543',
								'name_ar' => 'تادمايت',
								'name' => 'Tadmait',
							),
							'546' => array(
								'id' => '546',
								'code' => '546',
								'name_ar' => 'تيرمتين',
								'name' => 'Tirmitine',
							),
						),
					),
					'1548' => array(
						'id' => '1548',
						'code' => '1548',
						'name_ar' => 'واسيف',
						'name' => 'Ouacif',
						'communes' => array(
							'494' => array(
								'id' => '494',
								'code' => '494',
								'name_ar' => 'أيت بومهدي',
								'name' => 'Ait Boumahdi',
							),
							'501' => array(
								'id' => '501',
								'code' => '501',
								'name_ar' => 'أيت تودرت',
								'name' => 'Ait-Toudert',
							),
							'537' => array(
								'id' => '537',
								'code' => '537',
								'name_ar' => 'واسيف',
								'name' => 'Ouacif',
							),
						),
					),
					'1550' => array(
						'id' => '1550',
						'code' => '1550',
						'name_ar' => 'مقلع',
						'name' => 'Mekla',
						'communes' => array(
							'495' => array(
								'id' => '495',
								'code' => '495',
								'name_ar' => 'أيت خليلي',
								'name' => 'Ait Khellili',
							),
							'534' => array(
								'id' => '534',
								'code' => '534',
								'name_ar' => 'مقــلع',
								'name' => 'Mekla',
							),
							'541' => array(
								'id' => '541',
								'code' => '541',
								'name_ar' => 'صوامـــع',
								'name' => 'Souama',
							),
						),
					),
					'1552' => array(
						'id' => '1552',
						'code' => '1552',
						'name_ar' => 'بني يني',
						'name' => 'Benni Yenni',
						'communes' => array(
							'511' => array(
								'id' => '511',
								'code' => '511',
								'name_ar' => 'بني يني',
								'name' => 'Beni-Yenni',
							),
							'521' => array(
								'id' => '521',
								'code' => '521',
								'name_ar' => 'إبودرارن',
								'name' => 'Iboudrarene',
							),
							'552' => array(
								'id' => '552',
								'code' => '552',
								'name_ar' => 'يطــافن',
								'name' => 'Yatafene',
							),
						),
					),
				),
			),
			'16' => array(
				'id' => '16',
				'code' => '16',
				'name_ar' => 'الجزائر',
				'name' => 'Alger',
				'dairas' => array(
					'1602' => array(
						'id' => '1602',
						'code' => '1602',
						'name_ar' => 'سيدي امحمد',
						'name' => 'Sidi M\'hamed',
						'communes' => array(
							'556' => array(
								'id' => '556',
								'code' => '556',
								'name_ar' => 'الجزائر الوسطى',
								'name' => 'Alger Centre',
							),
							'582' => array(
								'id' => '582',
								'code' => '582',
								'name_ar' => 'المدنية',
								'name' => 'El Madania',
							),
							'585' => array(
								'id' => '585',
								'code' => '585',
								'name_ar' => 'المرادية',
								'name' => 'El Mouradia',
							),
							'605' => array(
								'id' => '605',
								'code' => '605',
								'name_ar' => 'سيدي امحمد',
								'name' => 'Sidi M\'hamed',
							),
						),
					),
					'1605' => array(
						'id' => '1605',
						'code' => '1605',
						'name_ar' => 'باب الوادي',
						'name' => 'Bab El Oued',
						'communes' => array(
							'557' => array(
								'id' => '557',
								'code' => '557',
								'name_ar' => 'باب الوادي',
								'name' => 'Bab El Oued',
							),
							'567' => array(
								'id' => '567',
								'code' => '567',
								'name_ar' => 'بولوغين بن زيري',
								'name' => 'Bologhine Ibnou Ziri',
							),
							'572' => array(
								'id' => '572',
								'code' => '572',
								'name_ar' => 'القصبة',
								'name' => 'Casbah',
							),
							'596' => array(
								'id' => '596',
								'code' => '596',
								'name_ar' => 'وادي قريش',
								'name' => 'Oued Koriche',
							),
							'601' => array(
								'id' => '601',
								'code' => '601',
								'name_ar' => 'الرايس حميدو',
								'name' => 'Rais Hamidou',
							),
						),
					),
					'1609' => array(
						'id' => '1609',
						'code' => '1609',
						'name_ar' => 'بئر مراد رايس',
						'name' => 'Bir Mourad Rais',
						'communes' => array(
							'564' => array(
								'id' => '564',
								'code' => '564',
								'name_ar' => 'بئر مراد رايس',
								'name' => 'Bir Mourad Rais',
							),
							'565' => array(
								'id' => '565',
								'code' => '565',
								'name_ar' => 'بئر خادم',
								'name' => 'Birkhadem',
							),
							'576' => array(
								'id' => '576',
								'code' => '576',
								'name_ar' => 'جسر قسنطينة',
								'name' => 'Djasr Kasentina',
							),
							'589' => array(
								'id' => '589',
								'code' => '589',
								'name_ar' => 'حيدرة',
								'name' => 'Hydra',
							),
							'604' => array(
								'id' => '604',
								'code' => '604',
								'name_ar' => 'السحاولة',
								'name' => 'Sehaoula',
							),
						),
					),
					'1611' => array(
						'id' => '1611',
						'code' => '1611',
						'name_ar' => 'بوزريعة',
						'name' => 'Bouzareah',
						'communes' => array(
							'562' => array(
								'id' => '562',
								'code' => '562',
								'name_ar' => 'ابن عكنون',
								'name' => 'Ben Aknoun',
							),
							'563' => array(
								'id' => '563',
								'code' => '563',
								'name_ar' => 'بني مسوس',
								'name' => 'Beni Messous',
							),
							'571' => array(
								'id' => '571',
								'code' => '571',
								'name_ar' => 'بوزريعة',
								'name' => 'Bouzareah',
							),
							'580' => array(
								'id' => '580',
								'code' => '580',
								'name_ar' => 'الابيار',
								'name' => 'El Biar',
							),
						),
					),
					'1613' => array(
						'id' => '1613',
						'code' => '1613',
						'name_ar' => 'الحراش',
						'name' => 'El Harrach',
						'communes' => array(
							'560' => array(
								'id' => '560',
								'code' => '560',
								'name_ar' => 'باش جراح',
								'name' => 'Bachedjerah',
							),
							'570' => array(
								'id' => '570',
								'code' => '570',
								'name_ar' => 'بوروبة',
								'name' => 'Bourouba',
							),
							'581' => array(
								'id' => '581',
								'code' => '581',
								'name_ar' => 'الحراش',
								'name' => 'El Harrach',
							),
							'597' => array(
								'id' => '597',
								'code' => '597',
								'name_ar' => 'وادي السمار',
								'name' => 'Oued Smar',
							),
						),
					),
					'1614' => array(
						'id' => '1614',
						'code' => '1614',
						'name_ar' => 'براقي',
						'name' => 'Baraki',
						'communes' => array(
							'561' => array(
								'id' => '561',
								'code' => '561',
								'name_ar' => 'براقي',
								'name' => 'Baraki',
							),
							'592' => array(
								'id' => '592',
								'code' => '592',
								'name_ar' => 'الكاليتوس',
								'name' => 'Les Eucalyptus',
							),
							'606' => array(
								'id' => '606',
								'code' => '606',
								'name_ar' => 'سيدي موسى',
								'name' => 'Sidi Moussa',
							),
						),
					),
					'1617' => array(
						'id' => '1617',
						'code' => '1617',
						'name_ar' => 'حسين داي',
						'name' => 'Hussein Dey',
						'communes' => array(
							'583' => array(
								'id' => '583',
								'code' => '583',
								'name_ar' => 'المغارية',
								'name' => 'El Magharia',
							),
							'588' => array(
								'id' => '588',
								'code' => '588',
								'name_ar' => 'حسين داي',
								'name' => 'Hussein Dey',
							),
							'591' => array(
								'id' => '591',
								'code' => '591',
								'name_ar' => 'القبة',
								'name' => 'Kouba',
							),
							'594' => array(
								'id' => '594',
								'code' => '594',
								'name_ar' => 'محمد بلوزداد',
								'name' => 'Mohamed Belouzdad',
							),
						),
					),
					'1620' => array(
						'id' => '1620',
						'code' => '1620',
						'name_ar' => 'الدار البيضاء',
						'name' => 'Dar El Beida',
						'communes' => array(
							'555' => array(
								'id' => '555',
								'code' => '555',
								'name_ar' => 'عين طاية',
								'name' => 'Ain Taya',
							),
							'558' => array(
								'id' => '558',
								'code' => '558',
								'name_ar' => 'باب الزوار',
								'name' => 'Bab Ezzouar',
							),
							'568' => array(
								'id' => '568',
								'code' => '568',
								'name_ar' => 'برج البحري',
								'name' => 'Bordj El Bahri',
							),
							'569' => array(
								'id' => '569',
								'code' => '569',
								'name_ar' => 'برج الكيفان',
								'name' => 'Bordj El Kiffan',
							),
							'574' => array(
								'id' => '574',
								'code' => '574',
								'name_ar' => 'الدار البيضاء',
								'name' => 'Dar El Beida',
							),
							'584' => array(
								'id' => '584',
								'code' => '584',
								'name_ar' => 'المرسى',
								'name' => 'El Marsa',
							),
							'595' => array(
								'id' => '595',
								'code' => '595',
								'name_ar' => 'المحمدية',
								'name' => 'Mohammadia',
							),
						),
					),
					'1636' => array(
						'id' => '1636',
						'code' => '1636',
						'name_ar' => 'بئر توتة',
						'name' => 'Birtouta',
						'communes' => array(
							'566' => array(
								'id' => '566',
								'code' => '566',
								'name_ar' => 'بئر توتة',
								'name' => 'Bir Touta',
							),
							'598' => array(
								'id' => '598',
								'code' => '598',
								'name_ar' => 'اولاد شبل',
								'name' => 'Ouled Chebel',
							),
							'609' => array(
								'id' => '609',
								'code' => '609',
								'name_ar' => 'تسالة المرجة',
								'name' => 'Tessala El Merdja',
							),
						),
					),
					'1638' => array(
						'id' => '1638',
						'code' => '1638',
						'name_ar' => 'الرويبة',
						'name' => 'Rouiba',
						'communes' => array(
							'587' => array(
								'id' => '587',
								'code' => '587',
								'name_ar' => 'هراوة',
								'name' => 'Herraoua',
							),
							'602' => array(
								'id' => '602',
								'code' => '602',
								'name_ar' => 'رغاية',
								'name' => 'Reghaia',
							),
							'603' => array(
								'id' => '603',
								'code' => '603',
								'name_ar' => 'الرويبة',
								'name' => 'Rouiba',
							),
						),
					),
					'1644' => array(
						'id' => '1644',
						'code' => '1644',
						'name_ar' => 'زرالدة',
						'name' => 'Zeralda',
						'communes' => array(
							'593' => array(
								'id' => '593',
								'code' => '593',
								'name_ar' => 'المعالمة',
								'name' => 'Maalma',
							),
							'600' => array(
								'id' => '600',
								'code' => '600',
								'name_ar' => 'الرحمانية',
								'name' => 'Rahmania',
							),
							'607' => array(
								'id' => '607',
								'code' => '607',
								'name_ar' => 'سويدانية',
								'name' => 'Souidania',
							),
							'608' => array(
								'id' => '608',
								'code' => '608',
								'name_ar' => 'سطاوالي',
								'name' => 'Staoueli',
							),
							'610' => array(
								'id' => '610',
								'code' => '610',
								'name_ar' => 'زرالدة',
								'name' => 'Zeralda',
							),
						),
					),
					'1649' => array(
						'id' => '1649',
						'code' => '1649',
						'name_ar' => 'الدرارية',
						'name' => 'Draria',
						'communes' => array(
							'559' => array(
								'id' => '559',
								'code' => '559',
								'name_ar' => 'بابا حسن',
								'name' => 'Baba Hassen',
							),
							'577' => array(
								'id' => '577',
								'code' => '577',
								'name_ar' => 'الدويرة',
								'name' => 'Douira',
							),
							'578' => array(
								'id' => '578',
								'code' => '578',
								'name_ar' => 'الدرارية',
								'name' => 'Draria',
							),
							'579' => array(
								'id' => '579',
								'code' => '579',
								'name_ar' => 'العاشور',
								'name' => 'El Achour',
							),
							'590' => array(
								'id' => '590',
								'code' => '590',
								'name_ar' => 'الخرايسية',
								'name' => 'Khraissia',
							),
						),
					),
					'1652' => array(
						'id' => '1652',
						'code' => '1652',
						'name_ar' => 'الشراقة',
						'name' => 'Cheraga',
						'communes' => array(
							'554' => array(
								'id' => '554',
								'code' => '554',
								'name_ar' => 'عين بنيان',
								'name' => 'Ain Benian',
							),
							'573' => array(
								'id' => '573',
								'code' => '573',
								'name_ar' => 'الشراقة',
								'name' => 'Cheraga',
							),
							'575' => array(
								'id' => '575',
								'code' => '575',
								'name_ar' => 'دالي ابراهيم',
								'name' => 'Dely Ibrahim',
							),
							'586' => array(
								'id' => '586',
								'code' => '586',
								'name_ar' => 'الحمامات',
								'name' => 'Hammamet',
							),
							'599' => array(
								'id' => '599',
								'code' => '599',
								'name_ar' => 'اولاد فايت',
								'name' => 'Ouled Fayet',
							),
						),
					),
				),
			),
			'17' => array(
				'id' => '17',
				'code' => '17',
				'name_ar' => 'الجلفة',
				'name' => 'Djelfa',
				'dairas' => array(
					'1701' => array(
						'id' => '1701',
						'code' => '1701',
						'name_ar' => 'الجلفة',
						'name' => 'Djelfa',
						'communes' => array(
							'624' => array(
								'id' => '624',
								'code' => '624',
								'name_ar' => 'الجلفة',
								'name' => 'Djelfa',
							),
						),
					),
					'1704' => array(
						'id' => '1704',
						'code' => '1704',
						'name_ar' => 'حاسي بحبح',
						'name' => 'Hassi Bahbah',
						'communes' => array(
							'614' => array(
								'id' => '614',
								'code' => '614',
								'name_ar' => 'عين معبد',
								'name' => 'Ain Maabed',
							),
							'633' => array(
								'id' => '633',
								'code' => '633',
								'name_ar' => 'حاسي بحبح',
								'name' => 'Hassi Bahbah',
							),
							'634' => array(
								'id' => '634',
								'code' => '634',
								'name_ar' => 'حاسي العش',
								'name' => 'Hassi El Euch',
							),
							'645' => array(
								'id' => '645',
								'code' => '645',
								'name_ar' => 'زعفران',
								'name' => 'Zaafrane',
							),
						),
					),
					'1707' => array(
						'id' => '1707',
						'code' => '1707',
						'name_ar' => 'فيض البطمة',
						'name' => 'Faidh El Botma',
						'communes' => array(
							'616' => array(
								'id' => '616',
								'code' => '616',
								'name_ar' => 'عمورة',
								'name' => 'Amourah',
							),
							'629' => array(
								'id' => '629',
								'code' => '629',
								'name_ar' => 'فيض البطمة',
								'name' => 'Faidh El Botma',
							),
							'639' => array(
								'id' => '639',
								'code' => '639',
								'name_ar' => 'أم العظام',
								'name' => 'Oum Laadham',
							),
						),
					),
					'1708' => array(
						'id' => '1708',
						'code' => '1708',
						'name_ar' => 'بيرين',
						'name' => 'Birine',
						'communes' => array(
							'617' => array(
								'id' => '617',
								'code' => '617',
								'name_ar' => 'بنهار',
								'name' => 'Benhar',
							),
							'619' => array(
								'id' => '619',
								'code' => '619',
								'name_ar' => 'بيرين',
								'name' => 'Birine',
							),
						),
					),
					'1714' => array(
						'id' => '1714',
						'code' => '1714',
						'name_ar' => 'الادريسية',
						'name' => 'El Idrissia',
						'communes' => array(
							'611' => array(
								'id' => '611',
								'code' => '611',
								'name_ar' => 'عين الشهداء',
								'name' => 'Ain Chouhada',
							),
							'625' => array(
								'id' => '625',
								'code' => '625',
								'name_ar' => 'دويس',
								'name' => 'Douis',
							),
							'627' => array(
								'id' => '627',
								'code' => '627',
								'name_ar' => 'الادريسية',
								'name' => 'El Idrissia',
							),
						),
					),
					'1717' => array(
						'id' => '1717',
						'code' => '1717',
						'name_ar' => 'مسعد',
						'name' => 'Messaad',
						'communes' => array(
							'623' => array(
								'id' => '623',
								'code' => '623',
								'name_ar' => 'دلدول',
								'name' => 'Deldoul',
							),
							'631' => array(
								'id' => '631',
								'code' => '631',
								'name_ar' => 'قطارة',
								'name' => 'Guettara',
							),
							'636' => array(
								'id' => '636',
								'code' => '636',
								'name_ar' => 'مسعد',
								'name' => 'Messaad',
							),
							'640' => array(
								'id' => '640',
								'code' => '640',
								'name_ar' => 'سد الرحال',
								'name' => 'Sed Rahal',
							),
							'641' => array(
								'id' => '641',
								'code' => '641',
								'name_ar' => 'سلمانة',
								'name' => 'Selmana',
							),
						),
					),
					'1719' => array(
						'id' => '1719',
						'code' => '1719',
						'name_ar' => 'سيدي لعجال',
						'name' => 'Sidi Laadjel',
						'communes' => array(
							'628' => array(
								'id' => '628',
								'code' => '628',
								'name_ar' => 'الخميس',
								'name' => 'El Khemis',
							),
							'635' => array(
								'id' => '635',
								'code' => '635',
								'name_ar' => 'حاسي فدول',
								'name' => 'Hassi Fedoul',
							),
							'643' => array(
								'id' => '643',
								'code' => '643',
								'name_ar' => 'سيدي لعجال',
								'name' => 'Sidi Laadjel',
							),
						),
					),
					'1720' => array(
						'id' => '1720',
						'code' => '1720',
						'name_ar' => 'حد الصحاري',
						'name' => 'Had Sahary',
						'communes' => array(
							'613' => array(
								'id' => '613',
								'code' => '613',
								'name_ar' => 'عين فقه',
								'name' => 'Ain Fekka',
							),
							'620' => array(
								'id' => '620',
								'code' => '620',
								'name_ar' => 'بويرة الأحداب',
								'name' => 'Bouira Lahdab',
							),
							'632' => array(
								'id' => '632',
								'code' => '632',
								'name_ar' => 'حد الصحاري',
								'name' => 'Had Sahary',
							),
						),
					),
					'1725' => array(
						'id' => '1725',
						'code' => '1725',
						'name_ar' => 'دار الشيوخ',
						'name' => 'Dar Chioukh',
						'communes' => array(
							'622' => array(
								'id' => '622',
								'code' => '622',
								'name_ar' => 'دار الشيوخ',
								'name' => 'Dar Chioukh',
							),
							'637' => array(
								'id' => '637',
								'code' => '637',
								'name_ar' => 'مليليحة',
								'name' => 'M\'liliha',
							),
							'642' => array(
								'id' => '642',
								'code' => '642',
								'name_ar' => 'سيدي بايزيد',
								'name' => 'Sidi Baizid',
							),
						),
					),
					'1726' => array(
						'id' => '1726',
						'code' => '1726',
						'name_ar' => 'الشارف',
						'name' => 'Charef',
						'communes' => array(
							'618' => array(
								'id' => '618',
								'code' => '618',
								'name_ar' => 'بن يعقوب',
								'name' => 'Benyagoub',
							),
							'621' => array(
								'id' => '621',
								'code' => '621',
								'name_ar' => 'الشارف',
								'name' => 'Charef',
							),
							'626' => array(
								'id' => '626',
								'code' => '626',
								'name_ar' => 'القديد',
								'name' => 'El Guedid',
							),
						),
					),
					'1730' => array(
						'id' => '1730',
						'code' => '1730',
						'name_ar' => 'عين الإبل',
						'name' => 'Ain El Ibel',
						'communes' => array(
							'612' => array(
								'id' => '612',
								'code' => '612',
								'name_ar' => 'عين الإبل',
								'name' => 'Ain El Ibel',
							),
							'638' => array(
								'id' => '638',
								'code' => '638',
								'name_ar' => 'مجبارة',
								'name' => 'Moudjebara',
							),
							'644' => array(
								'id' => '644',
								'code' => '644',
								'name_ar' => 'تعظميت',
								'name' => 'Taadmit',
							),
							'646' => array(
								'id' => '646',
								'code' => '646',
								'name_ar' => 'زكار',
								'name' => 'Zaccar',
							),
						),
					),
					'1731' => array(
						'id' => '1731',
						'code' => '1731',
						'name_ar' => 'عين وسارة',
						'name' => 'Ain Oussera',
						'communes' => array(
							'615' => array(
								'id' => '615',
								'code' => '615',
								'name_ar' => 'عين وسارة',
								'name' => 'Ain Oussera',
							),
							'630' => array(
								'id' => '630',
								'code' => '630',
								'name_ar' => 'قرنيني',
								'name' => 'Guernini',
							),
						),
					),
				),
			),
			'18' => array(
				'id' => '18',
				'code' => '18',
				'name_ar' => 'جيجل',
				'name' => 'Jijel',
				'dairas' => array(
					'1801' => array(
						'id' => '1801',
						'code' => '1801',
						'name_ar' => 'جيجل',
						'name' => 'Jijel',
						'communes' => array(
							'662' => array(
								'id' => '662',
								'code' => '662',
								'name_ar' => 'جيجل',
								'name' => 'Jijel',
							),
						),
					),
					'1803' => array(
						'id' => '1803',
						'code' => '1803',
						'name_ar' => 'العوانة',
						'name' => 'El Aouana',
						'communes' => array(
							'656' => array(
								'id' => '656',
								'code' => '656',
								'name_ar' => 'العوانة',
								'name' => 'El Aouana',
							),
							'668' => array(
								'id' => '668',
								'code' => '668',
								'name_ar' => 'سلمى بن زيادة',
								'name' => 'Selma Benziada',
							),
						),
					),
					'1804' => array(
						'id' => '1804',
						'code' => '1804',
						'name_ar' => 'زيامة منصورية',
						'name' => 'Ziamah Mansouriah',
						'communes' => array(
							'660' => array(
								'id' => '660',
								'code' => '660',
								'name_ar' => 'أراقن سويسي',
								'name' => 'Erraguene Souissi',
							),
							'674' => array(
								'id' => '674',
								'code' => '674',
								'name_ar' => 'زيامة منصورية',
								'name' => 'Ziama Mansouriah',
							),
						),
					),
					'1805' => array(
						'id' => '1805',
						'code' => '1805',
						'name_ar' => 'الطاهير',
						'name' => 'Taher',
						'communes' => array(
							'650' => array(
								'id' => '650',
								'code' => '650',
								'name_ar' => 'بوسيف أولاد عسكر',
								'name' => 'Boussif Ouled Askeur',
							),
							'651' => array(
								'id' => '651',
								'code' => '651',
								'name_ar' => 'الشحنة',
								'name' => 'Chahna',
							),
							'659' => array(
								'id' => '659',
								'code' => '659',
								'name_ar' => 'الامير عبد القادر',
								'name' => 'Emir Abdelkader',
							),
							'665' => array(
								'id' => '665',
								'code' => '665',
								'name_ar' => 'وجانة',
								'name' => 'Oudjana',
							),
							'672' => array(
								'id' => '672',
								'code' => '672',
								'name_ar' => 'الطاهير',
								'name' => 'Taher',
							),
						),
					),
					'1807' => array(
						'id' => '1807',
						'code' => '1807',
						'name_ar' => 'الشقفة',
						'name' => 'Chekfa',
						'communes' => array(
							'647' => array(
								'id' => '647',
								'code' => '647',
								'name_ar' => 'برج الطهر',
								'name' => 'Bordj T\'har',
							),
							'652' => array(
								'id' => '652',
								'code' => '652',
								'name_ar' => 'الشقفة',
								'name' => 'Chekfa',
							),
							'657' => array(
								'id' => '657',
								'code' => '657',
								'name_ar' => 'القنار نشفي',
								'name' => 'El Kennar Nouchfi',
							),
							'670' => array(
								'id' => '670',
								'code' => '670',
								'name_ar' => 'سيدي عبد العزيز',
								'name' => 'Sidi Abdelaziz',
							),
						),
					),
					'1809' => array(
						'id' => '1809',
						'code' => '1809',
						'name_ar' => 'الميلية',
						'name' => 'El Milia',
						'communes' => array(
							'658' => array(
								'id' => '658',
								'code' => '658',
								'name_ar' => 'الميلية',
								'name' => 'El Milia',
							),
							'667' => array(
								'id' => '667',
								'code' => '667',
								'name_ar' => 'أولاد يحيى خدروش',
								'name' => 'Ouled Yahia Khadrouch',
							),
						),
					),
					'1810' => array(
						'id' => '1810',
						'code' => '1810',
						'name_ar' => 'سيدي معروف',
						'name' => 'Sidi Marouf',
						'communes' => array(
							'666' => array(
								'id' => '666',
								'code' => '666',
								'name_ar' => 'أولاد رابح',
								'name' => 'Ouled Rabah',
							),
							'671' => array(
								'id' => '671',
								'code' => '671',
								'name_ar' => 'سيدي معروف',
								'name' => 'Sidi Marouf',
							),
						),
					),
					'1811' => array(
						'id' => '1811',
						'code' => '1811',
						'name_ar' => 'السطارة',
						'name' => 'Settara',
						'communes' => array(
							'661' => array(
								'id' => '661',
								'code' => '661',
								'name_ar' => 'غبالة',
								'name' => 'Ghebala',
							),
							'669' => array(
								'id' => '669',
								'code' => '669',
								'name_ar' => 'السطارة',
								'name' => 'Settara',
							),
						),
					),
					'1812' => array(
						'id' => '1812',
						'code' => '1812',
						'name_ar' => 'العنصر',
						'name' => 'El Ancer',
						'communes' => array(
							'649' => array(
								'id' => '649',
								'code' => '649',
								'name_ar' => 'بوراوي بلهادف',
								'name' => 'Bouraoui Belhadef',
							),
							'653' => array(
								'id' => '653',
								'code' => '653',
								'name_ar' => 'الجمعة بني حبيبي',
								'name' => 'Djemaa Beni Habibi',
							),
							'655' => array(
								'id' => '655',
								'code' => '655',
								'name_ar' => 'العنصر',
								'name' => 'El Ancer',
							),
							'664' => array(
								'id' => '664',
								'code' => '664',
								'name_ar' => 'خيري واد عجول',
								'name' => 'Khiri Oued Adjoul',
							),
						),
					),
					'1817' => array(
						'id' => '1817',
						'code' => '1817',
						'name_ar' => 'جيملة',
						'name' => 'Djimla',
						'communes' => array(
							'648' => array(
								'id' => '648',
								'code' => '648',
								'name_ar' => 'بودريعة بني  ياجيس',
								'name' => 'Boudria Beniyadjis',
							),
							'654' => array(
								'id' => '654',
								'code' => '654',
								'name_ar' => 'جيملة',
								'name' => 'Djimla',
							),
						),
					),
					'1824' => array(
						'id' => '1824',
						'code' => '1824',
						'name_ar' => 'تاكسنة',
						'name' => 'Texenna',
						'communes' => array(
							'663' => array(
								'id' => '663',
								'code' => '663',
								'name_ar' => 'قاوس',
								'name' => 'Kaous',
							),
							'673' => array(
								'id' => '673',
								'code' => '673',
								'name_ar' => 'تاكسنة',
								'name' => 'Texenna',
							),
						),
					),
				),
			),
			'19' => array(
				'id' => '19',
				'code' => '19',
				'name_ar' => 'سطيف',
				'name' => 'Sétif',
				'dairas' => array(
					'1901' => array(
						'id' => '1901',
						'code' => '1901',
						'name_ar' => 'سطيف',
						'name' => 'Setif',
						'communes' => array(
							'729' => array(
								'id' => '729',
								'code' => '729',
								'name_ar' => 'سطيف',
								'name' => 'Setif',
							),
						),
					),
					'1902' => array(
						'id' => '1902',
						'code' => '1902',
						'name_ar' => 'عين الكبيرة',
						'name' => 'Ain El Kebira',
						'communes' => array(
							'678' => array(
								'id' => '678',
								'code' => '678',
								'name_ar' => 'عين الكبيرة',
								'name' => 'Ain El Kebira',
							),
							'703' => array(
								'id' => '703',
								'code' => '703',
								'name_ar' => 'الدهامشة',
								'name' => 'Dehamcha',
							),
							'722' => array(
								'id' => '722',
								'code' => '722',
								'name_ar' => 'أولاد عدوان',
								'name' => 'Ouled Addouane',
							),
						),
					),
					'1903' => array(
						'id' => '1903',
						'code' => '1903',
						'name_ar' => 'بني عزيز',
						'name' => 'Beni Aziz',
						'communes' => array(
							'683' => array(
								'id' => '683',
								'code' => '683',
								'name_ar' => 'عين السبت',
								'name' => 'Ain-Sebt',
							),
							'695' => array(
								'id' => '695',
								'code' => '695',
								'name_ar' => 'بني عزيز',
								'name' => 'Beni-Aziz',
							),
							'718' => array(
								'id' => '718',
								'code' => '718',
								'name_ar' => 'معاوية',
								'name' => 'Maaouia',
							),
						),
					),
					'1908' => array(
						'id' => '1908',
						'code' => '1908',
						'name_ar' => 'بئر العرش',
						'name' => 'Bir El Arch',
						'communes' => array(
							'690' => array(
								'id' => '690',
								'code' => '690',
								'name_ar' => 'بلاعة',
								'name' => 'Bellaa',
							),
							'698' => array(
								'id' => '698',
								'code' => '698',
								'name_ar' => 'بئر العرش',
								'name' => 'Bir-El-Arch',
							),
							'708' => array(
								'id' => '708',
								'code' => '708',
								'name_ar' => 'الولجة',
								'name' => 'El-Ouldja',
							),
							'730' => array(
								'id' => '730',
								'code' => '730',
								'name_ar' => 'تاشودة',
								'name' => 'Tachouda',
							),
						),
					),
					'1916' => array(
						'id' => '1916',
						'code' => '1916',
						'name_ar' => 'بابور',
						'name' => 'Babor',
						'communes' => array(
							'687' => array(
								'id' => '687',
								'code' => '687',
								'name_ar' => 'بابور',
								'name' => 'Babor',
							),
							'728' => array(
								'id' => '728',
								'code' => '728',
								'name_ar' => 'سرج الغول',
								'name' => 'Serdj-El-Ghoul',
							),
						),
					),
					'1917' => array(
						'id' => '1917',
						'code' => '1917',
						'name_ar' => 'قجال',
						'name' => 'Guidjel',
						'communes' => array(
							'712' => array(
								'id' => '712',
								'code' => '712',
								'name_ar' => 'قجال',
								'name' => 'Guidjel',
							),
							'723' => array(
								'id' => '723',
								'code' => '723',
								'name_ar' => 'أولاد صابر',
								'name' => 'Ouled Sabor',
							),
						),
					),
					'1920' => array(
						'id' => '1920',
						'code' => '1920',
						'name_ar' => 'العلمة',
						'name' => 'El Eulma',
						'communes' => array(
							'688' => array(
								'id' => '688',
								'code' => '688',
								'name_ar' => 'بازر سكرة',
								'name' => 'Bazer-Sakra',
							),
							'706' => array(
								'id' => '706',
								'code' => '706',
								'name_ar' => 'العلمة',
								'name' => 'El Eulma',
							),
							'710' => array(
								'id' => '710',
								'code' => '710',
								'name_ar' => 'قلتة زرقاء',
								'name' => 'Guelta Zerka',
							),
						),
					),
					'1921' => array(
						'id' => '1921',
						'code' => '1921',
						'name_ar' => 'جميلة',
						'name' => 'Djemila',
						'communes' => array(
							'692' => array(
								'id' => '692',
								'code' => '692',
								'name_ar' => 'بني فودة',
								'name' => 'Beni Fouda',
							),
							'704' => array(
								'id' => '704',
								'code' => '704',
								'name_ar' => 'جميلة',
								'name' => 'Djemila',
							),
						),
					),
					'1922' => array(
						'id' => '1922',
						'code' => '1922',
						'name_ar' => 'بني ورتيلان',
						'name' => 'Beni Ourtilane',
						'communes' => array(
							'681' => array(
								'id' => '681',
								'code' => '681',
								'name_ar' => 'عين لقراج',
								'name' => 'Ain-Legradj',
							),
							'691' => array(
								'id' => '691',
								'code' => '691',
								'name_ar' => 'بني شبانة',
								'name' => 'Beni Chebana',
							),
							'693' => array(
								'id' => '693',
								'code' => '693',
								'name_ar' => 'بني ورتيلان',
								'name' => 'Beni Ourtilane',
							),
							'696' => array(
								'id' => '696',
								'code' => '696',
								'name_ar' => 'بني موحلي',
								'name' => 'Beni-Mouhli',
							),
						),
					),
					'1926' => array(
						'id' => '1926',
						'code' => '1926',
						'name_ar' => 'عين أرنات',
						'name' => 'Ain Arnat',
						'communes' => array(
							'675' => array(
								'id' => '675',
								'code' => '675',
								'name_ar' => 'عين عباسة',
								'name' => 'Ain Abessa',
							),
							'676' => array(
								'id' => '676',
								'code' => '676',
								'name_ar' => 'عين أرنات',
								'name' => 'Ain Arnat',
							),
							'707' => array(
								'id' => '707',
								'code' => '707',
								'name_ar' => 'أوريسيا',
								'name' => 'El Ouricia',
							),
							'720' => array(
								'id' => '720',
								'code' => '720',
								'name_ar' => 'مزلوق',
								'name' => 'Mezloug',
							),
						),
					),
					'1927' => array(
						'id' => '1927',
						'code' => '1927',
						'name_ar' => 'عموشة',
						'name' => 'Amoucha',
						'communes' => array(
							'686' => array(
								'id' => '686',
								'code' => '686',
								'name_ar' => 'عموشة',
								'name' => 'Amoucha',
							),
							'721' => array(
								'id' => '721',
								'code' => '721',
								'name_ar' => 'واد البارد',
								'name' => 'Oued El Bared',
							),
							'734' => array(
								'id' => '734',
								'code' => '734',
								'name_ar' => 'تيزي نبشار',
								'name' => 'Tizi N\'bechar',
							),
						),
					),
					'1928' => array(
						'id' => '1928',
						'code' => '1928',
						'name_ar' => 'عين ولمان',
						'name' => 'Ain Oulmene',
						'communes' => array(
							'680' => array(
								'id' => '680',
								'code' => '680',
								'name_ar' => 'عين ولمان',
								'name' => 'Ain Oulmene',
							),
							'709' => array(
								'id' => '709',
								'code' => '709',
								'name_ar' => 'قلال',
								'name' => 'Guellal',
							),
							'717' => array(
								'id' => '717',
								'code' => '717',
								'name_ar' => 'قصر الابطال',
								'name' => 'Kasr El Abtal',
							),
							'724' => array(
								'id' => '724',
								'code' => '724',
								'name_ar' => 'أولاد سي أحمد',
								'name' => 'Ouled Si Ahmed',
							),
						),
					),
					'1930' => array(
						'id' => '1930',
						'code' => '1930',
						'name_ar' => 'بوعنداس',
						'name' => 'Bouandas',
						'communes' => array(
							'684' => array(
								'id' => '684',
								'code' => '684',
								'name_ar' => 'أيت نوال مزادة',
								'name' => 'Ait Naoual Mezada',
							),
							'685' => array(
								'id' => '685',
								'code' => '685',
								'name_ar' => 'ايت تيزي',
								'name' => 'Ait-Tizi',
							),
							'699' => array(
								'id' => '699',
								'code' => '699',
								'name_ar' => 'بوعنداس',
								'name' => 'Bouandas',
							),
							'701' => array(
								'id' => '701',
								'code' => '701',
								'name_ar' => 'بوسلام',
								'name' => 'Bousselam',
							),
						),
					),
					'1932' => array(
						'id' => '1932',
						'code' => '1932',
						'name_ar' => 'حمام السخنة',
						'name' => 'Hammam Sokhna',
						'communes' => array(
							'713' => array(
								'id' => '713',
								'code' => '713',
								'name_ar' => 'حمام السخنة',
								'name' => 'Hamam Soukhna',
							),
							'732' => array(
								'id' => '732',
								'code' => '732',
								'name_ar' => 'الطاية',
								'name' => 'Taya',
							),
							'733' => array(
								'id' => '733',
								'code' => '733',
								'name_ar' => 'التلة',
								'name' => 'Tella',
							),
						),
					),
					'1939' => array(
						'id' => '1939',
						'code' => '1939',
						'name_ar' => 'صالح باي',
						'name' => 'Salah Bey',
						'communes' => array(
							'702' => array(
								'id' => '702',
								'code' => '702',
								'name_ar' => 'بوطالب',
								'name' => 'Boutaleb',
							),
							'714' => array(
								'id' => '714',
								'code' => '714',
								'name_ar' => 'الحامة',
								'name' => 'Hamma',
							),
							'725' => array(
								'id' => '725',
								'code' => '725',
								'name_ar' => 'أولاد تبان',
								'name' => 'Ouled Tebben',
							),
							'726' => array(
								'id' => '726',
								'code' => '726',
								'name_ar' => 'الرصفة',
								'name' => 'Rosfa',
							),
							'727' => array(
								'id' => '727',
								'code' => '727',
								'name_ar' => 'صالح باي',
								'name' => 'Salah Bey',
							),
						),
					),
					'1940' => array(
						'id' => '1940',
						'code' => '1940',
						'name_ar' => 'عين أزال',
						'name' => 'Ain Azel',
						'communes' => array(
							'677' => array(
								'id' => '677',
								'code' => '677',
								'name_ar' => 'عين أزال',
								'name' => 'Ain Azel',
							),
							'679' => array(
								'id' => '679',
								'code' => '679',
								'name_ar' => 'عين الحجر',
								'name' => 'Ain Lahdjar',
							),
							'689' => array(
								'id' => '689',
								'code' => '689',
								'name_ar' => 'بيضاء برج',
								'name' => 'Beidha Bordj',
							),
							'697' => array(
								'id' => '697',
								'code' => '697',
								'name_ar' => 'بئر حدادة',
								'name' => 'Bir Haddada',
							),
						),
					),
					'1941' => array(
						'id' => '1941',
						'code' => '1941',
						'name_ar' => 'قنزات',
						'name' => 'Guenzet',
						'communes' => array(
							'711' => array(
								'id' => '711',
								'code' => '711',
								'name_ar' => 'قنزات',
								'name' => 'Guenzet',
							),
							'716' => array(
								'id' => '716',
								'code' => '716',
								'name_ar' => 'حربيل',
								'name' => 'Harbil',
							),
						),
					),
					'1943' => array(
						'id' => '1943',
						'code' => '1943',
						'name_ar' => 'بوقاعة',
						'name' => 'Bougaa',
						'communes' => array(
							'682' => array(
								'id' => '682',
								'code' => '682',
								'name_ar' => 'عين الروى',
								'name' => 'Ain-Roua',
							),
							'694' => array(
								'id' => '694',
								'code' => '694',
								'name_ar' => 'بني وسين',
								'name' => 'Beni Oussine',
							),
							'700' => array(
								'id' => '700',
								'code' => '700',
								'name_ar' => 'بوقاعة',
								'name' => 'Bougaa',
							),
						),
					),
					'1950' => array(
						'id' => '1950',
						'code' => '1950',
						'name_ar' => 'حمام قرقور',
						'name' => 'Hammam Guergour',
						'communes' => array(
							'705' => array(
								'id' => '705',
								'code' => '705',
								'name_ar' => 'ذراع قبيلة',
								'name' => 'Draa-Kebila',
							),
							'715' => array(
								'id' => '715',
								'code' => '715',
								'name_ar' => 'حمام قرقور',
								'name' => 'Hammam Guergour',
							),
						),
					),
					'1955' => array(
						'id' => '1955',
						'code' => '1955',
						'name_ar' => 'ماوكلان',
						'name' => 'Maoklane',
						'communes' => array(
							'719' => array(
								'id' => '719',
								'code' => '719',
								'name_ar' => 'ماوكلان',
								'name' => 'Maouaklane',
							),
							'731' => array(
								'id' => '731',
								'code' => '731',
								'name_ar' => 'تالة إيفاسن',
								'name' => 'Tala-Ifacene',
							),
						),
					),
				),
			),
			'20' => array(
				'id' => '20',
				'code' => '20',
				'name_ar' => 'سعيدة',
				'name' => 'Saïda',
				'dairas' => array(
					'2001' => array(
						'id' => '2001',
						'code' => '2001',
						'name_ar' => 'سعيدة',
						'name' => 'Saida',
						'communes' => array(
							'745' => array(
								'id' => '745',
								'code' => '745',
								'name_ar' => 'سعيدة',
								'name' => 'Saida',
							),
						),
					),
					'2003' => array(
						'id' => '2003',
						'code' => '2003',
						'name_ar' => 'عين الحجر',
						'name' => 'Ain El Hadjar',
						'communes' => array(
							'735' => array(
								'id' => '735',
								'code' => '735',
								'name_ar' => 'عين الحجر',
								'name' => 'Ain El Hadjar',
							),
							'742' => array(
								'id' => '742',
								'code' => '742',
								'name_ar' => 'مولاي العربي',
								'name' => 'Moulay Larbi',
							),
							'746' => array(
								'id' => '746',
								'code' => '746',
								'name_ar' => 'سيدي احمد',
								'name' => 'Sidi Ahmed',
							),
						),
					),
					'2006' => array(
						'id' => '2006',
						'code' => '2006',
						'name_ar' => 'يوب',
						'name' => 'Youb',
						'communes' => array(
							'738' => array(
								'id' => '738',
								'code' => '738',
								'name_ar' => 'دوي ثابت',
								'name' => 'Doui Thabet',
							),
							'750' => array(
								'id' => '750',
								'code' => '750',
								'name_ar' => 'يوب',
								'name' => 'Youb',
							),
						),
					),
					'2009' => array(
						'id' => '2009',
						'code' => '2009',
						'name_ar' => 'سيدي بوبكر',
						'name' => 'Sidi Boubekeur',
						'communes' => array(
							'740' => array(
								'id' => '740',
								'code' => '740',
								'name_ar' => 'هونت',
								'name' => 'Hounet',
							),
							'744' => array(
								'id' => '744',
								'code' => '744',
								'name_ar' => 'أولاد خالد',
								'name' => 'Ouled Khaled',
							),
							'747' => array(
								'id' => '747',
								'code' => '747',
								'name_ar' => 'سيدي عمر',
								'name' => 'Sidi Amar',
							),
							'748' => array(
								'id' => '748',
								'code' => '748',
								'name_ar' => 'سيدي بوبكر',
								'name' => 'Sidi Boubekeur',
							),
						),
					),
					'2010' => array(
						'id' => '2010',
						'code' => '2010',
						'name_ar' => 'الحساسنة',
						'name' => 'El Hassasna',
						'communes' => array(
							'736' => array(
								'id' => '736',
								'code' => '736',
								'name_ar' => 'عين السخونة',
								'name' => 'Ain Sekhouna',
							),
							'739' => array(
								'id' => '739',
								'code' => '739',
								'name_ar' => 'الحساسنة',
								'name' => 'El Hassasna',
							),
							'741' => array(
								'id' => '741',
								'code' => '741',
								'name_ar' => 'المعمورة',
								'name' => 'Maamora',
							),
						),
					),
					'2014' => array(
						'id' => '2014',
						'code' => '2014',
						'name_ar' => 'أولاد ابراهيم',
						'name' => 'Ouled Brahim',
						'communes' => array(
							'737' => array(
								'id' => '737',
								'code' => '737',
								'name_ar' => 'عين السلطان',
								'name' => 'Ain Soltane',
							),
							'743' => array(
								'id' => '743',
								'code' => '743',
								'name_ar' => 'أولاد إبراهيم',
								'name' => 'Ouled Brahim',
							),
							'749' => array(
								'id' => '749',
								'code' => '749',
								'name_ar' => 'تيرسين',
								'name' => 'Tircine',
							),
						),
					),
				),
			),
			'21' => array(
				'id' => '21',
				'code' => '21',
				'name_ar' => 'سكيكدة',
				'name' => 'Skikda',
				'dairas' => array(
					'2101' => array(
						'id' => '2101',
						'code' => '2101',
						'name_ar' => 'سكيكدة',
						'name' => 'Skikda',
						'communes' => array(
							'772' => array(
								'id' => '772',
								'code' => '772',
								'name_ar' => 'فلفلة',
								'name' => 'Filfila',
							),
							'773' => array(
								'id' => '773',
								'code' => '773',
								'name_ar' => 'حمادي كرومة',
								'name' => 'Hammadi Krouma',
							),
							'785' => array(
								'id' => '785',
								'code' => '785',
								'name_ar' => 'سكيكدة',
								'name' => 'Skikda',
							),
						),
					),
					'2103' => array(
						'id' => '2103',
						'code' => '2103',
						'name_ar' => 'الحدائق',
						'name' => 'El Hadaiek',
						'communes' => array(
							'754' => array(
								'id' => '754',
								'code' => '754',
								'name_ar' => 'عين زويت',
								'name' => 'Ain Zouit',
							),
							'762' => array(
								'id' => '762',
								'code' => '762',
								'name_ar' => 'بوشطاطة',
								'name' => 'Bouchetata',
							),
							'768' => array(
								'id' => '768',
								'code' => '768',
								'name_ar' => 'الحدائق',
								'name' => 'El Hadaiek',
							),
						),
					),
					'2104' => array(
						'id' => '2104',
						'code' => '2104',
						'name_ar' => 'عزابة',
						'name' => 'Azzaba',
						'communes' => array(
							'752' => array(
								'id' => '752',
								'code' => '752',
								'name_ar' => 'عين شرشار',
								'name' => 'Ain Charchar',
							),
							'755' => array(
								'id' => '755',
								'code' => '755',
								'name_ar' => 'عزابة',
								'name' => 'Azzaba',
							),
							'765' => array(
								'id' => '765',
								'code' => '765',
								'name_ar' => 'جندل سعدي محمد',
								'name' => 'Djendel Saadi Mohamed',
							),
							'767' => array(
								'id' => '767',
								'code' => '767',
								'name_ar' => 'الغدير',
								'name' => 'El Ghedir',
							),
							'771' => array(
								'id' => '771',
								'code' => '771',
								'name_ar' => 'السبت',
								'name' => 'Es Sebt',
							),
						),
					),
					'2108' => array(
						'id' => '2108',
						'code' => '2108',
						'name_ar' => 'بن عزوز',
						'name' => 'Ben Azzouz',
						'communes' => array(
							'756' => array(
								'id' => '756',
								'code' => '756',
								'name_ar' => 'بكوش لخضر',
								'name' => 'Bekkouche Lakhdar',
							),
							'757' => array(
								'id' => '757',
								'code' => '757',
								'name_ar' => 'بن عزوز',
								'name' => 'Ben Azzouz',
							),
							'769' => array(
								'id' => '769',
								'code' => '769',
								'name_ar' => 'المرسى',
								'name' => 'El Marsa',
							),
						),
					),
					'2110' => array(
						'id' => '2110',
						'code' => '2110',
						'name_ar' => 'القل',
						'name' => 'Collo',
						'communes' => array(
							'760' => array(
								'id' => '760',
								'code' => '760',
								'name_ar' => 'بني زيد',
								'name' => 'Beni Zid',
							),
							'763' => array(
								'id' => '763',
								'code' => '763',
								'name_ar' => 'الشرايع',
								'name' => 'Cheraia',
							),
							'764' => array(
								'id' => '764',
								'code' => '764',
								'name_ar' => 'القل',
								'name' => 'Collo',
							),
						),
					),
					'2113' => array(
						'id' => '2113',
						'code' => '2113',
						'name_ar' => 'أولاد عطية',
						'name' => 'Ouled Attia',
						'communes' => array(
							'776' => array(
								'id' => '776',
								'code' => '776',
								'name_ar' => 'خناق مايو',
								'name' => 'Khenag Maoune',
							),
							'777' => array(
								'id' => '777',
								'code' => '777',
								'name_ar' => 'وادي الزهور',
								'name' => 'Oued Zhour',
							),
							'779' => array(
								'id' => '779',
								'code' => '779',
								'name_ar' => 'أولاد عطية',
								'name' => 'Ouled Attia',
							),
						),
					),
					'2115' => array(
						'id' => '2115',
						'code' => '2115',
						'name_ar' => 'الزيتونة',
						'name' => 'Zitouna',
						'communes' => array(
							'774' => array(
								'id' => '774',
								'code' => '774',
								'name_ar' => 'قنواع',
								'name' => 'Kanoua',
							),
							'788' => array(
								'id' => '788',
								'code' => '788',
								'name_ar' => 'الزيتونة',
								'name' => 'Zitouna',
							),
						),
					),
					'2116' => array(
						'id' => '2116',
						'code' => '2116',
						'name_ar' => 'الحروش',
						'name' => 'El Harrouch',
						'communes' => array(
							'766' => array(
								'id' => '766',
								'code' => '766',
								'name_ar' => 'الحروش',
								'name' => 'El Arrouch',
							),
							'770' => array(
								'id' => '770',
								'code' => '770',
								'name_ar' => 'مجاز الدشيش',
								'name' => 'Emjez Edchich',
							),
							'780' => array(
								'id' => '780',
								'code' => '780',
								'name_ar' => 'أولاد حبابة',
								'name' => 'Ouled Habbaba',
							),
							'783' => array(
								'id' => '783',
								'code' => '783',
								'name_ar' => 'صالح بو الشعور',
								'name' => 'Salah Bouchaour',
							),
							'787' => array(
								'id' => '787',
								'code' => '787',
								'name_ar' => 'زردازة',
								'name' => 'Zerdezas',
							),
						),
					),
					'2119' => array(
						'id' => '2119',
						'code' => '2119',
						'name_ar' => 'سيدي مزغيش',
						'name' => 'Sidi Mezghiche',
						'communes' => array(
							'751' => array(
								'id' => '751',
								'code' => '751',
								'name_ar' => 'عين بوزيان',
								'name' => 'Ain Bouziane',
							),
							'759' => array(
								'id' => '759',
								'code' => '759',
								'name_ar' => 'بني ولبان',
								'name' => 'Beni Oulbane',
							),
							'784' => array(
								'id' => '784',
								'code' => '784',
								'name_ar' => 'سيدي مزغيش',
								'name' => 'Sidi Mezghiche',
							),
						),
					),
					'2123' => array(
						'id' => '2123',
						'code' => '2123',
						'name_ar' => 'رمضان جمال',
						'name' => 'Ramdane Djamel',
						'communes' => array(
							'758' => array(
								'id' => '758',
								'code' => '758',
								'name_ar' => 'بني بشير',
								'name' => 'Beni Bechir',
							),
							'782' => array(
								'id' => '782',
								'code' => '782',
								'name_ar' => 'رمضان جمال',
								'name' => 'Ramdane Djamel',
							),
						),
					),
					'2126' => array(
						'id' => '2126',
						'code' => '2126',
						'name_ar' => 'تمالوس',
						'name' => 'Tamalous',
						'communes' => array(
							'761' => array(
								'id' => '761',
								'code' => '761',
								'name_ar' => 'بين الويدان',
								'name' => 'Bin El Ouiden',
							),
							'775' => array(
								'id' => '775',
								'code' => '775',
								'name_ar' => 'الكركرة',
								'name' => 'Kerkara',
							),
							'786' => array(
								'id' => '786',
								'code' => '786',
								'name_ar' => 'تمالوس',
								'name' => 'Tamalous',
							),
						),
					),
					'2127' => array(
						'id' => '2127',
						'code' => '2127',
						'name_ar' => 'عين قشرة',
						'name' => 'Ain Kechra',
						'communes' => array(
							'753' => array(
								'id' => '753',
								'code' => '753',
								'name_ar' => 'عين قشرة',
								'name' => 'Ain Kechra',
							),
							'778' => array(
								'id' => '778',
								'code' => '778',
								'name_ar' => 'الولجة بولبلوط',
								'name' => 'Ouldja Boulbalout',
							),
						),
					),
					'2128' => array(
						'id' => '2128',
						'code' => '2128',
						'name_ar' => 'أم الطوب',
						'name' => 'Oum Toub',
						'communes' => array(
							'781' => array(
								'id' => '781',
								'code' => '781',
								'name_ar' => 'أم الطوب',
								'name' => 'Oum Toub',
							),
						),
					),
				),
			),
			'22' => array(
				'id' => '22',
				'code' => '22',
				'name_ar' => 'سيدي بلعباس',
				'name' => 'Sidi Bel Abbès',
				'dairas' => array(
					'2201' => array(
						'id' => '2201',
						'code' => '2201',
						'name_ar' => 'سيدي بلعباس',
						'name' => 'Sidi Bel Abbes',
						'communes' => array(
							'824' => array(
								'id' => '824',
								'code' => '824',
								'name_ar' => 'سيدي بلعباس',
								'name' => 'Sidi Bel-Abbes',
							),
						),
					),
					'2202' => array(
						'id' => '2202',
						'code' => '2202',
						'name_ar' => 'تسالة',
						'name' => 'Tessala',
						'communes' => array(
							'791' => array(
								'id' => '791',
								'code' => '791',
								'name_ar' => 'عين الثريد',
								'name' => 'Ain Thrid',
							),
							'820' => array(
								'id' => '820',
								'code' => '820',
								'name_ar' => 'السهالة الثورة',
								'name' => 'Sehala Thaoura',
							),
							'838' => array(
								'id' => '838',
								'code' => '838',
								'name_ar' => 'تسالة',
								'name' => 'Tessala',
							),
						),
					),
					'2204' => array(
						'id' => '2204',
						'code' => '2204',
						'name_ar' => 'مصطفى بن ابراهيم',
						'name' => 'Mostefa  Ben Brahim',
						'communes' => array(
							'796' => array(
								'id' => '796',
								'code' => '796',
								'name_ar' => 'بلعربي',
								'name' => 'Belarbi',
							),
							'813' => array(
								'id' => '813',
								'code' => '813',
								'name_ar' => 'مصطفى بن ابراهيم',
								'name' => 'Mostefa  Ben Brahim',
							),
							'839' => array(
								'id' => '839',
								'code' => '839',
								'name_ar' => 'تلموني',
								'name' => 'Tilmouni',
							),
							'840' => array(
								'id' => '840',
								'code' => '840',
								'name_ar' => 'زروالة',
								'name' => 'Zerouala',
							),
						),
					),
					'2205' => array(
						'id' => '2205',
						'code' => '2205',
						'name_ar' => 'تلاغ',
						'name' => 'Telagh',
						'communes' => array(
							'803' => array(
								'id' => '803',
								'code' => '803',
								'name_ar' => 'الضاية',
								'name' => 'Dhaya',
							),
							'812' => array(
								'id' => '812',
								'code' => '812',
								'name_ar' => 'مزاورو',
								'name' => 'Mezaourou',
							),
							'835' => array(
								'id' => '835',
								'code' => '835',
								'name_ar' => 'تغاليمت',
								'name' => 'Teghalimet',
							),
							'836' => array(
								'id' => '836',
								'code' => '836',
								'name_ar' => 'تلاغ',
								'name' => 'Telagh',
							),
						),
					),
					'2208' => array(
						'id' => '2208',
						'code' => '2208',
						'name_ar' => 'سيدي علي بوسيدي',
						'name' => 'Sidi Ali Boussidi',
						'communes' => array(
							'790' => array(
								'id' => '790',
								'code' => '790',
								'name_ar' => 'عين قادة',
								'name' => 'Ain Kada',
							),
							'807' => array(
								'id' => '807',
								'code' => '807',
								'name_ar' => 'لمطار',
								'name' => 'Lamtar',
							),
							'823' => array(
								'id' => '823',
								'code' => '823',
								'name_ar' => 'سيدي علي بوسيدي',
								'name' => 'Sidi Ali Boussidi',
							),
							'827' => array(
								'id' => '827',
								'code' => '827',
								'name_ar' => 'سيدي دحو الزاير',
								'name' => 'Sidi Dahou Zairs',
							),
						),
					),
					'2210' => array(
						'id' => '2210',
						'code' => '2210',
						'name_ar' => 'مرحوم',
						'name' => 'Marhoum',
						'communes' => array(
							'799' => array(
								'id' => '799',
								'code' => '799',
								'name_ar' => 'بئر الحمام',
								'name' => 'Bir El Hammam',
							),
							'809' => array(
								'id' => '809',
								'code' => '809',
								'name_ar' => 'مرحوم',
								'name' => 'Marhoum',
							),
							'826' => array(
								'id' => '826',
								'code' => '826',
								'name_ar' => 'سيدي شعيب',
								'name' => 'Sidi Chaib',
							),
						),
					),
					'2214' => array(
						'id' => '2214',
						'code' => '2214',
						'name_ar' => 'سيدي لحسن',
						'name' => 'Sidi Lahcene',
						'communes' => array(
							'794' => array(
								'id' => '794',
								'code' => '794',
								'name_ar' => 'العمارنة',
								'name' => 'Amarnas',
							),
							'829' => array(
								'id' => '829',
								'code' => '829',
								'name_ar' => 'سيدي خالد',
								'name' => 'Sidi Khaled',
							),
							'830' => array(
								'id' => '830',
								'code' => '830',
								'name_ar' => 'سيدي لحسن',
								'name' => 'Sidi Lahcene',
							),
							'831' => array(
								'id' => '831',
								'code' => '831',
								'name_ar' => 'سيدي يعقوب',
								'name' => 'Sidi Yacoub',
							),
						),
					),
					'2217' => array(
						'id' => '2217',
						'code' => '2217',
						'name_ar' => 'تنيرة',
						'name' => 'Tenira',
						'communes' => array(
							'798' => array(
								'id' => '798',
								'code' => '798',
								'name_ar' => 'بن عشيبة شلية',
								'name' => 'Benachiba Chelia',
							),
							'805' => array(
								'id' => '805',
								'code' => '805',
								'name_ar' => 'حاسي دحو',
								'name' => 'Hassi Dahou',
							),
							'816' => array(
								'id' => '816',
								'code' => '816',
								'name_ar' => 'وادي سفيون',
								'name' => 'Oued Sefioun',
							),
							'837' => array(
								'id' => '837',
								'code' => '837',
								'name_ar' => 'تنيرة',
								'name' => 'Tenira',
							),
						),
					),
					'2218' => array(
						'id' => '2218',
						'code' => '2218',
						'name_ar' => 'مولاي سليسن',
						'name' => 'Moulay Slissen',
						'communes' => array(
							'792' => array(
								'id' => '792',
								'code' => '792',
								'name_ar' => 'عين تندمين',
								'name' => 'Ain Tindamine',
							),
							'804' => array(
								'id' => '804',
								'code' => '804',
								'name_ar' => 'الحصيبة',
								'name' => 'El Hacaiba',
							),
							'814' => array(
								'id' => '814',
								'code' => '814',
								'name_ar' => 'مولاي سليسن',
								'name' => 'Moulay Slissen',
							),
						),
					),
					'2222' => array(
						'id' => '2222',
						'code' => '2222',
						'name_ar' => 'مرين',
						'name' => 'Merine',
						'communes' => array(
							'811' => array(
								'id' => '811',
								'code' => '811',
								'name_ar' => 'مرين',
								'name' => 'Merine',
							),
							'817' => array(
								'id' => '817',
								'code' => '817',
								'name_ar' => 'وادي تاوريرة',
								'name' => 'Oued Taourira',
							),
							'833' => array(
								'id' => '833',
								'code' => '833',
								'name_ar' => 'تاودموت',
								'name' => 'Taoudmout',
							),
							'834' => array(
								'id' => '834',
								'code' => '834',
								'name_ar' => 'تفسور',
								'name' => 'Tefessour',
							),
						),
					),
					'2223' => array(
						'id' => '2223',
						'code' => '2223',
						'name_ar' => 'راس الماء',
						'name' => 'Ras El Ma',
						'communes' => array(
							'815' => array(
								'id' => '815',
								'code' => '815',
								'name_ar' => 'وادي السبع',
								'name' => 'Oued Sebaa',
							),
							'818' => array(
								'id' => '818',
								'code' => '818',
								'name_ar' => 'راس الماء',
								'name' => 'Ras El Ma',
							),
							'819' => array(
								'id' => '819',
								'code' => '819',
								'name_ar' => 'رجم دموش',
								'name' => 'Redjem Demouche',
							),
						),
					),
					'2228' => array(
						'id' => '2228',
						'code' => '2228',
						'name_ar' => 'عين البرد',
						'name' => 'Ain El Berd',
						'communes' => array(
							'789' => array(
								'id' => '789',
								'code' => '789',
								'name_ar' => 'عين البرد',
								'name' => 'Ain El Berd',
							),
							'808' => array(
								'id' => '808',
								'code' => '808',
								'name_ar' => 'مكدرة',
								'name' => 'Makedra',
							),
							'825' => array(
								'id' => '825',
								'code' => '825',
								'name_ar' => 'سيدي ابراهيم',
								'name' => 'Sidi Brahim',
							),
							'828' => array(
								'id' => '828',
								'code' => '828',
								'name_ar' => 'سيدي حمادوش',
								'name' => 'Sidi Hamadouche',
							),
						),
					),
					'2229' => array(
						'id' => '2229',
						'code' => '2229',
						'name_ar' => 'سفيزف',
						'name' => 'Sfisef',
						'communes' => array(
							'793' => array(
								'id' => '793',
								'code' => '793',
								'name_ar' => 'عين أدن',
								'name' => 'Ain- Adden',
							),
							'800' => array(
								'id' => '800',
								'code' => '800',
								'name_ar' => 'بوجبهة البرج',
								'name' => 'Boudjebaa El Bordj',
							),
							'810' => array(
								'id' => '810',
								'code' => '810',
								'name_ar' => 'مسيد',
								'name' => 'M\'cid',
							),
							'821' => array(
								'id' => '821',
								'code' => '821',
								'name_ar' => 'سفيزف',
								'name' => 'Sfisef',
							),
						),
					),
					'2245' => array(
						'id' => '2245',
						'code' => '2245',
						'name_ar' => 'بن باديس',
						'name' => 'Ben Badis',
						'communes' => array(
							'795' => array(
								'id' => '795',
								'code' => '795',
								'name_ar' => 'بضرابين المقراني',
								'name' => 'Bedrabine El Mokrani',
							),
							'797' => array(
								'id' => '797',
								'code' => '797',
								'name_ar' => 'بن باديس',
								'name' => 'Ben Badis',
							),
							'802' => array(
								'id' => '802',
								'code' => '802',
								'name_ar' => 'شيطوان البلايلة',
								'name' => 'Chetouane Belaila',
							),
							'806' => array(
								'id' => '806',
								'code' => '806',
								'name_ar' => 'حاسي زهانة',
								'name' => 'Hassi Zahana',
							),
						),
					),
					'2246' => array(
						'id' => '2246',
						'code' => '2246',
						'name_ar' => 'سيدي علي بن يوب',
						'name' => 'Sidi Ali Ben Youb',
						'communes' => array(
							'801' => array(
								'id' => '801',
								'code' => '801',
								'name_ar' => 'بوخنفيس',
								'name' => 'Boukhanefis',
							),
							'822' => array(
								'id' => '822',
								'code' => '822',
								'name_ar' => 'سيدي علي بن يوب',
								'name' => 'Sidi Ali Benyoub',
							),
							'832' => array(
								'id' => '832',
								'code' => '832',
								'name_ar' => 'طابية',
								'name' => 'Tabia',
							),
						),
					),
				),
			),
			'23' => array(
				'id' => '23',
				'code' => '23',
				'name_ar' => 'عنابة',
				'name' => 'Annaba',
				'dairas' => array(
					'2301' => array(
						'id' => '2301',
						'code' => '2301',
						'name_ar' => 'عنابة',
						'name' => 'Annaba',
						'communes' => array(
							'842' => array(
								'id' => '842',
								'code' => '842',
								'name_ar' => 'عنابة',
								'name' => 'Annaba',
							),
							'850' => array(
								'id' => '850',
								'code' => '850',
								'name_ar' => 'سرايدي',
								'name' => 'Seraidi',
							),
						),
					),
					'2302' => array(
						'id' => '2302',
						'code' => '2302',
						'name_ar' => 'برحال',
						'name' => 'Berrahal',
						'communes' => array(
							'843' => array(
								'id' => '843',
								'code' => '843',
								'name_ar' => 'برحال',
								'name' => 'Berrahal',
							),
							'849' => array(
								'id' => '849',
								'code' => '849',
								'name_ar' => 'واد العنب',
								'name' => 'Oued El Aneb',
							),
							'852' => array(
								'id' => '852',
								'code' => '852',
								'name_ar' => 'التريعات',
								'name' => 'Treat',
							),
						),
					),
					'2303' => array(
						'id' => '2303',
						'code' => '2303',
						'name_ar' => 'الحجار',
						'name' => 'El Hadjar',
						'communes' => array(
							'848' => array(
								'id' => '848',
								'code' => '848',
								'name_ar' => 'الحجار',
								'name' => 'El Hadjar',
							),
							'851' => array(
								'id' => '851',
								'code' => '851',
								'name_ar' => 'سيدي عمار',
								'name' => 'Sidi Amar',
							),
						),
					),
					'2305' => array(
						'id' => '2305',
						'code' => '2305',
						'name_ar' => 'البوني',
						'name' => 'El Bouni',
						'communes' => array(
							'846' => array(
								'id' => '846',
								'code' => '846',
								'name_ar' => 'البوني',
								'name' => 'El Bouni',
							),
						),
					),
					'2309' => array(
						'id' => '2309',
						'code' => '2309',
						'name_ar' => 'عين الباردة',
						'name' => 'Ain El Berda',
						'communes' => array(
							'841' => array(
								'id' => '841',
								'code' => '841',
								'name_ar' => 'عين الباردة',
								'name' => 'Ain El Berda',
							),
							'845' => array(
								'id' => '845',
								'code' => '845',
								'name_ar' => 'الشرفة',
								'name' => 'Cheurfa',
							),
							'847' => array(
								'id' => '847',
								'code' => '847',
								'name_ar' => 'العلمة',
								'name' => 'El Eulma',
							),
						),
					),
					'2310' => array(
						'id' => '2310',
						'code' => '2310',
						'name_ar' => 'شطايبي',
						'name' => 'Chetaibi',
						'communes' => array(
							'844' => array(
								'id' => '844',
								'code' => '844',
								'name_ar' => 'شطايبي',
								'name' => 'Chetaibi',
							),
						),
					),
				),
			),
			'24' => array(
				'id' => '24',
				'code' => '24',
				'name_ar' => 'قالمة',
				'name' => 'Guelma',
				'dairas' => array(
					'2401' => array(
						'id' => '2401',
						'code' => '2401',
						'name_ar' => 'قالمة',
						'name' => 'Guelma',
						'communes' => array(
							'859' => array(
								'id' => '859',
								'code' => '859',
								'name_ar' => 'بن جراح',
								'name' => 'Bendjarah',
							),
							'871' => array(
								'id' => '871',
								'code' => '871',
								'name_ar' => 'قالمة',
								'name' => 'Guelma',
							),
						),
					),
					'2404' => array(
						'id' => '2404',
						'code' => '2404',
						'name_ar' => 'وادي الزناتي',
						'name' => 'Oued Zenati',
						'communes' => array(
							'856' => array(
								'id' => '856',
								'code' => '856',
								'name_ar' => 'عين رقادة',
								'name' => 'Ain Regada',
							),
							'861' => array(
								'id' => '861',
								'code' => '861',
								'name_ar' => 'برج صباط',
								'name' => 'Bordj Sabath',
							),
							'882' => array(
								'id' => '882',
								'code' => '882',
								'name_ar' => 'وادي الزناتي',
								'name' => 'Oued Zenati',
							),
						),
					),
					'2413' => array(
						'id' => '2413',
						'code' => '2413',
						'name_ar' => 'عين مخلوف',
						'name' => 'Ain Makhlouf',
						'communes' => array(
							'854' => array(
								'id' => '854',
								'code' => '854',
								'name_ar' => 'عين العربي',
								'name' => 'Ain Larbi',
							),
							'855' => array(
								'id' => '855',
								'code' => '855',
								'name_ar' => 'عين مخلوف',
								'name' => 'Ain Makhlouf',
							),
							'886' => array(
								'id' => '886',
								'code' => '886',
								'name_ar' => 'تاملوكة',
								'name' => 'Tamlouka',
							),
						),
					),
					'2415' => array(
						'id' => '2415',
						'code' => '2415',
						'name_ar' => 'خزارة',
						'name' => 'Khezaras',
						'communes' => array(
							'857' => array(
								'id' => '857',
								'code' => '857',
								'name_ar' => 'عين صندل',
								'name' => 'Ain Sandel',
							),
							'862' => array(
								'id' => '862',
								'code' => '862',
								'name_ar' => 'بوحشانة',
								'name' => 'Bou Hachana',
							),
							'876' => array(
								'id' => '876',
								'code' => '876',
								'name_ar' => 'لخزارة',
								'name' => 'Khezaras',
							),
						),
					),
					'2418' => array(
						'id' => '2418',
						'code' => '2418',
						'name_ar' => 'قلعة بوصبع',
						'name' => 'Guelaat Bousbaa',
						'communes' => array(
							'858' => array(
								'id' => '858',
								'code' => '858',
								'name_ar' => 'بلخير',
								'name' => 'Belkheir',
							),
							'860' => array(
								'id' => '860',
								'code' => '860',
								'name_ar' => 'بني مزلين',
								'name' => 'Beni Mezline',
							),
							'866' => array(
								'id' => '866',
								'code' => '866',
								'name_ar' => 'بومهرة أحمد',
								'name' => 'Boumahra Ahmed',
							),
							'868' => array(
								'id' => '868',
								'code' => '868',
								'name_ar' => 'جبالة الخميسي',
								'name' => 'Djeballah Khemissi',
							),
							'870' => array(
								'id' => '870',
								'code' => '870',
								'name_ar' => 'قلعة بوصبع',
								'name' => 'Guelaat Bou Sbaa',
							),
							'875' => array(
								'id' => '875',
								'code' => '875',
								'name_ar' => 'نشماية',
								'name' => 'Nechmaya',
							),
						),
					),
					'2419' => array(
						'id' => '2419',
						'code' => '2419',
						'name_ar' => 'حمام دباغ',
						'name' => 'Hammam Debagh',
						'communes' => array(
							'863' => array(
								'id' => '863',
								'code' => '863',
								'name_ar' => 'بوحمدان',
								'name' => 'Bou Hamdane',
							),
							'872' => array(
								'id' => '872',
								'code' => '872',
								'name_ar' => 'حمام دباغ',
								'name' => 'Hammam Debagh',
							),
							'884' => array(
								'id' => '884',
								'code' => '884',
								'name_ar' => 'الركنية',
								'name' => 'Roknia',
							),
						),
					),
					'2422' => array(
						'id' => '2422',
						'code' => '2422',
						'name_ar' => 'حمام النبايل',
						'name' => 'Hammam N\'bails',
						'communes' => array(
							'867' => array(
								'id' => '867',
								'code' => '867',
								'name_ar' => 'الدهوارة',
								'name' => 'Dahouara',
							),
							'873' => array(
								'id' => '873',
								'code' => '873',
								'name_ar' => 'حمام النبايل',
								'name' => 'Hammam N\'bail',
							),
							'880' => array(
								'id' => '880',
								'code' => '880',
								'name_ar' => 'وادي الشحم',
								'name' => 'Oued Cheham',
							),
						),
					),
					'2425' => array(
						'id' => '2425',
						'code' => '2425',
						'name_ar' => 'بوشقوف',
						'name' => 'Bouchegouf',
						'communes' => array(
							'853' => array(
								'id' => '853',
								'code' => '853',
								'name_ar' => 'عين بن بيضاء',
								'name' => 'Ain Ben Beida',
							),
							'865' => array(
								'id' => '865',
								'code' => '865',
								'name_ar' => 'بوشقوف',
								'name' => 'Bouchegouf',
							),
							'878' => array(
								'id' => '878',
								'code' => '878',
								'name_ar' => 'مجاز الصفاء',
								'name' => 'Medjez Sfa',
							),
							'881' => array(
								'id' => '881',
								'code' => '881',
								'name_ar' => 'وادي فراغة',
								'name' => 'Oued Ferragha',
							),
						),
					),
					'2426' => array(
						'id' => '2426',
						'code' => '2426',
						'name_ar' => 'هيليوبوليس',
						'name' => 'Heliopolis',
						'communes' => array(
							'864' => array(
								'id' => '864',
								'code' => '864',
								'name_ar' => 'بوعاتي محمود',
								'name' => 'Bouati Mahmoud',
							),
							'869' => array(
								'id' => '869',
								'code' => '869',
								'name_ar' => 'الفجوج',
								'name' => 'El Fedjoudj',
							),
							'874' => array(
								'id' => '874',
								'code' => '874',
								'name_ar' => 'هيليوبوليس',
								'name' => 'Heliopolis',
							),
						),
					),
					'2427' => array(
						'id' => '2427',
						'code' => '2427',
						'name_ar' => 'عين حساينية',
						'name' => 'Ain Hessainia',
						'communes' => array(
							'877' => array(
								'id' => '877',
								'code' => '877',
								'name_ar' => 'مجاز عمار',
								'name' => 'Medjez Amar',
							),
							'879' => array(
								'id' => '879',
								'code' => '879',
								'name_ar' => 'هواري بومدين',
								'name' => 'Houari Boumedienne',
							),
							'883' => array(
								'id' => '883',
								'code' => '883',
								'name_ar' => 'رأس العقبة',
								'name' => 'Ras El Agba',
							),
							'885' => array(
								'id' => '885',
								'code' => '885',
								'name_ar' => 'سلاوة عنونة',
								'name' => 'Sellaoua Announa',
							),
						),
					),
				),
			),
			'25' => array(
				'id' => '25',
				'code' => '25',
				'name_ar' => 'قسنطينة',
				'name' => 'Constantine',
				'dairas' => array(
					'2501' => array(
						'id' => '2501',
						'code' => '2501',
						'name_ar' => 'قسنطينة',
						'name' => 'Constantine',
						'communes' => array(
							'891' => array(
								'id' => '891',
								'code' => '891',
								'name_ar' => 'قسنطينة',
								'name' => 'Constantine',
							),
						),
					),
					'2502' => array(
						'id' => '2502',
						'code' => '2502',
						'name_ar' => 'حامة بوزيان',
						'name' => 'Hamma Bouziane',
						'communes' => array(
							'892' => array(
								'id' => '892',
								'code' => '892',
								'name_ar' => 'ديدوش مراد',
								'name' => 'Didouche Mourad',
							),
							'894' => array(
								'id' => '894',
								'code' => '894',
								'name_ar' => 'حامة بوزيان',
								'name' => 'Hamma Bouziane',
							),
						),
					),
					'2504' => array(
						'id' => '2504',
						'code' => '2504',
						'name_ar' => 'زيغود يوسف',
						'name' => 'Zighoud Youcef',
						'communes' => array(
							'890' => array(
								'id' => '890',
								'code' => '890',
								'name_ar' => 'بني حميدان',
								'name' => 'Beni Hamidane',
							),
							'898' => array(
								'id' => '898',
								'code' => '898',
								'name_ar' => 'زيغود يوسف',
								'name' => 'Zighoud Youcef',
							),
						),
					),
					'2506' => array(
						'id' => '2506',
						'code' => '2506',
						'name_ar' => 'الخروب',
						'name' => 'El Khroub',
						'communes' => array(
							'888' => array(
								'id' => '888',
								'code' => '888',
								'name_ar' => 'عين السمارة',
								'name' => 'Ain Smara',
							),
							'893' => array(
								'id' => '893',
								'code' => '893',
								'name_ar' => 'الخروب',
								'name' => 'El Khroub',
							),
							'897' => array(
								'id' => '897',
								'code' => '897',
								'name_ar' => 'أولاد رحمون',
								'name' => 'Ouled Rahmoun',
							),
						),
					),
					'2507' => array(
						'id' => '2507',
						'code' => '2507',
						'name_ar' => 'عين عبيد',
						'name' => 'Ain Abid',
						'communes' => array(
							'887' => array(
								'id' => '887',
								'code' => '887',
								'name_ar' => 'عين عبيد',
								'name' => 'Ain Abid',
							),
							'889' => array(
								'id' => '889',
								'code' => '889',
								'name_ar' => 'أبن باديس الهرية',
								'name' => 'Ben Badis',
							),
						),
					),
					'2512' => array(
						'id' => '2512',
						'code' => '2512',
						'name_ar' => 'ابن زياد',
						'name' => 'Ibn Ziad',
						'communes' => array(
							'895' => array(
								'id' => '895',
								'code' => '895',
								'name_ar' => 'ابن زياد',
								'name' => 'Ibn Ziad',
							),
							'896' => array(
								'id' => '896',
								'code' => '896',
								'name_ar' => 'بوجريو مسعود',
								'name' => 'Messaoud Boudjeriou',
							),
						),
					),
				),
			),
			'26' => array(
				'id' => '26',
				'code' => '26',
				'name_ar' => 'المدية',
				'name' => 'Médéa',
				'dairas' => array(
					'2601' => array(
						'id' => '2601',
						'code' => '2601',
						'name_ar' => 'المدية',
						'name' => 'Medea',
						'communes' => array(
							'919' => array(
								'id' => '919',
								'code' => '919',
								'name_ar' => 'ذراع السمار',
								'name' => 'Draa Esmar',
							),
							'931' => array(
								'id' => '931',
								'code' => '931',
								'name_ar' => 'المدية',
								'name' => 'Medea',
							),
							'959' => array(
								'id' => '959',
								'code' => '959',
								'name_ar' => 'تمسقيدة',
								'name' => 'Tamesguida',
							),
						),
					),
					'2602' => array(
						'id' => '2602',
						'code' => '2602',
						'name_ar' => 'وزرة',
						'name' => 'Ouzera',
						'communes' => array(
							'904' => array(
								'id' => '904',
								'code' => '904',
								'name_ar' => 'بن شكاو',
								'name' => 'Ben Chicao',
							),
							'922' => array(
								'id' => '922',
								'code' => '922',
								'name_ar' => 'الحمدانية',
								'name' => 'El Hamdania',
							),
							'945' => array(
								'id' => '945',
								'code' => '945',
								'name_ar' => 'وزرة',
								'name' => 'Ouzera',
							),
							'960' => array(
								'id' => '960',
								'code' => '960',
								'name_ar' => 'تيزي مهدي',
								'name' => 'Tizi Mahdi',
							),
						),
					),
					'2604' => array(
						'id' => '2604',
						'code' => '2604',
						'name_ar' => 'عين بوسيف',
						'name' => 'Ain Boucif',
						'communes' => array(
							'899' => array(
								'id' => '899',
								'code' => '899',
								'name_ar' => 'عين بوسيف',
								'name' => 'Ain Boucif',
							),
							'925' => array(
								'id' => '925',
								'code' => '925',
								'name_ar' => 'العوينات',
								'name' => 'El Ouinet',
							),
							'927' => array(
								'id' => '927',
								'code' => '927',
								'name_ar' => 'الكاف الاخضر',
								'name' => 'Kef Lakhdar',
							),
							'942' => array(
								'id' => '942',
								'code' => '942',
								'name_ar' => 'أولاد امعرف',
								'name' => 'Ouled Emaaraf',
							),
							'951' => array(
								'id' => '951',
								'code' => '951',
								'name_ar' => 'سيدي دامد',
								'name' => 'Sidi Demed',
							),
						),
					),
					'2607' => array(
						'id' => '2607',
						'code' => '2607',
						'name_ar' => 'العمارية',
						'name' => 'El Omaria',
						'communes' => array(
							'903' => array(
								'id' => '903',
								'code' => '903',
								'name_ar' => 'بعطة',
								'name' => 'Baata',
							),
							'924' => array(
								'id' => '924',
								'code' => '924',
								'name_ar' => 'العمارية',
								'name' => 'El Omaria',
							),
							'940' => array(
								'id' => '940',
								'code' => '940',
								'name_ar' => 'أولاد إبراهيم',
								'name' => 'Ouled Brahim',
							),
						),
					),
					'2609' => array(
						'id' => '2609',
						'code' => '2609',
						'name_ar' => 'القلب الكبير',
						'name' => 'Guelb El Kebir',
						'communes' => array(
							'907' => array(
								'id' => '907',
								'code' => '907',
								'name_ar' => 'بئر بن عابد',
								'name' => 'Bir Ben Laabed',
							),
							'921' => array(
								'id' => '921',
								'code' => '921',
								'name_ar' => 'القلب الكبير',
								'name' => 'El Guelbelkebir',
							),
							'948' => array(
								'id' => '948',
								'code' => '948',
								'name_ar' => 'سدراية',
								'name' => 'Sedraya',
							),
						),
					),
					'2618' => array(
						'id' => '2618',
						'code' => '2618',
						'name_ar' => 'شلالة العذاورة',
						'name' => 'Chellalat El Adhaoura',
						'communes' => array(
							'900' => array(
								'id' => '900',
								'code' => '900',
								'name_ar' => 'عين اقصير',
								'name' => 'Ain Ouksir',
							),
							'915' => array(
								'id' => '915',
								'code' => '915',
								'name_ar' => 'شلالة العذاورة',
								'name' => 'Chelalet El Adhaoura',
							),
							'916' => array(
								'id' => '916',
								'code' => '916',
								'name_ar' => 'شنيقل',
								'name' => 'Cheniguel',
							),
							'958' => array(
								'id' => '958',
								'code' => '958',
								'name_ar' => 'تفراوت',
								'name' => 'Tafraout',
							),
						),
					),
					'2626' => array(
						'id' => '2626',
						'code' => '2626',
						'name_ar' => 'سيدي نعمان',
						'name' => 'Sidi Naamane',
						'communes' => array(
							'911' => array(
								'id' => '911',
								'code' => '911',
								'name_ar' => 'بوشراحيل',
								'name' => 'Bouchrahil',
							),
							'928' => array(
								'id' => '928',
								'code' => '928',
								'name_ar' => 'خمس جوامع',
								'name' => 'Khams Djouamaa',
							),
							'952' => array(
								'id' => '952',
								'code' => '952',
								'name_ar' => 'سيدي نعمان',
								'name' => 'Sidi Naamane',
							),
						),
					),
					'2632' => array(
						'id' => '2632',
						'code' => '2632',
						'name_ar' => 'عزيز',
						'name' => 'Aziz',
						'communes' => array(
							'902' => array(
								'id' => '902',
								'code' => '902',
								'name_ar' => 'عزيز',
								'name' => 'Aziz',
							),
							'917' => array(
								'id' => '917',
								'code' => '917',
								'name_ar' => 'دراق',
								'name' => 'Derrag',
							),
							'944' => array(
								'id' => '944',
								'code' => '944',
								'name_ar' => 'أم الجليل',
								'name' => 'Oum El Djellil',
							),
						),
					),
					'2633' => array(
						'id' => '2633',
						'code' => '2633',
						'name_ar' => 'السواقي',
						'name' => 'Souaghi',
						'communes' => array(
							'918' => array(
								'id' => '918',
								'code' => '918',
								'name_ar' => 'جواب',
								'name' => 'Djouab',
							),
							'954' => array(
								'id' => '954',
								'code' => '954',
								'name_ar' => 'سيدي زهار',
								'name' => 'Sidi Zahar',
							),
							'955' => array(
								'id' => '955',
								'code' => '955',
								'name_ar' => 'سيدي زيان',
								'name' => 'Sidi Ziane',
							),
							'956' => array(
								'id' => '956',
								'code' => '956',
								'name_ar' => 'السواقي',
								'name' => 'Souagui',
							),
						),
					),
					'2635' => array(
						'id' => '2635',
						'code' => '2635',
						'name_ar' => 'قصر البخاري',
						'name' => 'Ksar El Boukhari',
						'communes' => array(
							'929' => array(
								'id' => '929',
								'code' => '929',
								'name_ar' => 'قصر البخاري',
								'name' => 'Ksar El Boukhari',
							),
							'934' => array(
								'id' => '934',
								'code' => '934',
								'name_ar' => 'مفاتحة',
								'name' => 'M\'fatha',
							),
							'947' => array(
								'id' => '947',
								'code' => '947',
								'name_ar' => 'السانق',
								'name' => 'Saneg',
							),
						),
					),
					'2636' => array(
						'id' => '2636',
						'code' => '2636',
						'name_ar' => 'العزيزية',
						'name' => 'El Azizia',
						'communes' => array(
							'920' => array(
								'id' => '920',
								'code' => '920',
								'name_ar' => 'العزيزية',
								'name' => 'El Azizia',
							),
							'930' => array(
								'id' => '930',
								'code' => '930',
								'name_ar' => 'مغراوة',
								'name' => 'Maghraoua',
							),
							'935' => array(
								'id' => '935',
								'code' => '935',
								'name_ar' => 'ميهوب',
								'name' => 'Mihoub',
							),
						),
					),
					'2638' => array(
						'id' => '2638',
						'code' => '2638',
						'name_ar' => 'الشهبونية',
						'name' => 'Chahbounia',
						'communes' => array(
							'909' => array(
								'id' => '909',
								'code' => '909',
								'name_ar' => 'بوعيش',
								'name' => 'Bouaiche',
							),
							'912' => array(
								'id' => '912',
								'code' => '912',
								'name_ar' => 'بوغزول',
								'name' => 'Boughzoul',
							),
							'914' => array(
								'id' => '914',
								'code' => '914',
								'name_ar' => 'الشهبونية',
								'name' => 'Chabounia',
							),
						),
					),
					'2643' => array(
						'id' => '2643',
						'code' => '2643',
						'name_ar' => 'عوامري',
						'name' => 'Ouamri',
						'communes' => array(
							'926' => array(
								'id' => '926',
								'code' => '926',
								'name_ar' => 'حناشة',
								'name' => 'Hannacha',
							),
							'936' => array(
								'id' => '936',
								'code' => '936',
								'name_ar' => 'عوامري',
								'name' => 'Ouamri',
							),
							'937' => array(
								'id' => '937',
								'code' => '937',
								'name_ar' => 'وادي حربيل',
								'name' => 'Oued Harbil',
							),
						),
					),
					'2644' => array(
						'id' => '2644',
						'code' => '2644',
						'name_ar' => 'سي المحجوب',
						'name' => 'Si Mahdjoub',
						'communes' => array(
							'910' => array(
								'id' => '910',
								'code' => '910',
								'name_ar' => 'بوعيشون',
								'name' => 'Bouaichoune',
							),
							'939' => array(
								'id' => '939',
								'code' => '939',
								'name_ar' => 'أولاد بوعشرة',
								'name' => 'Ouled Bouachra',
							),
							'950' => array(
								'id' => '950',
								'code' => '950',
								'name_ar' => 'سي المحجوب',
								'name' => 'Si Mahdjoub',
							),
						),
					),
					'2646' => array(
						'id' => '2646',
						'code' => '2646',
						'name_ar' => 'بني سليمان',
						'name' => 'Beni Slimane',
						'communes' => array(
							'905' => array(
								'id' => '905',
								'code' => '905',
								'name_ar' => 'بني سليمان',
								'name' => 'Beni Slimane',
							),
							'913' => array(
								'id' => '913',
								'code' => '913',
								'name_ar' => 'بوسكن',
								'name' => 'Bouskene',
							),
							'953' => array(
								'id' => '953',
								'code' => '953',
								'name_ar' => 'سيدي الربيع',
								'name' => 'Sidi Rabie',
							),
						),
					),
					'2647' => array(
						'id' => '2647',
						'code' => '2647',
						'name_ar' => 'البرواقية',
						'name' => 'Berrouaghia',
						'communes' => array(
							'906' => array(
								'id' => '906',
								'code' => '906',
								'name_ar' => 'البرواقية',
								'name' => 'Berrouaghia',
							),
							'941' => array(
								'id' => '941',
								'code' => '941',
								'name_ar' => 'أولاد دايد',
								'name' => 'Ouled Deid',
							),
							'946' => array(
								'id' => '946',
								'code' => '946',
								'name_ar' => 'الربعية',
								'name' => 'Rebaia',
							),
						),
					),
					'2648' => array(
						'id' => '2648',
						'code' => '2648',
						'name_ar' => 'سغوان',
						'name' => 'Seghouane',
						'communes' => array(
							'932' => array(
								'id' => '932',
								'code' => '932',
								'name_ar' => 'مجبر',
								'name' => 'Medjebar',
							),
							'949' => array(
								'id' => '949',
								'code' => '949',
								'name_ar' => 'سغوان',
								'name' => 'Seghouane',
							),
							'961' => array(
								'id' => '961',
								'code' => '961',
								'name_ar' => 'ثلاث دوائر',
								'name' => 'Tletat Ed Douair',
							),
							'962' => array(
								'id' => '962',
								'code' => '962',
								'name_ar' => 'الزبيرية',
								'name' => 'Zoubiria',
							),
						),
					),
					'2652' => array(
						'id' => '2652',
						'code' => '2652',
						'name_ar' => 'تابلاط',
						'name' => 'Tablat',
						'communes' => array(
							'901' => array(
								'id' => '901',
								'code' => '901',
								'name_ar' => 'العيساوية',
								'name' => 'Aissaouia',
							),
							'923' => array(
								'id' => '923',
								'code' => '923',
								'name_ar' => 'الحوضان',
								'name' => 'El Haoudane',
							),
							'933' => array(
								'id' => '933',
								'code' => '933',
								'name_ar' => 'مزغنة',
								'name' => 'Mezerana',
							),
							'957' => array(
								'id' => '957',
								'code' => '957',
								'name_ar' => 'تابلاط',
								'name' => 'Tablat',
							),
						),
					),
					'2658' => array(
						'id' => '2658',
						'code' => '2658',
						'name_ar' => 'أولاد عنتر',
						'name' => 'Ouled Antar',
						'communes' => array(
							'908' => array(
								'id' => '908',
								'code' => '908',
								'name_ar' => 'بوغار',
								'name' => 'Boghar',
							),
							'938' => array(
								'id' => '938',
								'code' => '938',
								'name_ar' => 'أولاد عنتر',
								'name' => 'Ouled Antar',
							),
							'943' => array(
								'id' => '943',
								'code' => '943',
								'name_ar' => 'أولاد هلال',
								'name' => 'Ouled Hellal',
							),
						),
					),
				),
			),
			'27' => array(
				'id' => '27',
				'code' => '27',
				'name_ar' => 'مستغانم',
				'name' => 'Mostaganem',
				'dairas' => array(
					'2701' => array(
						'id' => '2701',
						'code' => '2701',
						'name_ar' => 'مستغانم',
						'name' => 'Mostaganem',
						'communes' => array(
							'979' => array(
								'id' => '979',
								'code' => '979',
								'name_ar' => 'مستغانم',
								'name' => 'Mostaganem',
							),
						),
					),
					'2705' => array(
						'id' => '2705',
						'code' => '2705',
						'name_ar' => 'عين نويسي',
						'name' => 'Ain Nouicy',
						'communes' => array(
							'965' => array(
								'id' => '965',
								'code' => '965',
								'name_ar' => 'عين نويسي',
								'name' => 'Ain-Nouissy',
							),
							'970' => array(
								'id' => '970',
								'code' => '970',
								'name_ar' => 'فرناقة',
								'name' => 'Fornaka',
							),
							'973' => array(
								'id' => '973',
								'code' => '973',
								'name_ar' => 'الحسيان (بني ياحي',
								'name' => 'Hassiane',
							),
						),
					),
					'2706' => array(
						'id' => '2706',
						'code' => '2706',
						'name_ar' => 'حاسي ماماش',
						'name' => 'Hassi Mameche',
						'communes' => array(
							'972' => array(
								'id' => '972',
								'code' => '972',
								'name_ar' => 'حاسي ماماش',
								'name' => 'Hassi Mameche',
							),
							'977' => array(
								'id' => '977',
								'code' => '977',
								'name_ar' => 'مزغران',
								'name' => 'Mazagran',
							),
							'992' => array(
								'id' => '992',
								'code' => '992',
								'name_ar' => 'ستيدية',
								'name' => 'Stidia',
							),
						),
					),
					'2707' => array(
						'id' => '2707',
						'code' => '2707',
						'name_ar' => 'عين تادلس',
						'name' => 'Ain Tedeles',
						'communes' => array(
							'967' => array(
								'id' => '967',
								'code' => '967',
								'name_ar' => 'عين تادلس',
								'name' => 'Ain-Tedles',
							),
							'981' => array(
								'id' => '981',
								'code' => '981',
								'name_ar' => 'وادي الخير',
								'name' => 'Oued El Kheir',
							),
							'987' => array(
								'id' => '987',
								'code' => '987',
								'name_ar' => 'سيدي بلعطار',
								'name' => 'Sidi Belaattar',
							),
							'991' => array(
								'id' => '991',
								'code' => '991',
								'name_ar' => 'سور',
								'name' => 'Sour',
							),
						),
					),
					'2711' => array(
						'id' => '2711',
						'code' => '2711',
						'name_ar' => 'خير الدين',
						'name' => 'Kheir Eddine',
						'communes' => array(
							'964' => array(
								'id' => '964',
								'code' => '964',
								'name_ar' => 'عين بودينار',
								'name' => 'Ain-Boudinar',
							),
							'975' => array(
								'id' => '975',
								'code' => '975',
								'name_ar' => 'خير الدين',
								'name' => 'Kheir-Eddine',
							),
							'985' => array(
								'id' => '985',
								'code' => '985',
								'name_ar' => 'صيادة',
								'name' => 'Sayada',
							),
						),
					),
					'2712' => array(
						'id' => '2712',
						'code' => '2712',
						'name_ar' => 'سيدي علي',
						'name' => 'Sidi Ali',
						'communes' => array(
							'983' => array(
								'id' => '983',
								'code' => '983',
								'name_ar' => 'أولاد مع الله',
								'name' => 'Ouled-Maalah',
							),
							'986' => array(
								'id' => '986',
								'code' => '986',
								'name_ar' => 'سيدي علي',
								'name' => 'Sidi Ali',
							),
							'993' => array(
								'id' => '993',
								'code' => '993',
								'name_ar' => 'تزقايت',
								'name' => 'Tazgait',
							),
						),
					),
					'2716' => array(
						'id' => '2716',
						'code' => '2716',
						'name_ar' => 'سيدي لخضر',
						'name' => 'Sidi Lakhdar',
						'communes' => array(
							'968' => array(
								'id' => '968',
								'code' => '968',
								'name_ar' => 'بن عبد المالك رمضان',
								'name' => 'Benabdelmalek Ramdane',
							),
							'971' => array(
								'id' => '971',
								'code' => '971',
								'name_ar' => 'حجاج',
								'name' => 'Hadjadj',
							),
							'988' => array(
								'id' => '988',
								'code' => '988',
								'name_ar' => 'سيدي لخضر',
								'name' => 'Sidi-Lakhdar',
							),
						),
					),
					'2717' => array(
						'id' => '2717',
						'code' => '2717',
						'name_ar' => 'عشعاشة',
						'name' => 'Achaacha',
						'communes' => array(
							'963' => array(
								'id' => '963',
								'code' => '963',
								'name_ar' => 'عشعاشة',
								'name' => 'Achaacha',
							),
							'974' => array(
								'id' => '974',
								'code' => '974',
								'name_ar' => 'خضرة',
								'name' => 'Khadra',
							),
							'980' => array(
								'id' => '980',
								'code' => '980',
								'name_ar' => 'نكمارية',
								'name' => 'Nekmaria',
							),
							'982' => array(
								'id' => '982',
								'code' => '982',
								'name_ar' => 'أولاد بوغالم',
								'name' => 'Ouled Boughalem',
							),
						),
					),
					'2719' => array(
						'id' => '2719',
						'code' => '2719',
						'name_ar' => 'بوقيراط',
						'name' => 'Bouguirat',
						'communes' => array(
							'969' => array(
								'id' => '969',
								'code' => '969',
								'name_ar' => 'بوقيراط',
								'name' => 'Bouguirat',
							),
							'984' => array(
								'id' => '984',
								'code' => '984',
								'name_ar' => 'صفصاف',
								'name' => 'Safsaf',
							),
							'989' => array(
								'id' => '989',
								'code' => '989',
								'name_ar' => 'سيرات',
								'name' => 'Sirat',
							),
							'990' => array(
								'id' => '990',
								'code' => '990',
								'name_ar' => 'السوافلية',
								'name' => 'Souaflia',
							),
						),
					),
					'2722' => array(
						'id' => '2722',
						'code' => '2722',
						'name_ar' => 'ماسرة',
						'name' => 'Mesra',
						'communes' => array(
							'966' => array(
								'id' => '966',
								'code' => '966',
								'name_ar' => 'عين سيدي الشريف',
								'name' => 'Ain-Sidi Cherif',
							),
							'976' => array(
								'id' => '976',
								'code' => '976',
								'name_ar' => 'منصورة',
								'name' => 'Mansourah',
							),
							'978' => array(
								'id' => '978',
								'code' => '978',
								'name_ar' => 'ماسرة',
								'name' => 'Mesra',
							),
							'994' => array(
								'id' => '994',
								'code' => '994',
								'name_ar' => 'الطواهرية',
								'name' => 'Touahria',
							),
						),
					),
				),
			),
			'28' => array(
				'id' => '28',
				'code' => '28',
				'name_ar' => 'المسيلة',
				'name' => 'M\'Sila',
				'dairas' => array(
					'2801' => array(
						'id' => '2801',
						'code' => '2801',
						'name_ar' => 'المسيلة',
						'name' => 'M\'sila',
						'communes' => array(
							'1023' => array(
								'id' => '1023',
								'code' => '1023',
								'name_ar' => 'المسيلة',
								'name' => 'M\'sila',
							),
						),
					),
					'2803' => array(
						'id' => '2803',
						'code' => '2803',
						'name_ar' => 'حمام الضلعة',
						'name' => 'Hammam Dalaa',
						'communes' => array(
							'1013' => array(
								'id' => '1013',
								'code' => '1013',
								'name_ar' => 'حمام الضلعة',
								'name' => 'Hammam Dalaa',
							),
							'1025' => array(
								'id' => '1025',
								'code' => '1025',
								'name_ar' => 'ونوغة',
								'name' => 'Ouanougha',
							),
							'1029' => array(
								'id' => '1029',
								'code' => '1029',
								'name_ar' => 'أولاد منصور',
								'name' => 'Ouled Mansour',
							),
							'1040' => array(
								'id' => '1040',
								'code' => '1040',
								'name_ar' => 'تارمونت',
								'name' => 'Tarmount',
							),
						),
					),
					'2804' => array(
						'id' => '2804',
						'code' => '2804',
						'name_ar' => 'أولاد دراج',
						'name' => 'Ouled Derradj',
						'communes' => array(
							'1016' => array(
								'id' => '1016',
								'code' => '1016',
								'name_ar' => 'المعاضيد',
								'name' => 'Maadid',
							),
							'1024' => array(
								'id' => '1024',
								'code' => '1024',
								'name_ar' => 'المطارفة',
								'name' => 'M\'tarfa',
							),
							'1026' => array(
								'id' => '1026',
								'code' => '1026',
								'name_ar' => 'أولاد عدي لقبالة',
								'name' => 'Ouled Addi Guebala',
							),
							'1027' => array(
								'id' => '1027',
								'code' => '1027',
								'name_ar' => 'أولاد دراج',
								'name' => 'Ouled Derradj',
							),
							'1038' => array(
								'id' => '1038',
								'code' => '1038',
								'name_ar' => 'السوامع',
								'name' => 'Souamaa',
							),
						),
					),
					'2807' => array(
						'id' => '2807',
						'code' => '2807',
						'name_ar' => 'خبانة',
						'name' => 'Khoubana',
						'communes' => array(
							'1012' => array(
								'id' => '1012',
								'code' => '1012',
								'name_ar' => 'الحوامد',
								'name' => 'El Houamed',
							),
							'1015' => array(
								'id' => '1015',
								'code' => '1015',
								'name_ar' => 'خبانة',
								'name' => 'Khoubana',
							),
							'1019' => array(
								'id' => '1019',
								'code' => '1019',
								'name_ar' => 'مسيف',
								'name' => 'M\'cif',
							),
						),
					),
					'2809' => array(
						'id' => '2809',
						'code' => '2809',
						'name_ar' => 'شلال',
						'name' => 'Chellal',
						'communes' => array(
							'1008' => array(
								'id' => '1008',
								'code' => '1008',
								'name_ar' => 'شلال',
								'name' => 'Chellal',
							),
							'1014' => array(
								'id' => '1014',
								'code' => '1014',
								'name_ar' => 'خطوطي سد الجير',
								'name' => 'Khettouti Sed-El-Jir',
							),
							'1017' => array(
								'id' => '1017',
								'code' => '1017',
								'name_ar' => 'معاريف',
								'name' => 'Maarif',
							),
							'1028' => array(
								'id' => '1028',
								'code' => '1028',
								'name_ar' => 'أولاد ماضي',
								'name' => 'Ouled Madhi',
							),
						),
					),
					'2811' => array(
						'id' => '2811',
						'code' => '2811',
						'name_ar' => 'مقرة',
						'name' => 'Magra',
						'communes' => array(
							'998' => array(
								'id' => '998',
								'code' => '998',
								'name_ar' => 'عين الخضراء',
								'name' => 'Ain Khadra',
							),
							'1000' => array(
								'id' => '1000',
								'code' => '1000',
								'name_ar' => 'بلعايبة',
								'name' => 'Belaiba',
							),
							'1004' => array(
								'id' => '1004',
								'code' => '1004',
								'name_ar' => 'برهوم',
								'name' => 'Berhoum',
							),
							'1009' => array(
								'id' => '1009',
								'code' => '1009',
								'name_ar' => 'دهاهنة',
								'name' => 'Dehahna',
							),
							'1018' => array(
								'id' => '1018',
								'code' => '1018',
								'name_ar' => 'مقرة',
								'name' => 'Magra',
							),
						),
					),
					'2816' => array(
						'id' => '2816',
						'code' => '2816',
						'name_ar' => 'سيدي عيسى',
						'name' => 'Sidi Aissa',
						'communes' => array(
							'1002' => array(
								'id' => '1002',
								'code' => '1002',
								'name_ar' => 'بني يلمان',
								'name' => 'Beni Ilmane',
							),
							'1007' => array(
								'id' => '1007',
								'code' => '1007',
								'name_ar' => 'بوطي السايح',
								'name' => 'Bouti Sayeh',
							),
							'1033' => array(
								'id' => '1033',
								'code' => '1033',
								'name_ar' => 'سيدي عيسى',
								'name' => 'Sidi Aissa',
							),
						),
					),
					'2817' => array(
						'id' => '2817',
						'code' => '2817',
						'name_ar' => 'عين الحجل',
						'name' => 'Ain El Hadjel',
						'communes' => array(
							'995' => array(
								'id' => '995',
								'code' => '995',
								'name_ar' => 'عين الحجل',
								'name' => 'Ain El Hadjel',
							),
							'1035' => array(
								'id' => '1035',
								'code' => '1035',
								'name_ar' => 'سيدي هجرس',
								'name' => 'Sidi Hadjeres',
							),
						),
					),
					'2820' => array(
						'id' => '2820',
						'code' => '2820',
						'name_ar' => 'بوسعادة',
						'name' => 'Bousaada',
						'communes' => array(
							'1006' => array(
								'id' => '1006',
								'code' => '1006',
								'name_ar' => 'بوسعادة',
								'name' => 'Bou Saada',
							),
							'1011' => array(
								'id' => '1011',
								'code' => '1011',
								'name_ar' => 'الهامل',
								'name' => 'El Hamel',
							),
							'1032' => array(
								'id' => '1032',
								'code' => '1032',
								'name_ar' => 'ولتام',
								'name' => 'Oulteme',
							),
						),
					),
					'2821' => array(
						'id' => '2821',
						'code' => '2821',
						'name_ar' => 'أولاد سيدي ابراهيم',
						'name' => 'Ouled Sidi Brahim',
						'communes' => array(
							'1003' => array(
								'id' => '1003',
								'code' => '1003',
								'name_ar' => 'بن زوه',
								'name' => 'Benzouh',
							),
							'1030' => array(
								'id' => '1030',
								'code' => '1030',
								'name_ar' => 'أولاد سيدي ابراهيم',
								'name' => 'Ouled Sidi Brahim',
							),
						),
					),
					'2822' => array(
						'id' => '2822',
						'code' => '2822',
						'name_ar' => 'سيدي عامر',
						'name' => 'Sidi Ameur',
						'communes' => array(
							'1034' => array(
								'id' => '1034',
								'code' => '1034',
								'name_ar' => 'سيدي عامر',
								'name' => 'Sidi Ameur',
							),
							'1039' => array(
								'id' => '1039',
								'code' => '1039',
								'name_ar' => 'تامسة',
								'name' => 'Tamsa',
							),
						),
					),
					'2824' => array(
						'id' => '2824',
						'code' => '2824',
						'name_ar' => 'بن سرور',
						'name' => 'Ben Srour',
						'communes' => array(
							'1001' => array(
								'id' => '1001',
								'code' => '1001',
								'name_ar' => 'بن سرور',
								'name' => 'Ben Srour',
							),
							'1022' => array(
								'id' => '1022',
								'code' => '1022',
								'name_ar' => 'محمد بوضياف',
								'name' => 'Mohamed Boudiaf',
							),
							'1031' => array(
								'id' => '1031',
								'code' => '1031',
								'name_ar' => 'أولاد سليمان',
								'name' => 'Ouled Slimane',
							),
							'1041' => array(
								'id' => '1041',
								'code' => '1041',
								'name_ar' => 'زرزور',
								'name' => 'Zarzour',
							),
						),
					),
					'2841' => array(
						'id' => '2841',
						'code' => '2841',
						'name_ar' => 'عين الملح',
						'name' => 'Ain El Melh',
						'communes' => array(
							'996' => array(
								'id' => '996',
								'code' => '996',
								'name_ar' => 'عين الملح',
								'name' => 'Ain El Melh',
							),
							'997' => array(
								'id' => '997',
								'code' => '997',
								'name_ar' => 'عين فارس',
								'name' => 'Ain Fares',
							),
							'999' => array(
								'id' => '999',
								'code' => '999',
								'name_ar' => 'عين الريش',
								'name' => 'Ain Rich',
							),
							'1005' => array(
								'id' => '1005',
								'code' => '1005',
								'name_ar' => 'بئر فضة',
								'name' => 'Bir Foda',
							),
							'1036' => array(
								'id' => '1036',
								'code' => '1036',
								'name_ar' => 'سيدي امحمد',
								'name' => 'Sidi M\'hamed',
							),
						),
					),
					'2842' => array(
						'id' => '2842',
						'code' => '2842',
						'name_ar' => 'امجدل',
						'name' => 'Medjedel',
						'communes' => array(
							'1020' => array(
								'id' => '1020',
								'code' => '1020',
								'name_ar' => 'امجدل',
								'name' => 'Medjedel',
							),
							'1021' => array(
								'id' => '1021',
								'code' => '1021',
								'name_ar' => 'مناعة',
								'name' => 'Menaa',
							),
						),
					),
					'2847' => array(
						'id' => '2847',
						'code' => '2847',
						'name_ar' => 'جبل مساعد',
						'name' => 'Djebel Messaad',
						'communes' => array(
							'1010' => array(
								'id' => '1010',
								'code' => '1010',
								'name_ar' => 'جبل مساعد',
								'name' => 'Djebel Messaad',
							),
							'1037' => array(
								'id' => '1037',
								'code' => '1037',
								'name_ar' => 'سليم',
								'name' => 'Slim',
							),
						),
					),
				),
			),
			'29' => array(
				'id' => '29',
				'code' => '29',
				'name_ar' => 'معسكر',
				'name' => 'Mascara',
				'dairas' => array(
					'2901' => array(
						'id' => '2901',
						'code' => '2901',
						'name_ar' => 'معسكر',
						'name' => 'Mascara',
						'communes' => array(
							'1069' => array(
								'id' => '1069',
								'code' => '1069',
								'name_ar' => 'معسكر',
								'name' => 'Mascara',
							),
						),
					),
					'2902' => array(
						'id' => '2902',
						'code' => '2902',
						'name_ar' => 'بوحنيفية',
						'name' => 'Bouhanifia',
						'communes' => array(
							'1050' => array(
								'id' => '1050',
								'code' => '1050',
								'name_ar' => 'بوحنيفية',
								'name' => 'Bouhanifia',
							),
							'1055' => array(
								'id' => '1055',
								'code' => '1055',
								'name_ar' => 'القطنة',
								'name' => 'El Gueitena',
							),
							'1065' => array(
								'id' => '1065',
								'code' => '1065',
								'name_ar' => 'حسين',
								'name' => 'Hacine',
							),
						),
					),
					'2903' => array(
						'id' => '2903',
						'code' => '2903',
						'name_ar' => 'تيزي',
						'name' => 'Tizi',
						'communes' => array(
							'1057' => array(
								'id' => '1057',
								'code' => '1057',
								'name_ar' => 'القرط',
								'name' => 'El Keurt',
							),
							'1061' => array(
								'id' => '1061',
								'code' => '1061',
								'name_ar' => 'فروحة',
								'name' => 'Froha',
							),
							'1086' => array(
								'id' => '1086',
								'code' => '1086',
								'name_ar' => 'تيزي',
								'name' => 'Tizi',
							),
						),
					),
					'2906' => array(
						'id' => '2906',
						'code' => '2906',
						'name_ar' => 'تيغنيف',
						'name' => 'Tighennif',
						'communes' => array(
							'1079' => array(
								'id' => '1079',
								'code' => '1079',
								'name_ar' => 'السهايلية',
								'name' => 'Sehailia',
							),
							'1083' => array(
								'id' => '1083',
								'code' => '1083',
								'name_ar' => 'سيدي قادة',
								'name' => 'Sidi Kada',
							),
							'1085' => array(
								'id' => '1085',
								'code' => '1085',
								'name_ar' => 'تيغنيف',
								'name' => 'Tighennif',
							),
						),
					),
					'2907' => array(
						'id' => '2907',
						'code' => '2907',
						'name_ar' => 'الحشم',
						'name' => 'Hachem',
						'communes' => array(
							'1056' => array(
								'id' => '1056',
								'code' => '1056',
								'name_ar' => 'الحشم',
								'name' => 'El Hachem',
							),
							'1073' => array(
								'id' => '1073',
								'code' => '1073',
								'name_ar' => 'نسمط',
								'name' => 'Nesmot',
							),
							'1088' => array(
								'id' => '1088',
								'code' => '1088',
								'name_ar' => 'زلامطة',
								'name' => 'Zelamta',
							),
						),
					),
					'2910' => array(
						'id' => '2910',
						'code' => '2910',
						'name_ar' => 'وادي الأبطال',
						'name' => 'Oued El Abtal',
						'communes' => array(
							'1044' => array(
								'id' => '1044',
								'code' => '1044',
								'name_ar' => 'عين فراح',
								'name' => 'Ain Ferah',
							),
							'1075' => array(
								'id' => '1075',
								'code' => '1075',
								'name_ar' => 'وادي الأبطال',
								'name' => 'Oued El Abtal',
							),
							'1080' => array(
								'id' => '1080',
								'code' => '1080',
								'name_ar' => 'سيدي عبد الجبار',
								'name' => 'Sidi Abdeldjebar',
							),
						),
					),
					'2912' => array(
						'id' => '2912',
						'code' => '2912',
						'name_ar' => 'غريس',
						'name' => 'Ghriss',
						'communes' => array(
							'1063' => array(
								'id' => '1063',
								'code' => '1063',
								'name_ar' => 'غريس',
								'name' => 'Ghriss',
							),
							'1067' => array(
								'id' => '1067',
								'code' => '1067',
								'name_ar' => 'ماقضة',
								'name' => 'Makhda',
							),
							'1068' => array(
								'id' => '1068',
								'code' => '1068',
								'name_ar' => 'ماوسة',
								'name' => 'Maoussa',
							),
							'1070' => array(
								'id' => '1070',
								'code' => '1070',
								'name_ar' => 'المطمور',
								'name' => 'Matemore',
							),
							'1082' => array(
								'id' => '1082',
								'code' => '1082',
								'name_ar' => 'سيدي بوسعيد',
								'name' => 'Sidi Boussaid',
							),
						),
					),
					'2917' => array(
						'id' => '2917',
						'code' => '2917',
						'name_ar' => 'البرج',
						'name' => 'El Bordj',
						'communes' => array(
							'1052' => array(
								'id' => '1052',
								'code' => '1052',
								'name_ar' => 'البرج',
								'name' => 'El Bordj',
							),
							'1059' => array(
								'id' => '1059',
								'code' => '1059',
								'name_ar' => 'المنور',
								'name' => 'El Menaouer',
							),
							'1066' => array(
								'id' => '1066',
								'code' => '1066',
								'name_ar' => 'خلوية',
								'name' => 'Khalouia',
							),
						),
					),
					'2918' => array(
						'id' => '2918',
						'code' => '2918',
						'name_ar' => 'عين فكان',
						'name' => 'Ain Fekan',
						'communes' => array(
							'1043' => array(
								'id' => '1043',
								'code' => '1043',
								'name_ar' => 'عين فكان',
								'name' => 'Ain Fekan',
							),
							'1045' => array(
								'id' => '1045',
								'code' => '1045',
								'name_ar' => 'عين أفرص',
								'name' => 'Ain Frass',
							),
						),
					),
					'2922' => array(
						'id' => '2922',
						'code' => '2922',
						'name_ar' => 'وادي التاغية',
						'name' => 'Oued Taria',
						'communes' => array(
							'1064' => array(
								'id' => '1064',
								'code' => '1064',
								'name_ar' => 'قرجوم',
								'name' => 'Guerdjoum',
							),
							'1076' => array(
								'id' => '1076',
								'code' => '1076',
								'name_ar' => 'وادي التاغية',
								'name' => 'Oued Taria',
							),
						),
					),
					'2923' => array(
						'id' => '2923',
						'code' => '2923',
						'name_ar' => 'عوف',
						'name' => 'Aouf',
						'communes' => array(
							'1047' => array(
								'id' => '1047',
								'code' => '1047',
								'name_ar' => 'عوف',
								'name' => 'Aouf',
							),
							'1048' => array(
								'id' => '1048',
								'code' => '1048',
								'name_ar' => 'بنيان',
								'name' => 'Benian',
							),
							'1062' => array(
								'id' => '1062',
								'code' => '1062',
								'name_ar' => 'غروس',
								'name' => 'Gharrous',
							),
						),
					),
					'2924' => array(
						'id' => '2924',
						'code' => '2924',
						'name_ar' => 'عين فارس',
						'name' => 'Ain Fares',
						'communes' => array(
							'1042' => array(
								'id' => '1042',
								'code' => '1042',
								'name_ar' => 'عين فارس',
								'name' => 'Ain Fares',
							),
							'1058' => array(
								'id' => '1058',
								'code' => '1058',
								'name_ar' => 'المأمونية',
								'name' => 'El Mamounia',
							),
						),
					),
					'2926' => array(
						'id' => '2926',
						'code' => '2926',
						'name_ar' => 'سيق',
						'name' => 'Sig',
						'communes' => array(
							'1049' => array(
								'id' => '1049',
								'code' => '1049',
								'name_ar' => 'بوهني',
								'name' => 'Bou Henni',
							),
							'1051' => array(
								'id' => '1051',
								'code' => '1051',
								'name_ar' => 'الشرفاء',
								'name' => 'Chorfa',
							),
							'1084' => array(
								'id' => '1084',
								'code' => '1084',
								'name_ar' => 'سيق',
								'name' => 'Sig',
							),
						),
					),
					'2927' => array(
						'id' => '2927',
						'code' => '2927',
						'name_ar' => 'عقاز',
						'name' => 'Oggaz',
						'communes' => array(
							'1046' => array(
								'id' => '1046',
								'code' => '1046',
								'name_ar' => 'العلايمية',
								'name' => 'Alaimia',
							),
							'1074' => array(
								'id' => '1074',
								'code' => '1074',
								'name_ar' => 'عقاز',
								'name' => 'Oggaz',
							),
							'1077' => array(
								'id' => '1077',
								'code' => '1077',
								'name_ar' => 'رأس عين عميروش',
								'name' => 'Ras El Ain Amirouche',
							),
						),
					),
					'2930' => array(
						'id' => '2930',
						'code' => '2930',
						'name_ar' => 'زهانة',
						'name' => 'Zahana',
						'communes' => array(
							'1053' => array(
								'id' => '1053',
								'code' => '1053',
								'name_ar' => 'القعدة',
								'name' => 'El Gaada',
							),
							'1087' => array(
								'id' => '1087',
								'code' => '1087',
								'name_ar' => 'زهانة',
								'name' => 'Zahana',
							),
						),
					),
					'2931' => array(
						'id' => '2931',
						'code' => '2931',
						'name_ar' => 'المحمدية',
						'name' => 'Mohammadia',
						'communes' => array(
							'1054' => array(
								'id' => '1054',
								'code' => '1054',
								'name_ar' => 'الغمري',
								'name' => 'El Ghomri',
							),
							'1060' => array(
								'id' => '1060',
								'code' => '1060',
								'name_ar' => 'فراقيق',
								'name' => 'Ferraguig',
							),
							'1071' => array(
								'id' => '1071',
								'code' => '1071',
								'name_ar' => 'مقطع الدوز',
								'name' => 'Mocta-Douz',
							),
							'1072' => array(
								'id' => '1072',
								'code' => '1072',
								'name_ar' => 'المحمدية',
								'name' => 'Mohammadia',
							),
							'1078' => array(
								'id' => '1078',
								'code' => '1078',
								'name_ar' => 'سجرارة',
								'name' => 'Sedjerara',
							),
							'1081' => array(
								'id' => '1081',
								'code' => '1081',
								'name_ar' => 'سيدي عبد المومن',
								'name' => 'Sidi Abdelmoumene',
							),
						),
					),
				),
			),
			'30' => array(
				'id' => '30',
				'code' => '30',
				'name_ar' => 'ورقلة',
				'name' => 'Ouargla',
				'dairas' => array(
					'3001' => array(
						'id' => '3001',
						'code' => '3001',
						'name_ar' => 'ورقلة',
						'name' => 'Ouargla',
						'communes' => array(
							'1101' => array(
								'id' => '1101',
								'code' => '1101',
								'name_ar' => 'ورقلة',
								'name' => 'Ouargla',
							),
							'1102' => array(
								'id' => '1102',
								'code' => '1102',
								'name_ar' => 'الرويسات',
								'name' => 'Rouissat',
							),
						),
					),
					'3003' => array(
						'id' => '3003',
						'code' => '3003',
						'name_ar' => 'انقوسة',
						'name' => 'N\'goussa',
						'communes' => array(
							'1100' => array(
								'id' => '1100',
								'code' => '1100',
								'name_ar' => 'انقوسة',
								'name' => 'N\'goussa',
							),
						),
					),
					'3004' => array(
						'id' => '3004',
						'code' => '3004',
						'name_ar' => 'حاسي مسعود',
						'name' => 'Hassi Messaoud',
						'communes' => array(
							'1096' => array(
								'id' => '1096',
								'code' => '1096',
								'name_ar' => 'حاسي مسعود',
								'name' => 'Hassi Messaoud',
							),
						),
					),
					'3011' => array(
						'id' => '3011',
						'code' => '3011',
						'name_ar' => 'سيدي خويلد',
						'name' => 'Sidi Khouiled',
						'communes' => array(
							'1089' => array(
								'id' => '1089',
								'code' => '1089',
								'name_ar' => 'عين البيضاء',
								'name' => 'Ain Beida',
							),
							'1095' => array(
								'id' => '1095',
								'code' => '1095',
								'name_ar' => 'حاسي بن عبد الله',
								'name' => 'Hassi Ben Abdellah',
							),
							'1103' => array(
								'id' => '1103',
								'code' => '1103',
								'name_ar' => 'سيدي خويلد',
								'name' => 'Sidi Khouiled',
							),
						),
					),
					'3013' => array(
						'id' => '3013',
						'code' => '3013',
						'name_ar' => 'تقرت',
						'name' => 'Touggourt',
						'communes' => array(
							'1099' => array(
								'id' => '1099',
								'code' => '1099',
								'name_ar' => 'النزلة',
								'name' => 'Nezla',
							),
							'1106' => array(
								'id' => '1106',
								'code' => '1106',
								'name_ar' => 'تبسبست',
								'name' => 'Tebesbest',
							),
							'1108' => array(
								'id' => '1108',
								'code' => '1108',
								'name_ar' => 'تقرت',
								'name' => 'Touggourt',
							),
							'1109' => array(
								'id' => '1109',
								'code' => '1109',
								'name_ar' => 'الزاوية العابدية',
								'name' => 'Zaouia El Abidia',
							),
						),
					),
					'3014' => array(
						'id' => '3014',
						'code' => '3014',
						'name_ar' => 'الحجيرة',
						'name' => 'El-Hadjira',
						'communes' => array(
							'1092' => array(
								'id' => '1092',
								'code' => '1092',
								'name_ar' => 'العالية',
								'name' => 'El Alia',
							),
							'1094' => array(
								'id' => '1094',
								'code' => '1094',
								'name_ar' => 'الحجيرة',
								'name' => 'El-Hadjira',
							),
						),
					),
					'3015' => array(
						'id' => '3015',
						'code' => '3015',
						'name_ar' => 'الطيبات',
						'name' => 'Taibet',
						'communes' => array(
							'1090' => array(
								'id' => '1090',
								'code' => '1090',
								'name_ar' => 'بن ناصر',
								'name' => 'Benaceur',
							),
							'1098' => array(
								'id' => '1098',
								'code' => '1098',
								'name_ar' => 'المنقر',
								'name' => 'M\'naguer',
							),
							'1105' => array(
								'id' => '1105',
								'code' => '1105',
								'name_ar' => 'الطيبات',
								'name' => 'Taibet',
							),
						),
					),
					'3016' => array(
						'id' => '3016',
						'code' => '3016',
						'name_ar' => 'تماسين',
						'name' => 'Temacine',
						'communes' => array(
							'1091' => array(
								'id' => '1091',
								'code' => '1091',
								'name_ar' => 'بلدة اعمر',
								'name' => 'Blidet Amor',
							),
							'1107' => array(
								'id' => '1107',
								'code' => '1107',
								'name_ar' => 'تماسين',
								'name' => 'Temacine',
							),
						),
					),
					'3019' => array(
						'id' => '3019',
						'code' => '3019',
						'name_ar' => 'المقارين',
						'name' => 'Megarine',
						'communes' => array(
							'1097' => array(
								'id' => '1097',
								'code' => '1097',
								'name_ar' => 'المقارين',
								'name' => 'Megarine',
							),
							'1104' => array(
								'id' => '1104',
								'code' => '1104',
								'name_ar' => 'سيدي سليمان',
								'name' => 'Sidi Slimane',
							),
						),
					),
					'3021' => array(
						'id' => '3021',
						'code' => '3021',
						'name_ar' => 'البرمة',
						'name' => 'El Borma',
						'communes' => array(
							'1093' => array(
								'id' => '1093',
								'code' => '1093',
								'name_ar' => 'البرمة',
								'name' => 'El Borma',
							),
						),
					),
					'301330' => array(
						'id' => '301330',
						'code' => '301330',
						'name_ar' => 'تقرت (ولاية منتدبة)',
						'name' => 'Touggourt (Wilaya Déléguée)',
					),
				),
			),
			'31' => array(
				'id' => '31',
				'code' => '31',
				'name_ar' => 'وهران',
				'name' => 'Oran',
				'dairas' => array(
					'3101' => array(
						'id' => '3101',
						'code' => '3101',
						'name_ar' => 'وهران',
						'name' => 'Oran',
						'communes' => array(
							'1131' => array(
								'id' => '1131',
								'code' => '1131',
								'name_ar' => 'وهران',
								'name' => 'Oran',
							),
						),
					),
					'3102' => array(
						'id' => '3102',
						'code' => '3102',
						'name_ar' => 'قديل',
						'name' => 'Gdyel',
						'communes' => array(
							'1114' => array(
								'id' => '1114',
								'code' => '1114',
								'name_ar' => 'بن فريحة',
								'name' => 'Ben Freha',
							),
							'1124' => array(
								'id' => '1124',
								'code' => '1124',
								'name_ar' => 'قديل',
								'name' => 'Gdyel',
							),
							'1127' => array(
								'id' => '1127',
								'code' => '1127',
								'name_ar' => 'حاسي مفسوخ',
								'name' => 'Hassi Mefsoukh',
							),
						),
					),
					'3103' => array(
						'id' => '3103',
						'code' => '3103',
						'name_ar' => 'بئر الجير',
						'name' => 'Bir El Djir',
						'communes' => array(
							'1116' => array(
								'id' => '1116',
								'code' => '1116',
								'name_ar' => 'بئر الجير',
								'name' => 'Bir El Djir',
							),
							'1125' => array(
								'id' => '1125',
								'code' => '1125',
								'name_ar' => 'حاسي بن عقبة',
								'name' => 'Hassi Ben Okba',
							),
							'1126' => array(
								'id' => '1126',
								'code' => '1126',
								'name_ar' => 'حاسي بونيف',
								'name' => 'Hassi Bounif',
							),
						),
					),
					'3105' => array(
						'id' => '3105',
						'code' => '3105',
						'name_ar' => 'السانية',
						'name' => 'Es Senia',
						'communes' => array(
							'1122' => array(
								'id' => '1122',
								'code' => '1122',
								'name_ar' => 'الكرمة',
								'name' => 'El Kerma',
							),
							'1123' => array(
								'id' => '1123',
								'code' => '1123',
								'name_ar' => 'السانية',
								'name' => 'Es Senia',
							),
							'1134' => array(
								'id' => '1134',
								'code' => '1134',
								'name_ar' => 'سيدي الشحمي',
								'name' => 'Sidi Chami',
							),
						),
					),
					'3106' => array(
						'id' => '3106',
						'code' => '3106',
						'name_ar' => 'أرزيو',
						'name' => 'Arzew',
						'communes' => array(
							'1113' => array(
								'id' => '1113',
								'code' => '1113',
								'name_ar' => 'أرزيو',
								'name' => 'Arzew',
							),
							'1133' => array(
								'id' => '1133',
								'code' => '1133',
								'name_ar' => 'سيدي بن يبقى',
								'name' => 'Sidi Ben Yebka',
							),
						),
					),
					'3107' => array(
						'id' => '3107',
						'code' => '3107',
						'name_ar' => 'بطيوة',
						'name' => 'Bethioua',
						'communes' => array(
							'1110' => array(
								'id' => '1110',
								'code' => '1110',
								'name_ar' => 'عين البية',
								'name' => 'Ain Biya',
							),
							'1115' => array(
								'id' => '1115',
								'code' => '1115',
								'name_ar' => 'بطيوة',
								'name' => 'Bethioua',
							),
							'1128' => array(
								'id' => '1128',
								'code' => '1128',
								'name_ar' => 'مرسى الحجاج',
								'name' => 'Marsat El Hadjadj',
							),
						),
					),
					'3109' => array(
						'id' => '3109',
						'code' => '3109',
						'name_ar' => 'عين الترك',
						'name' => 'Ain Turk',
						'communes' => array(
							'1112' => array(
								'id' => '1112',
								'code' => '1112',
								'name_ar' => 'عين الترك',
								'name' => 'Ain Turk',
							),
							'1118' => array(
								'id' => '1118',
								'code' => '1118',
								'name_ar' => 'بوسفر',
								'name' => 'Bousfer',
							),
							'1120' => array(
								'id' => '1120',
								'code' => '1120',
								'name_ar' => 'العنصر',
								'name' => 'El Ancor',
							),
							'1129' => array(
								'id' => '1129',
								'code' => '1129',
								'name_ar' => 'المرسى الكبير',
								'name' => 'Mers El Kebir',
							),
						),
					),
					'3111' => array(
						'id' => '3111',
						'code' => '3111',
						'name_ar' => 'وادي تليلات',
						'name' => 'Oued Tlelat',
						'communes' => array(
							'1117' => array(
								'id' => '1117',
								'code' => '1117',
								'name_ar' => 'بوفاتيس',
								'name' => 'Boufatis',
							),
							'1121' => array(
								'id' => '1121',
								'code' => '1121',
								'name_ar' => 'البراية',
								'name' => 'El Braya',
							),
							'1132' => array(
								'id' => '1132',
								'code' => '1132',
								'name_ar' => 'وادي تليلات',
								'name' => 'Oued Tlelat',
							),
							'1135' => array(
								'id' => '1135',
								'code' => '1135',
								'name_ar' => 'طفراوي',
								'name' => 'Tafraoui',
							),
						),
					),
					'3124' => array(
						'id' => '3124',
						'code' => '3124',
						'name_ar' => 'بوتليليس',
						'name' => 'Boutlelis',
						'communes' => array(
							'1111' => array(
								'id' => '1111',
								'code' => '1111',
								'name_ar' => 'عين الكرمة',
								'name' => 'Ain Kerma',
							),
							'1119' => array(
								'id' => '1119',
								'code' => '1119',
								'name_ar' => 'بوتليليس',
								'name' => 'Boutlelis',
							),
							'1130' => array(
								'id' => '1130',
								'code' => '1130',
								'name_ar' => 'مسرغين',
								'name' => 'Messerghin',
							),
						),
					),
				),
			),
			'32' => array(
				'id' => '32',
				'code' => '32',
				'name_ar' => 'البيض',
				'name' => 'El Bayadh',
				'dairas' => array(
					'3201' => array(
						'id' => '3201',
						'code' => '3201',
						'name_ar' => 'البيض',
						'name' => 'El Bayadh',
						'communes' => array(
							'1144' => array(
								'id' => '1144',
								'code' => '1144',
								'name_ar' => 'البيض',
								'name' => 'El Bayadh',
							),
						),
					),
					'3202' => array(
						'id' => '3202',
						'code' => '3202',
						'name_ar' => 'رقاصة',
						'name' => 'Rogassa',
						'communes' => array(
							'1139' => array(
								'id' => '1139',
								'code' => '1139',
								'name_ar' => 'بوقطب',
								'name' => 'Bougtoub',
							),
							'1152' => array(
								'id' => '1152',
								'code' => '1152',
								'name_ar' => 'رقاصة',
								'name' => 'Rogassa',
							),
							'1155' => array(
								'id' => '1155',
								'code' => '1155',
								'name_ar' => 'سيدي طيفور',
								'name' => 'Sidi Tiffour',
							),
						),
					),
					'3203' => array(
						'id' => '3203',
						'code' => '3203',
						'name_ar' => 'بريزينة',
						'name' => 'Brezina',
					),
					'3204' => array(
						'id' => '3204',
						'code' => '3204',
						'name_ar' => 'بوعلام',
						'name' => 'Boualem',
						'communes' => array(
							'1137' => array(
								'id' => '1137',
								'code' => '1137',
								'name_ar' => 'اربوات',
								'name' => 'Arbaouat',
							),
							'1141' => array(
								'id' => '1141',
								'code' => '1141',
								'name_ar' => 'بريزينة',
								'name' => 'Brezina',
							),
							'1142' => array(
								'id' => '1142',
								'code' => '1142',
								'name_ar' => 'الشقيق',
								'name' => 'Cheguig',
							),
						),
					),
					'3205' => array(
						'id' => '3205',
						'code' => '3205',
						'name_ar' => 'الأبيض سيدي الشيخ',
						'name' => 'Labiodh Sidi Cheikh',
					),
					'3206' => array(
						'id' => '3206',
						'code' => '3206',
						'name_ar' => 'بوقطب',
						'name' => 'Bougtob',
						'communes' => array(
							'1143' => array(
								'id' => '1143',
								'code' => '1143',
								'name_ar' => 'شلالة',
								'name' => 'Chellala',
							),
							'1147' => array(
								'id' => '1147',
								'code' => '1147',
								'name_ar' => 'الخيثر',
								'name' => 'El Kheither',
							),
							'1148' => array(
								'id' => '1148',
								'code' => '1148',
								'name_ar' => 'المحرة',
								'name' => 'El Mehara',
							),
							'1149' => array(
								'id' => '1149',
								'code' => '1149',
								'name_ar' => 'الغاسول',
								'name' => 'Ghassoul',
							),
							'1150' => array(
								'id' => '1150',
								'code' => '1150',
								'name_ar' => 'الكاف الأحمر',
								'name' => 'Kef El Ahmar',
							),
						),
					),
					'3207' => array(
						'id' => '3207',
						'code' => '3207',
						'name_ar' => 'بوسمغون',
						'name' => 'Boussemghoun',
						'communes' => array(
							'1138' => array(
								'id' => '1138',
								'code' => '1138',
								'name_ar' => 'بوعلام',
								'name' => 'Boualem',
							),
							'1146' => array(
								'id' => '1146',
								'code' => '1146',
								'name_ar' => 'البنود',
								'name' => 'El Bnoud',
							),
							'1151' => array(
								'id' => '1151',
								'code' => '1151',
								'name_ar' => 'كراكدة',
								'name' => 'Krakda',
							),
							'1156' => array(
								'id' => '1156',
								'code' => '1156',
								'name_ar' => 'ستيتن',
								'name' => 'Stitten',
							),
						),
					),
					'3208' => array(
						'id' => '3208',
						'code' => '3208',
						'name_ar' => 'شلالة',
						'name' => 'Chellala',
					),
				),
			),
			'33' => array(
				'id' => '33',
				'code' => '33',
				'name_ar' => 'إليزي',
				'name' => 'Illizi',
				'dairas' => array(
					'3301' => array(
						'id' => '3301',
						'code' => '3301',
						'name_ar' => 'إيليزي',
						'name' => 'Illizi',
						'communes' => array(
							'1162' => array(
								'id' => '1162',
								'code' => '1162',
								'name_ar' => 'إيليزي',
								'name' => 'Illizi',
							),
						),
					),
					'3302' => array(
						'id' => '3302',
						'code' => '3302',
						'name_ar' => 'جانت',
						'name' => 'Djanet',
						'communes' => array(
							'1158' => array(
								'id' => '1158',
								'code' => '1158',
								'name_ar' => 'برج الحواس',
								'name' => 'Bordj El Haouass',
							),
							'1161' => array(
								'id' => '1161',
								'code' => '1161',
								'name_ar' => 'جانت',
								'name' => 'Djanet',
							),
						),
					),
					'3306' => array(
						'id' => '3306',
						'code' => '3306',
						'name_ar' => 'إن أمناس',
						'name' => 'In Amenas',
						'communes' => array(
							'1159' => array(
								'id' => '1159',
								'code' => '1159',
								'name_ar' => 'برج عمر إدريس',
								'name' => 'Bordj Omar Driss',
							),
							'1160' => array(
								'id' => '1160',
								'code' => '1160',
								'name_ar' => 'دبداب',
								'name' => 'Debdeb',
							),
							'1163' => array(
								'id' => '1163',
								'code' => '1163',
								'name_ar' => 'إن أمناس',
								'name' => 'In Amenas',
							),
						),
					),
					'330233' => array(
						'id' => '330233',
						'code' => '330233',
						'name_ar' => 'جانت (ولاية منتدبة)',
						'name' => 'Djanet (Wilaya Déléguée)',
					),
				),
			),
			'34' => array(
				'id' => '34',
				'code' => '34',
				'name_ar' => 'برج بوعريريج',
				'name' => 'Bordj Bou Arreridj',
				'dairas' => array(
					'3401' => array(
						'id' => '3401',
						'code' => '3401',
						'name_ar' => 'برج بوعريريج',
						'name' => 'Bordj Bou Arreridj',
						'communes' => array(
							'1166' => array(
								'id' => '1166',
								'code' => '1166',
								'name_ar' => 'برج بوعريرج',
								'name' => 'B. B. Arreridj',
							),
						),
					),
					'3402' => array(
						'id' => '3402',
						'code' => '3402',
						'name_ar' => 'رأس الوادي',
						'name' => 'Ras El Oued',
						'communes' => array(
							'1165' => array(
								'id' => '1165',
								'code' => '1165',
								'name_ar' => 'عين تسرة',
								'name' => 'Ain Tesra',
							),
							'1187' => array(
								'id' => '1187',
								'code' => '1187',
								'name_ar' => 'أولاد أبراهم',
								'name' => 'Ouled Brahem',
							),
							'1191' => array(
								'id' => '1191',
								'code' => '1191',
								'name_ar' => 'رأس الوادي',
								'name' => 'Ras El Oued',
							),
						),
					),
					'3403' => array(
						'id' => '3403',
						'code' => '3403',
						'name_ar' => 'برج زمورة',
						'name' => 'Bordj Zemmoura',
						'communes' => array(
							'1171' => array(
								'id' => '1171',
								'code' => '1171',
								'name_ar' => 'برج زمورة',
								'name' => 'Bordj Zemmoura',
							),
							'1188' => array(
								'id' => '1188',
								'code' => '1188',
								'name_ar' => 'أولاد دحمان',
								'name' => 'Ouled Dahmane',
							),
							'1195' => array(
								'id' => '1195',
								'code' => '1195',
								'name_ar' => 'تسامرت',
								'name' => 'Tassamert',
							),
						),
					),
					'3404' => array(
						'id' => '3404',
						'code' => '3404',
						'name_ar' => 'المنصورة',
						'name' => 'Mansourah',
						'communes' => array(
							'1168' => array(
								'id' => '1168',
								'code' => '1168',
								'name_ar' => 'بن داود',
								'name' => 'Ben Daoud',
							),
							'1179' => array(
								'id' => '1179',
								'code' => '1179',
								'name_ar' => 'المهير',
								'name' => 'El M\'hir',
							),
							'1181' => array(
								'id' => '1181',
								'code' => '1181',
								'name_ar' => 'حرازة',
								'name' => 'Haraza',
							),
							'1185' => array(
								'id' => '1185',
								'code' => '1185',
								'name_ar' => 'المنصورة',
								'name' => 'Mansoura',
							),
							'1189' => array(
								'id' => '1189',
								'code' => '1189',
								'name_ar' => 'أولاد سيدي ابراهيم',
								'name' => 'Ouled Sidi-Brahim',
							),
						),
					),
					'3408' => array(
						'id' => '3408',
						'code' => '3408',
						'name_ar' => 'عين تاغروت',
						'name' => 'Ain Taghrout',
						'communes' => array(
							'1164' => array(
								'id' => '1164',
								'code' => '1164',
								'name_ar' => 'عين تاغروت',
								'name' => 'Ain Taghrout',
							),
							'1197' => array(
								'id' => '1197',
								'code' => '1197',
								'name_ar' => 'تيكستار',
								'name' => 'Tixter',
							),
						),
					),
					'3409' => array(
						'id' => '3409',
						'code' => '3409',
						'name_ar' => 'برج الغدير',
						'name' => 'Bordj Ghedir',
						'communes' => array(
							'1167' => array(
								'id' => '1167',
								'code' => '1167',
								'name_ar' => 'بليمور',
								'name' => 'Belimour',
							),
							'1170' => array(
								'id' => '1170',
								'code' => '1170',
								'name_ar' => 'برج الغدير',
								'name' => 'Bordj Ghedir',
							),
							'1176' => array(
								'id' => '1176',
								'code' => '1176',
								'name_ar' => 'العناصر',
								'name' => 'El Annasseur',
							),
							'1180' => array(
								'id' => '1180',
								'code' => '1180',
								'name_ar' => 'غيلاسة',
								'name' => 'Ghailasa',
							),
							'1194' => array(
								'id' => '1194',
								'code' => '1194',
								'name_ar' => 'تقلعيت',
								'name' => 'Taglait',
							),
						),
					),
					'3411' => array(
						'id' => '3411',
						'code' => '3411',
						'name_ar' => 'الحمادية',
						'name' => 'El Hamadia',
						'communes' => array(
							'1174' => array(
								'id' => '1174',
								'code' => '1174',
								'name_ar' => 'العش',
								'name' => 'El Euch',
							),
							'1177' => array(
								'id' => '1177',
								'code' => '1177',
								'name_ar' => 'الحمادية',
								'name' => 'Elhammadia',
							),
							'1184' => array(
								'id' => '1184',
								'code' => '1184',
								'name_ar' => 'القصور',
								'name' => 'Ksour',
							),
							'1190' => array(
								'id' => '1190',
								'code' => '1190',
								'name_ar' => 'الرابطة',
								'name' => 'Rabta',
							),
						),
					),
					'3413' => array(
						'id' => '3413',
						'code' => '3413',
						'name_ar' => 'مجانة',
						'name' => 'Medjana',
						'communes' => array(
							'1175' => array(
								'id' => '1175',
								'code' => '1175',
								'name_ar' => 'الياشير',
								'name' => 'El Achir',
							),
							'1182' => array(
								'id' => '1182',
								'code' => '1182',
								'name_ar' => 'حسناوة',
								'name' => 'Hasnaoua',
							),
							'1186' => array(
								'id' => '1186',
								'code' => '1186',
								'name_ar' => 'مجانة',
								'name' => 'Medjana',
							),
							'1196' => array(
								'id' => '1196',
								'code' => '1196',
								'name_ar' => 'ثنية النصر',
								'name' => 'Teniet En Nasr',
							),
						),
					),
					'3415' => array(
						'id' => '3415',
						'code' => '3415',
						'name_ar' => 'جعافرة',
						'name' => 'Djaafra',
						'communes' => array(
							'1172' => array(
								'id' => '1172',
								'code' => '1172',
								'name_ar' => 'القلة',
								'name' => 'Colla',
							),
							'1173' => array(
								'id' => '1173',
								'code' => '1173',
								'name_ar' => 'جعافرة',
								'name' => 'Djaafra',
							),
							'1178' => array(
								'id' => '1178',
								'code' => '1178',
								'name_ar' => 'الماين',
								'name' => 'El Main',
							),
							'1193' => array(
								'id' => '1193',
								'code' => '1193',
								'name_ar' => 'تفرق',
								'name' => 'Tefreg',
							),
						),
					),
					'3431' => array(
						'id' => '3431',
						'code' => '3431',
						'name_ar' => 'بئر قاصد علي',
						'name' => 'Bir Kasdali',
						'communes' => array(
							'1169' => array(
								'id' => '1169',
								'code' => '1169',
								'name_ar' => 'بئر قاصد علي',
								'name' => 'Bir Kasdali',
							),
							'1183' => array(
								'id' => '1183',
								'code' => '1183',
								'name_ar' => 'خليل',
								'name' => 'Khelil',
							),
							'1192' => array(
								'id' => '1192',
								'code' => '1192',
								'name_ar' => 'سيدي أمبارك',
								'name' => 'Sidi-Embarek',
							),
						),
					),
				),
			),
			'35' => array(
				'id' => '35',
				'code' => '35',
				'name_ar' => 'بومرداس',
				'name' => 'Boumerdès',
				'dairas' => array(
					'3501' => array(
						'id' => '3501',
						'code' => '3501',
						'name_ar' => 'بومرداس',
						'name' => 'Boumerdes',
						'communes' => array(
							'1206' => array(
								'id' => '1206',
								'code' => '1206',
								'name_ar' => 'بومرداس',
								'name' => 'Boumerdes',
							),
							'1209' => array(
								'id' => '1209',
								'code' => '1209',
								'name_ar' => 'قورصو',
								'name' => 'Corso',
							),
							'1227' => array(
								'id' => '1227',
								'code' => '1227',
								'name_ar' => 'تيجلابين',
								'name' => 'Tidjelabine',
							),
						),
					),
					'3502' => array(
						'id' => '3502',
						'code' => '3502',
						'name_ar' => 'بودواو',
						'name' => 'Boudouaou',
						'communes' => array(
							'1204' => array(
								'id' => '1204',
								'code' => '1204',
								'name_ar' => 'بودواو',
								'name' => 'Boudouaou',
							),
							'1205' => array(
								'id' => '1205',
								'code' => '1205',
								'name_ar' => 'بودواو البحري',
								'name' => 'Boudouaou El Bahri',
							),
							'1207' => array(
								'id' => '1207',
								'code' => '1207',
								'name_ar' => 'بوزقزة قدارة',
								'name' => 'Bouzegza Keddara',
							),
							'1212' => array(
								'id' => '1212',
								'code' => '1212',
								'name_ar' => 'الخروبة',
								'name' => 'El Kharrouba',
							),
							'1220' => array(
								'id' => '1220',
								'code' => '1220',
								'name_ar' => 'أولاد هداج',
								'name' => 'Ouled Hedadj',
							),
						),
					),
					'3504' => array(
						'id' => '3504',
						'code' => '3504',
						'name_ar' => 'برج منايل',
						'name' => 'Bordj Menaiel',
						'communes' => array(
							'1203' => array(
								'id' => '1203',
								'code' => '1203',
								'name_ar' => 'برج منايل',
								'name' => 'Bordj Menaiel',
							),
							'1211' => array(
								'id' => '1211',
								'code' => '1211',
								'name_ar' => 'جنات',
								'name' => 'Djinet',
							),
							'1217' => array(
								'id' => '1217',
								'code' => '1217',
								'name_ar' => 'لقاطة',
								'name' => 'Leghata',
							),
							'1229' => array(
								'id' => '1229',
								'code' => '1229',
								'name_ar' => 'زموري',
								'name' => 'Zemmouri',
							),
						),
					),
					'3505' => array(
						'id' => '3505',
						'code' => '3505',
						'name_ar' => 'بغلية',
						'name' => 'Baghlia',
						'communes' => array(
							'1200' => array(
								'id' => '1200',
								'code' => '1200',
								'name_ar' => 'بغلية',
								'name' => 'Baghlia',
							),
							'1223' => array(
								'id' => '1223',
								'code' => '1223',
								'name_ar' => 'سيدي داود',
								'name' => 'Sidi Daoud',
							),
							'1225' => array(
								'id' => '1225',
								'code' => '1225',
								'name_ar' => 'تاورقة',
								'name' => 'Taourga',
							),
						),
					),
					'3507' => array(
						'id' => '3507',
						'code' => '3507',
						'name_ar' => 'الناصرية',
						'name' => 'Naciria',
						'communes' => array(
							'1218' => array(
								'id' => '1218',
								'code' => '1218',
								'name_ar' => 'الناصرية',
								'name' => 'Naciria',
							),
							'1219' => array(
								'id' => '1219',
								'code' => '1219',
								'name_ar' => 'أولاد عيسى',
								'name' => 'Ouled Aissa',
							),
						),
					),
					'3509' => array(
						'id' => '3509',
						'code' => '3509',
						'name_ar' => 'يسر',
						'name' => 'Isser',
						'communes' => array(
							'1208' => array(
								'id' => '1208',
								'code' => '1208',
								'name_ar' => 'شعبة العامر',
								'name' => 'Chabet El Ameur',
							),
							'1214' => array(
								'id' => '1214',
								'code' => '1214',
								'name_ar' => 'يسر',
								'name' => 'Isser',
							),
							'1222' => array(
								'id' => '1222',
								'code' => '1222',
								'name_ar' => 'سي مصطفى',
								'name' => 'Si Mustapha',
							),
							'1228' => array(
								'id' => '1228',
								'code' => '1228',
								'name_ar' => 'تيمزريت',
								'name' => 'Timezrit',
							),
						),
					),
					'3514' => array(
						'id' => '3514',
						'code' => '3514',
						'name_ar' => 'الثنية',
						'name' => 'Thenia',
						'communes' => array(
							'1199' => array(
								'id' => '1199',
								'code' => '1199',
								'name_ar' => 'عمال',
								'name' => 'Ammal',
							),
							'1202' => array(
								'id' => '1202',
								'code' => '1202',
								'name_ar' => 'بني عمران',
								'name' => 'Beni Amrane',
							),
							'1224' => array(
								'id' => '1224',
								'code' => '1224',
								'name_ar' => 'سوق الحد',
								'name' => 'Souk El Had',
							),
							'1226' => array(
								'id' => '1226',
								'code' => '1226',
								'name_ar' => 'الثنية',
								'name' => 'Thenia',
							),
						),
					),
					'3523' => array(
						'id' => '3523',
						'code' => '3523',
						'name_ar' => 'دلس',
						'name' => 'Dellys',
						'communes' => array(
							'1198' => array(
								'id' => '1198',
								'code' => '1198',
								'name_ar' => 'أعفير',
								'name' => 'Afir',
							),
							'1201' => array(
								'id' => '1201',
								'code' => '1201',
								'name_ar' => 'بن شود',
								'name' => 'Ben Choud',
							),
							'1210' => array(
								'id' => '1210',
								'code' => '1210',
								'name_ar' => 'دلس',
								'name' => 'Dellys',
							),
						),
					),
					'3531' => array(
						'id' => '3531',
						'code' => '3531',
						'name_ar' => 'خميس الخشنة',
						'name' => 'Khemis El Khechna',
						'communes' => array(
							'1213' => array(
								'id' => '1213',
								'code' => '1213',
								'name_ar' => 'حمادي',
								'name' => 'Hammedi',
							),
							'1215' => array(
								'id' => '1215',
								'code' => '1215',
								'name_ar' => 'خميس الخشنة',
								'name' => 'Khemis El Khechna',
							),
							'1216' => array(
								'id' => '1216',
								'code' => '1216',
								'name_ar' => 'الاربعطاش',
								'name' => 'Larbatache',
							),
							'1221' => array(
								'id' => '1221',
								'code' => '1221',
								'name_ar' => 'أولاد موسى',
								'name' => 'Ouled Moussa',
							),
						),
					),
				),
			),
			'36' => array(
				'id' => '36',
				'code' => '36',
				'name_ar' => 'الطارف',
				'name' => 'El Tarf',
				'dairas' => array(
					'3601' => array(
						'id' => '3601',
						'code' => '3601',
						'name_ar' => 'الطارف',
						'name' => 'El Tarf',
						'communes' => array(
							'1230' => array(
								'id' => '1230',
								'code' => '1230',
								'name_ar' => 'عين العسل',
								'name' => 'Ain El Assel',
							),
							'1236' => array(
								'id' => '1236',
								'code' => '1236',
								'name_ar' => 'بوقوس',
								'name' => 'Bougous',
							),
							'1246' => array(
								'id' => '1246',
								'code' => '1246',
								'name_ar' => 'الطارف',
								'name' => 'El Tarf',
							),
							'1253' => array(
								'id' => '1253',
								'code' => '1253',
								'name_ar' => 'الزيتونة',
								'name' => 'Zitouna',
							),
						),
					),
					'3602' => array(
						'id' => '3602',
						'code' => '3602',
						'name_ar' => 'بوحجار',
						'name' => 'Bouhadjar',
						'communes' => array(
							'1231' => array(
								'id' => '1231',
								'code' => '1231',
								'name_ar' => 'عين الكرمة',
								'name' => 'Ain Kerma',
							),
							'1237' => array(
								'id' => '1237',
								'code' => '1237',
								'name_ar' => 'بوحجار',
								'name' => 'Bouhadjar',
							),
							'1247' => array(
								'id' => '1247',
								'code' => '1247',
								'name_ar' => 'حمام بني صالح',
								'name' => 'Hammam Beni Salah',
							),
							'1249' => array(
								'id' => '1249',
								'code' => '1249',
								'name_ar' => 'وادي الزيتون',
								'name' => 'Oued Zitoun',
							),
						),
					),
					'3603' => array(
						'id' => '3603',
						'code' => '3603',
						'name_ar' => 'بن مهيدي',
						'name' => 'Ben M\'hidi',
						'communes' => array(
							'1233' => array(
								'id' => '1233',
								'code' => '1233',
								'name_ar' => 'بن مهيدي',
								'name' => 'Ben M Hidi',
							),
							'1234' => array(
								'id' => '1234',
								'code' => '1234',
								'name_ar' => 'بريحان',
								'name' => 'Berrihane',
							),
							'1243' => array(
								'id' => '1243',
								'code' => '1243',
								'name_ar' => 'الشط',
								'name' => 'Echatt',
							),
						),
					),
					'3605' => array(
						'id' => '3605',
						'code' => '3605',
						'name_ar' => 'القالة',
						'name' => 'El Kala',
						'communes' => array(
							'1244' => array(
								'id' => '1244',
								'code' => '1244',
								'name_ar' => 'العيون',
								'name' => 'El Aioun',
							),
							'1245' => array(
								'id' => '1245',
								'code' => '1245',
								'name_ar' => 'القالة',
								'name' => 'El Kala',
							),
							'1250' => array(
								'id' => '1250',
								'code' => '1250',
								'name_ar' => 'رمل السوق',
								'name' => 'Raml Souk',
							),
							'1251' => array(
								'id' => '1251',
								'code' => '1251',
								'name_ar' => 'السوارخ',
								'name' => 'Souarekh',
							),
						),
					),
					'3608' => array(
						'id' => '3608',
						'code' => '3608',
						'name_ar' => 'بوثلجة',
						'name' => 'Bouteldja',
						'communes' => array(
							'1238' => array(
								'id' => '1238',
								'code' => '1238',
								'name_ar' => 'بوثلجة',
								'name' => 'Bouteldja',
							),
							'1240' => array(
								'id' => '1240',
								'code' => '1240',
								'name_ar' => 'الشافية',
								'name' => 'Chefia',
							),
							'1248' => array(
								'id' => '1248',
								'code' => '1248',
								'name_ar' => 'بحيرة الطيور',
								'name' => 'Lac Des Oiseaux',
							),
						),
					),
					'3613' => array(
						'id' => '3613',
						'code' => '3613',
						'name_ar' => 'الذرعان',
						'name' => 'Drean',
						'communes' => array(
							'1239' => array(
								'id' => '1239',
								'code' => '1239',
								'name_ar' => 'شبيطة مختار',
								'name' => 'Chebaita Mokhtar',
							),
							'1241' => array(
								'id' => '1241',
								'code' => '1241',
								'name_ar' => 'شحاني',
								'name' => 'Chihani',
							),
							'1242' => array(
								'id' => '1242',
								'code' => '1242',
								'name_ar' => 'الذرعـان',
								'name' => 'Drean',
							),
						),
					),
					'3616' => array(
						'id' => '3616',
						'code' => '3616',
						'name_ar' => 'البسباس',
						'name' => 'Besbes',
						'communes' => array(
							'1232' => array(
								'id' => '1232',
								'code' => '1232',
								'name_ar' => 'عصفور',
								'name' => 'Asfour',
							),
							'1235' => array(
								'id' => '1235',
								'code' => '1235',
								'name_ar' => 'البسباس',
								'name' => 'Besbes',
							),
							'1252' => array(
								'id' => '1252',
								'code' => '1252',
								'name_ar' => 'زريزر',
								'name' => 'Zerizer',
							),
						),
					),
				),
			),
			'37' => array(
				'id' => '37',
				'code' => '37',
				'name_ar' => 'تندوف',
				'name' => 'Tindouf',
				'dairas' => array(
					'3701' => array(
						'id' => '3701',
						'code' => '3701',
						'name_ar' => 'تندوف',
						'name' => 'Tindouf',
						'communes' => array(
							'1254' => array(
								'id' => '1254',
								'code' => '1254',
								'name_ar' => 'أم العسل',
								'name' => 'Oum El Assel',
							),
							'1255' => array(
								'id' => '1255',
								'code' => '1255',
								'name_ar' => 'تندوف',
								'name' => 'Tindouf',
							),
						),
					),
				),
			),
			'38' => array(
				'id' => '38',
				'code' => '38',
				'name_ar' => 'تيسمسيلت',
				'name' => 'Tissemsilt',
				'dairas' => array(
					'3801' => array(
						'id' => '3801',
						'code' => '3801',
						'name_ar' => 'تيسمسيلت',
						'name' => 'Tissemsilt',
						'communes' => array(
							'1269' => array(
								'id' => '1269',
								'code' => '1269',
								'name_ar' => 'أولاد بسام',
								'name' => 'Ouled Bessam',
							),
							'1276' => array(
								'id' => '1276',
								'code' => '1276',
								'name_ar' => 'تيسمسيلت',
								'name' => 'Tissemsilt',
							),
						),
					),
					'3802' => array(
						'id' => '3802',
						'code' => '3802',
						'name_ar' => 'برج بونعامة',
						'name' => 'Bordj Bounaama',
						'communes' => array(
							'1257' => array(
								'id' => '1257',
								'code' => '1257',
								'name_ar' => 'بني شعيب',
								'name' => 'Beni Chaib',
							),
							'1258' => array(
								'id' => '1258',
								'code' => '1258',
								'name_ar' => 'بني لحسن',
								'name' => 'Beni Lahcene',
							),
							'1259' => array(
								'id' => '1259',
								'code' => '1259',
								'name_ar' => 'برج بونعامة',
								'name' => 'Bordj Bounaama',
							),
							'1273' => array(
								'id' => '1273',
								'code' => '1273',
								'name_ar' => 'سيدي سليمان',
								'name' => 'Sidi Slimane',
							),
						),
					),
					'3803' => array(
						'id' => '3803',
						'code' => '3803',
						'name_ar' => 'ثنية الاحد',
						'name' => 'Theniet El Had',
						'communes' => array(
							'1271' => array(
								'id' => '1271',
								'code' => '1271',
								'name_ar' => 'سيدي بوتوشنت',
								'name' => 'Sidi Boutouchent',
							),
							'1275' => array(
								'id' => '1275',
								'code' => '1275',
								'name_ar' => 'ثنية الاحد',
								'name' => 'Theniet El Had',
							),
						),
					),
					'3804' => array(
						'id' => '3804',
						'code' => '3804',
						'name_ar' => 'الأزهرية',
						'name' => 'Lazharia',
						'communes' => array(
							'1261' => array(
								'id' => '1261',
								'code' => '1261',
								'name_ar' => 'بوقائد',
								'name' => 'Boucaid',
							),
							'1263' => array(
								'id' => '1263',
								'code' => '1263',
								'name_ar' => 'الأربعاء',
								'name' => 'Larbaa',
							),
							'1266' => array(
								'id' => '1266',
								'code' => '1266',
								'name_ar' => 'الأزهرية',
								'name' => 'Lazharia',
							),
						),
					),
					'3806' => array(
						'id' => '3806',
						'code' => '3806',
						'name_ar' => 'لرجام',
						'name' => 'Lardjem',
						'communes' => array(
							'1264' => array(
								'id' => '1264',
								'code' => '1264',
								'name_ar' => 'لرجام',
								'name' => 'Lardjem',
							),
							'1268' => array(
								'id' => '1268',
								'code' => '1268',
								'name_ar' => 'الملعب',
								'name' => 'Melaab',
							),
							'1272' => array(
								'id' => '1272',
								'code' => '1272',
								'name_ar' => 'سيدي العنتري',
								'name' => 'Sidi Lantri',
							),
							'1274' => array(
								'id' => '1274',
								'code' => '1274',
								'name_ar' => 'تملاحت',
								'name' => 'Tamellahet',
							),
						),
					),
					'3809' => array(
						'id' => '3809',
						'code' => '3809',
						'name_ar' => 'برج الأمير عبد القادر',
						'name' => 'Bordj Emir Abdelkader',
						'communes' => array(
							'1260' => array(
								'id' => '1260',
								'code' => '1260',
								'name_ar' => 'برج الأمير عبد القادر',
								'name' => 'Bordj El Emir Abdelkader',
							),
							'1277' => array(
								'id' => '1277',
								'code' => '1277',
								'name_ar' => 'اليوسفية',
								'name' => 'Youssoufia',
							),
						),
					),
					'3811' => array(
						'id' => '3811',
						'code' => '3811',
						'name_ar' => 'خميستي',
						'name' => 'Khemisti',
						'communes' => array(
							'1262' => array(
								'id' => '1262',
								'code' => '1262',
								'name_ar' => 'خميستي',
								'name' => 'Khemisti',
							),
							'1265' => array(
								'id' => '1265',
								'code' => '1265',
								'name_ar' => 'العيون',
								'name' => 'Layoune',
							),
						),
					),
					'3813' => array(
						'id' => '3813',
						'code' => '3813',
						'name_ar' => 'عماري',
						'name' => 'Ammari',
						'communes' => array(
							'1256' => array(
								'id' => '1256',
								'code' => '1256',
								'name_ar' => 'عماري',
								'name' => 'Ammari',
							),
							'1267' => array(
								'id' => '1267',
								'code' => '1267',
								'name_ar' => 'المعاصم',
								'name' => 'Maacem',
							),
							'1270' => array(
								'id' => '1270',
								'code' => '1270',
								'name_ar' => 'سيدي عابد',
								'name' => 'Sidi Abed',
							),
						),
					),
				),
			),
			'39' => array(
				'id' => '39',
				'code' => '39',
				'name_ar' => 'الوادي',
				'name' => 'El Oued',
				'dairas' => array(
					'3901' => array(
						'id' => '3901',
						'code' => '3901',
						'name_ar' => 'الوادي',
						'name' => 'El Oued',
						'communes' => array(
							'1285' => array(
								'id' => '1285',
								'code' => '1285',
								'name_ar' => 'الوادي',
								'name' => 'El-Oued',
							),
							'1290' => array(
								'id' => '1290',
								'code' => '1290',
								'name_ar' => 'كوينين',
								'name' => 'Kouinine',
							),
						),
					),
					'3902' => array(
						'id' => '3902',
						'code' => '3902',
						'name_ar' => 'الرباح',
						'name' => 'Robbah',
						'communes' => array(
							'1283' => array(
								'id' => '1283',
								'code' => '1283',
								'name_ar' => 'العقلة',
								'name' => 'El Ogla',
							),
							'1294' => array(
								'id' => '1294',
								'code' => '1294',
								'name_ar' => 'النخلة',
								'name' => 'Nakhla',
							),
							'1299' => array(
								'id' => '1299',
								'code' => '1299',
								'name_ar' => 'الرباح',
								'name' => 'Robbah',
							),
						),
					),
					'3904' => array(
						'id' => '3904',
						'code' => '3904',
						'name_ar' => 'البياضة',
						'name' => 'Bayadha',
						'communes' => array(
							'1278' => array(
								'id' => '1278',
								'code' => '1278',
								'name_ar' => 'البياضة',
								'name' => 'Bayadha',
							),
						),
					),
					'3906' => array(
						'id' => '3906',
						'code' => '3906',
						'name_ar' => 'قمار',
						'name' => 'Guemar',
						'communes' => array(
							'1286' => array(
								'id' => '1286',
								'code' => '1286',
								'name_ar' => 'قمار',
								'name' => 'Guemar',
							),
							'1297' => array(
								'id' => '1297',
								'code' => '1297',
								'name_ar' => 'ورماس',
								'name' => 'Ourmes',
							),
							'1304' => array(
								'id' => '1304',
								'code' => '1304',
								'name_ar' => 'تغزوت',
								'name' => 'Taghzout',
							),
						),
					),
					'3908' => array(
						'id' => '3908',
						'code' => '3908',
						'name_ar' => 'الرقيبة',
						'name' => 'Reguiba',
						'communes' => array(
							'1287' => array(
								'id' => '1287',
								'code' => '1287',
								'name_ar' => 'الحمراية',
								'name' => 'Hamraia',
							),
							'1298' => array(
								'id' => '1298',
								'code' => '1298',
								'name_ar' => 'الرقيبة',
								'name' => 'Reguiba',
							),
						),
					),
					'3911' => array(
						'id' => '3911',
						'code' => '3911',
						'name_ar' => 'الدبيلة',
						'name' => 'Debila',
						'communes' => array(
							'1280' => array(
								'id' => '1280',
								'code' => '1280',
								'name_ar' => 'الدبيلة',
								'name' => 'Debila',
							),
							'1288' => array(
								'id' => '1288',
								'code' => '1288',
								'name_ar' => 'حساني عبد الكريم',
								'name' => 'Hassani Abdelkrim',
							),
						),
					),
					'3913' => array(
						'id' => '3913',
						'code' => '3913',
						'name_ar' => 'حاسي خليفة',
						'name' => 'Hassi Khalifa',
						'communes' => array(
							'1289' => array(
								'id' => '1289',
								'code' => '1289',
								'name_ar' => 'حاسي خليفة',
								'name' => 'Hassi Khalifa',
							),
							'1307' => array(
								'id' => '1307',
								'code' => '1307',
								'name_ar' => 'الطريفاوي',
								'name' => 'Trifaoui',
							),
						),
					),
					'3914' => array(
						'id' => '3914',
						'code' => '3914',
						'name_ar' => 'الطالب العربي',
						'name' => 'Taleb Larbi',
						'communes' => array(
							'1279' => array(
								'id' => '1279',
								'code' => '1279',
								'name_ar' => 'بن  قشة',
								'name' => 'Ben Guecha',
							),
							'1282' => array(
								'id' => '1282',
								'code' => '1282',
								'name_ar' => 'دوار الماء',
								'name' => 'Douar El Maa',
							),
							'1305' => array(
								'id' => '1305',
								'code' => '1305',
								'name_ar' => 'الطالب العربي',
								'name' => 'Taleb Larbi',
							),
						),
					),
					'3918' => array(
						'id' => '3918',
						'code' => '3918',
						'name_ar' => 'المقرن',
						'name' => 'Magrane',
						'communes' => array(
							'1291' => array(
								'id' => '1291',
								'code' => '1291',
								'name_ar' => 'المقرن',
								'name' => 'Magrane',
							),
							'1301' => array(
								'id' => '1301',
								'code' => '1301',
								'name_ar' => 'سيدي عون',
								'name' => 'Sidi Aoun',
							),
						),
					),
					'3926' => array(
						'id' => '3926',
						'code' => '3926',
						'name_ar' => 'اميه وانسة',
						'name' => 'Mih Ouensa',
						'communes' => array(
							'1292' => array(
								'id' => '1292',
								'code' => '1292',
								'name_ar' => 'اميه وانسة',
								'name' => 'Mih Ouansa',
							),
							'1295' => array(
								'id' => '1295',
								'code' => '1295',
								'name_ar' => 'وادي العلندة',
								'name' => 'Oued El Alenda',
							),
						),
					),
					'3927' => array(
						'id' => '3927',
						'code' => '3927',
						'name_ar' => 'المغير',
						'name' => 'El Meghaier',
						'communes' => array(
							'1284' => array(
								'id' => '1284',
								'code' => '1284',
								'name_ar' => 'المغير',
								'name' => 'El-M\'ghaier',
							),
							'1296' => array(
								'id' => '1296',
								'code' => '1296',
								'name_ar' => 'أم الطيور',
								'name' => 'Oum Touyour',
							),
							'1302' => array(
								'id' => '1302',
								'code' => '1302',
								'name_ar' => 'سيدي خليل',
								'name' => 'Sidi Khelil',
							),
							'1303' => array(
								'id' => '1303',
								'code' => '1303',
								'name_ar' => 'سطيل',
								'name' => 'Still',
							),
						),
					),
					'3928' => array(
						'id' => '3928',
						'code' => '3928',
						'name_ar' => 'جامعة',
						'name' => 'Djamaa',
						'communes' => array(
							'1281' => array(
								'id' => '1281',
								'code' => '1281',
								'name_ar' => 'جامعة',
								'name' => 'Djamaa',
							),
							'1293' => array(
								'id' => '1293',
								'code' => '1293',
								'name_ar' => 'المرارة',
								'name' => 'M\'rara',
							),
							'1300' => array(
								'id' => '1300',
								'code' => '1300',
								'name_ar' => 'سيدي عمران',
								'name' => 'Sidi Amrane',
							),
							'1306' => array(
								'id' => '1306',
								'code' => '1306',
								'name_ar' => 'تندلة',
								'name' => 'Tenedla',
							),
						),
					),
					'392739' => array(
						'id' => '392739',
						'code' => '392739',
						'name_ar' => 'المغير (ولاية منتدبة)',
						'name' => 'El Meghaier (Wilaya Déléguée)',
					),
				),
			),
			'40' => array(
				'id' => '40',
				'code' => '40',
				'name_ar' => 'خنشلة',
				'name' => 'Khenchela',
				'dairas' => array(
					'4001' => array(
						'id' => '4001',
						'code' => '4001',
						'name_ar' => 'خنشلة',
						'name' => 'Khenchela',
						'communes' => array(
							'1320' => array(
								'id' => '1320',
								'code' => '1320',
								'name_ar' => 'خنشلة',
								'name' => 'Khenchela',
							),
						),
					),
					'4003' => array(
						'id' => '4003',
						'code' => '4003',
						'name_ar' => 'قايس',
						'name' => 'Kais',
						'communes' => array(
							'1319' => array(
								'id' => '1319',
								'code' => '1319',
								'name_ar' => 'قايس',
								'name' => 'Kais',
							),
							'1325' => array(
								'id' => '1325',
								'code' => '1325',
								'name_ar' => 'الرميلة',
								'name' => 'Remila',
							),
							'1327' => array(
								'id' => '1327',
								'code' => '1327',
								'name_ar' => 'تاوزيانت',
								'name' => 'Taouzianat',
							),
						),
					),
					'4005' => array(
						'id' => '4005',
						'code' => '4005',
						'name_ar' => 'الحامة',
						'name' => 'El Hamma',
						'communes' => array(
							'1310' => array(
								'id' => '1310',
								'code' => '1310',
								'name_ar' => 'بغاي',
								'name' => 'Baghai',
							),
							'1315' => array(
								'id' => '1315',
								'code' => '1315',
								'name_ar' => 'الحامة',
								'name' => 'El Hamma',
							),
							'1318' => array(
								'id' => '1318',
								'code' => '1318',
								'name_ar' => 'انسيغة',
								'name' => 'Ensigha',
							),
							'1326' => array(
								'id' => '1326',
								'code' => '1326',
								'name_ar' => 'طامزة',
								'name' => 'Tamza',
							),
						),
					),
					'4006' => array(
						'id' => '4006',
						'code' => '4006',
						'name_ar' => 'عين الطويلة',
						'name' => 'Ain Touila',
						'communes' => array(
							'1308' => array(
								'id' => '1308',
								'code' => '1308',
								'name_ar' => 'عين الطويلة',
								'name' => 'Ain Touila',
							),
							'1323' => array(
								'id' => '1323',
								'code' => '1323',
								'name_ar' => 'متوسة',
								'name' => 'M\'toussa',
							),
						),
					),
					'4008' => array(
						'id' => '4008',
						'code' => '4008',
						'name_ar' => 'بوحمامة',
						'name' => 'Bouhmama',
						'communes' => array(
							'1311' => array(
								'id' => '1311',
								'code' => '1311',
								'name_ar' => 'بوحمامة',
								'name' => 'Bouhmama',
							),
							'1313' => array(
								'id' => '1313',
								'code' => '1313',
								'name_ar' => 'شلية',
								'name' => 'Chelia',
							),
							'1322' => array(
								'id' => '1322',
								'code' => '1322',
								'name_ar' => 'مصارة',
								'name' => 'M\'sara',
							),
							'1328' => array(
								'id' => '1328',
								'code' => '1328',
								'name_ar' => 'يابوس',
								'name' => 'Yabous',
							),
						),
					),
					'4011' => array(
						'id' => '4011',
						'code' => '4011',
						'name_ar' => 'ششار',
						'name' => 'Chechar',
						'communes' => array(
							'1312' => array(
								'id' => '1312',
								'code' => '1312',
								'name_ar' => 'ششار',
								'name' => 'Chechar',
							),
							'1314' => array(
								'id' => '1314',
								'code' => '1314',
								'name_ar' => 'جلال',
								'name' => 'Djellal',
							),
							'1317' => array(
								'id' => '1317',
								'code' => '1317',
								'name_ar' => 'الولجة',
								'name' => 'El Oueldja',
							),
							'1321' => array(
								'id' => '1321',
								'code' => '1321',
								'name_ar' => 'خيران',
								'name' => 'Khirane',
							),
						),
					),
					'4013' => array(
						'id' => '4013',
						'code' => '4013',
						'name_ar' => 'بابار',
						'name' => 'Babar',
						'communes' => array(
							'1309' => array(
								'id' => '1309',
								'code' => '1309',
								'name_ar' => 'بابار',
								'name' => 'Babar',
							),
						),
					),
					'4016' => array(
						'id' => '4016',
						'code' => '4016',
						'name_ar' => 'أولاد رشاش',
						'name' => 'Ouled Rechache',
						'communes' => array(
							'1316' => array(
								'id' => '1316',
								'code' => '1316',
								'name_ar' => 'المحمل',
								'name' => 'El Mahmal',
							),
							'1324' => array(
								'id' => '1324',
								'code' => '1324',
								'name_ar' => 'أولاد رشاش',
								'name' => 'Ouled Rechache',
							),
						),
					),
				),
			),
			'41' => array(
				'id' => '41',
				'code' => '41',
				'name_ar' => 'سوق أهراس',
				'name' => 'Souk Ahras',
				'dairas' => array(
					'4101' => array(
						'id' => '4101',
						'code' => '4101',
						'name_ar' => 'سوق أهراس',
						'name' => 'Souk Ahras',
						'communes' => array(
							'1349' => array(
								'id' => '1349',
								'code' => '1349',
								'name_ar' => 'سوق أهراس',
								'name' => 'Souk Ahras',
							),
						),
					),
					'4102' => array(
						'id' => '4102',
						'code' => '4102',
						'name_ar' => 'سدراتة',
						'name' => 'Sedrata',
						'communes' => array(
							'1329' => array(
								'id' => '1329',
								'code' => '1329',
								'name_ar' => 'عين سلطان',
								'name' => 'Ain Soltane',
							),
							'1336' => array(
								'id' => '1336',
								'code' => '1336',
								'name_ar' => 'خميسة',
								'name' => 'Khemissa',
							),
							'1347' => array(
								'id' => '1347',
								'code' => '1347',
								'name_ar' => 'سدراتة',
								'name' => 'Sedrata',
							),
						),
					),
					'4104' => array(
						'id' => '4104',
						'code' => '4104',
						'name_ar' => 'المشروحة',
						'name' => 'Mechroha',
						'communes' => array(
							'1334' => array(
								'id' => '1334',
								'code' => '1334',
								'name_ar' => 'الحنانشة',
								'name' => 'Hanencha',
							),
							'1337' => array(
								'id' => '1337',
								'code' => '1337',
								'name_ar' => 'المشروحة',
								'name' => 'Machroha',
							),
						),
					),
					'4105' => array(
						'id' => '4105',
						'code' => '4105',
						'name_ar' => 'أولاد إدريس',
						'name' => 'Ouled Driss',
						'communes' => array(
							'1330' => array(
								'id' => '1330',
								'code' => '1330',
								'name_ar' => 'عين الزانة',
								'name' => 'Ain Zana',
							),
							'1341' => array(
								'id' => '1341',
								'code' => '1341',
								'name_ar' => 'أولاد إدريس',
								'name' => 'Ouled Driss',
							),
						),
					),
					'4108' => array(
						'id' => '4108',
						'code' => '4108',
						'name_ar' => 'تاورة',
						'name' => 'Taoura',
						'communes' => array(
							'1332' => array(
								'id' => '1332',
								'code' => '1332',
								'name_ar' => 'الدريعة',
								'name' => 'Drea',
							),
							'1350' => array(
								'id' => '1350',
								'code' => '1350',
								'name_ar' => 'تاورة',
								'name' => 'Taoura',
							),
							'1353' => array(
								'id' => '1353',
								'code' => '1353',
								'name_ar' => 'الزعرورية',
								'name' => 'Zaarouria',
							),
						),
					),
					'4110' => array(
						'id' => '4110',
						'code' => '4110',
						'name_ar' => 'الحدادة',
						'name' => 'Haddada',
						'communes' => array(
							'1333' => array(
								'id' => '1333',
								'code' => '1333',
								'name_ar' => 'الحدادة',
								'name' => 'Haddada',
							),
							'1335' => array(
								'id' => '1335',
								'code' => '1335',
								'name_ar' => 'الخضارة',
								'name' => 'Khedara',
							),
							'1342' => array(
								'id' => '1342',
								'code' => '1342',
								'name_ar' => 'أولاد مومن',
								'name' => 'Ouled Moumen',
							),
						),
					),
					'4112' => array(
						'id' => '4112',
						'code' => '4112',
						'name_ar' => 'المراهنة',
						'name' => 'Merahna',
						'communes' => array(
							'1339' => array(
								'id' => '1339',
								'code' => '1339',
								'name_ar' => 'المراهنة',
								'name' => 'Merahna',
							),
							'1344' => array(
								'id' => '1344',
								'code' => '1344',
								'name_ar' => 'ويلان',
								'name' => 'Ouillen',
							),
							'1348' => array(
								'id' => '1348',
								'code' => '1348',
								'name_ar' => 'سيدي فرج',
								'name' => 'Sidi Fredj',
							),
						),
					),
					'4114' => array(
						'id' => '4114',
						'code' => '4114',
						'name_ar' => 'بئر بوحوش',
						'name' => 'Bir Bouhouche',
						'communes' => array(
							'1331' => array(
								'id' => '1331',
								'code' => '1331',
								'name_ar' => 'بئر بوحوش',
								'name' => 'Bir Bouhouche',
							),
							'1346' => array(
								'id' => '1346',
								'code' => '1346',
								'name_ar' => 'سافل الويدان',
								'name' => 'Safel El Ouiden',
							),
							'1354' => array(
								'id' => '1354',
								'code' => '1354',
								'name_ar' => 'الزوابي',
								'name' => 'Zouabi',
							),
						),
					),
					'4115' => array(
						'id' => '4115',
						'code' => '4115',
						'name_ar' => 'مداوروش',
						'name' => 'M\'daourouche',
						'communes' => array(
							'1338' => array(
								'id' => '1338',
								'code' => '1338',
								'name_ar' => 'مداوروش',
								'name' => 'M\'daourouche',
							),
							'1345' => array(
								'id' => '1345',
								'code' => '1345',
								'name_ar' => 'الراقوبة',
								'name' => 'Ragouba',
							),
							'1352' => array(
								'id' => '1352',
								'code' => '1352',
								'name_ar' => 'تيفاش',
								'name' => 'Tiffech',
							),
						),
					),
					'4116' => array(
						'id' => '4116',
						'code' => '4116',
						'name_ar' => 'أم العظايم',
						'name' => 'Oum El Adhaim',
						'communes' => array(
							'1340' => array(
								'id' => '1340',
								'code' => '1340',
								'name_ar' => 'وادي الكبريت',
								'name' => 'Oued Kebrit',
							),
							'1343' => array(
								'id' => '1343',
								'code' => '1343',
								'name_ar' => 'أم العظايم',
								'name' => 'Oum El Adhaim',
							),
							'1351' => array(
								'id' => '1351',
								'code' => '1351',
								'name_ar' => 'ترقالت',
								'name' => 'Terraguelt',
							),
						),
					),
				),
			),
			'42' => array(
				'id' => '42',
				'code' => '42',
				'name_ar' => 'تيبازة',
				'name' => 'Tipaza',
				'dairas' => array(
					'4201' => array(
						'id' => '4201',
						'code' => '4201',
						'name_ar' => 'تيبازة',
						'name' => 'Tipaza',
						'communes' => array(
							'1382' => array(
								'id' => '1382',
								'code' => '1382',
								'name_ar' => 'تيبازة',
								'name' => 'Tipaza',
							),
						),
					),
					'4208' => array(
						'id' => '4208',
						'code' => '4208',
						'name_ar' => 'حجوط',
						'name' => 'Hadjout',
						'communes' => array(
							'1369' => array(
								'id' => '1369',
								'code' => '1369',
								'name_ar' => 'حجوط',
								'name' => 'Hadjout',
							),
							'1375' => array(
								'id' => '1375',
								'code' => '1375',
								'name_ar' => 'مراد',
								'name' => 'Merad',
							),
						),
					),
					'4209' => array(
						'id' => '4209',
						'code' => '4209',
						'name_ar' => 'سيدي أعمر',
						'name' => 'Sidi Amar',
						'communes' => array(
							'1374' => array(
								'id' => '1374',
								'code' => '1374',
								'name_ar' => 'مناصر',
								'name' => 'Menaceur',
							),
							'1377' => array(
								'id' => '1377',
								'code' => '1377',
								'name_ar' => 'الناظور',
								'name' => 'Nador',
							),
							'1381' => array(
								'id' => '1381',
								'code' => '1381',
								'name_ar' => 'سيدي عامر',
								'name' => 'Sidi-Amar',
							),
						),
					),
					'4210' => array(
						'id' => '4210',
						'code' => '4210',
						'name_ar' => 'قوراية',
						'name' => 'Gouraya',
						'communes' => array(
							'1355' => array(
								'id' => '1355',
								'code' => '1355',
								'name_ar' => 'أغبال',
								'name' => 'Aghbal',
							),
							'1368' => array(
								'id' => '1368',
								'code' => '1368',
								'name_ar' => 'قوراية',
								'name' => 'Gouraya',
							),
							'1376' => array(
								'id' => '1376',
								'code' => '1376',
								'name_ar' => 'مسلمون',
								'name' => 'Messelmoun',
							),
						),
					),
					'4214' => array(
						'id' => '4214',
						'code' => '4214',
						'name_ar' => 'شرشال',
						'name' => 'Cherchell',
						'communes' => array(
							'1364' => array(
								'id' => '1364',
								'code' => '1364',
								'name_ar' => 'شرشال',
								'name' => 'Cherchell',
							),
							'1370' => array(
								'id' => '1370',
								'code' => '1370',
								'name_ar' => 'حجرة النص',
								'name' => 'Hadjret Ennous',
							),
							'1378' => array(
								'id' => '1378',
								'code' => '1378',
								'name_ar' => 'سيدي غيلاس',
								'name' => 'Sidi Ghiles',
							),
							'1380' => array(
								'id' => '1380',
								'code' => '1380',
								'name_ar' => 'سيدي سميان',
								'name' => 'Sidi Semiane',
							),
						),
					),
					'4215' => array(
						'id' => '4215',
						'code' => '4215',
						'name_ar' => 'الداموس',
						'name' => 'Damous',
						'communes' => array(
							'1359' => array(
								'id' => '1359',
								'code' => '1359',
								'name_ar' => 'بني ميلك',
								'name' => 'Beni Mileuk',
							),
							'1365' => array(
								'id' => '1365',
								'code' => '1365',
								'name_ar' => 'الداموس',
								'name' => 'Damous',
							),
							'1373' => array(
								'id' => '1373',
								'code' => '1373',
								'name_ar' => 'الأرهاط',
								'name' => 'Larhat',
							),
						),
					),
					'4217' => array(
						'id' => '4217',
						'code' => '4217',
						'name_ar' => 'فوكة',
						'name' => 'Fouka',
						'communes' => array(
							'1366' => array(
								'id' => '1366',
								'code' => '1366',
								'name_ar' => 'دواودة',
								'name' => 'Douaouda',
							),
							'1367' => array(
								'id' => '1367',
								'code' => '1367',
								'name_ar' => 'فوكة',
								'name' => 'Fouka',
							),
						),
					),
					'4218' => array(
						'id' => '4218',
						'code' => '4218',
						'name_ar' => 'بواسماعيل',
						'name' => 'Bou Ismail',
						'communes' => array(
							'1357' => array(
								'id' => '1357',
								'code' => '1357',
								'name_ar' => 'عين تاقورايت',
								'name' => 'Ain Tagourait',
							),
							'1360' => array(
								'id' => '1360',
								'code' => '1360',
								'name_ar' => 'بوهارون',
								'name' => 'Bou Haroun',
							),
							'1361' => array(
								'id' => '1361',
								'code' => '1361',
								'name_ar' => 'بواسماعيل',
								'name' => 'Bou Ismail',
							),
							'1371' => array(
								'id' => '1371',
								'code' => '1371',
								'name_ar' => 'خميستي',
								'name' => 'Khemisti',
							),
						),
					),
					'4219' => array(
						'id' => '4219',
						'code' => '4219',
						'name_ar' => 'أحمر العين',
						'name' => 'Ahmar El Ain',
						'communes' => array(
							'1356' => array(
								'id' => '1356',
								'code' => '1356',
								'name_ar' => 'أحمر العين',
								'name' => 'Ahmer El Ain',
							),
							'1362' => array(
								'id' => '1362',
								'code' => '1362',
								'name_ar' => 'بورقيقة',
								'name' => 'Bourkika',
							),
							'1379' => array(
								'id' => '1379',
								'code' => '1379',
								'name_ar' => 'سيدي راشد',
								'name' => 'Sidi Rached',
							),
						),
					),
					'4224' => array(
						'id' => '4224',
						'code' => '4224',
						'name_ar' => 'القليعة',
						'name' => 'Kolea',
						'communes' => array(
							'1358' => array(
								'id' => '1358',
								'code' => '1358',
								'name_ar' => 'الحطاطبة',
								'name' => 'Attatba',
							),
							'1363' => array(
								'id' => '1363',
								'code' => '1363',
								'name_ar' => 'الشعيبة',
								'name' => 'Chaiba',
							),
							'1372' => array(
								'id' => '1372',
								'code' => '1372',
								'name_ar' => 'القليعة',
								'name' => 'Kolea',
							),
						),
					),
				),
			),
			'43' => array(
				'id' => '43',
				'code' => '43',
				'name_ar' => 'ميلة',
				'name' => 'Mila',
				'dairas' => array(
					'4301' => array(
						'id' => '4301',
						'code' => '4301',
						'name_ar' => 'ميلة',
						'name' => 'Mila',
						'communes' => array(
							'1386' => array(
								'id' => '1386',
								'code' => '1386',
								'name_ar' => 'عين التين',
								'name' => 'Ain Tine',
							),
							'1398' => array(
								'id' => '1398',
								'code' => '1398',
								'name_ar' => 'ميلة',
								'name' => 'Mila',
							),
							'1405' => array(
								'id' => '1405',
								'code' => '1405',
								'name_ar' => 'سيدي خليفة',
								'name' => 'Sidi Khelifa',
							),
						),
					),
					'4302' => array(
						'id' => '4302',
						'code' => '4302',
						'name_ar' => 'فرجيوة',
						'name' => 'Ferdjioua',
						'communes' => array(
							'1395' => array(
								'id' => '1395',
								'code' => '1395',
								'name_ar' => 'فرجيوة',
								'name' => 'Ferdjioua',
							),
							'1413' => array(
								'id' => '1413',
								'code' => '1413',
								'name_ar' => 'يحي بني قشة',
								'name' => 'Yahia Beniguecha',
							),
						),
					),
					'4303' => array(
						'id' => '4303',
						'code' => '4303',
						'name_ar' => 'شلغوم العيد',
						'name' => 'Chelghoum Laid',
						'communes' => array(
							'1385' => array(
								'id' => '1385',
								'code' => '1385',
								'name_ar' => 'عين الملوك',
								'name' => 'Ain Mellouk',
							),
							'1390' => array(
								'id' => '1390',
								'code' => '1390',
								'name_ar' => 'شلغوم العيد',
								'name' => 'Chelghoum Laid',
							),
							'1400' => array(
								'id' => '1400',
								'code' => '1400',
								'name_ar' => 'وادي العثمانية',
								'name' => 'Oued Athmenia',
							),
						),
					),
					'4306' => array(
						'id' => '4306',
						'code' => '4306',
						'name_ar' => 'التلاغمة',
						'name' => 'Teleghma',
						'communes' => array(
							'1394' => array(
								'id' => '1394',
								'code' => '1394',
								'name_ar' => 'مشيرة',
								'name' => 'El Mechira',
							),
							'1402' => array(
								'id' => '1402',
								'code' => '1402',
								'name_ar' => 'وادي سقان',
								'name' => 'Oued Seguen',
							),
							'1409' => array(
								'id' => '1409',
								'code' => '1409',
								'name_ar' => 'التلاغمة',
								'name' => 'Teleghma',
							),
						),
					),
					'4308' => array(
						'id' => '4308',
						'code' => '4308',
						'name_ar' => 'تاجنانت',
						'name' => 'Tadjenanet',
						'communes' => array(
							'1388' => array(
								'id' => '1388',
								'code' => '1388',
								'name_ar' => 'بن يحي عبد الرحمن',
								'name' => 'Benyahia Abderrahmane',
							),
							'1403' => array(
								'id' => '1403',
								'code' => '1403',
								'name_ar' => 'أولاد اخلوف',
								'name' => 'Ouled Khalouf',
							),
							'1407' => array(
								'id' => '1407',
								'code' => '1407',
								'name_ar' => 'تاجنانت',
								'name' => 'Tadjenanet',
							),
						),
					),
					'4310' => array(
						'id' => '4310',
						'code' => '4310',
						'name_ar' => 'وادي النجاء',
						'name' => 'Oued Endja',
						'communes' => array(
							'1383' => array(
								'id' => '1383',
								'code' => '1383',
								'name_ar' => 'أحمد راشدي',
								'name' => 'Ahmed Rachedi',
							),
							'1401' => array(
								'id' => '1401',
								'code' => '1401',
								'name_ar' => 'وادي النجاء',
								'name' => 'Oued Endja',
							),
							'1414' => array(
								'id' => '1414',
								'code' => '1414',
								'name_ar' => 'زغاية',
								'name' => 'Zeghaia',
							),
						),
					),
					'4314' => array(
						'id' => '4314',
						'code' => '4314',
						'name_ar' => 'بوحاتم',
						'name' => 'Bouhatem',
						'communes' => array(
							'1389' => array(
								'id' => '1389',
								'code' => '1389',
								'name_ar' => 'بوحاتم',
								'name' => 'Bouhatem',
							),
							'1392' => array(
								'id' => '1392',
								'code' => '1392',
								'name_ar' => 'دراحي بوصلاح',
								'name' => 'Derrahi Bousselah',
							),
						),
					),
					'4315' => array(
						'id' => '4315',
						'code' => '4315',
						'name_ar' => 'الرواشد',
						'name' => 'Rouached',
						'communes' => array(
							'1404' => array(
								'id' => '1404',
								'code' => '1404',
								'name_ar' => 'الرواشد',
								'name' => 'Rouached',
							),
							'1412' => array(
								'id' => '1412',
								'code' => '1412',
								'name_ar' => 'تيبرقنت',
								'name' => 'Tiberguent',
							),
						),
					),
					'4317' => array(
						'id' => '4317',
						'code' => '4317',
						'name_ar' => 'القرارم قوقة',
						'name' => 'Grarem Gouga',
						'communes' => array(
							'1396' => array(
								'id' => '1396',
								'code' => '1396',
								'name_ar' => 'القرارم قوقة',
								'name' => 'Grarem Gouga',
							),
							'1397' => array(
								'id' => '1397',
								'code' => '1397',
								'name_ar' => 'حمالة',
								'name' => 'Hamala',
							),
						),
					),
					'4318' => array(
						'id' => '4318',
						'code' => '4318',
						'name_ar' => 'سيدي مروان',
						'name' => 'Sidi Merouane',
						'communes' => array(
							'1391' => array(
								'id' => '1391',
								'code' => '1391',
								'name_ar' => 'الشيقارة',
								'name' => 'Chigara',
							),
							'1406' => array(
								'id' => '1406',
								'code' => '1406',
								'name_ar' => 'سيدي مروان',
								'name' => 'Sidi Merouane',
							),
						),
					),
					'4319' => array(
						'id' => '4319',
						'code' => '4319',
						'name_ar' => 'تسدان حدادة',
						'name' => 'Tassadane Haddada',
						'communes' => array(
							'1399' => array(
								'id' => '1399',
								'code' => '1399',
								'name_ar' => 'مينار زارزة',
								'name' => 'Minar Zarza',
							),
							'1408' => array(
								'id' => '1408',
								'code' => '1408',
								'name_ar' => 'تسدان حدادة',
								'name' => 'Tassadane Haddada',
							),
						),
					),
					'4323' => array(
						'id' => '4323',
						'code' => '4323',
						'name_ar' => 'ترعي باينان',
						'name' => 'Terrai Bainen',
						'communes' => array(
							'1387' => array(
								'id' => '1387',
								'code' => '1387',
								'name_ar' => 'اعميرة اراس',
								'name' => 'Amira Arres',
							),
							'1410' => array(
								'id' => '1410',
								'code' => '1410',
								'name_ar' => 'ترعي باينان',
								'name' => 'Terrai Bainen',
							),
							'1411' => array(
								'id' => '1411',
								'code' => '1411',
								'name_ar' => 'تسالة لمطاعي',
								'name' => 'Tassala Lematai',
							),
						),
					),
					'4330' => array(
						'id' => '4330',
						'code' => '4330',
						'name_ar' => 'عين البيضاء أحريش',
						'name' => 'Ain Beida Harriche',
						'communes' => array(
							'1384' => array(
								'id' => '1384',
								'code' => '1384',
								'name_ar' => 'عين البيضاء أحريش',
								'name' => 'Ain Beida Harriche',
							),
							'1393' => array(
								'id' => '1393',
								'code' => '1393',
								'name_ar' => 'العياضي برباس',
								'name' => 'El Ayadi Barbes',
							),
						),
					),
				),
			),
			'44' => array(
				'id' => '44',
				'code' => '44',
				'name_ar' => 'عين الدفلة',
				'name' => 'Aïn Defla',
				'dairas' => array(
					'4401' => array(
						'id' => '4401',
						'code' => '4401',
						'name_ar' => 'عين الدفلى',
						'name' => 'Ain Defla',
						'communes' => array(
							'1417' => array(
								'id' => '1417',
								'code' => '1417',
								'name_ar' => 'عين الدفلى',
								'name' => 'Ain-Defla',
							),
						),
					),
					'4402' => array(
						'id' => '4402',
						'code' => '4402',
						'name_ar' => 'مليانة',
						'name' => 'Miliana',
						'communes' => array(
							'1425' => array(
								'id' => '1425',
								'code' => '1425',
								'name_ar' => 'بن علال',
								'name' => 'Ben Allal',
							),
							'1442' => array(
								'id' => '1442',
								'code' => '1442',
								'name_ar' => 'مليانة',
								'name' => 'Miliana',
							),
						),
					),
					'4403' => array(
						'id' => '4403',
						'code' => '4403',
						'name_ar' => 'بومدفع',
						'name' => 'Boumedfaa',
						'communes' => array(
							'1428' => array(
								'id' => '1428',
								'code' => '1428',
								'name_ar' => 'بومدفع',
								'name' => 'Boumedfaa',
							),
							'1439' => array(
								'id' => '1439',
								'code' => '1439',
								'name_ar' => 'الحسينية',
								'name' => 'Hoceinia',
							),
						),
					),
					'4404' => array(
						'id' => '4404',
						'code' => '4404',
						'name_ar' => 'خميس',
						'name' => 'Khemis',
						'communes' => array(
							'1440' => array(
								'id' => '1440',
								'code' => '1440',
								'name_ar' => 'خميس مليانة',
								'name' => 'Khemis-Miliana',
							),
							'1446' => array(
								'id' => '1446',
								'code' => '1446',
								'name_ar' => 'سيدي الأخضر',
								'name' => 'Sidi-Lakhdar',
							),
						),
					),
					'4405' => array(
						'id' => '4405',
						'code' => '4405',
						'name_ar' => 'حمام ريغة',
						'name' => 'Hammam Righa',
						'communes' => array(
							'1415' => array(
								'id' => '1415',
								'code' => '1415',
								'name_ar' => 'عين البنيان',
								'name' => 'Ain-Benian',
							),
							'1420' => array(
								'id' => '1420',
								'code' => '1420',
								'name_ar' => 'عين التركي',
								'name' => 'Ain-Torki',
							),
							'1437' => array(
								'id' => '1437',
								'code' => '1437',
								'name_ar' => 'حمام ريغة',
								'name' => 'Hammam-Righa',
							),
						),
					),
					'4407' => array(
						'id' => '4407',
						'code' => '4407',
						'name_ar' => 'جليدة',
						'name' => 'Djelida',
						'communes' => array(
							'1429' => array(
								'id' => '1429',
								'code' => '1429',
								'name_ar' => 'بوراشد',
								'name' => 'Bourached',
							),
							'1430' => array(
								'id' => '1430',
								'code' => '1430',
								'name_ar' => 'جليدة',
								'name' => 'Djelida',
							),
							'1431' => array(
								'id' => '1431',
								'code' => '1431',
								'name_ar' => 'جمعة أولاد الشيخ',
								'name' => 'Djemaa Ouled Cheikh',
							),
						),
					),
					'4408' => array(
						'id' => '4408',
						'code' => '4408',
						'name_ar' => 'العامرة',
						'name' => 'El Amra',
						'communes' => array(
							'1421' => array(
								'id' => '1421',
								'code' => '1421',
								'name_ar' => 'عريب',
								'name' => 'Arib',
							),
							'1434' => array(
								'id' => '1434',
								'code' => '1434',
								'name_ar' => 'العامرة',
								'name' => 'El-Amra',
							),
							'1441' => array(
								'id' => '1441',
								'code' => '1441',
								'name_ar' => 'المخاطرية',
								'name' => 'Mekhatria',
							),
						),
					),
					'4410' => array(
						'id' => '4410',
						'code' => '4410',
						'name_ar' => 'العطاف',
						'name' => 'El Attaf',
						'communes' => array(
							'1435' => array(
								'id' => '1435',
								'code' => '1435',
								'name_ar' => 'العطاف',
								'name' => 'El-Attaf',
							),
							'1449' => array(
								'id' => '1449',
								'code' => '1449',
								'name_ar' => 'تبركانين',
								'name' => 'Tiberkanine',
							),
						),
					),
					'4411' => array(
						'id' => '4411',
						'code' => '4411',
						'name_ar' => 'العبادية',
						'name' => 'El Abadia',
						'communes' => array(
							'1416' => array(
								'id' => '1416',
								'code' => '1416',
								'name_ar' => 'عين بويحيى',
								'name' => 'Ain-Bouyahia',
							),
							'1433' => array(
								'id' => '1433',
								'code' => '1433',
								'name_ar' => 'العبادية',
								'name' => 'El-Abadia',
							),
							'1447' => array(
								'id' => '1447',
								'code' => '1447',
								'name_ar' => 'تاشتة زقاغة',
								'name' => 'Tacheta Zegagha',
							),
						),
					),
					'4412' => array(
						'id' => '4412',
						'code' => '4412',
						'name_ar' => 'جندل',
						'name' => 'Djendel',
						'communes' => array(
							'1422' => array(
								'id' => '1422',
								'code' => '1422',
								'name_ar' => 'بربوش',
								'name' => 'Birbouche',
							),
							'1432' => array(
								'id' => '1432',
								'code' => '1432',
								'name_ar' => 'جندل',
								'name' => 'Djendel',
							),
							'1443' => array(
								'id' => '1443',
								'code' => '1443',
								'name_ar' => 'وادي الشرفاء',
								'name' => 'Oued Chorfa',
							),
						),
					),
					'4414' => array(
						'id' => '4414',
						'code' => '4414',
						'name_ar' => 'عين الاشياخ',
						'name' => 'Ain Lechiakh',
						'communes' => array(
							'1418' => array(
								'id' => '1418',
								'code' => '1418',
								'name_ar' => 'عين الاشياخ',
								'name' => 'Ain-Lechiakh',
							),
							'1419' => array(
								'id' => '1419',
								'code' => '1419',
								'name_ar' => 'عين السلطان',
								'name' => 'Ain-Soltane',
							),
							'1444' => array(
								'id' => '1444',
								'code' => '1444',
								'name_ar' => 'واد الجمعة',
								'name' => 'Oued Djemaa',
							),
						),
					),
					'4416' => array(
						'id' => '4416',
						'code' => '4416',
						'name_ar' => 'الروينة',
						'name' => 'Rouina',
						'communes' => array(
							'1436' => array(
								'id' => '1436',
								'code' => '1436',
								'name_ar' => 'الماين',
								'name' => 'El-Maine',
							),
							'1445' => array(
								'id' => '1445',
								'code' => '1445',
								'name_ar' => 'الروينة',
								'name' => 'Rouina',
							),
							'1450' => array(
								'id' => '1450',
								'code' => '1450',
								'name_ar' => 'زدين',
								'name' => 'Zeddine',
							),
						),
					),
					'4422' => array(
						'id' => '4422',
						'code' => '4422',
						'name_ar' => 'برج الأمير خالد',
						'name' => 'Bordj El Emir Khaled',
						'communes' => array(
							'1426' => array(
								'id' => '1426',
								'code' => '1426',
								'name_ar' => 'بئر ولد خليفة',
								'name' => 'Bir-Ould-Khelifa',
							),
							'1427' => array(
								'id' => '1427',
								'code' => '1427',
								'name_ar' => 'برج الأمير خالد',
								'name' => 'Bordj-Emir-Khaled',
							),
							'1448' => array(
								'id' => '1448',
								'code' => '1448',
								'name_ar' => 'طارق بن زياد',
								'name' => 'Tarik-Ibn-Ziad',
							),
						),
					),
					'4431' => array(
						'id' => '4431',
						'code' => '4431',
						'name_ar' => 'بطحية',
						'name' => 'Bathia',
						'communes' => array(
							'1423' => array(
								'id' => '1423',
								'code' => '1423',
								'name_ar' => 'بطحية',
								'name' => 'Bathia',
							),
							'1424' => array(
								'id' => '1424',
								'code' => '1424',
								'name_ar' => 'بلعاص',
								'name' => 'Belaas',
							),
							'1438' => array(
								'id' => '1438',
								'code' => '1438',
								'name_ar' => 'الحسانية',
								'name' => 'Hassania',
							),
						),
					),
				),
			),
			'45' => array(
				'id' => '45',
				'code' => '45',
				'name_ar' => 'النعامة',
				'name' => 'Naâma',
				'dairas' => array(
					'4501' => array(
						'id' => '4501',
						'code' => '4501',
						'name_ar' => 'النعامة',
						'name' => 'Naama',
						'communes' => array(
							'1460' => array(
								'id' => '1460',
								'code' => '1460',
								'name_ar' => 'النعامة',
								'name' => 'Naama',
							),
						),
					),
					'4502' => array(
						'id' => '4502',
						'code' => '4502',
						'name_ar' => 'المشرية',
						'name' => 'Mecheria',
						'communes' => array(
							'1451' => array(
								'id' => '1451',
								'code' => '1451',
								'name_ar' => 'عين بن خليل',
								'name' => 'Ain Ben Khelil',
							),
							'1455' => array(
								'id' => '1455',
								'code' => '1455',
								'name_ar' => 'البيوض',
								'name' => 'El Biodh',
							),
							'1458' => array(
								'id' => '1458',
								'code' => '1458',
								'name_ar' => 'المشرية',
								'name' => 'Mecheria',
							),
						),
					),
					'4503' => array(
						'id' => '4503',
						'code' => '4503',
						'name_ar' => 'عين الصفراء',
						'name' => 'Ain Sefra',
						'communes' => array(
							'1452' => array(
								'id' => '1452',
								'code' => '1452',
								'name_ar' => 'عين الصفراء',
								'name' => 'Ain Sefra',
							),
							'1462' => array(
								'id' => '1462',
								'code' => '1462',
								'name_ar' => 'تيوت',
								'name' => 'Tiout',
							),
						),
					),
					'4505' => array(
						'id' => '4505',
						'code' => '4505',
						'name_ar' => 'سفيسيفة',
						'name' => 'Sfissifa',
						'communes' => array(
							'1461' => array(
								'id' => '1461',
								'code' => '1461',
								'name_ar' => 'سفيسيفة',
								'name' => 'Sfissifa',
							),
						),
					),
					'4506' => array(
						'id' => '4506',
						'code' => '4506',
						'name_ar' => 'مغرار',
						'name' => 'Moghrar',
						'communes' => array(
							'1454' => array(
								'id' => '1454',
								'code' => '1454',
								'name_ar' => 'جنين بورزق',
								'name' => 'Djenienne Bourezg',
							),
							'1459' => array(
								'id' => '1459',
								'code' => '1459',
								'name_ar' => 'مغرار',
								'name' => 'Moghrar',
							),
						),
					),
					'4507' => array(
						'id' => '4507',
						'code' => '4507',
						'name_ar' => 'عسلة',
						'name' => 'Asla',
						'communes' => array(
							'1453' => array(
								'id' => '1453',
								'code' => '1453',
								'name_ar' => 'عسلة',
								'name' => 'Asla',
							),
						),
					),
					'4510' => array(
						'id' => '4510',
						'code' => '4510',
						'name_ar' => 'مكمن بن عمار',
						'name' => 'Mekmen Ben Amar',
						'communes' => array(
							'1456' => array(
								'id' => '1456',
								'code' => '1456',
								'name_ar' => 'القصدير',
								'name' => 'Kasdir',
							),
							'1457' => array(
								'id' => '1457',
								'code' => '1457',
								'name_ar' => 'مكمن بن عمار',
								'name' => 'Makmen Ben Amar',
							),
						),
					),
				),
			),
			'46' => array(
				'id' => '46',
				'code' => '46',
				'name_ar' => 'عين تيموشنت',
				'name' => 'Aïn Témouchent',
				'dairas' => array(
					'4601' => array(
						'id' => '4601',
						'code' => '4601',
						'name_ar' => 'عين تموشنت',
						'name' => 'Ain Temouchent',
						'communes' => array(
							'1466' => array(
								'id' => '1466',
								'code' => '1466',
								'name_ar' => 'عين تموشنت',
								'name' => 'Ain Temouchent',
							),
							'1485' => array(
								'id' => '1485',
								'code' => '1485',
								'name_ar' => 'سيدي بن عدة',
								'name' => 'Sidi Ben Adda',
							),
						),
					),
					'4604' => array(
						'id' => '4604',
						'code' => '4604',
						'name_ar' => 'حمام بوحجر',
						'name' => 'Hammam Bou Hadjar',
						'communes' => array(
							'1472' => array(
								'id' => '1472',
								'code' => '1472',
								'name_ar' => 'شنتوف',
								'name' => 'Chentouf',
							),
							'1477' => array(
								'id' => '1477',
								'code' => '1477',
								'name_ar' => 'حمام بوحجر',
								'name' => 'Hammam Bou Hadjar',
							),
							'1478' => array(
								'id' => '1478',
								'code' => '1478',
								'name_ar' => 'الحساسنة',
								'name' => 'Hassasna',
							),
							'1480' => array(
								'id' => '1480',
								'code' => '1480',
								'name_ar' => 'وادي برقش',
								'name' => 'Oued Berkeche',
							),
						),
					),
					'4609' => array(
						'id' => '4609',
						'code' => '4609',
						'name_ar' => 'عين الأربعاء',
						'name' => 'Ain Larbaa',
						'communes' => array(
							'1464' => array(
								'id' => '1464',
								'code' => '1464',
								'name_ar' => 'عين الأربعاء',
								'name' => 'Ain El Arbaa',
							),
							'1481' => array(
								'id' => '1481',
								'code' => '1481',
								'name_ar' => 'وادي الصباح',
								'name' => 'Oued Sebbah',
							),
							'1486' => array(
								'id' => '1486',
								'code' => '1486',
								'name_ar' => 'سيدي بومدين',
								'name' => 'Sidi Boumediene',
							),
							'1489' => array(
								'id' => '1489',
								'code' => '1489',
								'name_ar' => 'تامزورة',
								'name' => 'Tamzoura',
							),
						),
					),
					'4614' => array(
						'id' => '4614',
						'code' => '4614',
						'name_ar' => 'المالح',
						'name' => 'El Maleh',
						'communes' => array(
							'1471' => array(
								'id' => '1471',
								'code' => '1471',
								'name_ar' => 'شعبة اللحم',
								'name' => 'Chaabat El Ham',
							),
							'1474' => array(
								'id' => '1474',
								'code' => '1474',
								'name_ar' => 'المالح',
								'name' => 'El Maleh',
							),
							'1483' => array(
								'id' => '1483',
								'code' => '1483',
								'name_ar' => 'أولاد الكيحل',
								'name' => 'Ouled Kihal',
							),
							'1490' => array(
								'id' => '1490',
								'code' => '1490',
								'name_ar' => 'تارقة',
								'name' => 'Terga',
							),
						),
					),
					'4619' => array(
						'id' => '4619',
						'code' => '4619',
						'name_ar' => 'العامرية',
						'name' => 'El Amria',
						'communes' => array(
							'1470' => array(
								'id' => '1470',
								'code' => '1470',
								'name_ar' => 'بوزجار',
								'name' => 'Bouzedjar',
							),
							'1473' => array(
								'id' => '1473',
								'code' => '1473',
								'name_ar' => 'العامرية',
								'name' => 'El Amria',
							),
							'1475' => array(
								'id' => '1475',
								'code' => '1475',
								'name_ar' => 'المساعيد',
								'name' => 'El Messaid',
							),
							'1479' => array(
								'id' => '1479',
								'code' => '1479',
								'name_ar' => 'حاسي الغلة',
								'name' => 'Hassi El Ghella',
							),
							'1482' => array(
								'id' => '1482',
								'code' => '1482',
								'name_ar' => 'أولاد بوجمعة',
								'name' => 'Ouled Boudjemaa',
							),
						),
					),
					'4622' => array(
						'id' => '4622',
						'code' => '4622',
						'name_ar' => 'عين الكيحل',
						'name' => 'Ain Kihel',
						'communes' => array(
							'1463' => array(
								'id' => '1463',
								'code' => '1463',
								'name_ar' => 'أغلال',
								'name' => 'Aghlal',
							),
							'1465' => array(
								'id' => '1465',
								'code' => '1465',
								'name_ar' => 'عين الكيحل',
								'name' => 'Ain Kihal',
							),
							'1467' => array(
								'id' => '1467',
								'code' => '1467',
								'name_ar' => 'عين الطلبة',
								'name' => 'Ain Tolba',
							),
							'1468' => array(
								'id' => '1468',
								'code' => '1468',
								'name_ar' => 'عقب الليل',
								'name' => 'Aoubellil',
							),
						),
					),
					'4623' => array(
						'id' => '4623',
						'code' => '4623',
						'name_ar' => 'بني صاف',
						'name' => 'Beni Saf',
						'communes' => array(
							'1469' => array(
								'id' => '1469',
								'code' => '1469',
								'name_ar' => 'بني صاف',
								'name' => 'Beni Saf',
							),
							'1476' => array(
								'id' => '1476',
								'code' => '1476',
								'name_ar' => 'الأمير عبد القادر',
								'name' => 'Emir Abdelkader',
							),
							'1488' => array(
								'id' => '1488',
								'code' => '1488',
								'name_ar' => 'سيدي صافي',
								'name' => 'Sidi Safi',
							),
						),
					),
					'4625' => array(
						'id' => '4625',
						'code' => '4625',
						'name_ar' => 'ولهاصة الغرابة',
						'name' => 'Oulhassa Gheraba',
						'communes' => array(
							'1484' => array(
								'id' => '1484',
								'code' => '1484',
								'name_ar' => 'ولهاصة الغرابة',
								'name' => 'Oulhaca El Gheraba',
							),
							'1487' => array(
								'id' => '1487',
								'code' => '1487',
								'name_ar' => 'سيدي ورياش',
								'name' => 'Sidi Ouriache',
							),
						),
					),
				),
			),
			'47' => array(
				'id' => '47',
				'code' => '47',
				'name_ar' => 'غرداية',
				'name' => 'Ghardaïa',
				'dairas' => array(
					'4701' => array(
						'id' => '4701',
						'code' => '4701',
						'name_ar' => 'غرداية',
						'name' => 'Ghardaia',
						'communes' => array(
							'1496' => array(
								'id' => '1496',
								'code' => '1496',
								'name_ar' => 'غرداية',
								'name' => 'Ghardaia',
							),
						),
					),
					'4702' => array(
						'id' => '4702',
						'code' => '4702',
						'name_ar' => 'المنيعة',
						'name' => 'El Menia',
						'communes' => array(
							'1495' => array(
								'id' => '1495',
								'code' => '1495',
								'name_ar' => 'المنيعة',
								'name' => 'El Meniaa',
							),
							'1499' => array(
								'id' => '1499',
								'code' => '1499',
								'name_ar' => 'حاسي القارة',
								'name' => 'Hassi Gara',
							),
						),
					),
					'4703' => array(
						'id' => '4703',
						'code' => '4703',
						'name_ar' => 'ضاية بن ضحوة',
						'name' => 'Dhayet Ben Dhahoua',
						'communes' => array(
							'1493' => array(
								'id' => '1493',
								'code' => '1493',
								'name_ar' => 'ضاية بن ضحوة',
								'name' => 'Dhayet Bendhahoua',
							),
						),
					),
					'4704' => array(
						'id' => '4704',
						'code' => '4704',
						'name_ar' => 'بريان',
						'name' => 'Berriane',
						'communes' => array(
							'1491' => array(
								'id' => '1491',
								'code' => '1491',
								'name_ar' => 'بريان',
								'name' => 'Berriane',
							),
						),
					),
					'4705' => array(
						'id' => '4705',
						'code' => '4705',
						'name_ar' => 'متليلي',
						'name' => 'Metlili',
						'communes' => array(
							'1501' => array(
								'id' => '1501',
								'code' => '1501',
								'name_ar' => 'متليلي',
								'name' => 'Metlili',
							),
							'1502' => array(
								'id' => '1502',
								'code' => '1502',
								'name_ar' => 'سبسب',
								'name' => 'Sebseb',
							),
						),
					),
					'4706' => array(
						'id' => '4706',
						'code' => '4706',
						'name_ar' => 'القرارة',
						'name' => 'El Guerrara',
						'communes' => array(
							'1497' => array(
								'id' => '1497',
								'code' => '1497',
								'name_ar' => 'القرارة',
								'name' => 'El Guerrara',
							),
						),
					),
					'4708' => array(
						'id' => '4708',
						'code' => '4708',
						'name_ar' => 'زلفانة',
						'name' => 'Zelfana',
						'communes' => array(
							'1503' => array(
								'id' => '1503',
								'code' => '1503',
								'name_ar' => 'زلفانة',
								'name' => 'Zelfana',
							),
						),
					),
					'4710' => array(
						'id' => '4710',
						'code' => '4710',
						'name_ar' => 'بونورة',
						'name' => 'Bounoura',
						'communes' => array(
							'1492' => array(
								'id' => '1492',
								'code' => '1492',
								'name_ar' => 'بونورة',
								'name' => 'Bounoura',
							),
							'1494' => array(
								'id' => '1494',
								'code' => '1494',
								'name_ar' => 'العطف',
								'name' => 'El Atteuf',
							),
						),
					),
					'4713' => array(
						'id' => '4713',
						'code' => '4713',
						'name_ar' => 'المنصورة',
						'name' => 'Mansourah',
						'communes' => array(
							'1498' => array(
								'id' => '1498',
								'code' => '1498',
								'name_ar' => 'حاسي الفحل',
								'name' => 'Hassi Fehal',
							),
							'1500' => array(
								'id' => '1500',
								'code' => '1500',
								'name_ar' => 'المنصورة',
								'name' => 'Mansoura',
							),
						),
					),
					'470247' => array(
						'id' => '470247',
						'code' => '470247',
						'name_ar' => 'المنيعة (ولاية منتدبة)',
						'name' => 'El Menia (Wilaya Déléguée)',
					),
				),
			),
			'48' => array(
				'id' => '48',
				'code' => '48',
				'name_ar' => 'غليزان',
				'name' => 'Relizane',
				'dairas' => array(
					'4801' => array(
						'id' => '4801',
						'code' => '4801',
						'name_ar' => 'غليزان',
						'name' => 'Relizane',
						'communes' => array(
							'1508' => array(
								'id' => '1508',
								'code' => '1508',
								'name_ar' => 'بن داود',
								'name' => 'Bendaoud',
							),
							'1533' => array(
								'id' => '1533',
								'code' => '1533',
								'name_ar' => 'غليزان',
								'name' => 'Relizane',
							),
						),
					),
					'4802' => array(
						'id' => '4802',
						'code' => '4802',
						'name_ar' => 'وادي رهيو',
						'name' => 'Oued Rhiou',
						'communes' => array(
							'1521' => array(
								'id' => '1521',
								'code' => '1521',
								'name_ar' => 'لحلاف',
								'name' => 'Lahlef',
							),
							'1525' => array(
								'id' => '1525',
								'code' => '1525',
								'name_ar' => 'مرجة سيدي عابد',
								'name' => 'Merdja Sidi Abed',
							),
							'1526' => array(
								'id' => '1526',
								'code' => '1526',
								'name_ar' => 'واريزان',
								'name' => 'Ouarizane',
							),
							'1529' => array(
								'id' => '1529',
								'code' => '1529',
								'name_ar' => 'وادي رهيو',
								'name' => 'Oued-Rhiou',
							),
						),
					),
					'4807' => array(
						'id' => '4807',
						'code' => '4807',
						'name_ar' => 'الحمادنة',
						'name' => 'El H\'madna',
						'communes' => array(
							'1514' => array(
								'id' => '1514',
								'code' => '1514',
								'name_ar' => 'الحمادنة',
								'name' => 'El H\'madna',
							),
							'1527' => array(
								'id' => '1527',
								'code' => '1527',
								'name_ar' => 'وادي الجمعة',
								'name' => 'Oued El Djemaa',
							),
						),
					),
					'4808' => array(
						'id' => '4808',
						'code' => '4808',
						'name_ar' => 'سيدي أمحمد بن علي',
						'name' => 'Sidi M\'hamed Ben Ali',
						'communes' => array(
							'1510' => array(
								'id' => '1510',
								'code' => '1510',
								'name_ar' => 'بني زنطيس',
								'name' => 'Beni Zentis',
							),
							'1523' => array(
								'id' => '1523',
								'code' => '1523',
								'name_ar' => 'مديونة',
								'name' => 'Mediouna',
							),
							'1536' => array(
								'id' => '1536',
								'code' => '1536',
								'name_ar' => 'سيدي أمحمد بن علي',
								'name' => 'Sidi M\'hamed Benali',
							),
						),
					),
					'4811' => array(
						'id' => '4811',
						'code' => '4811',
						'name_ar' => 'عمي موسى',
						'name' => 'Ammi Moussa',
						'communes' => array(
							'1506' => array(
								'id' => '1506',
								'code' => '1506',
								'name_ar' => 'عمي موسى',
								'name' => 'Ammi Moussa',
							),
							'1513' => array(
								'id' => '1513',
								'code' => '1513',
								'name_ar' => 'الحاسي',
								'name' => 'El Hassi',
							),
							'1515' => array(
								'id' => '1515',
								'code' => '1515',
								'name_ar' => 'الولجة',
								'name' => 'El Ouldja',
							),
							'1530' => array(
								'id' => '1530',
								'code' => '1530',
								'name_ar' => 'أولاد يعيش',
								'name' => 'Ouled Aiche',
							),
						),
					),
					'4812' => array(
						'id' => '4812',
						'code' => '4812',
						'name_ar' => 'زمورة',
						'name' => 'Zemmoura',
						'communes' => array(
							'1509' => array(
								'id' => '1509',
								'code' => '1509',
								'name_ar' => 'بني درقن',
								'name' => 'Beni Dergoun',
							),
							'1511' => array(
								'id' => '1511',
								'code' => '1511',
								'name_ar' => 'دار بن عبد الله',
								'name' => 'Dar Ben Abdelah',
							),
							'1541' => array(
								'id' => '1541',
								'code' => '1541',
								'name_ar' => 'زمورة',
								'name' => 'Zemmoura',
							),
						),
					),
					'4814' => array(
						'id' => '4814',
						'code' => '4814',
						'name_ar' => 'جديوية',
						'name' => 'Djidiouia',
						'communes' => array(
							'1512' => array(
								'id' => '1512',
								'code' => '1512',
								'name_ar' => 'جديوية',
								'name' => 'Djidiouia',
							),
							'1519' => array(
								'id' => '1519',
								'code' => '1519',
								'name_ar' => 'حمري',
								'name' => 'Hamri',
							),
							'1531' => array(
								'id' => '1531',
								'code' => '1531',
								'name_ar' => 'أولاد سيدي الميهوب',
								'name' => 'Ouled Sidi Mihoub',
							),
						),
					),
					'4817' => array(
						'id' => '4817',
						'code' => '4817',
						'name_ar' => 'المطمر',
						'name' => 'El Matmar',
						'communes' => array(
							'1507' => array(
								'id' => '1507',
								'code' => '1507',
								'name_ar' => 'بلعسل بوزقزة',
								'name' => 'Belaassel Bouzagza',
							),
							'1517' => array(
								'id' => '1517',
								'code' => '1517',
								'name_ar' => 'المطمر',
								'name' => 'El-Matmar',
							),
							'1534' => array(
								'id' => '1534',
								'code' => '1534',
								'name_ar' => 'سيدي  خطاب',
								'name' => 'Sidi Khettab',
							),
							'1537' => array(
								'id' => '1537',
								'code' => '1537',
								'name_ar' => 'سيدي امحمد بن عودة',
								'name' => 'Sidi M\'hamed Benaouda',
							),
						),
					),
					'4819' => array(
						'id' => '4819',
						'code' => '4819',
						'name_ar' => 'عين طارق',
						'name' => 'Ain Tarek',
						'communes' => array(
							'1505' => array(
								'id' => '1505',
								'code' => '1505',
								'name_ar' => 'عين طارق',
								'name' => 'Ain-Tarek',
							),
							'1518' => array(
								'id' => '1518',
								'code' => '1518',
								'name_ar' => 'حد الشكالة',
								'name' => 'Had Echkalla',
							),
						),
					),
					'4822' => array(
						'id' => '4822',
						'code' => '4822',
						'name_ar' => 'مازونة',
						'name' => 'Mazouna',
						'communes' => array(
							'1516' => array(
								'id' => '1516',
								'code' => '1516',
								'name_ar' => 'القطار',
								'name' => 'El-Guettar',
							),
							'1522' => array(
								'id' => '1522',
								'code' => '1522',
								'name_ar' => 'مازونة',
								'name' => 'Mazouna',
							),
						),
					),
					'4825' => array(
						'id' => '4825',
						'code' => '4825',
						'name_ar' => 'يلل',
						'name' => 'Yellel',
						'communes' => array(
							'1504' => array(
								'id' => '1504',
								'code' => '1504',
								'name_ar' => 'عين الرحمة',
								'name' => 'Ain Rahma',
							),
							'1520' => array(
								'id' => '1520',
								'code' => '1520',
								'name_ar' => 'القلعة',
								'name' => 'Kalaa',
							),
							'1538' => array(
								'id' => '1538',
								'code' => '1538',
								'name_ar' => 'سيدي سعادة',
								'name' => 'Sidi Saada',
							),
							'1540' => array(
								'id' => '1540',
								'code' => '1540',
								'name_ar' => 'يلل',
								'name' => 'Yellel',
							),
						),
					),
					'4827' => array(
						'id' => '4827',
						'code' => '4827',
						'name_ar' => 'الرمكة',
						'name' => 'Ramka',
						'communes' => array(
							'1532' => array(
								'id' => '1532',
								'code' => '1532',
								'name_ar' => 'الرمكة',
								'name' => 'Ramka',
							),
							'1539' => array(
								'id' => '1539',
								'code' => '1539',
								'name_ar' => 'سوق الحد',
								'name' => 'Souk El Had',
							),
						),
					),
					'4828' => array(
						'id' => '4828',
						'code' => '4828',
						'name_ar' => 'منداس',
						'name' => 'Mendes',
						'communes' => array(
							'1524' => array(
								'id' => '1524',
								'code' => '1524',
								'name_ar' => 'منداس',
								'name' => 'Mendes',
							),
							'1528' => array(
								'id' => '1528',
								'code' => '1528',
								'name_ar' => 'وادي السلام',
								'name' => 'Oued Essalem',
							),
							'1535' => array(
								'id' => '1535',
								'code' => '1535',
								'name_ar' => 'سيدي لزرق',
								'name' => 'Sidi Lazreg',
							),
						),
					),
				),
			),
		),
	);

$myfile = fopen("py/MedecinnoneWilaya.txt","r") or die("Unable to open file!");
$f = fopen("py/none.txt","a") ;
$x=1;
 
 while(!feof($myfile)) {	
 //while($x<11) {
  
  
  $name =  fgets($myfile);
  $phone =  fgets($myfile);
  
  $str=fgets($myfile);
  $words = explode(",",$str) ;
  $location="";
  $location =$location.$words[0]; 
  $location= rtrim($location); 
  
  // $communescode = array_keys($arr['wilayas']['01']['dairas']['101']['communes']); 
   //foreach($communescode as $commune)
   //echo $arr['wilayas']['01']['dairas']['101']['communes'][$commune]['name'];
   
             
                $Profile_Pic = 'default.png';
                $Type = 'worker'; 
                $Wilaya = 'none'; 
			    $Daira = 'none'; 
			    $Commune = 'none'; 
  $wilayascode = array_keys($arr['wilayas']); 
  
  foreach($wilayascode as $wilaya) {  
         //$wilaya = $arr['wilayas'][$wilaya]['code'] ;
         //echo $arr['wilayas'][$wilaya]['name'] ;
		 
         similar_text($location,$arr['wilayas'][$wilaya]['name'],$perc);
		
         if($perc > 89){
			  
               $Wilaya = $arr['wilayas'][$wilaya]['name_ar'] ; 
			   $Daira = 'none'; 
			   $Commune = 'none'; 
			   
			  
			           }
			 
         else{
              $dairascode = array_keys($arr['wilayas'][$wilaya]['dairas']); 
            foreach($dairascode as $daira)
			{ 
              // $daira = $arr['wilayas'][$wilaya]['dairas'][$daira]['code'] ;
              similar_text($location,$arr['wilayas'][$wilaya]['dairas'][$daira]['name'],$perc);
			  
              if($perc > 85){ 
                      $Wilaya = $arr['wilayas'][$wilaya]['name_ar'] ;
			          $Daira = $arr['wilayas'][$wilaya]['dairas'][$daira]['name_ar']; 
					  $Commune = 'none'; 
					       

        
						   }
  
              else  { 
			        if (isset($arr['wilayas'][$wilaya]['dairas'][$daira]['communes'])) {
                     $communescode = array_keys($arr['wilayas'][$wilaya]['dairas'][$daira]['communes']);
                    }
                   
					
                    foreach($communescode as $commune){ 
                     if (isset($arr['wilayas'][$wilaya]['dairas'][$daira]['communes'])) {
                     similar_text($location,$arr['wilayas'][$wilaya]['dairas'][$daira]['communes'][$commune]['name'],$perc);
                    }
                     
					 
                     if($perc > 85){ 
                      $Wilaya = $arr['wilayas'][$wilaya]['name_ar'] ;
			          $Daira = $arr['wilayas'][$wilaya]['dairas'][$daira]['name_ar']; 
					  $Commune = $arr['wilayas'][$wilaya]['dairas'][$daira]['communes'][$commune]['name_ar'];
					               
								   
								   
								  
								   }
								   
			                       }
  
			        }
		    }  

  }
  
  } 
  
  /* echo " ***wilaya = " . $Wilaya ." ***daira = " .$Daira."  ***commune =   ".$Commune. "<br>" ; 
 
 
  echo " name =  " .$name  ." phone =  " .$phone. "<br>" ; 
  
  $job = fgets($myfile);
  $job='طبيب خاص';
  echo " job =  " .$job  . "<br>" ; 
  $description =  fgets($myfile) ."////" .fgets($myfile)."////";
  echo " description =  " .$description . "<br>" ; 
  */
  $job = fgets($myfile);
  $description =  fgets($myfile) ;
  
  
  if($phone == "no")
   $phone =  "لا يوجد رقم هاتف ";
  
  $name= str_replace(array("\n", "\r"), '', $name);
  $phone= str_replace(array("\n", "\r"), '', $phone);
  $location= str_replace(array("\n", "\r"), '', $location);
  $job= str_replace(array("\n", "\r"), '', $job);
  $description = str_replace(array("\n", "\r"), '', $description);
  
 

  
if($Wilaya=="none"){ 
fwrite($f, $name.PHP_EOL);
fwrite($f, $phone.PHP_EOL);
fwrite($f, $location.PHP_EOL);
fwrite($f, $job.PHP_EOL);
fwrite($f, $description.PHP_EOL);  
} 
//.PHP_EOL
else { 
if($Daira=="none"  &&  $Commune=="none" )
 $query = "INSERT INTO Users (First_Name,Phone,Job,Wilaya,Type,Description,Profile_Pic,Ad)
  			  VALUES('$name','$phone','$job','$Wilaya','$Type','$description','$Profile_Pic','yes')";
if($Commune=="none" &&   $Daira!="none"  )
  $query = "INSERT INTO Users (First_Name,Phone,Job,Wilaya,Daira,Type,Description,Profile_Pic,Ad)
  			  VALUES('$name','$phone','$job','$Wilaya','$Daira','$Type','$description','$Profile_Pic','yes')";
if($Commune!="none" &&   $Daira!="none"  )
  $query = "INSERT INTO Users (First_Name,Phone,Job,Wilaya,Daira,Commune,Type,Description,Profile_Pic,Ad)
  			  VALUES('$name','$phone','$job','$Wilaya','$Daira','$Commune','$Type','$description','$Profile_Pic','yes')";
			  
  	mysqli_query($db, $query); 
	} 
	
 $x++;  
 echo  $x ."\n";
}

    fclose($myfile);
	fclose($f);
    mysqli_close ($db);	
	echo "   DONE 	<br>" ; 
	exit(); 





?>

