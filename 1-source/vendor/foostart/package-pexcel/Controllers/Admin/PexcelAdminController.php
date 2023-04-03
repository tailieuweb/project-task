<?php

namespace Foostart\Pexcel\Controllers\Admin;

/*
  |-----------------------------------------------------------------------
  | PexcelAdminController
  |-----------------------------------------------------------------------
  | @author: Kang
  | @website: http://foostart.com
  | @date: 28/12/2017
  |
 */

use Illuminate\Http\Request;
use URL,
    Route,
    Redirect;
use Illuminate\Support\Facades\App;
use Foostart\Category\Library\Controllers\FooController;
use Foostart\Pexcel\Models\Pexcel;
use Foostart\Category\Models\Category;
use Foostart\Pexcel\Validators\PexcelValidator;
use Foostart\Pexcel\Helper\PexcelParser;
use Foostart\Pexcel\Helper\UserPexcelParser;

class PexcelAdminController extends FooController {

    public $obj_item = NULL;
    public $obj_category = NULL;
    public $statuses = NULL;

    public function __construct() {

        parent::__construct();
        // models
        $this->obj_item = new Pexcel(array('perPage' => 30));
        $this->obj_category = new Category();

        // validators
        $this->obj_validator = new PexcelValidator();

        // set language files
        $this->plang_admin = 'pexcel-admin';
        $this->plang_front = 'pexcel-front';

        // package name
        $this->package_name = 'package-pexcel';
        $this->package_base_name = 'pexcel';

        // root routers
        $this->root_router = 'pexcel';

        // page views
        $this->page_views = [
            'admin' => [
                'items' => $this->package_name . '::admin.' . $this->package_base_name . '-items',
                'edit' => $this->package_name . '::admin.' . $this->package_base_name . '-edit',
                'config' => $this->package_name . '::admin.' . $this->package_base_name . '-config',
                'lang' => $this->package_name . '::admin.' . $this->package_base_name . '-lang',
                'view' => $this->package_name . '::admin.' . $this->package_base_name . '-view',
            ]
        ];

        // //set category
        $this->category_ref_name = 'admin/pexcel';
        $this->data_view['status'] = $this->obj_item->getPluckStatus();
    }

