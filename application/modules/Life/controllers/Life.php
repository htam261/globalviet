<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Life extends MY_Controller
{

    private $module = 'life';
    private $user = 'user';
    private $table = 'life';
    private $site_lang = 'vn';

    function __construct()
    {
        parent::__construct();
        $this->load->model($this->module . '_model', 'model');
        $this->load->model('media/media_model', 'media');
        $this->load->model('admincp_modules/admincp_modules_model');
        $this->load->model('category/category_model', 'category');
        $this->load->model('admincp/admincp_model', 'admin');

        $this->load->model($this->user . '_model', "model");//thinh add
        if ($this->uri->segment(1) == 'admincp') {

            if ($this->uri->segment(2) != 'login') {
                if (!$this->session->userdata('userInfo')) {
                    header('Location: ' . PATH_URL . 'admincp/login');
                    return false;
                }
                $get_module = $this->admincp_modules_model->check_modules($this->uri->segment(2));
                $this->session->set_userdata('ID_Module', $get_module[0]->id);
                $this->session->set_userdata('Name_Module', $get_module[0]->name);
            }

            $this->template->set_template('admin');
            $this->template->write('title', 'Admin Control Panel');


        }

        $this->form_validation->set_message('required', 'Bạn chưa nhập %s');
        $this->site_lang = $this->session->userdata('site_lang');
    }

    /*------------------------------------ Admin Control Panel ------------------------------------*/
    public function admincp_index()
    {
        modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'r', 0);
        $default_func = 'order_num';
        $default_sort = 'ASC';
        $data = array(
            'module' => $this->module,
            'module_name' => $this->session->userdata('Name_Module'),
            'default_func' => $default_func,
            'default_sort' => $default_sort
        );

        $this->template->write_view('content', 'BACKEND/index', $data);
        $this->template->render();
    }


    public function admincp_update($id = 0)
    {
        if ($id == 0) {
            modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'w', 0);
        } else {
            modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'r', 0);
        }
        $result[0] = array();
        if ($id != 0) {
            $result = $this->model->getDetailManagement($id);
        }
        $data = array(
            'result' => $result[0],
            'module' => $this->module,
            'id' => $id,
            'categories' => $this->category->getParentAll(null)
        );

        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        $this->ckeditor->basePath = base_url() . 'static/asset/ckeditor/';
