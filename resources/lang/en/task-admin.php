<?php

return [

    /*
    |-----------------------------------------------------------------------
    | MAIN MENU
    |-----------------------------------------------------------------------
    | Top menu
    |
    */
    'menus' => [
        'top-menu' => 'Tasks'
    ],





    /*
    |-----------------------------------------------------------------------
    | SIDEBAR
    |-----------------------------------------------------------------------
    | Left side bar
    |
    |
    |
    */
    'sidebar' => [
        'list' => 'Items',
        'add' => 'Add new',
        'trash' => 'Trash',
        'config' => 'Configurations',
        'lang' => 'Languages',
        'category' => 'Categories',
        'teachers' => 'Teachers',
    ],





    /*
    |-----------------------------------------------------------------------
    | Table column
    |-----------------------------------------------------------------------
    | The list of columns in table
    |
    */
    'columns' => [
        'order' => '#',
        'name' => 'Task name',
        'operations' => 'Operations',
        'updated_at' => 'Updated at',
        'filename' => 'File name',
        'status' => 'Status',
        'total' => 'Total',
        'assigned' => 'Assigned',
        'canceled' => 'Canceled',
        'done' => 'Done',
        'declined' => 'Declined',
        'inprogress' => 'In progress',
        'teacher_name' => 'Teacher name',
        'pending' => 'Pending',
        'tasks' => 'Tasks',
    ],


    /*
    |-----------------------------------------------------------------------
    | Pages
    |-----------------------------------------------------------------------
    | Pages
    |
    */
    'pages' => [
        'title-list' => 'List of task',
        'title-list-search' => 'Search results',
        'title-edit' => 'Edit task',
        'title-add' => 'Add new task',
        'title-delete' => 'Delete task',
        'title-config' => 'Current configurations',
        'title-lang' => 'Manage list of languages',
    ],





    /*
    |-----------------------------------------------------------------------
    | Button
    |-----------------------------------------------------------------------
    | The list of buttons
    |
    */
    'buttons' => [
        'search' => 'Search',
        'reset' => 'Resest',
        'add' => 'Add',
        'save' => 'Save',
        'delete' => 'Delete',
        'add_member' => 'Add member',
        'add_all_member' => 'Add all',
        'reset_invited' => 'Reset',
    ],





    /*
    |-----------------------------------------------------------------------
    | Form
    |-----------------------------------------------------------------------
    | The list of elements in form
    |
    |
    */
    'form' => [
        'keyword' => 'Keyword',
        'sorting' => 'Sorting',
        'no-selected' => 'No selected',
        'status' => 'Status',
        'task_size' => 'Task size',
        'task_priority' => 'Task priority',
        'start_date' => 'Start date',
        'end_date' => 'End date',
    ],





    /*
    |-----------------------------------------------------------------------
    | Description
    |-----------------------------------------------------------------------
    | Description
    |
    */
    'descriptions' => [
        'form' => 'Task form',
        'start_date' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        'end_date' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        'task_size' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'task_priority' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'notes' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'update' => 'Update task',
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category' => 'Click <a href=":href">here</a> to manage list of categories by token.',
        'overview' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'files' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'list' => 'List of items',
        'counters' => 'There are <b>:number</b> items',
        'counter' => 'There is <b>:number</b> item',
        'not-found' => 'Not found items',
        'config' => 'List of configurations',
        'lang' => 'List of languages',
        'slug' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'status' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'invite_member' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    ],



    /*
    |-----------------------------------------------------------------------
    | Error
    |-----------------------------------------------------------------------
    | Show error message
    |
    |
    |
    */
    'errors' => [
        'required' => ':attribute is required',
        'required_length' => '<b> :attribute </b> allows from: <b>:minlength</b> to <b>:maxlength</b> characters.',
        'required_min_length' =>'<b> :attribute </b> allows from: <b>:minlength</b> characters.',
    ],




    /*
    |-----------------------------------------------------------------------
    | FIELDS
    |-----------------------------------------------------------------------
    | Column name in table
    |
    |
    |
    */
    'fields' => [
        'id' => 'Task ID',
        'name' => 'Task name',
        'description' => 'Task Description',
        'overview' => 'Task Overview',
        'slug' => 'Slug',
        'updated_at' => 'Updated at'
    ],




    /*
    |-----------------------------------------------------------------------
    | LABLES
    |-----------------------------------------------------------------------
    | The lables of element in form
    |
    |
    |
    */
    'labels' => [
        'name' => 'Task name',
        'start_date' => 'Start date',
        'end_date' => 'End date',
        'overview' => 'Task overview',
        'description' => 'Task description',
        'image' => 'Task image',
        'files' => 'Task files',
        'category' => 'Category name',
        'title-search' => 'Search task',
        'title-backup' => 'Backups',
        'config' => 'Configurations',
        'slug' => 'Task slug',
        'invite_member' => 'Invite members',
        'notes' => 'Notes',
    ],





    /*
    |-----------------------------------------------------------------------
    | TABS
    |-----------------------------------------------------------------------
    | The name of tab
    |
    |
    |
      */
    'tabs' => [
        'menu_1' => 'Basic',
        'menu_2' => 'Advance',
        'menu_3' => 'Other',
        'menu_4' => 'Assignee',
        'menu_5' => 'Menu 5',
        'menu_6' => 'Menu 6',
        'menu_7' => 'Menu 7',
        'menu_8' => 'Menu 8',
        'menu_9' => 'Menu 9',
        'menu_9' => 'Menu 9',
        'guide'  => 'Guide',
        'other'  => 'Other',
        'basic'  => 'Basic',
        'advance' => 'Advance',
        'usermenu_1' => 'Confirm',
        'usermenu_2' => 'Task info',
    ],





    /*
    |-----------------------------------------------------------------------
    | HEADING
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'headings' => [
        'form-search' => 'Search task',
        'list' => 'List of task',
        'search' => 'Search results',
    ],





    /*
    |-----------------------------------------------------------------------
    | CONFIRMS
    |-----------------------------------------------------------------------
    | List of messages for confirm
    |
    |
    |
    */
    'confirms' => [
        'delete' => 'Are you sure you want to delete this item?',
    ],





    /*
    |-----------------------------------------------------------------------
    | ACTIONS
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'actions' => [
        'add-ok' => 'Add item successfully',
        'add-error' => 'Add item failed',
        'edit-ok' => 'Edit item successfully',
        'edit-error' => 'Edit item failed',
        'delete-ok' => 'Delete item successfully',
        'delete-error' => 'Delete item failed',
    ],
];
