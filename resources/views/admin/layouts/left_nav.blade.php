<section class="vbox">
  <section class="w-f scrollable">
    <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
      
      <!-- nav -->
      <nav class="nav-primary hidden-xs">
        <ul class="nav">
          <li  class="active">
            <a href="{{ route('dashboard') }}"   class="active">
              <i class="fa fa-dashboard icon">
                <b class="bg-danger"></b>
              </i>
              <span>Dashboard</span>
            </a>
          </li>
          <li >
            <a href="#layout"  >
              <i class="fa fa-columns icon">
                <b class="bg-warning"></b>
              </i>
              <span class="pull-right">
                <i class="fa fa-angle-down text"></i>
                <i class="fa fa-angle-up text-active"></i>
              </span>
              <span>Directory</span>
            </a>
            <ul class="nav lt">
              <li >
                <a href="{{ route('directory.create') }}" >                                                        
                  <i class="fa fa-angle-right"></i>
                  <span>Create</span>
                </a>
              </li>
              <li >
                <a href="{{ route('directory.index') }}" >                                                        
                  <i class="fa fa-angle-right"></i>
                  <span>View All</span>
                </a>
              </li>
            </ul>
          </li>
          <li >
            <a href="#uikit"  >
              <i class="fa fa-flask icon">
                <b class="bg-success"></b>
              </i>
              <span class="pull-right">
                <i class="fa fa-angle-down text"></i>
                <i class="fa fa-angle-up text-active"></i>
              </span>
              <span>OCR</span>
            </a>
            <ul class="nav lt">
              <li >
                <a href="{{ route('ocr.index') }}" >                                                        
                  <i class="fa fa-angle-right"></i>
                  <span>View All</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- / nav -->
    </div>
  </section>
  
  <footer class="footer lt hidden-xs b-t b-dark">
    <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
      <i class="fa fa-angle-left text"></i>
      <i class="fa fa-angle-right text-active"></i>
    </a>
  </footer>
</section>