//            $this->ckeditor->config['toolbar'] = array(
//                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
//            );
        //            //Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor, '/static/asset/ckfinder/');


        $this->template->write_view('content', 'BACKEND/ajax_editContent', $data);
        $this->template->render();
    }

    public function admincp_save()
    {
        //pr($_FILES,1);
        $perm = modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'w', 1);
        if ($perm == 'permission-denied') {
            print $perm;
            exit;
        }
        if ($_POST) {
            //Upload Image
            $fileName = array('thumbnail' => '', 'thumb' => '');
            if (!$this->input->post('removeThumbnailAdmincp') && $_FILES) {
                foreach ($fileName as $k => $v) {
                    if (isset($_FILES['fileAdmincp']['error'][$k])) {
                        $typeFileImage = strtolower(substr($_FILES['fileAdmincp']['type'][$k], 0, 5));
                        if ($typeFileImage == 'image') {
                            $tmp_name[$k] = $_FILES['fileAdmincp']["tmp_name"][$k];
                            $file_name[$k] = $_FILES['fileAdmincp']['name'][$k];
                            $ext = strtolower(substr($file_name[$k], -4, 4));
                            if ($ext == 'jpeg') {
                                $fileName[$k] = time() . '_' . SEO(substr($file_name[$k], 0, -5)) . '.jpg';
                            } else {
                                $fileName[$k] = time() . '_' . SEO(substr($file_name[$k], 0, -4)) . $ext;
                            }
                        } else {
                            print 'Only upload Image.';
                            exit;
                        }
                    }
                }
            }

            //End Upload Image

            if ($this->model->saveManagement($fileName)) {
                //Upload Image
                if ($_FILES) {
                    foreach ($fileName as $k => $v) {
                        if (isset($_FILES['fileAdmincp']['error'][$k])) {
                            $upload_path = BASEFOLDER . DIR_UPLOAD_NEWS;
                            //  return $upload_path;die;
                            move_uploaded_file($tmp_name[$k], $upload_path . $fileName[$k]);
                        }
                    }
                }
                //End Upload Image
                print 'success';
                exit;
            }
        }
    }

    public function admincp_delete()
    {
        $perm = modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'd', 1);
        if ($perm == 'permission-denied') {
            print $perm;
            exit;
        }
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $result = $this->model->getDetailManagement($id);
            modules::run('admincp/saveLog', $this->module, $id, 'Delete', 'Delete');
            $this->db->where('id', $id);
            if ($this->db->delete(PREFIX . $this->table)) {
                //Xóa hình khi Delete
                @unlink(BASEFOLDER . DIR_UPLOAD_LIFE . $result[0]->thumbnail);
                return true;
            }
        }
    }

    public function admincp_ajaxLoadContent()
    {//var_dump($this->uri->segment(3));exit();
        if ($catid = $this->input->get('catid')) {
            $this->load->library('Adminpagination');
            $config['total_rows'] = $this->model->getTotalsearchContentCat($catid);
            $config['per_page'] = $this->input->post('per_page');
            $config['num_links'] = 3;
            $config['func_ajax'] = 'searchContent';
            $config['start'] = $this->input->post('start');
            $this->adminpagination->initialize($config);

            $result = $this->model->getsearchContentCat($catid, $config['per_page'], $this->input->post('start'));
            $data = array(
                'result' => $result,
                'per_page' => $this->input->post('per_page'),
                'start' => $this->input->post('start'),
                'module' => $this->module
            );
            $this->session->set_userdata('start', $this->input->post('start'));
            $this->load->view('BACKEND/ajax_loadContent', $data);
        } else {


            $this->load->library('Adminpagination');
            $config['total_rows'] = $this->model->getTotalsearchContent();
            $config['per_page'] = $this->input->post('per_page');
            $config['num_links'] = 3;
            $config['func_ajax'] = 'searchContent';
            $config['start'] = $this->input->post('start');
            $this->adminpagination->initialize($config);

            $result = $this->model->getsearchContent($config['per_page'], $this->input->post('start'));
            $data = array(
                'result' => $result,
                'per_page' => $this->input->post('per_page'),
                'start' => $this->input->post('start'),
                'module' => $this->module
            );
            $this->session->set_userdata('start', $this->input->post('start'));
            $this->load->view('BACKEND/ajax_loadContent', $data);
        }
    }

    public function admincp_ajaxUpdateActive()
    {
        $perm = modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'w', 1);
        if ($perm == 'permission-denied') {
            print '<script type="text/javascript">show_perm_denied()</script>';
            $active = $this->input->post('active');
            $data = array(
                'active' => $active
            );
        } else {
            if ($this->input->post('active') == 0) {
                $active = 1;
            } else {
                $active = 0;
            }
            $data = array(
                'active' => $active
            );
            modules::run('admincp/saveLog', $this->module, $this->input->post('id'), 'active', 'update', $this->input->post('active'), $active);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update(PREFIX . $this->table, $data);
        }

        $update = array(
            'active' => $active,
            'id' => $this->input->post('id'),
            'module' => $this->module
        );
        $this->load->view('BACKEND/ajax_updateActive', $update);
    }

    public function admincp_ajaxUpdateHot()
    {
        $perm = modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'w', 1);
        if ($perm == 'permission-denied') {
            print '<script type="text/javascript">show_perm_denied()</script>';
            $active = $this->input->post('hot');
            $data = array(
                'hot' => $active
            );
        } else {
            if ($this->input->post('hot') == 0) {
                $active = 1;
            } else {
                $active = 0;
            }
            $data = array(
                'hot' => $active
            );
            modules::run('admincp/saveLog', $this->module, $this->input->post('id'), 'hot', 'update', $this->input->post('hot'), $active);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update(PREFIX . $this->table, $data);
        }

        $update = array(
            'hot' => $active,
            'id' => $this->input->post('id'),
            'module' => $this->module
        );
        $this->load->view('BACKEND/ajax_updateHot', $update);
    }

    public function admincp_ajaxUpdateHome()
    {
        $perm = modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'w', 1);
        if ($perm == 'permission-denied') {
            print '<script type="text/javascript">show_perm_denied()</script>';
            $active = $this->input->post('home');
            $data = array(
                'home' => $active
            );
        } else {
            if ($this->input->post('home') == 0) {
                $active = 1;
            } else {
                $active = 0;
            }
            $data = array(
                'home' => $active
            );
            modules::run('admincp/saveLog', $this->module, $this->input->post('id'), 'home', 'update', $this->input->post('home'), $active);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update(PREFIX . $this->table, $data);
        }

        $update = array(
            'home' => $active,
            'id' => $this->input->post('id'),
            'module' => $this->module
        );
        $this->load->view('BACKEND/ajax_updateHome', $update);
    }

    public function admincp_ajaxUpdateSort()
    {
        $perm = modules::run('admincp/chk_perm', $this->session->userdata('ID_Module'), 'w', 1);
        if ($perm == 'permission-denied') {
            print '<script type="text/javascript">show_perm_denied()</script>';
        } else {
            $vl = $this->input->get('vl');
            $this->db->set('order_num', $vl);
            $this->db->where('id', $this->input->get('id'));
            $this->db->update(PREFIX . $this->table);

            modules::run('admincp/saveLog', $this->module, $this->input->post('id'), 'order', 'update', $this->input->post('vl'));

        }

    }
    /*------------------------------------ End Admin Control Panel --------------------------------*/

    /*------------------------------------ FRONTEND ------------------------------------*/
    public function index()
    {
//var_dump($this->session->userdata('site_lang'));//exit();
        $data = array();
        //About US
       /* $slug_cat = 'about';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['gioithieu'] = array('list_article' => $this->model->list_article_all($cat_id, 3, 0),
                'slug_cat' => $slug_cat);
            // var_dump($data);exit();
        }
        $slug_cat = 'article';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['tintucsukien'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 3, 0),
                'slug_cat' => $slug_cat);
            $data['counttintucsukien'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
            //var_dump( $data['counttintucsukien']);exit();
        }
        $slug_cat = 'products-services';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            // $data['sanphamdichvu'] = array('list_article' => $this->model->list_article_all_g($cat_id, 30, 4),
            $data['sanphamdichvu'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 4, 0),
                'slug_cat' => $slug_cat);
            $data['countsanphamdichvu'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
            //var_dump($data['countsanphamdichvu']);exit();
        }*/

        if($this->session->userdata('site_lang')!='en'){
            $slug_cat = 'chung-toi-co-the-giup-ban-tim-mot-vai-thu';
        }
        else{
            $slug_cat = 'can-we-help-you-find-something';
        }

        if (!($detailinfo = $this->model->getSingleNewsDetail($slug_cat))) {//var_dump("b");exit();
            redirect(site_url());
        }
        /* $slug_cat = 'san-pham-thuong-mai';
         if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
             $data['sanphamdichvu'] = array('list_article' => $this->model->list_article_all_g($cat_id, 38, 2),
                 'slug_cat' => $slug_cat);
             //var_dump($data);exit();
         }
         $slug_cat = 'dich-vu-ki-thuat';
         if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
             $data['sanphamdichvu'] = array('list_article' => $this->model->list_article_all_g($cat_id, 39, 2),
                 'slug_cat' => $slug_cat);
             //var_dump($data);exit();
         }
 */
        $data['info'] = $detailinfo;
        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/index', $data);
        $this->template->render();
    }

    public function aboutus()
    {
        $data = array();
        if($this->session->userdata('site_lang')!='en'){
            $slug_cat = 'gioi-thieu-ve-globalviettravel';
        }
        else{
            $slug_cat = 'about-globalviettravel';
        }

        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }
        $cat = $this->model->getCategoryById($detail->catid);
        $data["cat"] = $cat;
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP
//var_dump($detail);exit();
        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;
        $this->template->set_template('life');//var_dump($data);exit();
        $this->template->write_view('content', 'FRONTEND/aboutus', $data);
        $this->template->render();

    }

    public function abouturl($urlcat)
    {
        $data = array();
        $slug_cat = $urlcat;
        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }
        $cat = $this->model->getCategoryById($detail->catid);
        $data["cat"] = $cat;
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP

        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;
        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/gioithieu', $data);
        $this->template->render();

    }

    public function sanphamdichvu()
    {
        $data = array();
        $slug_cat = 'cac-tien-bo-ky-thuat';
        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }
        $cat = $this->model->getCategoryById($detail->catid);
        $data["cat"] = $cat;
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP

        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/sanphamdichvu', $data);
        $this->template->render();

    }

    public function sanphamdichvuurl($urlcat)
    {
        $data = array();
        $slug_cat = $urlcat;
        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }
        $slug_cat = 'commercial-products';//'san-pham-thuong-mai';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['sanphamthuongmai'] = array('list_article' => $this->model->list_article_all_g($cat_id, 38, 5),
                'slug_cat' => $slug_cat);
            //var_dump($data);exit();
        }
        $slug_cat = 'technical-services';//'dich-vu-ki-thuat';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['dichvukithuat'] = array('list_article' => $this->model->list_article_all_g($cat_id, 39, 4),
                'slug_cat' => $slug_cat);
            //var_dump($data);exit();
        }
        $cat = $this->model->getCategoryById($detail->catid);
        $data["cat"] = $cat;
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP

        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/sanphamdichvu', $data);
        $this->template->render();

    }

    public function sukien()
    {
        $data = array();
        $slug_cat = 'article';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['tintucsukien'] = array('list_article' => $this->model->list_article_all($cat_id, 20, 0),
                'slug_cat' => $slug_cat);
            $data['counttintucsukien'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
        }
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['tintucsukientop2'] = array('list_article' => $this->model->list_article_all_g($cat_id, 25, 2),
                'slug_cat' => $slug_cat);
            $data['tintucsukienramdom'] = array('list_article' => $this->model->getRandomNewsNotTop($cat_id, 6),
                'slug_cat' => $slug_cat);
            //var_dump($data);exit();
        }
        /*  $slug_cat = 've-chung-toi';
          if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
              redirect(site_url());
          }
          $cat = $this->model->getCategoryById($detail->catid);
          $data["cat"] = $cat;


          $data['cat_slug'] = $slug_cat;
          $data['result'] = $detail;
          $this->template->set_template('life');*/

        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP
        $this->template->write_view('content', 'FRONTEND/tintucsukien', $data);
        $this->template->render();

    }

    public function sukienpage($numpage)
    {
        if ($numpage == null || $numpage == '') {
            $numpage = 0;
        }
        settype($numpage, "int");
        if ($numpage <= 0) {
            $numpage = 0;
        }
        $data = array();
        $startRow = ($numpage - 1) * 2;
        $slug_cat = 'article';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['tintucsukien'] = array('list_article' => $this->model->list_article_all($cat_id, 20, $startRow),
                'slug_cat' => $slug_cat);
            $data['counttintucsukien'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
        }
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['tintucsukientop2'] = array('list_article' => $this->model->list_article_all_g($cat_id, 25, 2),
                'slug_cat' => $slug_cat);
            $data['tintucsukienramdom'] = array('list_article' => $this->model->getRandomNewsNotTop($cat_id, 6),
                'slug_cat' => $slug_cat);
            //var_dump($data);exit();
        }
        /*  $slug_cat = 've-chung-toi';
          if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
              redirect(site_url());
          }
          $cat = $this->model->getCategoryById($detail->catid);
          $data["cat"] = $cat;


          $data['cat_slug'] = $slug_cat;
          $data['result'] = $detail;
          $this->template->set_template('life');*/

        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP
        $this->template->write_view('content', 'FRONTEND/tintucsukien', $data);
        $this->template->render();

    }

    public function sukienurldetail($urlcat)
    {
        $data = array();
        $slug_cat = $urlcat;
        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }//var_dump($detail);exit();
        $slug_catdetaill = 'article';
        if (($cat_id = $this->model->checkCatSlug($slug_catdetaill))) {
            $data['tintucsukientop2'] = array('list_article' => $this->model->list_article_all_g($cat_id, 25, 2),
                'slug_cat' => $slug_cat);
            $data['tintucsukienramdom'] = array('list_article' => $this->model->getRandomNewsNotTop($cat_id, 6),
                'slug_cat' => $slug_cat);
            //var_dump($data);exit();
        }
        //$cat = $this->model->getCategoryById($detail->catid);
        //$data["cat"] = $cat;
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP

        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;
        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/tintucsukiendetail', $data);
        $this->template->render();

    }

    public function hoatdongnghiengcuu()
    {
        $data = array();
        $slug_cat = 'research-project';//'de-tai-nghien-cuu';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['hoatdongrd'] = array('list_article' => $this->model->list_article_all($cat_id, 32, 0),
                'slug_cat' => $slug_cat);
            // var_dump($data);exit();
        }

        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/hoatdong', $data);
        $this->template->render();

    }

    public function event()
    {
        $data = array();
        $slug_cat = 'event';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['eventarticle'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 20, 0),
                'slug_cat' => $slug_cat);
            $data['counteventarticle'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
            $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent($cat_id));//lay danh muc con tu danh muc cha của catagory
            //var_dump($datas);exit();
        }
        $data['activemenu'] = $slug_cat;//alias
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/event', $data);
        $this->template->render();

    }

    public function eventdetail($urlcat)
    {
        $data = array();
        $slug_cat = $urlcat;
        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }
        if (($cat_id = $this->model->checkCatSlug('event'))) {
            $data['eventarticle'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 20, 0),
                'slug_cat' => $slug_cat);
            $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent($cat_id));//lay danh muc con tu danh muc cha của catagory
            //var_dump($datas);exit();
        }
        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;

        $data['activemenu'] = $slug_cat;//alias
        // var_dump($data);exit();
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/eventdetail', $data);
        $this->template->render();

    }

    public function eventurl($urlcat, $listid)
    {
        $data = array();
        $slug_cat = $urlcat;
        if (($cat_id = $this->model->checkCatSlugNotLang($slug_cat))) {
            $data['eventarticle'] = array('list_article' => $this->model->list_article_all($cat_id, 20, 0),
                'slug_cat' => $slug_cat);
            $data['counteventarticle'] = $this->model->list_article_all_catagory_count_article_all($cat_id);

            if($this->session->userdata('site_lang')!='en'){
                $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent(2));
            }
            else{
                $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent(16));
            }
            //lay danh muc con tu danh muc cha của catagory
            //var_dump($data);exit();
        }
        $data['activemenu'] = $urlcat;//alias
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/event', $data);
        $this->template->render();

    }

    public function eventurlpage($urlcat, $listid, $numpage = 0)
    {
        if ($numpage == null || $numpage == '') {
            $numpage = 0;
        }
        settype($numpage, "int");
        if ($numpage <= 0) {
            $numpage = 0;
        }
        $data = array();
        $startRow = ($numpage - 1) * 2;
        $slug_cat = $urlcat;
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['eventarticle'] = array('list_article' => $this->model->list_article_all($cat_id, 20, $startRow),
                'slug_cat' => $slug_cat);
            $data['counteventarticle'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
            $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent($cat_id));//lay danh muc con tu danh muc cha của catagory
            // var_dump($data);exit();
        }
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/event', $data);
        $this->template->render();

    }

    public function eventpage($numpage = 0)
    {
        if ($numpage == null || $numpage == '') {
            $numpage = 0;
        }
        settype($numpage, "int");
        if ($numpage <= 0) {
            $numpage = 0;
        }
        $data = array();
        $startRow = ($numpage - 1) * 2;
        $slug_cat = 'Event';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['eventarticle'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 20, $startRow),
                'slug_cat' => $slug_cat);//var_dump($data);exit();
            $data['counteventarticle'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
            $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent($cat_id));//lay danh muc con tu danh muc cha của catagory
        }

        $data['activemenu'] = $slug_cat;//alias
        $this->template->set_template('life');
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP
        $this->template->write_view('content', 'FRONTEND/sukienpage', $data);
        $this->template->render();

    }

    public function services()
    {
        $data = array();

        $slug_cat = 'services';

        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {//var_dump($cat_id);exit();
            $data['servicesarticle'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 20, 0),
                'slug_cat' => $slug_cat);
            $data['countservicesarticle'] = $this->model->list_article_all_catagory_count_article_all($cat_id);
            $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent($cat_id));//lay danh muc con tu danh muc cha của catagory

        }

        $data['activemenu'] = $slug_cat;//alias
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/services-1', $data);
        $this->template->render();

    }

    public function servicesurl($urlcat, $listid)
    {
        $data = array();
        $slug_cat = $urlcat;
        if (($cat_id = $this->model->checkCatSlugNotLang($slug_cat))) {
            $data['servicesarticle'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 20, 0),
                'slug_cat' => $slug_cat);
            $data['countservicesarticle'] = $this->model->list_article_all_catagory_count_article_all($cat_id);

            if($this->session->userdata('site_lang')!='en'){
                $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent(8));
            }
            else{
                $data['eventmenu'] = array('list_article' => $this->model->list_catagory_from_parent(15));
            }
            //lay danh muc con tu danh muc cha của catagory
            //var_dump($data);exit();
        }
        $data['activemenu'] = $urlcat;//alias
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/services-1', $data);
        $this->template->render();

    }

    public function servicesdetail($urlcat)
    {//var_dump($urlcat);
        $data = array();
        $slug_cat = $urlcat;
        if (!($detail = $this->model->getSingleNewsDetail($slug_cat))) {
            redirect(site_url());
        }
        if (($cat_id = $this->model->checkCatSlug('services'))) {
            $data['servicesarticle'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 12, 0),
                'slug_cat' => $slug_cat);
            $data['servicesmenu'] = array('list_article' => $this->model->list_catagory_from_parent($cat_id));//lay danh muc con tu danh muc cha của catagory

            $data['servicesimg'] = array('list_article' => $this->model->list_img_from_life_slider_with_position($urlcat));
            // var_dump($datas);exit();
        }
        $data['cat_slug'] = $slug_cat;
        $data['result'] = $detail;

        $data['activemenu'] = $slug_cat;//alias
        // var_dump($data);exit();
        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/service-trangtrong-1a', $data);
        $this->template->render();

    }

    public function hoatdonghoinghihoithao()
    {
        $data = array();
        $slug_cat = 'hoi-nghi-hoi-thao';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['hoatdongrd'] = array('list_article' => $this->model->list_article_all($cat_id, 33, 0),
                'slug_cat' => $slug_cat);
        }

        $this->template->set_template('life');

        $this->template->write_view('content', 'FRONTEND/hoatdong', $data);
        $this->template->render();

    }

    public function hoatdonglist($urlcat, $listid)
    {

        $data = array();
        $slug_cat = $urlcat;
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['hoatdongrd'] = array('list_article' => $this->model->list_article_all($cat_id, $listid, 0),
                'slug_cat' => $slug_cat);
        }
        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/hoatdong', $data);
        $this->template->render();

    }

    public function contactus()
    {
        // var_dump("a");exit();
        $data = array();
        $slug_cat = 'address';
        if (!($detailinfo = $this->model->getSingleNewsDetail($slug_cat))) {//var_dump("b");exit();
            redirect(site_url());
        }
        $slug_catpoint = 'maps-dia-diem';
        if (!($detailpoint = $this->model->getSingleNewsDetail($slug_catpoint))) {//var_dump("b");exit();
            redirect(site_url());
        }
        $data['info'] = $detailinfo;
        $data['point'] = $detailpoint;
        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/lienhe', $data);
        $this->template->render();
    }
   /* public function subddd()
    {
        $data=array();
        $this->load->view("FRONTEND/formsu", $data);

    }*/
    public function login()
    {

        $this->is_logged_in();
        if( ! empty( $this->auth_role ) )
        {
            /** auth_role : admin, manager */
                var_dump($this->auth_role,$this->auth_user_id,$this->auth_user_name);
        }
        $data=array();
        if ($this->input->post(null, TRUE)) {
            $this->require_min_level(1);
        }

        $this->setup_login_form();

        $this->template->write_view('content', 'FRONTEND/login', $data);
        $this->template->render();
    }
    public function logout()
    {
        $this->authentication->logout();
        redirect( secure_site_url( LOGIN_PAGE . '?logout=1') );

    }
    public function _login()
    {
        $data = array();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->form_validation->set_message('required', 'Bạn chưa nhập %s');
        $this->form_validation->set_rules('login_string', 'Tên Truy Cập', 'trim|required');
        $this->form_validation->set_rules('login_pass', 'Mật Khẩu', 'trim|required');
        if ($this->input->post(null, TRUE)) {
            $postData = $this->input->post(null, TRUE);//lay ham post tren trang
            if (strtolower($this->session->userdata('captchaword')) == strtolower($postData['captcha']))
                if ($this->form_validation->run($this) === false) {
                    var_dump("a");
                    exit();
                    $cap = $this->_create_captcha();
                    $data['captcha'] = $cap['image'];
                    $this->template->write_view('content', 'FRONTEND/login', $data);
                } else if ($this->user->login($postData['username'], $postData['password'])) {
                    var_dump("b");
                    exit();
                    $this->template->write_view('content', 'FRONTEND/loginsuccess', null);
                } else {
                    var_dump("c");
                    exit();
                    $cap = $this->_create_captcha();
                    $data['captcha'] = $cap['image'];
                    $this->template->write_view('content', 'FRONTEND/login', $data);
                }
            else {
                var_dump("d");
                exit();
                $cap = $this->_create_captcha();
                $data['captcha'] = $cap['image'];
                $this->template->write_view('content', 'FRONTEND/login', $data);
            }

        } else {
            $cap = $this->_create_captcha();
            $data['captcha'] = $cap['image'];
            $this->template->write_view('content', 'FRONTEND/login', $data);
        }

        $this->template->render();
    }
    public  function  bookingcarauto()
    {   //$this->model->Auto_increment("id","booking_car");

        $data=array();
        $this->is_logged_in();

        if( ! empty( $this->auth_role ) )
        {
          //  var_dump($this->auth_role,$this->auth_user_id,$this->auth_fullname,$this->auth_email,$this->auth_phone);exit();
        }
        $data['b_err'] = array('err' => "Chưa có thông tin");
        if($postData =$this->input->post(null, TRUE))
        {//var_dump($this->input->post('txtcapcha')."---------".$this->session->userdata('captchaword'));exit();

            if (!empty($this->auth_role)) {
                if ($this->checkbooking()) {

                    $return = $this->model->Savebooking($this->auth_user_id);

                    if ($return) {
                        try {
                            $this->sendemailbookingcar();
                        } catch (Exception $e) {
                            $u=null;
                            // echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                        $return = "Đặt xe thành công";
                    } else {
                        $return = "Có sự cố xảy ra liên hệ quản lý";
                    }
                    $data['b_err'] = array('err' => $return);
                } else {
                    $data['b_err'] = array('err' => "Chưa đúng thông tin dữ liệu");
                }

            }
            else{
                if($this->checkbookingfull())
                {
                    $code="";
                    if(!$this->input->post('txtCode'))
                    {
                        $code="550000"+$this->model->Auto_increment("id","booking_car");
                    }
                    $return = $this->model->Savebookingfull($code);
                    $filtermail=filter_var($this->input->post('txtemail'),FILTER_VALIDATE_EMAIL);
                   // var_dump($filtermail);exit();
                    if ($return) {
                        if($filtermail) {
                            try {
                                $this->sendemailbookingcar();
                            } catch (Exception $e) {
                                $u = null;
                                // echo 'Caught exception: ',  $e->getMessage(), "\n";
                            }
                        }
                        $return = "Đặt xe thành công";
                    } else {
                        $return = "Có sự cố xảy ra liên hệ quản lý";
                    }
                    $data['b_err'] = array('err' => $return);
                }
                else{
                    $data['b_err'] = array('err' => "Chưa đúng thông tin dữ liệu");
                   // $data['b_err'] = array('err' => "Chưa được đăng nhập");
                }
            }

        }
        $data['b_author'] = array('author' => "0");
        if($this->auth_role)
        {
            $data['b_author'] = array('author' => "1");
        }


        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/bookinginfo', $data);

        $this->template->render();
    }
    public  function  bookingcar()
    {
        $data=array();
        $this->is_logged_in();//var_dump($this->auth_role);exit();
        if($postData =$this->input->post(null, TRUE))
        {
            if (!empty($this->auth_role)) {
                if ($this->checkbooking()) {

                    $return = $this->model->Savebooking($this->auth_user_id);
                    if ($return) {
                        $return = "Đặt xe thành công";
                    } else {
                        $return = "Có sự cố xảy ra liên hệ quản lý";
                    }
                    $data['b_err'] = array('err' => $return);
                } else {
                    $data['b_err'] = array('err' => "Chưa đúng thông tin dữ liệu");
                }

            } else {
                $data['b_err'] = array('err' => "Chưa được đăng nhập");
            }
        }
        $data['b_author'] = array('author' => "0");
        if($this->auth_role)
        {
            $data['b_author'] = array('author' => "1");
        }


        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/bookinginfo', $data);

        $this->template->render();
    }
    function checkbooking()
    {
        if(!$this->input->post('Type'))
        {
            return false;
        }
        if(!$this->input->post('from'))
        {
            return false;
        }
        if(!$this->input->post('To'))
        {
            return false;
        }
        if(!$this->input->post('date'))
        {
            return false;
        }
       /* if(!$this->input->post('code'))
        {
            return false;
        }*/
        return true;
    }
    function checkbookingfull()
    {
        if(!$this->input->post('Type'))
        {//var_dump("null type");exit();
            return false;
        }
        if(!$this->input->post('from'))
        {//var_dump("null from");exit();
            return false;
        }
        if(!$this->input->post('To'))
        {//var_dump("null to");exit();
            return false;
        }
        if(!$this->input->post('date'))
        {//var_dump("null date");exit();
            return false;
        }
        $date = new DateTime($this->input->post('date'));
        $date= $date->format('Y/m/d H:i:s');
        $today = date("Y/m/d H:i:s");
        //var_dump($date."------".$today);exit();
        if($date<$today)
        {//var_dump("< day");exit();
            return false;
        }
        if(!$this->input->post('txtphone'))
        {//var_dump("phone");exit();
            return false;
        }
        if(!$this->input->post('txtemail'))
        {//var_dump("txtemail");exit();
            return false;
        }
         if(!$this->input->post('txtcapcha'))
         {
             //var_dump("capcha");exit();
             return false;
         }
        if(strtolower($this->input->post('txtcapcha')) != strtolower($this->session->userdata('captchaword')))
        {
            //var_dump("false capcha");exit();
            return false;
        }

        return true;
    }
    public function loginlogout()
    {
        $data=array();
        $this->is_logged_in();//var_dump($this->auth_rol);//exit();
        if( ! empty( $this->auth_role ) )
        {
            $data['checkcool']=array('zdata'=>true,'auth_role' =>$this->auth_role,'auth_user_name'=> $this->auth_fullname);//$this->auth_user_name);

        }
        else{
            $data['checkcool']=array('zdata'=>false);
        }
        //var_dump($data);exit();
        $this->load->view("FRONTEND/loginlogout", $data);

    }
    public  function  bookingform()
    {
        $slug_cat = 'article';
        $data['typecar'] = array('list_article' => $this->model->getTypeCar());
        $data['province'] = array('list_article' => $this->model->getProvince());

        $data['b_author'] = array('author' => "0");
        if($this->auth_role)
        {
            $data['b_author'] = array('author' => "1");
        }

        $data['typecode'] = 550000+$this->model->Auto_increment("id","booking_car");
        $cap = $this->_create_captcha();
        $data['captcha'] = $cap['image'];

        $this->load->view("FRONTEND/booking", $data);
    }
    public function register()
    {//var_dump($this->input->post(null, TRUE));
        $data = array();
        if($postData =$this->input->post(null, TRUE))
        {

                if($this->checkregister($data))
                {
                    $checksave=$this->model->saveregister($data);//var_dump($checksave);exit();
                    if($checksave)
                    {
                        $data['b_err']=array('err' =>"User " .$this->input->post('Email'). " was created.");
                        $this->template->set_template('life');
                        $this->template->write_view('content', 'FRONTEND/registerok', $data);
                    }
                    else{

                        $data['b_err']=array('err' =>"User Creation Error");
                        $this->template->set_template('life');
                        $this->template->write_view('content', 'FRONTEND/register', $data);
                    }
                }
                else{

                    $this->template->set_template('life');
                    $this->template->write_view('content', 'FRONTEND/register', $data);
                }

        }
        else{
          /*  $cap = $this->_create_captcha();
            $data['captcha'] = $cap['image'];*/
            $data['b_err']=array('err' =>"");
            $this->template->set_template('life');
            $this->template->write_view('content', 'FRONTEND/register', $data);
        }

        $this->template->render();
    }
    function  checkregister(&$data)
    {
        if(!$this->input->post('fullname'))
        {
            $data['b_err']=array('err' =>"Chưa nhập họ và tên");
            return false;
        }
        if(!$this->input->post('Email'))
        {
            $data['b_err']=array('err' =>"Chưa nhập Email");
            return false;
        }
        if(!$this->input->post('password'))
        {
            $data['b_err']=array('err' =>"Chưa nhập Password");
            return false;
        }
        if(!$this->input->post('numcard'))
        {
            $data['b_err']=array('err' =>"Nhập số CMND");
            return false;
        }
        if(!$this->input->post('phone'))
        {
            $data['b_err']=array('err' =>"Nhập số Phone");
            return false;
        }
        if(!$this->input->post('address'))
        {
            $data['b_err']=array('err' =>"Nhập địa chỉ");
            return false;
        }
        return true;
    }
    public function acticle($urlcat)
    {//var_dump($urlcat);
        settype($urlcat, "int");
        $data = array();
        $slug_cat = 'article';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            //  $data['tintucsukien'] = array('list_article' => $this->model->list_article_all($cat_id, 3,$urlcat),
            $data['tintucsukien'] = array('list_article' => $this->model->list_article_all_catagory($cat_id, 3, $urlcat),
                'slug_cat' => $slug_cat);
            // var_dump($data);exit();
        }
        $this->load->view("FRONTEND/tintucsmaill", $data);

    }

    public function gallery()
    {
        var_dump("a");
        exit();
        $data = array();
        $slug_cat = 'cong-trinh';
        if (($cat_id = $this->model->checkCatSlug($slug_cat))) {
            $data['congtrinh'] = array('list_article' => $this->model->list_article_all($cat_id, 50, 0),
                'slug_cat' => $slug_cat);
        }
        $this->template->set_template('life');
        $this->template->write_view('content', 'FRONTEND/gallery', $data);
        $this->template->render();
    }

    public function search()
    {
        $data = array();
        if ($this->input->get("q")) {
            $q = $this->input->get("q");
            if (!empty($q)) {

                $slug_catrd = 'activity-r-d';
                $slug_catrdservices = 'products-services';
                if (($cat_id = $this->model->checkCatSlug($slug_catrd))) {
                    $data['searchrd'] = array('list_article' => $this->model->getTotalsearchContentofcategory($cat_id)
                    );

                }
                if (($cat_idservices = $this->model->checkCatSlug($slug_catrdservices))) {
                    $data['searchservices'] = array('list_article' => $this->model->getTotalsearchContentofcategory($cat_idservices)
                    );
                    //  var_dump($data);exit();
                }
                $slug_catarticle = 'article';
                if (($cat_idarticle = $this->model->checkCatSlug($slug_catarticle))) {
                    $data['searcharticle'] = array('list_article' => $this->model->getTotalsearchContentofcategory($cat_idarticle)
                    );
                }
                /* $slug_cat1 = 'article';$slug_cat2 = 'research-project';$slug_cat3 = 'conference-seminars';
                 if (($cat_id1 = $this->model->checkCatSlug($slug_cat1))
                     &&($cat_id2 = $this->model->checkCatSlug($slug_cat2))
                     &&($cat_id3 = $this->model->checkCatSlug($slug_cat3))
                 ) {
                     $data['search'] = array('list_article' => $this->model->getTotalsearchContentofcategory($cat_id1)
                                             ,'list_article' => $this->model->getTotalsearchContentCatrep($cat_id2)
                                             ,'list_article' => $this->model->getTotalsearchContentCatrep($cat_id3)
                     );
                     var_dump($data);exit();
                 }*/
                $this->template->set_template('life');
                $this->template->write_view('content', 'FRONTEND/search', $data);
                $this->template->render();

            }
        } else {
            $data['search'] = array('slug_cat' => 'Chưa có từ khóa thích hợp');
            $this->template->write_view('content', 'FRONTEND/search', $data);
            $this->template->render();
        }

    }

    public function sendemail()
    {
        $result = array("message" => false);
        if ($this->input->post("ajax")) {
            $name = $this->input->post("Name");
            $phone = $this->input->post("Phone");
            $email = $this->input->post("Email");
            $msg = $this->input->post("EmailMsg");

            if (!empty($name) && !empty($phone) && !empty($email)) {

                if ($this->model->saveEnroll($name, $email, $phone)) {
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'mail.marvel-house.edu.vn',
                        'smtp_port' => '25',
                        'smtp_user' => 'info@marvel-house.edu.vn',
                        'smtp_pass' => 'marvel123'
                    );

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from($email, $name);
                    $this->email->to("info@marvel-house.edu.vn");
                    $this->email->subject('[MarvelHouse] Register');
                    $this->email->message("Name: $name \r\n Email: $email \r\n Phone: $phone, \r\n Message: $msg");
                    if ($this->email->send()) {
                        $result["message"] = lang("Success!");
                        $result["ret"] = true;
                    } else {
                        echo $this->email->print_debugger();
                    }

                } else {
                    $result["message"] = lang("Success!");
                    $result["ret"] = true;
                }

            }
        } else {
            $result["message"] = lang("Method is not valid!");
            $result["ret"] = false;
        }
        echo json_encode($result);
    }

    public function sentmailauto()
    {
        $result = array("message" => false);
        if ($this->input->post("ajax")) {
            // $result=true;
            $name = $this->input->post("Name");
            $phone = $this->input->post("Phone");
            $email = $this->input->post("Email");
            $msg = $this->input->post("EmailMsg");
            $result["message"] = "Đang thực thi";
            if (!empty($name) && !empty($phone) && !empty($email)) {

                if ($this->model->saveEnroll($name, $email, $phone)) {
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'mail.vnetwork.vn',
                        'smtp_port' => '25',
                        'smtp_user' => 'thinh.le@vnetwork.vn',
                        'smtp_pass' => 'Password@123'
                    );

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from($email, $name);
                    $this->email->to("thinh.le@vnetwork.vn");
                    $this->email->subject('[Contact us] Register');
                    $this->email->message("Name: $name \r\n Email: $email \r\n Phone: $phone, \r\n Message: $msg");
                    if ($this->email->send()) {
                        $result["message"] = "Success!";
                        $result["ret"] = true;
                    } else {
                        echo $this->email->print_debugger();
                    }

                } else {
                    $result["message"] = "Success!";
                    $result["ret"] = true;
                }

            }
        } else {
            $result = false;
            $result["message"] = "Chưa được thực thi";
            $result["ret"] = false;
        }
        echo json_encode($result);
    }
    public function sendemailbookingcar()
    {
        $result = array("message" => false);

            $Type = $this->input->post('Type');

            $returnType = $this->model->GetCar($Type);

            $from = $this->input->post('from');
            $returnfrom = $this->model->GetfromTo($from);

            $To = $this->input->post('To');
            $returnTo = $this->model->GetfromTo($To);

            $date = $this->input->post('date');

            //$phone = $this->input->post('txtphone');
           // $email = $this->input->post('txtemail');
            $phone="";
           // if(!$this->input->post('txtphone'))
           // {
             //   $phone=$this->input->post('txtphone');
           // }
            $email="";
           // if(!$this->input->post('txtemail'))
          //  {
           //     $email=$this->input->post('txtemail');
           // }
            $msg = " Chờ duyệt xe";

            $result["message"] = "Đang thực thi";
        $auth_user_id="";
       // if (!empty($this->auth_role)) {

            //$auth_user_id = $this->auth_user_id;
       // }else{
       //     $auth_user_id="";
       // }
        if( ! empty( $this->auth_role ) )
        {
            //  var_dump($this->auth_role,$this->auth_user_id,$this->auth_fullname,$this->auth_email,$this->auth_phone);exit();
            $auth_user_id=$this->auth_fullname;
            $email=$this->auth_email;
            $phone=$this->auth_phone;


        }else{
            $auth_user_id="";
            $email=$this->input->post('txtemail');
            $phone=$this->input->post('txtphone');
         }
           // if (!empty($name) && !empty($phone) && !empty($email)) {

                if ($this->model->saveEnroll($auth_user_id, $email, $phone)) {
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'mail.vnetwork.vn',
                        'smtp_port' => '25',
                        'smtp_user' => 'thinh.le@vnetwork.vn',
                        'smtp_pass' => 'Password@123'
                    );

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from($email, $auth_user_id);
                    $this->email->to("thinh.le@vnetwork.vn");
                    $this->email->subject('[Booking car] Set car');
                    $this->email->message("\r\n--------------Thông tin Xe--------------
                     \r\n Loại xe: $returnType
                     \r\n Nơi đi: $returnfrom
                     \r\n Nơi đến: $returnTo
                     \r\n Ngày đi: $date
                     \r\n --------------Thông tin khách hàng--------------
                     \r\n Email: $email
                     \r\n Phone: $phone
                     \r\n Message: $msg");
                    if ($this->email->send()) {
                        $result["message"] = "Success!";
                        $result["ret"] = true;
                    }
                    else {
                        echo $this->email->print_debugger();
                    }

                } //else {
              //      $result["message"] = "Success!";
              //      $result["ret"] = true;
              //  }

           // }

    }
    public function cat($slug_cat)
    {
        if (!($cat_id = $this->model->checkCatSlug($slug_cat))) {
            redirect(site_url());
        }
        $cat = $this->model->getCategoryById($cat_id);
        $data["cat"] = $cat;
        $ishome = 1;
        $this->model->update_view_ip($ishome); //Insert IP

        $config['base_url'] = site_url($slug_cat);
        $config['total_rows'] = $this->model->count_article_all($cat_id);
        $config['per_page'] = 5;
        $config['num_links'] = 10;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 2;
        $config['next_link'] = '&raquo;';
        $config['prev_link'] = '&laquo;';
        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link_class'] = 'pages-next float-right';
        $config['prev_link_class'] = 'pages-prew float-left';
        $start = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->load->library("pagination", $config);
        $data['pagination'] = $this->pagination->create_links();

        $data['cat_slug'] = $slug_cat;
        $data['results'] = $this->model->list_article_all($cat_id, $config['per_page'], $start);
        //check if ajax is called
        if ($this->input->post("life")) {
            $this->load->view("paging_view", $data);
        } else {
            $this->template->set_template('life');
            $this->template->write_view('content', 'FRONTEND/index', $data);
            $this->template->render();
        }
    }

    public function hoatdongdetaill($slug_detail)
    {
        $data['result'] = $this->model->getSingleNewsDetail($slug_detail);
        //  $data['relates'] = $this->model->getOlderNews($data['result']->id, 5);
        $this->model->update_view_page($slug_detail); // Insert View
        $this->model->update_view_ip(); //Insert IP
        if (!$data['result']) {
            header('Location: ' . PATH_URL . $this->uri->segment(1));
            exit;
        }
        $catid = $data['result']->catid;
        if ($catid != null || $catid != '') {
            settype($catid, "int");//var_dump($catid);exit();
            // $data['menulist']=$this->model->list_menu_root(31);var_dump($data);exit();
            $data['menulist'] = array('list_article' => $this->model->list_article_with_category($catid, 4));
        }
        $this->template->set_template('life');
        $this->template->write('title', $data['result']->title . '');
        $this->template->write('meta_image', DIR_UPLOAD_NEWS . $data['result']->thumbnail);
        $this->template->write('meta_description', $data['result']->summary);
        $this->template->write_view('content', 'FRONTEND/hoatdongdetaill', $data);
        $this->template->render();

    }

    public function detail($slug_detail)
    {
        var_dump("detail");
        exit();
        $data['result'] = $this->model->getSingleNewsDetail($slug_detail);
        $data['relates'] = $this->model->getOlderNews($data['result']->id, 5);
        $this->model->update_view_page($slug_detail); // Insert View
        $this->model->update_view_ip(); //Insert IP
        if (!$data['result']) {
            header('Location: ' . PATH_URL . $this->uri->segment(1));
            exit;
        }
        $this->template->set_template('life');
        $this->template->write('title', $data['result']->title . '');
        $this->template->write('meta_image', DIR_UPLOAD_NEWS . $data['result']->thumbnail);
        $this->template->write('meta_description', $data['result']->summary);
        $this->template->write_view('content', 'FRONTEND/detail', $data);
        $this->template->render();

    }

    public function getSetting($slug = '')
    {
        $this->load->model('admincp/admincp_model', 'admin');
        $data['setting'] = $this->admin->getSetting($slug);
        $this->load->view('admincp/getSetting', $data);
    }

    public function getUserNum()
    {
        $day = $this->input->post("day");
        $result = $this->model->statistics_ipbyday($day);

    }

    function switchLanguage($language = "")
    {
        $language = ($language != "") ? $language : "vn";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }


    /*---check user------*/


    function _create_captcha()
    {
        $this->load->helper('captcha');
        $vals = array(
            'img_path' => './static/cache/captcha/',
            'img_url' => STATIC_PATH_URL . 'cache/captcha/',
//            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '60',
            'img_height' => 46,
            'expiration' => 7200
        );

        $cap = create_captcha($vals);//var_dump($cap);exit();
        $this->session->set_userdata('captchaword', $cap['word']);
        return $cap;
    }

    function captcha()
    {
        $cap = $this->_create_captcha();
        echo json_encode(array('image' => $cap['image']));
    }

    function check_captcha($string)
    {
        if (strtolower($string) == strtolower($this->session->userdata('captchaword'))) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
            return FALSE;
        }
    }

    function  checkCaptcha()
    {
        $string = strtolower($this->input->get('captcha'));
        if ($string == strtolower($this->session->userdata('captchaword'))) {
            echo "true";
        } else {
            echo "false";
        }
    }

    function  checkPassword()
    {
        $string = $this->input->get('oldpassword');
        if (md5($string) == $this->session->userdata('client_user')['Pw']) {
            echo "true";
        } else {
            echo "false";
        }
    }

    function  checkUserNameExists()
    {
        $this->load->model('user_model', 'user');
        $username = $this->input->get('username');
        if ($this->user->checkExistsUsername($username))
            echo "false";
        else
            echo "true";

    }
    /*-------end check user---------*/
    public function  demosdf()
    {
        //var_dump("sdfsf");exit();
        $data=array();
       // $this->load->view("FRONTEND/slide", $data);

         $this->template->write_view('content', 'FRONTEND/slide', $data);
       $this->template->render();
    }
    /*------------------------------------ End FRONTEND --------------------------------*/
}