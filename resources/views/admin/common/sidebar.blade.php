<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('').Auth::user()->image}}" class="img-circle" alt="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('labels.online') }}</a>
        </div>
      </div>
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">{{ trans('labels.navigation') }}</li>
@if(Auth::user()->adminType == 22 || Auth::user()->myid == 1)    
        <li class="treeview {{ Request::is('admin/dashboard/this_month/bar_diario/pie_diario') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/dashboard/this_month/bar_diario/pie_diario')}}">
            <i class="fa fa-dashboard"></i> <span>{{ trans('labels.header_dashboard') }}</span>
          </a>
        </li>
@endif        
@if(Auth::user()->myid == 1)            
        <li class="treeview {{ Request::is('admin/listingLanguages') ? 'active' : '' }} {{ Request::is('admin/addLanguages') ? 'active' : '' }} {{ Request::is('admin/editLanguages/*') ? 'active' : '' }} ">
          <a href="{{ URL::to('admin/listingLanguages')}}">
            <i class="fa fa-language" aria-hidden="true"></i> <span> {{ trans('labels.languages') }} </span> <span class=" android-hide"> / {{ trans('labels.labels') }} </span>
          </a>
        </li>
        
        <li class="treeview {{ Request::is('admin/listingPages') ? 'active' : '' }}  {{ Request::is('admin/addPage') ? 'active' : '' }}  {{ Request::is('admin/editPage/*') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingPages')}}">
            <i class="fa fa-file-text" aria-hidden="true"></i> <span>{{ trans('labels.pages') }}</span>
          </a>
        </li>
        
        <li class="treeview {{ Request::is('admin/listingSchool') ? 'active' : '' }} {{ Request::is('admin/Newschool') ? 'active' : '' }} {{ Request::is('admin/preCargaDocente') ? 'active' : '' }} {{ Request::is('admin/cargarGrados') ? 'active' : '' }} {{ Request::is('admin/getAllschool') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>{{ trans('labels.AdminSchool') }} </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="treeview {{ Request::is('admin/listingSchool') ? 'active' : '' }} {{ Request::is('admin/Newschool') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingSchool')}}">
                <i class="fa fa-file-text" aria-hidden="true"></i> <span>{{ trans('labels.listingSchool') }}</span>
                </a>
            </li>
         
            <li class="treeview {{ Request::is('admin/getAllschool') ? 'active' : '' }} {{ Request::is('admin/getSedesPrecarga') ? 'active' : '' }}  {{ Request::is('admin/uploadPivote') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/getAllschool')}}">
                <i class="fa fa-file-text" aria-hidden="true"></i> <span>{{ trans('labels.ConfigurarColegio') }}</span>
                </a>
            </li>  
          	<li class="{{ Request::is('admin/cargarGrados') ? 'active' : '' }}">
          	    <a href="{{ URL::to('admin/cargarGrados')}}">
          	        <i class="fa fa-circle-o"></i> {{ trans('labels.subirGrados') }}
          	    </a>
          	</li>
          	<li class="{{ Request::is('admin/preCargaDocente') ? 'active' : '' }}">
          	    <a href="{{ URL::to('admin/preCargaDocente')}}">
          	        <i class="fa fa-circle-o"></i> {{ trans('labels.subirDocentes') }}
          	    </a>
          	</li>
            <!--li class="{{ Request::is('admin/listingSubCategories') ? 'active' : '' }}  {{ Request::is('admin/addSubCategory') ? 'active' : '' }}  {{ Request::is('admin/editSubCategory/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingSubCategories')}}">
                    <i class="fa fa-circle-o"></i>{{ trans('labels.link_sub_categories') }}
                </a>
            </li-->
            
          </ul>
        </li>
        
        
        
        
  @endif  
  
  @if(Auth::user()->adminType == 22 || Auth::user()->myid == 1)
        <li class="treeview {{ Request::is('admin/listingManufacturer') ? 'active' : '' }} {{ Request::is('admin/addManufacturer') ? 'active' : '' }} {{ Request::is('admin/editManufacturer/*') ? 'active' : '' }} ">
          <a href="{{ URL::to('admin/listingManufacturer')}}">
            <i class="fa fa-industry" aria-hidden="true"></i> <span>{{ trans('labels.link_manufacturer') }}</span>
          </a>
        </li>
        
        <li class="treeview {{ Request::is('admin/listingCategories') ? 'active' : '' }} {{ Request::is('admin/addCategory') ? 'active' : '' }} {{ Request::is('admin/editCategory/*') ? 'active' : '' }} {{ Request::is('admin/listingSubCategories') ? 'active' : '' }}  {{ Request::is('admin/addSubCategory') ? 'active' : '' }}  {{ Request::is('admin/editSubCategory/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>{{ trans('labels.link_categories') }} </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="{{ Request::is('admin/listingCategories') ? 'active' : '' }} {{ Request::is('admin/addCategory') ? 'active' : '' }} {{ Request::is('admin/editCategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingCategories')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_main_categories') }}</a></li>
            <li class="{{ Request::is('admin/listingSubCategories') ? 'active' : '' }}  {{ Request::is('admin/addSubCategory') ? 'active' : '' }}  {{ Request::is('admin/editSubCategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingSubCategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_sub_categories') }}</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ Request::is('admin/listingProducts') ? 'active' : '' }} {{ Request::is('admin/addProduct') ? 'active' : '' }} {{ Request::is('admin/editAttributes/*') ? 'active' : '' }} {{ Request::is('admin/listingAttributes') ? 'active' : '' }}  {{ Request::is('admin/addAttributes') ? 'active' : '' }}  {{ Request::is('admin/editAttributes/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database"></i> <span>{{ trans('labels.link_products') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/listingProducts') ? 'active' : '' }} {{ Request::is('admin/addProduct') ? 'active' : '' }} {{ Request::is('admin/editProduct/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingProducts')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_all_products') }}</a></li>
            
            <!--li class="{{ Request::is('admin/listingAttributes') ? 'active' : '' }}  {{ Request::is('admin/addAttributes') ? 'active' : '' }}  {{ Request::is('admin/editAttributes/*') ? 'active' : '' }}" ><a href="{{ URL::to('admin/listingAttributes' )}}"><i class="fa fa-circle-o"></i> {{ trans('labels.products_attributes') }}</a></li-->
          </ul>
        </li>
   @endif
   
   @if(Auth::user()->adminType == 2 || Auth::user()->myid == 1 || Auth::user()->adminType == 444)
       
        <li class="treeview {{ Request::is('admin/ControlSchool') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/ControlSchool')}}"><i class="fa fa-clock-o" aria-hidden="true"></i> <span> {{ trans('labels.administration') }}</span></a>
        </li>
        @if(Auth::user()->adminType == 2 || Auth::user()->myid == 1)
        <li class="treeview {{ Request::is('admin/listingNewsCategories') ? 'active' : '' }} {{ Request::is('admin/addNewsCategory') ? 'active' : '' }} {{ Request::is('admin/editNewsCategory/*') ? 'active' : '' }} {{ Request::is('admin/listingNews') ? 'active' : '' }}  {{ Request::is('admin/addSubNews') ? 'active' : '' }}  {{ Request::is('admin/editSubNews/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span>{{ trans('labels.link_news') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="{{ Request::is('admin/listingNewsCategories') ? 'active' : '' }} {{ Request::is('admin/addNewsCategory') ? 'active' : '' }} {{ Request::is('admin/editNewsCategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingNewsCategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_news_categories') }}</a></li>
            <li class="{{ Request::is('admin/listingNews') ? 'active' : '' }}  {{ Request::is('admin/addSubNews') ? 'active' : '' }}  {{ Request::is('admin/editSubNews/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingNews')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_sub_news') }}</a></li>
          </ul>
        </li>
        
         <li class="treeview {{ Request::is('admin/listingFaultsCategories') ? 'active' : '' }} {{ Request::is('admin/addFaultsCategory') ? 'active' : '' }} {{ Request::is('admin/editFaultsCategory/*') ? 'active' : '' }} {{ Request::is('admin/listingFaults') ? 'active' : '' }} {{ Request::is('admin/addFaults') ? 'active' : '' }} {{ Request::is('admin/editFaults/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
<span>{{ trans('labels.link_Faults') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="{{ Request::is('admin/listingFaultsCategories') ? 'active' : '' }} {{ Request::is('admin/addFaultsCategory') ? 'active' : '' }} {{ Request::is('admin/editFaultsCategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingFaultsCategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_Faults_categories') }}</a></li>
            <li class="{{ Request::is('admin/listingFaults') ? 'active' : '' }}  {{ Request::is('admin/addFaults') ? 'active' : '' }} {{ Request::is('admin/editFaults/*') ? 'active' : '' }}  {{ Request::is('admin/editSubFaults/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingFaults')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Faults') }}</a></li>
          </ul>
        </li>
        @endif
    @endif    
        
        <!--li class="treeview {{-- Request::is('admin/listingDevices') ? 'active' : '' }} {{ Request::is('admin/viewDevices/*') ? 'active' : '' }} {{ Request::is('admin/notifications') ? 'active' : '' }}">
            
          <a href="# "> 
            <i class="fa fa-bell-o" aria-hidden="true"></i> <span>{{ trans('labels.link_notifications') }}</span>  <i class="fa fa-angle-left pull-right"></i>
          </a>
          
          
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/listingDevices') ? 'active' : '' }} {{ Request::is('admin/viewDevices/*') ? 'active' : '' }}">
          		<a href="{{ URL::to('admin/listingDevices')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_devices') }} </a>
            </li>  
            
            <li class="{{ Request::is('admin/notifications') ? 'active' : '' }} ">
            	<a href="{{ URL::to('admin/notifications') }}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_send_notifications') --}}</a>
            </li>      
          </ul>
          
          
        </li>
         <li class="treeview {{-- Request::is('admin/listingCategories') ? 'active' : '' }} {{ Request::is('admin/addCategory') ? 'active' : '' }} {{ Request::is('admin/editCategory/*') ? 'active' : '' }} {{ Request::is('admin/listingSubCategories') ? 'active' : '' }}  {{ Request::is('admin/addSubCategory') ? 'active' : '' }}  {{ Request::is('admin/editSubCategory/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i><span>{{ trans('labels.link_categories') }} </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          
          <ul class="treeview-menu">
          	<li class="{{ Request::is('admin/listingCategories') ? 'active' : '' }} {{ Request::is('admin/addCategory') ? 'active' : '' }} {{ Request::is('admin/editCategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingCategories')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_main_categories') }}</a></li>
            <li class="{{ Request::is('admin/listingSubCategories') ? 'active' : '' }}  {{ Request::is('admin/addSubCategory') ? 'active' : '' }}  {{ Request::is('admin/editSubCategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingSubCategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_sub_categories') --}}</a></li>
          </ul>
          
        </li-->
    @if(Auth::user()->adminType == 22 || Auth::user()->myid == 1)        
        <li class="treeview {{ Request::is('admin/cuentasPorCobrar') ? 'active' : '' }} {{ Request::is('admin/addCustomerAddresses/*') ? 'active' : '' }} {{ Request::is('admin/addCustomers') ? 'active' : '' }} {{ Request::is('admin/editCustomers/*') ? 'active' : '' }} {{ Request::is('admin/listingCustomers') ? 'active' : '' }} {{ Request::is('admin/buscarCustomerExtract') ? 'active' : '' }} {{ Request::is('admin/buscarCreditos') ? 'active' : '' }}  {{ Request::is('admin/listingCustomersExtract') ? 'active' : '' }}  {{ Request::is('admin/buscarExtract/*') ? 'active' : '' }} {{ Request::is('admin/generateQrCustomers') ? 'active' : '' }} {{ Request::is('admin/listingQrCustomers') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i><span>{{ trans('labels.link_customers') }} </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          
          <ul class="treeview-menu">
          	<li class="{{ Request::is('admin/cuentasPorCobrar') ? 'active' : '' }} {{ Request::is('admin/listingCustomers') ? 'active' : '' }} {{ Request::is('admin/buscarCreditos') ? 'active' : '' }}  {{ Request::is('admin/addCustomers') ? 'active' : '' }}  {{ Request::is('admin/editCustomers/*') ? 'active' : '' }}">
          	    <a href="{{ URL::to('admin/listingCustomers')}}"><i class="fa fa fa-credit-card-alt"></i> <span>{{ trans('labels.link_CustomerManagement') }}</span></a>
          	</li>
          	@if(Auth::user()->myid == 1)
            <li class="{{ Request::is('admin/listingCustomersExtract') ? 'active' : '' }} {{ Request::is('admin/buscarCustomerExtract') ? 'active' : '' }} {{ Request::is('admin/listingCustomersExtract/*') ? 'active' : '' }}  {{ Request::is('admin/buscarExtract/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingCustomersExtract')}}"><i class="fa fa-table"></i> <span>{{ trans('labels.link_CustomersExtract') }}</span></a>
            </li>
             
            <li class="{{ Request::is('admin/listingQrCustomers') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingQrCustomers')}}"><i class="fa fa-table"></i> <span>{{ trans('labels.link_listingQrCustomers') }}</span></a>
            </li>
            <li class="{{ Request::is('admin/generateQr') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/generateQr')}}"><i class="fa fa-table"></i> <span>{{ trans('labels.link_generateQrCustomers') }}</span></a>
            </li>
            @endif 
          </ul>
          
        </li>
    @endif    
        
        
        
        
        
        <!--li class="treeview {{ Request::is('admin/listingCustomers') ? 'active' : '' }}  {{ Request::is('admin/addCustomers') ? 'active' : '' }}  {{ Request::is('admin/editCustomers/*') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingCustomers')}}"> <i class="fa fa-users" aria-hidden="true"></i> <span>{{ trans('labels.link_customers') }}</span>
          </a>
        </li-->
        
@if(Auth::user()->myid == 1)   
        <li class="treeview {{ Request::is('admin/listingCountries') ? 'active' : '' }} {{ Request::is('admin/addCountry') ? 'active' : '' }} {{ Request::is('admin/editCountry/*') ? 'active' : '' }} {{ Request::is('admin/listingZones') ? 'active' : '' }} {{ Request::is('admin/addZone') ? 'active' : '' }} {{ Request::is('admin/editZone/*') ? 'active' : '' }} {{ Request::is('admin/listingTaxClass') ? 'active' : '' }} {{ Request::is('admin/addTaxClass') ? 'active' : '' }} {{ Request::is('admin/editTaxClass/*') ? 'active' : '' }} {{ Request::is('admin/listingTaxRates') ? 'active' : '' }} {{ Request::is('admin/addTaxRate') ? 'active' : '' }} {{ Request::is('admin/editTaxRate/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-money" aria-hidden="true"></i>
            <span>{{ trans('labels.link_tax_location') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/listingCountries') ? 'active' : '' }} {{ Request::is('admin/addCountry') ? 'active' : '' }} {{ Request::is('admin/editCountry/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/listingCountries')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_countries') }}</a></li>
            <li class="{{ Request::is('admin/listingTaxClass') ? 'active' : '' }} {{ Request::is('admin/addTaxClass') ? 'active' : '' }} {{ Request::is('admin/editTaxClass/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/listingTaxClass')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_tax_classes') }}</a></li>
            <li class="{{ Request::is('admin/listingTaxRates') ? 'active' : '' }} {{ Request::is('admin/addTaxRate') ? 'active' : '' }} {{ Request::is('admin/editTaxRate/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/listingTaxRates')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_tax_rates') }}</a></li>
            <!--<li><a href="listingTaxZones"><i class="fa fa-circle-o"></i> Tax Zones</a></li>-->
            <li class="{{ Request::is('admin/listingZones') ? 'active' : '' }} {{ Request::is('admin/addZone') ? 'active' : '' }} {{ Request::is('admin/editZone/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/listingZones')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_zones') }}</a></li>
          </ul>
        </li>
  
@endif        
        
@if(Auth::user()->myid == 1)              
        <li class="treeview {{ Request::is('admin/listingCoupons') ? 'active' : '' }} {{ Request::is('admin/editCoupons/*') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingCoupons')}}" ><i class="fa fa-tablet" aria-hidden="true"></i> <span>{{ trans('labels.link_coupons') }}</span></a>
        </li>
@endif        

@if(Auth::user()->adminType == 2 || Auth::user()->myid == 1)       
        <li class="treeview {{ Request::is('admin/listingDevices') ? 'active' : '' }} {{ Request::is('admin/viewDevices/*') ? 'active' : '' }} {{ Request::is('admin/notifications') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingDevices')}} ">
            <i class="fa fa-bell-o" aria-hidden="true"></i>
            <span>{{ trans('labels.link_notifications') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/listingDevices') ? 'active' : '' }} {{ Request::is('admin/viewDevices/*') ? 'active' : '' }}">
          		<a href="{{ URL::to('admin/listingDevices')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_devices') }} </a>
            </li>  
            <li class="{{ Request::is('admin/notifications') ? 'active' : '' }} ">
            	<a href="{{ URL::to('admin/notifications') }}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_send_notifications') }}</a>
            </li>      
          </ul>
        </li>
@endif

@if(Auth::user()->adminType == 22 || Auth::user()->myid == 1)
        <li class="treeview {{ Request::is('admin/listingOrders') ? 'active' : '' }}  {{ Request::is('admin/addOrders') ? 'active' : '' }}  {{ Request::is('admin/viewOrder/*') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingOrders')}}" ><i class="fa fa-list-ul" aria-hidden="true"></i> <span> {{ trans('labels.link_orders') }}</span>
          </a>
        </li>
@endif        
      
        
         @if (Auth::user()->myid == 1)
         
        <li class="treeview {{ Request::is('admin/shippingMethods') ? 'active' : '' }} {{ Request::is('admin/upsShipping') ? 'active' : '' }} {{ Request::is('admin/flateRate') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/shippingMethods')}}"><i class="fa fa-truck" aria-hidden="true"></i> <span> {{ trans('labels.link_shipping_methods') }}</span>
          </a>
        </li>
        
        <li class="treeview {{ Request::is('admin/paymentSetting') ? 'active' : '' }}">
          <a  href="{{ URL::to('admin/paymentSetting')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>
          {{ trans('labels.link_payment_methods') }}</span>
          </a>
        </li>
        
        @endif 

@if(Auth::user()->adminType == 22 || Auth::user()->myid == 1)        
        
        <li class="treeview {{ Request::is('admin/statsCustomers') ? 'active' : '' }} {{ Request::is('admin/productsStock') ? 'active' : '' }} {{ Request::is('admin/statsProductsSold') ? 'active' : '' }} {{ Request::is('admin/statsProductsPurchased') ? 'active' : '' }} {{ Request::is('admin/statsProductsLiked') ? 'active' : '' }} {{ Request::is('admin/transactions') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            <span>{{ trans('labels.link_reports') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/statsProductsPurchased') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsProductsPurchased')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_total_purchased') }}</a></li>
            @if(Auth::user()->myid == 1)
            <li class="{{ Request::is('admin/statsProductsSold') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsProductsSold')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.purchase') }}</a></li>
            @endif
            <li class="{{ Request::is('admin/transactions') ? 'active' : '' }}"><a href="{{ URL::to('admin/transactions')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.transactions') }}</a></li>
            <li class="{{ Request::is('admin/productsStock') ? 'active' : '' }} "><a href="{{ URL::to('admin/productsStock')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_stock') }}</a></li>  
            <li class="{{ Request::is('admin/statsCustomers') ? 'active' : '' }} "><a href="{{ URL::to('admin/statsCustomers')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_customer_orders_total') }}</a></li>             
            <li class="{{ Request::is('admin/statsProductsLiked') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsProductsLiked')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_liked') }}</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ Request::is('admin/listingBanners') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingBanners')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> <span> {{ trans('labels.link_Banners') }}</span></a>
        </li>
@endif        
        <!--<li class="treeview {{ Request::is('admin/listingAppLabels') ? 'active' : '' }} {{ Request::is('admin/addAppLabel') ? 'active' : '' }} {{ Request::is('admin/editAppLabel/*') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingAppLabels')}}"><i class="fa fa-globe" aria-hidden="true"></i> <span>Labels</span></a>
        </li>  -->      
        
        
       @if (Auth::user()->myid == 1) 
        <li class="treeview {{ Request::is('admin/listingOrderStatus') ? 'active' : '' }}  {{ Request::is('admin/addOrderStatus') ? 'active' : '' }} {{ Request::is('admin/editOrderStatus/*') ? 'active' : '' }} {{ Request::is('admin/setting') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
            <span> {{ trans('labels.link_site_settings') }}</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/listingOrderStatus') ? 'active' : '' }} {{ Request::is('admin/addOrderStatus') ? 'active' : '' }} {{ Request::is('admin/editOrderStatus/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/listingOrderStatus')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_order_status') }}</a></li>
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a href="{{ URL::to('admin/setting')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_setting') }}</a></li>
          </ul>
        </li>
        <li class="treeview {{ Request::is('admin/listingImages') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/listingImages')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> <span> {{ trans('labels.link_Images') }}</span></a>
        </li>
        @endif
        
         <!--li>
          <a href="https://biz.payulatam.com/B0ad99432F90BAB"> Recarga Junior</a- ->
                    <a href="https://payco.link/68970"> Recarga Junior</a>
        </li-->
    @if(Auth::user()->adminType == 2 || Auth::user()->myid == 1 || Auth::user()->adminType == 444)
    <li class="treeview {{ Request::is('admin/ListingAsopadres') ? 'active' : '' }} {{ Request::is('admin/previewListingStudentsAsopadres') ? 'active' : '' }} {{ Request::is('admin/asociarAsopadres') ? 'active' : '' }} {{ Request::is('admin/ListingStudentsAsopadres') ? 'active' : '' }} {{ Request::is('admin/editBono/*') ? 'active' : '' }} {{ Request::is('admin/editBonoAsopadres/*') ? 'active' : '' }} {{ Request::is('admin/newBonoAsopadres') ? 'active' : '' }} {{ Request::is('admin/listingBonusAsopadres') ? 'active' : '' }} {{ Request::is('admin/newBono') ? 'active' : '' }} {{ Request::is('admin/listingBonus') ? 'active' : '' }} {{ Request::is('admin/editEvent/*') ? 'active' : '' }} {{ Request::is('admin/newEvent') ? 'active' : '' }} {{ Request::is('admin/listingEvents') ? 'active' : '' }} {{ Request::is('admin/listingAdvertising') ? 'active' : '' }} {{ Request::is('admin/newAdvertising') ? 'active' : '' }} {{ Request::is('admin/addNewAdvertising') ? 'active' : '' }} {{ Request::is('admin/editAdvertising/*') ? 'active' : '' }} {{ Request::is('admin/updateAdvertising') ? 'active' : '' }} {{ Request::is('admin/deleteAdvertising') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
         <span>{{ trans('labels.Extras') }}</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            @if(Auth::user()->myid == 1 || Auth::user()->adminType == 444) 
            <li class="{{ Request::is('admin/listingAdvertising') ? 'active' : '' }} {{ Request::is('admin/newAdvertising') ? 'active' : '' }} {{ Request::is('admin/addNewAdvertising') ? 'active' : '' }} {{ Request::is('admin/editAdvertising/*') ? 'active' : '' }} {{ Request::is('admin/updateAdvertising') ? 'active' : '' }} {{ Request::is('admin/deleteAdvertising') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingAdvertising')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.advertising') }}</a>
            </li>
            @endif
            @if(Auth::user()->adminType == 2 || Auth::user()->myid == 1 || Auth::user()->myid == 444)
            <li class="{{ Request::is('admin/listingEvents') ? 'active' : '' }} {{ Request::is('admin/newEvent') ? 'active' : '' }} {{ Request::is('admin/addNewEvent') ? 'active' : '' }} {{ Request::is('admin/editEvent/*') ? 'active' : '' }} {{ Request::is('admin/updateEvent') ? 'active' : '' }} {{ Request::is('admin/deleteEvent') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingEvents')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Events') }}</a>
            </li>
            @endif
            @if(Auth::user()->myid == 1 || Auth::user()->adminType == 444)
            <li class="{{ Request::is('admin/listingBonus') ? 'active' : '' }} {{ Request::is('admin/newBono') ? 'active' : '' }} {{ Request::is('admin/addNewBono') ? 'active' : '' }} {{ Request::is('admin/editBono/*') ? 'active' : '' }} {{ Request::is('admin/updateBono') ? 'active' : '' }} {{ Request::is('admin/deleteBono') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/listingBonus')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.bonuses') }}</a>
            </li>
            @endif
            @if(Auth::user()->myid == 1 || Auth::user()->adminType == 444)
            <li class="{{ Request::is('admin/listingBonusAsopadres') ? 'active' : '' }} {{ Request::is('admin/newBonoAsopadres') ? 'active' : '' }} {{ Request::is('admin/editBonoAsopadres/*') ? 'active' : '' }} ">
                <a href="{{ URL::to('admin/listingBonusAsopadres')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.seeAsopadres') }}</a>
            </li>
            @endif
            @if(Auth::user()->myid == 1 || Auth::user()->adminType == 444)
            <li class="{{ Request::is('admin/ListingStudentsAsopadres') ? 'active' : '' }} {{ Request::is('admin/previewListingStudentsAsopadres') ? 'active' : '' }} ">
                <!--a href="{{ URL::to('admin/listingBonusAsopadres')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Asopadres') }}</a-->
                <a href="{{ URL::to('admin/previewListingStudentsAsopadres')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.pagoAsopadres') }}</a>                
            </li>
            @endif
            @if(Auth::user()->myid == 1 || Auth::user()->adminType == 444)
            <li class="{{ Request::is('admin/ListingAsopadres') ? 'active' : '' }} {{ Request::is('admin/asociarAsopadres') ? 'active' : '' }} ">
                <!--a href="{{ URL::to('admin/listingBonusAsopadres')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Asopadres') }}</a-->
                <a href="{{ URL::to('admin/ListingAsopadres')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.BonoAsociacion') }}</a>
            </li>
            @endif
            <!--li class="{{ Request::is('admin/listingPoints') ? 'active' : '' }} ">
                <a href="#"><i class="fa fa-circle-o"></i> {{ trans('labels.customersPoints') }}</a>
            </li-->  
            <!--li class="{{ Request::is('admin/statsCustomers') ? 'active' : '' }} "><a href="{{ URL::to('admin/statsCustomers')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_customer_orders_total') }}</a></li>             
            <li class="{{ Request::is('admin/statsProductsLiked') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsProductsLiked')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_liked') }}</a></li-->
        </ul>
    </li>
    
    @endif    
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>