    /**
     * Show list of items
     * @return view list of items
     * @date 27/12/2017
     */
    public function index(Request $request) {

        $params = $request->all();

        $items = $this->obj_item->selectItems($params);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'items' => $items,
            'request' => $request,
            'params' => $params,
            'config_status' => $this->obj_item->config_status
        ));

        return view($this->page_views['admin']['items'], $this->data_view);
    }

    /**
     * Edit existing item by {id} parameters OR
     * Add new item
     * @return view edit page
     * @date 26/12/2017
     */
    public function edit(Request $request) {

        $item = NULL;
        $categories = NULL;

        $params = $request->all();
        $params['id'] = $request->get('id', NULL);

        $context = $this->obj_item->getContext($this->category_ref_name);

        if (!empty($params['id'])) {

            $item = $this->obj_item->selectItem($params, FALSE);

            if (empty($item)) {
                return Redirect::route($this->root_router . '.list')
                                ->withMessage(trans($this->plang_admin . '.actions.edit-error'));
            }
        }

        //get categories by context
        $context = $this->obj_item->getContext($this->category_ref_name);
        if ($context) {
            $params['context_id'] = $context->context_id;
            $categories = $this->obj_category->pluckSelect($params);
        }

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'item' => $item,
            'categories' => $categories,
            'request' => $request,
            'context' => $context,
            'statuses' => $this->statuses,
        ));
        return view($this->page_views['admin']['edit'], $this->data_view);
    }

    /**
     * Processing data from POST method: add new item, edit existing item
     * @return view edit page
     * @date 27/12/2017
     */
    public function post(Request $request) {

        $item = NULL;

        $params = array_merge($this->getUser(), $request->all());

        $is_valid_request = $this->isValidRequest($request);

        $id = (int) $request->get('id');

        if ($is_valid_request && $this->obj_validator->validate($params)) {// valid data
            // update existing item
            if (!empty($id)) {

                $item = $this->obj_item->find($id);

                if (!empty($item)) {

                    $params['id'] = $id;

                    $item = $this->obj_item->updateItem($params);

                    // message
                    return Redirect::route($this->root_router . '.edit', ["id" => $item->id])
                                    ->withMessage(trans($this->plang_admin . '.actions.edit-ok'));
                } else {

                    // message
                    return Redirect::route($this->root_router . '.list')
                                    ->withMessage(trans($this->plang_admin . '.actions.edit-error'));
                }

                // add new item
            } else {

                $item = $this->obj_item->insertItem($params);

                if (!empty($item)) {

                    //message
                    return Redirect::route($this->root_router . '.edit', ["id" => $item->id])
                                    ->withMessage(trans($this->plang_admin . '.actions.add-ok'));
                } else {

                    //message
                    return Redirect::route($this->root_router . '.edit', ["id" => $item->id])
                                    ->withMessage(trans($this->plang_admin . '.actions.add-error'));
                }
            }
        } else { // invalid data
            $errors = $this->obj_validator->getErrors();

            // passing the id incase fails editing an already existing item
            return Redirect::route($this->root_router . '.edit', $id ? ["id" => $id] : [])
                            ->withInput()->withErrors($errors);
        }
    }

    /**
     * Delete existing item
     * @return view list of items
     * @date 27/12/2017
     */
    public function delete(Request $request) {

        $item = NULL;
        $flag = TRUE;
        $params = array_merge($request->all(), $this->getUser());
        $delete_type = isset($params['del-forever']) ? 'delete-forever' : 'delete-trash';
        $id = (int) $request->get('id');
        $ids = $request->get('ids');

        $is_valid_request = $this->isValidRequest($request);

        if ($is_valid_request && (!empty($id) || !empty($ids))) {

            $ids = !empty($id) ? [$id] : $ids;

            foreach ($ids as $id) {

                $params['id'] = $id;

                if (!$this->obj_item->deleteItem($params, $delete_type)) {
                    $flag = FALSE;
                }
            }
            if ($flag) {
                return Redirect::route($this->root_router . '.list')
                                ->withMessage(trans($this->plang_admin . '.actions.delete-ok'));
            }
        }

        return Redirect::route($this->root_router . '.list')
                        ->withMessage(trans($this->plang_admin . '.actions.delete-error'));
    }

    /**
     * Manage configuration of package
     * @param Request $request
     * @return view config page
     */
    public function config(Request $request) {
        $is_valid_request = $this->isValidRequest($request);
        // display view
        $config_path = realpath(base_path('config/package-pexcel.php'));
        $package_path = realpath(base_path('vendor/foostart/package-pexcel'));

        $config_bakup = $package_path.'/storage/backup/config';
        if (!file_exists($config_bakup)) {
            mkdir($config_bakup, 0755    , true);
        }
        $config_bakup = realpath($config_bakup);


        if ($version = $request->get('v')) {
            //load backup config
            $content = file_get_contents(base64_decode($version));
        } else {
            //load current config
            $content = file_get_contents($config_path);
        }

        if ($request->isMethod('post') && $is_valid_request) {

            //create backup of current config
            file_put_contents($config_bakup.'/package-pexcel-'.date('YmdHis',time()).'.php', $content);

            //update new config
            $content = $request->get('content');

            file_put_contents($config_path, $content);
        }

        $backups = array_reverse(glob($config_bakup.'/*'));

        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'content' => $content,
            'backups' => $backups,
        ));

        return view($this->page_views['admin']['config'], $this->data_view);
    }

    /**
     * Manage languages of package
     * @param Request $request
     * @return view lang page
     */
    public function lang(Request $request) {
        $is_valid_request = $this->isValidRequest($request);
        // display view
        $langs = config('package-pexcel.langs');
        $lang_paths = [];
        $package_path = realpath(base_path('vendor/foostart/package-pexcel'));

        if (!empty($langs) && is_array($langs)) {
            foreach ($langs as $key => $value) {
                $lang_paths[$key] = realpath(base_path('resources/lang/'.$key.'/pexcel-admin.php'));

                $key_backup = $package_path.'/storage/backup/lang/'.$key;

                if (!file_exists($key_backup)) {
                    mkdir($key_backup, 0755    , true);
                }
            }
        }

        $lang_bakup = realpath($package_path.'/storage/backup/lang');
        $lang = $request->get('lang')?$request->get('lang'):'en';
        $lang_contents = [];

        if ($version = $request->get('v')) {
            //load backup lang
            $group_backups = base64_decode($version);
            $group_backups = empty($group_backups)?[]: explode(';', $group_backups);

            foreach ($group_backups as $group_backup) {
                $_backup = explode('=', $group_backup);
                $lang_contents[$_backup[0]] = file_get_contents($_backup[1]);
            }

        } else {
            //load current lang
            foreach ($lang_paths as $key => $lang_path) {
                $lang_contents[$key] = file_get_contents($lang_path);
            }
        }

        if ($request->isMethod('post') && $is_valid_request) {

            //create backup of current config
            foreach ($lang_paths as $key => $value) {
                $content = file_get_contents($value);

                //format file name category-admin-YmdHis.php
                file_put_contents($lang_bakup.'/'.$key.'/pexcel-admin-'.date('YmdHis',time()).'.php', $content);
            }


            //update new lang
            foreach ($langs as $key => $value) {
                $content = $request->get($key);
                file_put_contents($lang_paths[$key], $content);
            }

        }

        //get list of backup langs
        $backups = [];
        foreach ($langs as $key => $value) {
            $backups[$key] = array_reverse(glob($lang_bakup.'/'.$key.'/*'));
        }

        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'backups' => $backups,
            'langs'   => $langs,
            'lang_contents' => $lang_contents,
            'lang' => $lang,
        ));

        return view($this->page_views['admin']['lang'], $this->data_view);
    }

    /**
     * Edit existing item by {id} parameters OR
     * Add new item
     * @return view edit page
     * @date 26/12/2017
     */
    public function copy(Request $request) {

        $params = $request->all();

        $item = NULL;
        $params['id'] = $request->get('cid', NULL);

        $context = $this->obj_item->getContext($this->category_ref_name);

        if (!empty($params['id'])) {

            $item = $this->obj_item->selectItem($params, FALSE);

            if (empty($item)) {
                return Redirect::route($this->root_router . '.list')
                                ->withMessage(trans($this->plang_admin . '.actions.edit-error'));
            }

            $item->id = NULL;
        }

        $categories = $this->obj_category->pluckSelect($params);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'item' => $item,
            'categories' => $categories,
            'request' => $request,
            'context' => $context,
        ));

        return view($this->page_views['admin']['edit'], $this->data_view);
    }

    /**
     * View data file form excel
     * @param Request $request
     */
    public function view(Request $request) {

        $obj_parser = new PexcelParser();

        $item = NULL;
        $categories = NULL;

        $params = $request->all();
        $params['id'] = $request->get('id', NULL);

        $context = $this->obj_item->getContext($this->category_ref_name);

        if (!empty($params['id'])) {

            $item = $this->obj_item->selectItem($params, FALSE);

            if (empty($item)) {
                return Redirect::route($this->root_router . '.list')
                                ->withMessage(trans($this->plang_admin . '.actions.edit-error'));
            }
        }

        //get categories by context
        $context = $this->obj_item->getContext($this->category_ref_name);
        if ($context) {
            $params['context_id'] = $context->context_id;
            $categories = $this->obj_category->pluckSelect($params);
        }

        //get data from file excel
        $items = $obj_parser->read_data($item);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'items' => $items,
            'categories' => $categories,
            'request' => $request,
            'context' => $context,
            'statuses' => $this->statuses,
        ));
        return view($this->page_views['admin']['view'], $this->data_view);
    }

    /**
     * View data file form excel
     * @param Request $request
     */
    public function raw(Request $request) {

        $item = NULL;
        $categories = NULL;

        $params = $request->all();
        $params['id'] = $request->get('id', NULL);

        if (!empty($params['id'])) {

            $item = $this->obj_item->selectItem($params, FALSE);

            if (empty($item)) {
                return Redirect::route($this->root_router . '.list')
                    ->withMessage(trans($this->plang_admin . '.actions.edit-error'));
            }
        }

        //get categories by context
        $context = $this->obj_item->getContext($this->category_ref_name);
        if ($context) {
            $params['context_id'] = $context->context_id;
            $categories = $this->obj_category->pluckSelect($params);
        }

        //get data from file excel
        $category = $this->obj_category->getCategoryById($item->category_id);

        if ($category->category_name == 'User') {
            $obj_parser = new UserPexcelParser();
            $items = $obj_parser->readData($item, $category->category_name);
        }

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'items' => $items,
            'categories' => $categories,
            'request' => $request,
            'context' => $context,
            'statuses' => $this->statuses,
        ));
        return view($this->page_views['admin']['view'], $this->data_view);
    }

    /**
     * Delete existing item
     * @return view list of items
     * @date 27/12/2017
     */
    public function restore(Request $request) {

        $item = NULL;
        $flag = TRUE;
        $params = array_merge($this->getUser(), $request->all());
        $id = (int)$request->get('id');
        $ids = $request->get('ids');

        $is_valid_request = $this->isValidRequest($request);

        if ($is_valid_request && (!empty($id) || !empty($ids))) {

            $ids = !empty($id)?[$id]:$ids;

            foreach ($ids as $id) {

                $params['id'] = $id;

                if (!$this->obj_item->restoreItem($params)) {
                    $flag = FALSE;
                }
            }
            if ($flag) {
                return Redirect::route($this->root_router.'.pexcel.list')
                    ->withMessage(trans($this->plang_admin.'.actions.restore-ok'));
            }
        }

        return Redirect::route($this->root_router.'.pexcel.list')
            ->withMessage(trans($this->plang_admin.'.actions.restore-error'));
    }

}
