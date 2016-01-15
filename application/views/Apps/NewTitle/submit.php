<div id="NTF" ng-controller="NewTitleForm as NTF" ng-form="NTFNGForm">
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="row">
                  <div class="container-fluid">
                     <div class="jumbotron" style="position: static; z-index: auto;">
                        <h1 ng-click="NTF.load()">Submit New Title <i class="fa fa-fw fa-check-circle" style="color: #5cb85c;"></i> </h1>
                        <h4>
                           <strong>{{NTF.BasicInfo.Model.Title}}</strong><strong style="display: none;">:</strong> <em>{{NTF.BasicInfo.Model.Subtitle}}</em> <span style="color: #a8a8a8;"> - Publisher: {{NTF.BasicInfo.Model.Publisher}}</span>
                           <!--                           <button class="btn btn-default btn-sm pull-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                         Drafts (AutoSave Enabled) <span class="badge">4</span>
                                                      </button>
                                                      <button class="btn btn-primary btn-sm pull-right" ng-click="NTF.SaveDraft()">Save Draft</button>-->
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="collapse row" id="collapseExample">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-8">
                     <h4>Saved Drafts</h4>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Title</th>
                                 <th>Creation Date</th>
                                 <th>Last Updated</th>
                                 <th class='twobtn'>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr ng-repeat="d in NTF.Drafts">
                                 <td>{{d.form.BasicInfo.Title}}</td>
                                 <td>{{d.created}}</td>
                                 <td></td>
                                 <td class="twobtn">
                                    <button class="btn btn-primary"><span class="fa fa-fw fa-edit"></span></button>
                                    <button class="btn btn-danger"><span class="fa fa-fw fa-minus"></span></button>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <h4>Draft Options</h4>
                     <div class="form-group">
                        <b>Auto Save</b>
                        <br>

                        <div class="radio radio-success radio-inline">
                           <input type="radio" name="radio1" id="radio1" ng-model="fm.TerritoryRights" value="world">
                           <label for="radio1">
                              On
                           </label>
                        </div>
                        <div class="radio radio-danger radio-inline">
                           <input type="radio" name="radio1" id="radio2" ng-model="fm.TerritoryRights" value="individual">
                           <label for="radio2">
                              Off
                           </label>
                        </div>
                     </div>
                     <div class="form-group">
                        <button class="btn btn-primary">Clear All</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                           <a href="#" data-target="#basic" aria-controls="basic" role="tab" data-toggle="tab"
                              ng-style="!NTFNGForm.BasicInfoFormPanel.$pristine && NTFNGForm.BasicInfoFormPanel.$invalid ? {'background-color': '#f2dede'} : {'background-color': 'none'}">Basic Information</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#formats" aria-controls="formats" role="tab" data-toggle="tab">Formats</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#contributors" aria-controls="contributors" role="tab" data-toggle="tab">Contributors</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#text" aria-controls="text" role="tab" data-toggle="tab">Descriptions</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#subject" aria-controls="subject" role="tab" data-toggle="tab">Subject</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#marketing" aria-controls="marketing" role="tab" data-toggle="tab">Marketing</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#covers" aria-controls="covers" role="tab" data-toggle="tab">Covers</a>
                        </li>
                        <li role="presentation">
                           <a href="#" data-target="#json" aria-controls="json" role="tab" data-toggle="tab">JsonDebug</a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <!--basic-->
                        <div role="tabpanel" class="tab-pane active" id="basic" ng-form="BasicInfoFormPanel" ng-repeat="bi in [NTF.BasicInfo]">

                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group required" data-show-errors>
                                    <label for="title" class="control-label">Title</label>
                                    <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Title" data-placement="top" data-content="The unique name for your book. The subtitle (if applicable) should be given separately.">?</a>
                                    <input type="text" name="title" class="form-control" ng-required="true" ng-model="bi.Model.Title">
                                 </div>
                                 <div class="form-group " data-show-errors>
                                    <label for="subtitle" class="control-label">Subtitle</label>
                                    <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Subtitle" data-placement="top" data-content="A subtitle should further explain your book's title. It should not include words that explain the format or edition. Not all books have subtitles, so if this book doesn't have one, leave this blank.">?</a>
                                    <input name="Subtitle" type="text" class="form-control" ng-model="bi.Model.Subtitle">
                                 </div>
                                 <div class="form-group required" data-show-errors>
                                    <label for="publisher" class="control-label">Publisher</label>
                                    <input name="Publisher" type="text" class="form-control" readonly ng-model="bi.Model.Publisher">
                                 </div>
                                 <div class="form-group required" data-show-errors>
                                    <label for="imprint" class="control-label">Imprint</label>
                                    <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Imprint" data-placement="top" data-content="The name under which this book will be distributed. An imprint is a specific brand managed by the publisher and can be the same as the publisher name.">?</a>
                                    <input name="Imprint" type="text" class="form-control" ng-required="true" ng-model="bi.Model.Imprint">
                                 </div>
                                 <div class="form-group required" data-show-errors>
                                    <label for="" class="control-label">Content Language</label>
                                    <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Content language" data-placement="top" data-content="The primary language in which the book is written.">?</a>
                                    <input name="ContentLanguage" type="text" class="form-control" ng-required="true" ng-model="bi.Model.ContentLanguage">
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6" data-show-errors>
                                       <label for="" class="control-label">Series Name</label>
                                       <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Series" data-placement="top" data-content="An indefinite number of titles, published over an indefinite time period, and grouped together under a series title. Primarily for marketing purposes. ">?</a>
                                       <input name="SeriesName" type="text" class="form-control" ng-model="bi.Model.Series">
                                    </div>
                                    <div class="form-group col-md-6" data-show-errors>
                                       <label for="" class="control-label">Number in Series</label>
                                       <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Number in Series" data-placement="top" data-content="The number of this particular book within the series. Numbers only.">?</a>
                                       <input name="NumberinSeries" type="text" class="form-control" ng-model="bi.Model.NumberinSeries">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end basic-->
                        <!--contributors-->
                        <div role="tabpanel" class="tab-pane" id="contributors" ng-form="ContributorsPanel"  ng-repeat="c in [NTF.Contributors]">
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Contributors</h3>
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th>Prefix</th>
                                             <th>First Name</th>
                                             <th>Middle Name</th>
                                             <th>Last Name</th>
                                             <th>Suffix</th>
                                             <th>Hometown</th>
                                             <th>Role</th>
                                             <th class="twobtn">
                                                <button class="btn btn-primary pull-right btn-block" id="btnlol" ng-click="c.addContributor()"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="contributor in c.Model.Contributors">
                                             <td>{{contributor.Prefix}}</td>
                                             <td>{{contributor.FirstName}}</td>
                                             <td>{{contributor.MiddleName}}</td>
                                             <td>{{contributor.LastName}}</td>
                                             <td>{{contributor.Suffix}}</td>
                                             <td>{{contributor.Hometown}}</td>
                                             <td>{{contributor.Role.Name}}</td>
                                             <td class="twobtn">
                                                <button class="btn btn-primary" ng-click="c.showContributorModal(contributor, 'edit')"><span class="fa fa-fw fa-edit"></span></button>
                                                <button class="btn btn-danger" ng-click="c.removeContributor($index)"><span class="fa fa-fw fa-minus"></span></button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                        </div>
                        <!--end contributors-->
                        <!--subject-->
                        <div role="tabpanel" class="tab-pane" id="subject" ng-repeat="dm in [NTF.Demographics]">
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Add Bisacs</h3>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th style="width:20px;">#</th>
                                          <th style="width: 50%;">Category</th>
                                          <th style="width: 50%;">Code <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="BISAC Subject Code" data-placement="left" data-content='BISAC codes are used by the publishing industry to clearly identify a book&apos;s subject. The Book Industry Study Group (BISG) maintains these codes. (link) <bulleted list> - Always list your most important and specific BISAC code first. Think about who you are trying to sell to and what your book is trying to say. The more specific you are, the better chance your reader has of finding your book.  -Don&apos;t use "general" BISAC codes because they make it more difficult for people to find your book. -You cannot mix Fiction and Non Fiction codes; it&apos;s either fiction or it&apos;s not. -You cannot mix Children&apos;s (Juvenile) and General Audience codes; the book is either for Children or it&apos;s not. -The MEDICAL BIASCs are ONLY for scholarly books aimed at medical professionals. The HEALTH and BODY, MIND, SPIRIT BISACs are for the general public. - Book retailers will interpret these BISAC codes and apply them to how they organize their stores. Choose specific BISACs to help them make better decisions. - Supply at least 1 BISAC, preferably 3, and no more than 5 BISAC codes.'>?</a></th>
                                          <th class="onebtn">
                                             <button class="btn btn-primary pull-right btn-block" ng-click="dm.addBisac()"><span class="fa fa-fw fa-plus"></span></button>
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr ng-repeat="Bisac in dm.Model.Bisacs">
                                          <td>{{$index + 1}}</td>
                                          <td>
                                             <ol class="nya-bs-select form-control" ng-model="Bisac.BisacGroup" data-size="6" data-live-search="true" ng-change="dm.UpdateBisacCodes($index)">
                                                <li nya-bs-option="bis in dm.FixedList">
                                                   <a>
                                                      {{bis.Name}}
                                                      <span class="fa fa-check check-mark"></span>
                                                   </a>
                                                </li>
                                             </ol>
                                          </td>
                                          <td>
                                             <ol class="nya-bs-select form-control" ng-model="Bisac.Code" data-size="6" data-live-search="true" ng-change="dm.UpdateBisacCodes($index)">
                                                <li nya-bs-option="bis in dm.FixedBisacListContainer[$index]">
                                                   <a>
                                                      {{bis.Code}} - {{bis.Text}}
                                                      <span class="fa fa-check check-mark"></span>
                                                   </a>
                                                </li>
                                             </ol>
                                          </td>
                                          <td class="onebtn">
                                             <button class="btn btn-danger btn-block" ng-click="dm.removeBisac($index)"><span class="fa fa-fw fa-minus"></span></button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <hr>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Audience</h3>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6 form-group">
                                 <label for="" class="control-label">Target Audience</label>
                                 <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Audience/Target Group" data-placement="top" data-content="Who is your target group of readers? Most books fall under the General Audience. If you've supplied Juvenile BISACs, the audience must be Children and you must provide an Age Range.">?</a>
                                 <select name="" id="" ng-model="dm.Model.Audience" class="form-control" ng-options="at.Name for at in dm.FixedAudienceTypes track by at.Id" ng-disabled="dm.AudienceDisabled">
                                    <option value="">Choose...</option>
                                 </select>
                                 <span class="help-block" ng-if="dm.AudienceDisabled"> 
                                    <i>This field was automatically chosen based on a previous selection</i>
                                 </span>
                              </div>
                              <div class="col-md-6 form-group" data-show-errors ng-class="{'required': dm.AgeRangeRequired}">
                                 <label for="" class="control-label">Age Range From / To</label>
                                 <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Age Range " data-placement="top" data-content="If you've added Juvenile BISACs, the Audience must be Children and you must provide an Age Range. This tells book buyers, retailers, and librarians the level at which this book is written so they can make an informed purchasing decision.">?</a>
                                 <select name="AgeRange" id="" class="form-control" ng-model="dm.Model.AgeRange" ng-required="dm.AgeRangeRequired" ng-disabled="dm.AgeRangeDisabled">
                                    <option value="">Choose...</option>
                                    <option value="2">&nbsp;&nbsp;0 — &nbsp;&nbsp;2 &nbsp;&nbsp;Infant</option>
                                    <option value="3">&nbsp;&nbsp;2 — &nbsp;&nbsp;4 &nbsp;&nbsp;Toddler</option>
                                    <option value="4">&nbsp;&nbsp;4 — &nbsp;&nbsp;6 &nbsp;&nbsp;Emergent Reader</option>
                                    <option value="5">&nbsp;&nbsp;6 — &nbsp;&nbsp;8 &nbsp;&nbsp;Early Reader</option>
                                    <option value="6">&nbsp;&nbsp;8 — 10 &nbsp;&nbsp;Reader</option>
                                    <option value="7">10 — 14 &nbsp;&nbsp;Early Teen</option>
                                    <option value="8">14 — 18 &nbsp;&nbsp;Young Adult</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!--end subject-->
                        <!--text-->
                        <div role="tabpanel" class="tab-pane" id="text" ng-repeat="bi in [NTF.BasicInfo]">
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Descriptions</h3>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6 required form-group" data-show-errors>
                                 <label for="">Main Description</label>
                                 <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Main Title Description" data-placement="top" data-content="The Main Description is the primary summary of your book. It should tell the reader what your book is about and why they should read your book. This text will be shown to potential readers and book buyers, so double (and triple) check your spelling! Must be between 350 - 2,000 characters (including spaces) and written in the primary language of the book.">?</a>
                                 <summernote class="form-control" name="bi.MainDescription" ng-model="bi.Model.MainDescription" config="{toolbar: [['style', ['bold', 'italic', 'underline', 'clear']],['para', ['ul', 'ol']]]}" height="180"></summernote>
                              </div>
                              <div class="col-md-6 form-group" data-show-errors>
                                 <label for="">Short Description</label>
                                 <a tabindex="-1" class="badge badge-light" role="button" data-toggle="popover" data-trigger="focus" title="Short Description" data-placement="top" data-content="The Short Description is a more concise summary of your book. It is generally used for sales catalogs and some promotional material. Must be no more than 800 characters (including spaces).">?</a>
                                 <summernote class="form-control" name="bi.ShortDescription" ng-model="bi.Model.ShortDescription" config="{toolbar: [['style', ['bold', 'italic', 'underline', 'clear']],['para', ['ul', 'ol']]]}" height="180"></summernote>
                              </div>
                           </div>
                        </div>
                        <!--end text-->
                        <!--formats-->
                        <div role="tabpanel" class="tab-pane" id="formats">
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Formats</h3>
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th>Binding</th>
                                             <th>ISBN13</th>
                                             <th>Pub Date</th>
                                             <th>US Price</th>
                                             <th class="twobtn">
                                                <button class="btn btn-primary pull-right btn-block" ng-click="NTF.Formats.addFormat()"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="Format in NTF.Formats.Model.Formats">
                                             <td>
                                                {{Format.ProductType.Name}} / 
                                                {{Format.ProductForm.Name}} / 
                                                {{Format.ProductDetail.Name}} / 
                                                {{Format.ProductBinding.Name}}
                                             </td>
                                             <td>{{Format.ISBN13}}</td>
                                             <td>{{Format.PublicationDate}}</td>
                                             <td>{{Format.USPrice}}</td>
                                             <td class="twobtn">
                                                <button class="btn btn-primary" ng-click="NTF.Formats.showFormatModal(Format, 'edit')"><span class="fa fa-fw fa-edit fa-fw"></span></button>
                                                <button class="btn btn-danger" ng-click="NTF.Formats.removeFormat($index)"><span class="fa fa-fw fa-minus fa-fw"></span></button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                        </div>
                        <!--end formats-->
                        <!--marketing-->
                        <div role="tabpanel" class="tab-pane" id="marketing" ng-repeat="m in [NTF.Marketing]">
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Websites</h3>
                                 <div class="table-responsove">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th style="width:50%;">Website URL</th>
                                             <th style="width:50%;">Type</th>
                                             <th class="onebtn">
                                                <button class="btn btn-primary pull-right btn-block" ng-click="m.addSingleMarketingItem('Website')"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="Website in m.Model.Websites" ng-form="WebsiteRepeat">
                                             <td>
                                                <div class="form-group" data-show-errors>
                                                   <input type="text" class="form-control" ng-required="true" name="websiteurl" ng-model="Website.URL" data-bm-validate data-bm-validate-options="['bmwebsite']" ng-model-options="{updateOn: 'default blur', debounce: {'default': 1000, 'blur': 0}}">
                                                </div>
                                             </td>
                                             <td>
                                                <select name="" id="" class="form-control">
                                                   <option value="">Choose...</option>
                                                   <option value="1">Publisher Website</option>
                                                   <option value="2">Book Website / Blog</option>
                                                   <optgroup label="Social Media">
                                                      <option value="3">Facebook</option>
                                                      <option value="4">Twitter</option>
                                                      <option value="5">YouTube</option>
                                                      <option value="6">Other</option>
                                                   </optgroup>
                                                </select>
                                             </td>
                                             <td><button class="btn btn-danger" ng-click="m.removeMarketingItem('Website', $index)"><span class="fa fa-fw fa-minus"></span></button></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <hr>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Reviews</h3>
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th style="width:25%">Name</th>
                                             <th style="width:25%">Publication</th>
                                             <th>Text</th>
                                             <th class="twobtn">
                                                <button class="btn btn-primary pull-right btn-block" ng-click="m.addMarketingItem('Review')"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="Review in m.Model.Reviews">
                                             <td>{{Review.Name}}</td>
                                             <td>{{Review.Publication}}</td>
                                             <td>{{Review.Text}}</td>
                                             <td>
                                                <button class="btn btn-primary" ng-click="m.showMarketingItemModal(Review, 'Review', 'edit')"><span class="fa fa-fw fa-edit"></span></button>
                                                <button class="btn btn-danger" ng-click="m.removeMarketingItem('Review', $index)"><span class="fa fa-fw fa-minus"></span></button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <hr>
                                 <h3>Endorsements</h3>
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th style="width:25%">Name</th>
                                             <th style="width:25%">Affiliation</th>
                                             <th>Text</th>
                                             <th class="twobtn">
                                                <button class="btn btn-primary pull-right btn-block" ng-click="m.addMarketingItem('Endorsement')"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="Endorsement in m.Model.Endorsements">
                                             <td>{{Endorsement.Name}}</td>
                                             <td>{{Endorsement.Affiliation}}</td>
                                             <td>{{Endorsement.Text}}</td>
                                             <td>
                                                <button class="btn btn-primary" ng-click="m.showMarketingItemModal(Endorsement, 'Endorsement', 'edit')"><span class="fa fa-fw fa-edit"></span></button>
                                                <button class="btn btn-danger" ng-click="m.removeMarketingItem('Endorsement', $index)"><span class="fa fa-fw fa-minus"></span></button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <hr>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Marketing and Publicity</h3>
                                 <div class="table-responsove">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th style="width:50%;">Type</th>
                                             <th style="width:50%;">Description</th>
                                             <th class="onebtn">
                                                <button class="btn btn-primary pull-right btn-block" ng-click="m.addSingleMarketingItem('MarketingAndPublicity')"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="MarketingAndPublicity in m.Model.MarketingAndPublicitys">
                                             <td>
                                                <select name="" id="" class="form-control" ng-model="MarketingAndPublicity.Type">
                                                   <option value="1">Print</option>
                                                   <option value="2">Radio</option>
                                                   <option value="3">TV</option>
                                                   <option value="4">Internet</option>
                                                   <option value="5">Assisting Marketing, Advertising, or Publicity Firm</option>
                                                   <option value="6">Other</option>
                                                </select>
                                             </td>
                                             <td><textarea name="" id="" cols="30" rows="3" class="form-control"  ng-model="MarketingAndPublicity.Description"></textarea></td>
                                             <td><button class="btn btn-danger" ng-click="m.removeMarketingItem('MarketingAndPublicity', $index)"><span class="fa fa-fw fa-minus"></span></button></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <hr>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Appearances and Events</h3>
                                 <div class="table-responsove">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th style="width:33%;">Event Name</th>
                                             <th style="width:33%;">Location </th>
                                             <th style="width:33%;">Date</th>
                                             <th class="twobtn">
                                                <button class="btn btn-primary btn-block" ng-click="m.addMarketingItem('AppearanceAndEvent')"><span class="fa fa-fw fa-plus"></span></button>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr ng-repeat="Event in m.Model.AppearanceAndEvents">
                                             <td>{{Event.Name}}</td>
                                             <td>{{Event.Location}}</td>
                                             <td>{{Event.Date}}</td>
                                             <td>
                                                <button class="btn btn-primary" ng-click="m.showMarketingItemModal(Event, 'AppearanceAndEvent', 'edit')"><span class="fa fa-fw fa-edit"></span></button>
                                                <button class="btn btn-danger" ng-click="m.removeMarketingItem('AppearanceAndEvent', $index)"><span class="fa fa-fw fa-minus"></span></button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end formats-->
                        <!--covers-->
                        <div role="tabpanel" class="tab-pane" id="covers" ng-repeat="c in [NTF.Covers]">
                           <div class="row">
                              <div class="col-md-12">
                                 <h3>Cover Upload</h3>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="panel panel-default">
                                    <div class="table-responsive">
                                       <table class="table table-hover">
                                          <thead>
                                             <tr>
                                                <th>ISBN</th>
                                                <th>Format</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Size</th>
                                                <th style="width:105px;">Upload</th>
                                                <th style="width:200px;">Progress</th>
                                                <th style="width:60px; text-align: center;">Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr ng-repeat="Format in NTF.Formats.Model.Formats">
                                                <td>
                                                   {{Format.ISBN13}}
                                                </td>
                                                <td>
                                                   {{Format.ProductType.Name}} / 
                                                   {{Format.ProductForm.Name}} / 
                                                   {{Format.ProductDetail.Name}} / 
                                                   {{Format.ProductBinding.Name}}
                                                </td>
                                                <td>
                                                   {{c.files[Format.ISBN13]['name']}}
                                                </td>
                                                <td>
                                                   <span ng-if="c.files[Format.ISBN13]['type'] == 'application/pdf'">Type: <i class="fa fa-file-pdf-o"></i> ({{c.files[Format.ISBN13]['type']}})</span>
                                                   <span ng-if="c.files[Format.ISBN13]['type'] == 'image/jpeg'">Type: <i class="fa fa-file-image-o"></i> ({{c.files[Format.ISBN13]['type']}})</span>
                                                </td>
                                                <td>
                                                   <span ng-if="c.files[Format.ISBN13]['name']">
                                                      {{c.formatBytes(c.files[Format.ISBN13]['size'], 2)}}
                                                   </span>
                                                </td>
                                                <td>
                                                   <div class="btn btn-primary" ngf-pattern="'.pdf,.jpg'" accept=".pdf,.jpg" ngf-select="c.upload($file,{{Format.ISBN13}})">
                                                      <i class="fa fa-upload"></i> Browse...
                                                   </div>        
                                                </td>
                                                <td>
                                                   <div class="progress">
                                                      <div class="progress-bar {{c.files[Format.ISBN13]['progress']['color']}}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ng-style="{width: c.files[Format.ISBN13]['progress']['width'] + '%' }">
                                                         {{c.files[Format.ISBN13]['progress']['percentage']}}
                                                      </div>
                                                   </div>
                                                </td>

                                                <td style="text-align: center;">
                                                   <span style="font-size:24px; line-height: 24px;">
                                                      <i ng-if="c.files[Format.ISBN13]['status'] == true" class="text-success fa fa-check"></i>
                                                      <i ng-if="c.files[Format.ISBN13]['status'] == false" class="text-danger fa fa-exclamation-circle"></i>
                                                   </span>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end covers-->
                        <!--Json-->
                        <div role="tabpanel" class="tab-pane" id="json">
                           <div class="row">
                              <div class="col-md-12">
                                 <pre id="jsonPre"></pre>
                                 <button class="btn btn-primary btn-block" ng-click="NTF.RefreshJson()">Refresh</button>
                              </div>
                           </div>
                        </div>
                        <!--end Json-->
                     </div>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                           <!--                           <button class="btn btn-block" ng-click="NTF.save()">Submit</button>
                                                      <button class="btn btn-primary btn-block" ng-click="NTF.LoadDraft()">Load Draft</button>-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
   $this->load->view('Apps/NewTitle/modals/AppearancesandEventsModal');
   $this->load->view('Apps/NewTitle/modals/contribModal');
   $this->load->view('Apps/NewTitle/modals/endorsementModal');
   $this->load->view('Apps/NewTitle/modals/formatModal');
   $this->load->view('Apps/NewTitle/modals/ReviewModal');
   ?>
</div>
<style>
   .jumbotron {
      background: url("http://www.bookmasters.com/CDN/resources/img/login/moonship.jpg") 0px 78% no-repeat;
      margin-bottom: 0px;
   }
   .jumbotron h1 {
      color: white;
   }
   .jumbotron div h4 strong {
      color: white;
   }
   .jumbotron div h4 em {
      color: white;
   }
   .jumbotron div h4 span {
      color: #f2f2f2;
   }
</style>
<link rel="stylesheet" href="http://www.bookmasters.com/CDN/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="http://www.bookmasters.com/CDN/bower_components/nya-bootstrap-select/dist/css/nya-bs-select.min.css">
<script type="text/javascript-lazy" data-append="partial" data-src="assets/js/views/apps/TitleManagement/build/build.js?cache=<?php echo rand(1000, 9000); ?>"></script>