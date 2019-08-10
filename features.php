<?php include ('header.php'); ?>
<div class="content-wrapper oh">

  <!-- Page Title -->
  <section class="page-title text-center">
    <div class="container">
      <div class="page-title__holder">
        <h1 class="page-title__title">Elements</h1>
        <p class="page-title__subtitle">Here is the list of all elements that you can use with Margin template.</p>
      </div>
    </div>
  </section> <!-- end page title -->

  <!-- Elements -->
  <section class="section-wrap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="title-row title-row--boxed text-center">
            <h2 class="section-title">Buttons</h2>
          </div>

          <div class="row section-buttons mb-64">
            <div class="col-md-3">
              <div>
                <a href="#" class="btn btn--md btn--color">
                  <span>Medium Button</span>
                </a>
              </div>
              <div>
                <a href="#" class="btn btn--lg btn--color">
                  <span>Large Button</span>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <a href="#" class="btn btn--md btn--alt-color">
                  <span>Medium Button</span>
                </a>
              </div>
              <div>
                <a href="#" class="btn btn--lg btn--alt-color">
                  <span>Large Button</span>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <a href="#" class="btn btn--md btn--dark">
                  <span>Medium Button</span>
                </a>
              </div>
              <div>
                <a href="#" class="btn btn--lg btn--dark">
                  <span>Large Button</span>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <a href="#" class="btn btn--md btn--light">
                  <span>Medium Button</span>
                </a>
              </div>
              <div>
                <a href="#" class="btn btn--lg btn--light">
                  <span>Large Button</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Forms -->
          <div class="title-row title-row--boxed text-center">
            <h2 class="section-title">Form Elements</h2>
          </div>

          <div class="row mb-64">
            <div class="col-md-6">

              <input name="text" type="text" placeholder="Input with placeholder">
              <input name="password" id="password" type="password" placeholder="Password input">
              <textarea placeholder="Textarea" rows="3"></textarea>

              <div class="form-group">
                <label for="input-label">Input With Label</label>
                <input name="name" id="input-label" type="text">
              </div>
            </div> <!-- end col -->

            <div class="col-md-6">

              <select>
                <option selected="" value="default">Select an option</option>
                <option value="green">Green</option>
                <option value="black">Black</option>
                <option value="white">White</option>
              </select>

              <div class="row mt-30">

                <div class="col-md-6 mb-30">
                  <h6>Radio Buttons</h6>
                  <ul class="radio">
                    <li>
                      <input type="radio" class="radio-unput" name="radio" id="radio1" value="radio1" checked="checked">
                      <label for="radio1">Radio 1</label>
                    </li>
                    <li>
                      <input type="radio" class="radio-unput" name="radio" id="radio2" value="radio2">
                      <label for="radio2">Radio 2</label>
                    </li>
                    <li>
                      <input type="radio" class="radio-unput" name="radio" id="radio3" value="radio3">
                      <label for="radio3">Radio 2</label>
                    </li>
                  </ul>
                </div>

                <div class="col-md-6 mb-30">
                  <h6>Checkboxes</h6>
                  <ul class="checkbox">
                    <li>
                      <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox1" value="1" checked="checked">
                      <label for="checkbox1">Checkbox 1</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox2" value="2">
                      <label for="checkbox2">Checkbox 2</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox3" value="3">
                      <label for="checkbox3">Checkbox 3</label>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

          <!-- Tabs / Accordions -->
          <div class="title-row title-row--boxed text-center">
            <h2 class="section-title">Tabs &amp; Accordions</h2>
          </div>
          <div class="row mb-64">
            <div class="col-lg-6">
              <div class="tabs">
                <ul class="tabs__list">
                  <li class="tabs__item tabs__item--active">
                    <a href="#tab-1" class="tabs__url tabs__trigger">Flexible</a>
                  </li>
                  <li class="tabs__item">
                    <a href="#tab-2" class="tabs__url tabs__trigger">WordPress</a>
                  </li>
                  <li class="tabs__item">
                    <a href="#tab-3" class="tabs__url tabs__trigger">Theme</a>
                  </li>
                </ul> <!-- end tabs -->
              </div>
              <!-- tab content -->
              <div class="tabs__content tabs__content-trigger">
                <div class="tabs__content-pane tabs__content-pane--active" id="tab-1">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.</p>
                </div>
                <div class="tabs__content-pane" id="tab-2">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.</p>
                </div>
                <div class="tabs__content-pane" id="tab-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div id="accordion">

                <div class="accordion">
                  <div class="accordion__panel">
                    <div class="accordion__heading" id="heading-1">
                      <a data-toggle="collapse" href="#collapse-1" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapse-1">
                        <h4>Best Features</h4>
                        <span class="accordion__toggle"></span>
                      </a>
                    </div>
                    <div id="collapse-1" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="heading-1">
                      <div class="accordion__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion">
                  <div class="accordion__panel">
                    <div class="accordion__heading" id="heading-2">
                      <a data-toggle="collapse" href="#collapse-2" class="accordion__link" aria-expanded="true" aria-controls="collapse-2">
                        <h4>Creative Design</h4>
                        <span class="accordion__toggle"></span>
                      </a>
                    </div>
                    <div id="collapse-2" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="heading-2">
                      <div class="accordion__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion">
                  <div class="accordion__panel">
                    <div class="accordion__heading" id="heading-3">
                      <a data-toggle="collapse" href="#collapse-3" class="accordion__link" aria-expanded="true" aria-controls="collapse-3">
                        <h4>Easily Customizable</h4>
                        <span class="accordion__toggle"></span>
                      </a>
                    </div>
                    <div id="collapse-3" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="heading-3">
                      <div class="accordion__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Alerts -->
          <div class="title-row title-row--boxed text-center">
            <h2 class="section-title">Alerts</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Success!</strong> This is succesful message box.
              </div>

              <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Information!</strong> This is info message box.
              </div>
            </div>

            <div class="col-md-6">
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Notice box!</strong> This is notice message box.
              </div>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Error!</strong> This is error message box.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section> <!-- end elements -->


<?php include ('footer.php'); ?>
