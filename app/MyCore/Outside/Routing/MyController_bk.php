<?php

namespace App\MyCore\Outside\Routing;

use App\Http\Models\Outside\Menus;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Outside\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use App\Http\Models\Outside\Api;
use App\MyCore\Outside\Helpers\Slug;
use App\Http\Models\Outside\CategoryArticleMaps;
use App\Http\Models\Outside\CategoryBannerMaps;
use Cookie;

class MyController extends Controller {

    public $data = array();
    public $request = null;
    public $user = null;
    public $api = null;
    public $configs = array();

    public function __construct($options = array()) {
        $action = app('request')->route()->getAction();
        $controller = class_basename($action['controller']);
        list($controller, $action) = explode('@', $controller);
        $this->data['moduleName'] = 'outside';

        $this->data['controllerNameDefault'] = $controller;
        $this->data['actionNameDefault'] = $action;


        $this->data['listSlugs'] = Slug::make();
        $this->data['pageTitle'] = "myFinder";

        $treeMenu = Menus::getTreeMenu('top_header');
        $this->data['listMenu'] = $this->setActiveMenu($treeMenu);

        $this->data['listfooterMenu'] = Menus::getTreeMenu('footer');
        $this->data['footerRecruitment'] = CategoryArticleMaps::getListByCategoryId(ARTICLE_ID_RECURUITMENT, null, 3)->get()->toArray();


        //$this->api = new Api();
        //$menusTop = $this->api->getMenusBySectionName('top');
        //$this->data['menusTop'] = $menusTop;
        //$this->configs = $this->api->getConfigs();
        //$this->data['configs'] = $this->configs;
        //$articlesNew = $this->api->getContentByCategoryId(8);
        //$this->data['articlesNew'] = $articlesNew;
    }

    /**
     * push data xuống view
     *
     * @return mixed
     *
     */
    public function buildDataView($data = array()) {
        extract($data);
        return call_user_func_array('compact', array_keys($data));
    }

    /**
     * chỉnh sửa hình trong content bài viết
     *
     * @return $image
     * @author TrungDC
     */
    public function retouchImage($htmlString) {
        $newDom = new \DOMDocument();
        @$newDom->loadHTML($htmlString);

        $tags = $newDom->getElementsByTagName('img');

        if (count($tags) > 0) {
            foreach ($tags as $tag) {
                $src = $tag->getAttribute('src');
                $newSrc = "/thumb.php?src=$src&w=540&h=330";
                $tag->setAttribute('src', $newSrc);
                $tag->removeAttribute('style');
            }

            return $newDom->saveHTML();
            ;
        }

        return $tag;
    }

    /**
     * gán class active cho menu
     *
     * @return $list
     *
     */
    public function setActiveMenu($treeMenu) {
        $uri = $_SERVER['REQUEST_URI'];
        $request = app('request')->route()->parameters();
        $categoryId = isset($request['categoryId']) ? $request['categoryId'] : 0;
        $tree = $treeMenu;
        if (!empty($treeMenu)) {
            foreach ($treeMenu as $key => $menu) {
                $menuLink = $menu['link_url'];
                $isChildActive = false;
                $isLinkActive = false;
                $categoryString = '-c' . $categoryId . '.html';
                $menuLink = $menu['link_url'];
                if ($categoryId > 0) {
                    $isLinkActive = strpos($menuLink, $categoryString);
                }
                if ($isLinkActive || $menuLink === $uri) {
                    $tree[$key]['class'] = 'active';
                    break;
                }
                $childs = $menu['children'];
                if (!empty($childs)) {
                    foreach ($childs as $keyChild => $child) {
                        $menuLink = $child['link_url'];
                        if ($categoryId > 0) {
                            $isLinkActive = strpos($menuLink, $categoryString);
                        }
                        if ($isLinkActive || $child['link_url'] === $uri) {
                            $childs[$keyChild]['class'] = 'active';
                            $isChildActive = true;
                            break;
                        }
                    }
                }
                if ($isChildActive) {
                    $tree[$key]['class'] = 'active';
                    $tree[$key]['children'] = $childs;
                    break;
                }
            }
        }
        return $tree;
    }

}
