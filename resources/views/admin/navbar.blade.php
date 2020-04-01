<nav class="p-nav" id="js-nav" data-ocm-class="offCanvasMenu offCanvasMenu--adminNav" data-ocm-builder="acpNav">
    <div data-ocm-class="offCanvasMenu-backdrop" data-menu-close="true"></div>
    <div class="p-nav-inner" data-xf-init="admin-nav" data-ocm-class="offCanvasMenu-content">
        <div class="offCanvasMenu-shown offCanvasMenu-header">
            Menu
            <a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="Close">
        
                <i class="fa fa-times"></i>
            </a>
        </div>
        <div class="p-nav-content js-navSticky">
            
    <ul class="p-nav-listRoot" id="js-navAccordion">
    
        
        <li class="p-nav-section {{request()->path() === "admin-trophy" ? "is-active" : "" }} " data-navigation-id="setup">
            <div class="p-nav-sectionHeader">
                <a href="{{url('admin-trophy')}}" class="p-nav-sectionLink ">
                    <i class="fa fa-trophy" aria-hidden="true"></i> Trophy 
                </a>
            </div>
        </li>
        
        <li class="p-nav-section {{request()->path() === "admin-coupon" ? "is-active" : "" }}" data-navigation-id="logs">
            <div class="p-nav-sectionHeader ">
                <a href="{{url('admin-coupon')}}" class="p-nav-sectionLink ">
                    <i class="fa fa-id-card" aria-hidden="true"></i> Coupon
                </a>
            </div>
        </li>


        <li class="p-nav-section" data-navigation-id="logs">
            <div class="p-nav-sectionHeader">
                <a href="https://traderhub.id/admin.php" class="p-nav-sectionLink ">
                    <i class="fa fa-tint" aria-hidden="true"></i> go to Admin Pages
                </a>
            </div>
        </li>

    
    </ul>


        </div>
        <div class="p-nav-tester js-navTester"></div>
    </div>
</nav>