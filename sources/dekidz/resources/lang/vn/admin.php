<?php

return [
	'menus' => [
		'dashboard' => 'Dashboard',
		'students' => [
			'title' => 'Students',
			'all' => 'All Students',
			'create' => 'Create Student',
			'tuition_fee' => 'Tuition Fee',
			'health_index' => 'Health Index'
		],
		'grades' => [
			'title' => 'Grades',
			'all' => 'All Grades',
			'create' => 'Create Grade'
		],

		'physical_infos' => [
			'title' => 'Student`s Physical Info',
			'all' => 'Physical Info',
			'create' => 'Create Physical Info'
		],
		'classes' => [
			'title' => 'Classes',
			'all' => 'All Classes',
			'create' => 'Create Class',
			'study_result' => 'Study Result'
		],
		'finances' => [
			'title' => 'Finances',
			'rem_in' => 'Rem In',
			'rem_out' => 'Rem Out',
		],
		'repository' => [
			'title' => 'Repository',
			'assets' => [
				'title' => 'CSVCs',
				'all' => 'All CSVCs',
				'create' => 'Create CSVC',
			],
			'suppliers' => [
				'title' => 'Supplier',
				'all' => 'All Suppliers',
				'create' => 'Create Supplier',
			],
			'import' => [
				'food' => 'Thực Phẩm Nhập',
				'asset'=> 'CSVC Nhập'
			],
			'export' => 'Thực Phẩm Export',
			'export_asset' => 'CSVC Export',
			'maintenance_ballot' => 'Maintenance Ballot'
		],
		'nutrition' => [
			'title' => 'Nutrition',
			'food' => 'Thực Phẩm',
			'food_set' => 'Thực Phẩm Set',
			'dishes' => 'Dishes',
			'foodgroup' => 'Thực Phẩm Group',
			'foodsettype' => 'Thực Phẩm Set Type',
			'dishtype' => 'Dish Type',
			'energy_need' => 'Energy Need',
			'menu' => 'Menus'
		],
		'education' => [
			'title' => 'Education',
			'teachers' => 'Teachers',
			'time_table' => 'Time Table',
			'lesson' => 'Lesson',
			'subject_topic' => [
				'title' => 'Subject Topic',
				'create' => 'Create Subject Topic'
			],
			'teach_schedules' => [
				'title' => 'Teach Schedules',
				'create' => 'Create Teach Schedule'
			],

		],
		'articles' => [
			'title' => 'Articles',
			'all' => 'All Articles',
			'create' => 'Add New'
		],
		'staffs' => [
			'title' => 'Staffs',
			'all' => 'All Staffs',
			'create' => 'Add New',
			'salaries' => [
				'title' => 'Salary',
				'all' => 'Salaries'
			],
			'staff_types' => [
				'title' => 'Positions',
				'all' => 'All Positions'
			]
		],
		'departments' => [
			'title' => 'Departments',
			'all' => 'All Departments',
			'create' => 'Add New'
		],
		'pages' => [
			'title' => 'Pages',
			'all' => 'All Pages',
			'create' => 'Add New'
		],
		'users' => [
			'title' => 'Users',
			'all' => 'All Users',
			'create' => 'Add New',
			'config' => 'Video links'
		],
		'roles' => 'Roles',
		'permissions' => 'Permissions',
		'categories' => 'Categories',
		'cameras' => [
			'title' => 'System',
			'all' => 'Cameras',
			'create' => 'Add New'
		],
	],
	'public' => [
		'title_add'=> 'Add',
		'title_edit' => 'Edit',
		'title_all' => 'All',
		'title_Update' => 'Update',
		'title_Save' => 'Save',
		'title_Delete' => 'Delete',
	],
	'student' => [
		'no' => 'STT',
		'name' => 'Tên',
		'email' => 'Email',
		'gender' => 'Gender',
		'dob' => 'DOB',
		'address' => 'Address',
		'nation'=> 'Nation',
		'religion' => 'Religion',
		'father_name' => 'Father Name',
		'father_dob' => 'Father DOB',
		'father_job'  => 'Father Job',
		'mother_name'  => 'Mother Name',
		'mother_dob' => 'Mother DOB',
		'mother_job' => 'Mother Job',
		'father_phone' => 'Father Phone',
		'mother_phone'  => 'Mother Phone',
		'picture' => 'Picture',
		'admission_date'=> 'Admission Date',
		'completion_date'=> 'Completion Date',
		'note' => 'Note',
		'entry_card'=> 'Entry Card'
	],
	'asset' => [
		'no' => 'STT',
		'name' => 'Tên',
		'quantity'=> 'Quantity',
		'maintenance_mode'=> 'Maintenance Mode',
		'unit'=> 'Unit'
	],

	'camera' => [
		'no' => 'STT',
		'name' => 'Tên',
		'url'=> 'URL',
		'description'=> 'Description'

	],

	'dekid_class' => [
		'no' => 'STT',
		'name'=> 'Tên',
		'teacher_id' => 'Teacher',
		'room_number' => 'Room Number',
		'grade_id'=> 'Grade',
		'school_year' => 'School Year'
	],

	'department' => [
		'no' => 'STT',
		'name' => 'Tên',
		'wage_index' => 'Wage Index',
		'chief_id' => 'Cheif',
		'description' => 'Description'
	],

	'dish' => [
		'no' => 'STT',
		'type_id' => 'Type',
		'name' => 'Tên',
		'total_cost' => 'Total Cost',
		'preparing_description' => 'Preparing Description',
		'cooking_description' => 'Cooking Description',
		'chef' => 'Chef',
		'calo'=> 'Calo',
		'h2o'=> 'H2O',
		'protid' => 'Protid',
		'lipid' => 'Lipid',
		'glucid' => 'Glucid',
		'cellulose' => 'Cellulose',
		'cholesterol' => 'Cholesterol',
		'calci' => 'Calci',
		'photpho' => 'Photpho',
		'iron' => 'Iron',
		'vitamin_caroten' => 'Vitamin Caroten',
		'vitamina' => 'Vitamin A',
		'vitaminb1'=> 'Vitamin B1',
		'vitaminb2'=> 'Vitamin B2',
		'vitaminpp' => 'Vitamin PP',
		'vitaminc'=> 'Vitamin C'

	],

	'dish_type' => [
		'no' => 'STT',
		'name' => 'Tên',
	],

	'energy_need' => [
		'no' => 'STT',
		'age' => 'Age',
		'calo'=> 'Calo',
		'h2o'=> 'H2O',
		'protid' => 'Protid',
		'lipid' => 'Lipid',
		'glucid' => 'Glucid',
		'cellulose' => 'Cellulose',
		'cholesterol' => 'Cholesterol',
		'calci' => 'Calci',
		'photpho' => 'Photpho',
		'iron' => 'Iron',
		'vitamin_caroten' => 'Vitamin Caroten',
		'vitamina' => 'Vitamin A',
		'vitaminb1'=> 'Vitamin B1',
		'vitaminb2'=> 'Vitamin B2',
		'vitaminpp' => 'Vitamin PP',
		'vitaminc'=> 'Vitamin C'

	],

	'export' => [
		'no' => 'STT',
		'date'=> 'Date',
		'is_food' => 'Is Thực Phẩm',
		'created_by' => 'Created By'
	],

	'export_asset' => [
		'no' => 'STT',
		'date' => 'Date',
		'is_food' => 'Is Thực Phẩm',
		'created_by' => 'Created By'
	],

	'food' => [
		'no' => 'STT',
		'food_group_id' => 'Thực Phẩm Group',
		'name' => 'Tên',
		'animal_source' => 'Animal Source',
		'quantity' => 'Quantity',
		'unit' => 'Unit',
		'price' => 'Price',
		'absorb' => 'Absorb',
		'digest'=> 'Digest',
		'calo'=> 'Calo',
		'h2o'=> 'H2O',
		'protid' => 'Protid',
		'lipid' => 'Lipid',
		'glucid' => 'Glucid',
		'cellulose' => 'Cellulose',
		'cholesterol' => 'Cholesterol',
		'calci' => 'Calci',
		'photpho' => 'Photpho',
		'iron' => 'Iron',
		'vitamin_caroten' => 'Vitamin Caroten',
		'vitamina' => 'Vitamin A',
		'vitaminb1'=> 'Vitamin B1',
		'vitaminb2'=> 'Vitamin B2',
		'vitaminpp' => 'Vitamin PP',
		'vitaminc'=> 'Vitamin C'
	],

	'food_group' => [
		'no' => 'STT',
		'name' => 'Name'
	],

	'food_set' => [
		'no' => 'STT',
		'type_id' => 'Type',
		'age'=> 'Age',
		'quantity' => 'Quantity',
		'name' => 'Tên',
		'description' => 'Description',
		'calo'=> 'Calo',
		'h2o'=> 'H2O',
		'protid' => 'Protid',
		'lipid' => 'Lipid',
		'glucid' => 'Glucid',
		'cellulose' => 'Cellulose',
		'cholesterol' => 'Cholesterol',
		'calci' => 'Calci',
		'photpho' => 'Photpho',
		'iron' => 'Iron',
		'vitamin_caroten' => 'Vitamin Caroten',
		'vitamina' => 'Vitamin A',
		'vitaminb1'=> 'Vitamin B1',
		'vitaminb2'=> 'Vitamin B2',
		'vitaminpp' => 'Vitamin PP',
		'vitaminc'=> 'Vitamin C',
		'total_cost'
	],

	'food_set_type' => [
		'no' => 'STT',
		'name' => 'Name'
	],

	'grade' => [
		'no' => 'STT',
		'code' => 'Code',
		'name' => 'Tên',
		'description' => 'Description'
	],

	'health_stadard_index' => [
		'no' => 'STT',
		'height' => 'Height',
		'weight' => 'Weight',
		'gender' => 'Gender',
		'month' => 'Month'
	],

	'import' => [
		'no' => 'STT',
		'date' => 'Date',
		'total_cost' => 'Total Cost',
		'is_food' => 'Is Thực Phẩm',
		'created_by' => 'Created By'
	],

	'lesson' => [
		'no' => 'STT',
		'subject_topic_id' => 'Subject Topic',
		'lesson_name' => 'Lesson Name',
		'lesson_goal' => 'Lesson Goal',
		'teach_activity' => 'Teach Activity',
		'kid_activity' => 'Kid Activity',
		'author' => 'Author'
	],

	'maintenance_ballot' => [
		'no' => 'STT',
		'created_by'=> 'Created By',
		'date'=> 'Date'
	],

	'menu' => [
		'no' => 'STT',
		'date' => 'Date',
		'breakfast_id' => 'Breakfast',
		'lunch_id'=> 'Lunch',
		'mid_afternoon_id' => 'Mid Afternoon'
	],

	'physical_info' => [
		'no' => 'STT',
		'student_id' => 'Student',
		'gender' => 'Gender',
		'age' => 'Age',
		'height' => 'Height',
		'weight' => 'Weight',
		'BMI' => 'BMI'
	],

	'rem_in' => [
		'no' => 'STT',
		"reason" => 'Reason',
		"code" => 'Code',
		"date" => 'Date',
		"received" => 'Received',
		"debt" => 'Debt',
		"total" => 'Total',
		"note" => 'Note'
	],

	'rem_out' => [
		'no' => 'STT',
		"reason" => 'Reason',
		"code" => 'Code',
		"date" => 'Date',
		"paid" => 'Paid',
		"debt" => 'Debt',
		"total" => 'Total'
	],

	'salary' => [
		'no' => 'STT',
		"staff_id" => 'Staff',
		"base_salary" => 'Base Salary',
		"wage_index" => 'Wage Index',
		"bonus"=> 'Bonus',
		"minus" => 'Minus',
		"salary" => 'Salary'
	],

	'staff' => [
		'no' => 'STT',
		"name" => 'Name',
		"code" => 'Code',
		"gender" => 'Gender',
		"dob" => 'DOB',
		"identity_card" => 'Indentity Card',
		"religion" => 'Religion',
		"address" => 'Address',
		"department_id" => 'Departement',
		"issued_by" => 'Issued By',
		"phone" => 'Phone',
		"email" => 'Email',
		"position" => 'Positition',
		"degree" => 'Degree',
		"is_leaguer" => 'Is Leaguer',
		"working_status" => 'Working Status',
		"start_day" => 'Start Day',
		"type_of_contract" => 'Type Of Contract',
	],

	'staff_type' => [
		'no' => 'STT',
		'name' => 'Tên',
		'description' => 'Description'
	],

	'study_result' => [
		'no' => 'STT',
		'class_id' => 'Class',
		'semester' => 'Semester',
		'lesson_id' => 'Lesson'
	],

	'subject_topic' => [
		'no' => 'STT',
		'code' => 'Code',
		'name' => 'Tên',
		'description' => 'Description'
	],

	'supplier' => [
		'no' => 'STT',
		'name' => 'Tên',
		'type' => 'Type',
		'email' => 'Email',
		'phone'=> 'Phone',
		'product_type' => 'Product Type'
	],

	'teach_schedule' => [
		'no' => 'STT',
		'class_id' => 'Class',
		'semester' => 'Semester'
	],

	'tuition_fee' => [
		'no' => 'STT',
		'student_id' => 'Student',
		'debt' => 'Debt',
		'paid' => 'Paid',
		'year' => 'Year',
		'month' => 'Month'
	],

];