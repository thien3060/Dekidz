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
				'title' => 'Assets',
				'all' => 'All Assets',
				'create' => 'Create Asset',
			],
			'suppliers' => [
				'title' => 'Supplier',
				'all' => 'All Suppliers',
				'create' => 'Create Supplier',
			],
			'import' => [
				'food' => 'Food Import',
				'asset'=> 'Asset Import'
			],
			'export' => 'Food Export',
			'export_asset' => 'Asset Export',
			'maintenance_ballot' => 'Maintenance Ballot'
		],
		'nutrition' => [
			'title' => 'Nutrition',
			'food' => 'Food',
			'food_set' => 'Food Set',
			'dishes' => 'Dishes',
			'foodgroup' => 'Food Group',
			'foodsettype' => 'Food Set Type',
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
		'add'=> 'Add New',
		'edit' => 'Edit',
		'all' => 'All',
		'update' => 'Update',
		'save' => 'Save',
		'delete' => 'Delete',
		'action' => 'Action',
		'back' => 'Back',
		'select' => 'Select',
		'yes' => 'Yes',
		'no' => 'No',
		'confirm_delete' => 'Are you sure want to delete this student?',
	],
	'student' => [
		'no' => 'No',
		'name' => 'Name',
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
		'entry_card'=> 'Entry Card',
		'man' => 'Man',
		'woman' => 'Woman',
	],
	'asset' => [
		'no' => 'No',
		'name' => 'Name',
		'quantity'=> 'Quantity',
		'maintenance_mode'=> 'Maintenance Mode',
		'unit'=> 'Unit'
	],

	'camera' => [
		'no' => 'No',
		'name' => 'Name',
		'url'=> 'URL',
		'description'=> 'Description'

	],

	'class' => [
		'no' => 'No',
		'name'=> 'Name',
		'teacher_id' => 'Teacher',
		'room_number' => 'Room Number',
		'grade_id'=> 'Grade',
		'school_year' => 'School Year',
		'student_list' => 'List Of Student',
	],

	'department' => [
		'no' => 'No',
		'name' => 'Name',
		'wage_index' => 'Wage Index',
		'chief_id' => 'Cheif',
		'description' => 'Description'
	],

	'dish' => [
		'no' => 'No',
		'type_id' => 'Type',
		'name' => 'Name',
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
		'vitaminc'=> 'Vitamin C',
		'cost' => 'Cost',
		'food_name' => 'Food Name',
		'quantity' => 'Quantity',
		'price' => 'Price',
		'list_food' => 'List Of Food',

	],

	'dish_type' => [
		'no' => 'No',
		'name'=> 'Name',
		'code'=> 'Code',
	],

	'energy_need' => [
		'no' => 'No',
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
		'no' => 'No',
		'date'=> 'Date',
		'name' => 'Name',
		'is_food' => 'Is Food',
		'quantity' => 'Quantity',
		'created_by' => 'Created By',
		'list_food' => 'List Of Food',
	],

	'export_asset' => [
		'no' => 'No',
		'date' => 'Date',
		'name' => 'Name',
		'is_food' => 'Is Food',
		'quantity' => 'Quantity',
		'created_by' => 'Created By',
		'list_asset' => 'List Of Asset',
	],

	'food' => [
		'no' => 'No',
		'food_group_id' => 'Food Group',
		'name' => 'Name',
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
		'no' => 'No',
		'name' => 'Name',
		'code' => 'Code',
	],

	'food_set' => [
		'no' => 'No',
		'type_id' => 'Type',
		'age'=> 'Age',
		'quantity' => 'Quantity',
		'name' => 'Name',
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
		'total_cost'=> 'Total Cost'
	],

	'food_set_type' => [
		'no' => 'No',
		'name' => 'Name'
	],

	'grade' => [
		'no' => 'No',
		'code' => 'Code',
		'name' => 'name',
		'description' => 'Description'
	],

	'health_stadard_index' => [
		'no' => 'No',
		'height' => 'Height',
		'weight' => 'Weight',
		'gender' => 'Gender',
		'month' => 'Month'
	],

	'import' => [
		'no' => 'No',
		'date' => 'Date',
		'total_cost' => 'Total Cost',
		'is_food' => 'Is Food',
		'created_by' => 'Created By'
	],

	'lesson' => [
		'no' => 'No',
		'subject_topic_id' => 'Subject Topic',
		'lesson_name' => 'Lesson Name',
		'lesson_goal' => 'Lesson Goal',
		'teach_activity' => 'Teach Activity',
		'kid_activity' => 'Kid Activity',
		'author' => 'Author'
	],

	'maintenance_ballot' => [
		'no' => 'No',
		'created_by'=> 'Created By',
		'date'=> 'Date'
	],

	'menu' => [
		'no' => 'No',
		'date' => 'Date',
		'breakfast_id' => 'Breakfast',
		'lunch_id'=> 'Lunch',
		'mid_afternoon_id' => 'Mid Afternoon'
	],

	'physical_info' => [
		'no' => 'No',
		'student_id' => 'Student',
		'gender' => 'Gender',
		'age' => 'Age',
		'height' => 'Height',
		'weight' => 'Weight',
		'BMI' => 'BMI'
	],

	'rem_in' => [
		'no' => 'No',
		"reason" => 'Reason',
		"code" => 'Code',
		"date" => 'Date',
		"received" => 'Received',
		"debt" => 'Debt',
		"total" => 'Total',
		"note" => 'Note'
	],

	'rem_out' => [
		'no' => 'No',
		"reason" => 'Reason',
		"code" => 'Code',
		"date" => 'Date',
		"paid" => 'Paid',
		"debt" => 'Debt',
		"total" => 'Total'
	],

	'salary' => [
		'no' => 'No',
		"staff_id" => 'Staff',
		"base_salary" => 'Base Salary',
		"wage_index" => 'Wage Index',
		"bonus"=> 'Bonus',
		"minus" => 'Minus',
		"salary" => 'Salary'
	],

	'staff' => [
		'no' => 'No',
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
		'no' => 'No',
		'name' => 'Name',
		'description' => 'Description'
	],

	'study_result' => [
		'no' => 'No',
		'class_id' => 'Class',
		'semester' => 'Semester',
		'lesson_id' => 'Lesson'
	],

	'subject_topic' => [
		'no' => 'No',
		'code' => 'Code',
		'name' => 'Name',
		'description' => 'Description'
	],

	'supplier' => [
		'no' => 'No',
		'name' => 'Name',
		'type' => 'Type',
		'email' => 'Email',
		'phone'=> 'Phone',
		'product_type' => 'Product Type'
	],

	'teach_schedule' => [
		'no' => 'No',
		'class_id' => 'Class',
		'semester' => 'Semester'
	],

	'tuition_fee' => [
		'no' => 'No',
		'student_id' => 'Student',
		'debt' => 'Debt',
		'paid' => 'Paid',
		'year' => 'Year',
		'month' => 'Month'
	],

];