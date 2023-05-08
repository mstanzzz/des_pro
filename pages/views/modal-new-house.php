        <div class="modal houses-modal fade" id="newHouse" tabindex="-1" role="dialog" aria-labelledby="#newHouseTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title" id="newHouseTitle"><span>Add house</span></h5>
                        <button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="account-block__form">
                            <form>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12 col-lg-4 mb-2">
                                            <div class="account-block__form--house-image">
                                                <img src="<?php echo SITEROOT; ?>images/photo.svg" alt="" class="account-block__form--house-image-defaltImg js-my-house-defalt-img">
                                                
                                                <a href="" data-lightbox="roadtrip" data-title="Lorem ipsum">
                                                    <img src="" alt="" class="js-my-house-img-view img-fluid" style="display: none;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-2">

                                            <div class="row js-mobile-file-position">

                                            </div>

                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="house-name" class="label-riquired">Add/Edit house title</label>
                                                        <input type="text" class="form-control mt-2" name="house-name" placeholder="Add/Edit house title">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <p class="mb-1">Add room/s</p>
                                                    <div class="dropdown">
                                                        <label class="dropdown-label" data-default-text="Choose one or more room/s">Choose one or more room/s</label>
                                                        
                                                        <div class="dropdown-list">
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="check custom-checkbox" id="checkbox-1" value="value1">
                                                                <label for="checkbox-1">Living Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-2" type="checkbox" value="value2">
                                                                <label for="checkbox-2">Bedroom</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-3" type="checkbox" value="value3">
                                                                <label for="checkbox-3">Kitchen</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-3" type="checkbox" value="value3">
                                                                <label for="checkbox-3">Kitchen</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-4" type="checkbox" value="value4">
                                                                <label for="checkbox-4">Dining Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-5" type="checkbox" value="value5">
                                                                <label for="checkbox-5">Family Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-6" type="checkbox" value="value6">
                                                                <label for="checkbox-6">Guest Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-7" type="checkbox" value="value7">
                                                                <label for="checkbox-7">Bathroom</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-8" type="checkbox" value="value8">
                                                                <label for="checkbox-8">Game Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                                <label for="checkbox-9">Basement</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-10" type="checkbox" value="value10">
                                                                <label for="checkbox-10">Home Office</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-11" type="checkbox" value="value11">
                                                                <label for="checkbox-11">Nursery</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-12" type="checkbox" value="value12">
                                                                <label for="checkbox-12">Playroom</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-13" type="checkbox" value="value13">
                                                                <label for="checkbox-13">Library</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-14" type="checkbox" value="value14">
                                                                <label for="checkbox-14">Storage Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-15" type="checkbox" value="value15">
                                                                <label for="checkbox-15">Gym Room</label>
                                                            </div>
                                                            
                                                            <div class="checkbox">
                                                                <input class="check custom-checkbox" id="checkbox-16" type="checkbox" value="value16">
                                                                <label for="checkbox-16">Garage</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="house-custom-room">Add custom room</label>
                                                        <input type="text" class="form-control mt-2" name="house-custom-room" placeholder="(ex. my big garage)">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row js-desctop-file-position">
                                                <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <div class="my-house-image-upload__wrapper">														
                                                            <input type="file" class="my-house-image-upload__file js-img-up" name="my-house-image-upload">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="33.001" height="33" viewBox="0 0 33.001 33"><defs><style>.upload{fill:#384765;}</style></defs><g transform="translate(0 -0.003)"><g transform="translate(0 0.003)"><path class="upload" d="M16.5,0A16.5,16.5,0,1,0,33,16.5,16.5,16.5,0,0,0,16.5,0ZM12.207,8.966l3.488-3.488a1.163,1.163,0,0,1,.826-.342h.017a1.165,1.165,0,0,1,.826.342l3.488,3.488A1.168,1.168,0,1,1,19.2,10.618L17.658,9.076v6.259a1.168,1.168,0,1,1-2.337,0V9.156l-1.463,1.462a1.168,1.168,0,0,1-1.652-1.652ZM25.474,23.028h0c0,1.577-1.546,2.812-3.521,2.812h-10.9c-1.974,0-3.521-1.235-3.521-2.812V15.437c0-1.577,1.546-2.813,3.521-2.813h1.472a2.776,2.776,0,0,0,1.022,0h.067v2.282H11.048c-.8,0-1.238.4-1.238.53v7.591c0,.132.439.53,1.238.53H21.953c.8,0,1.238-.4,1.238-.53V15.437c0-.132-.439-.53-1.238-.53H19.37V12.625h.158a2.714,2.714,0,0,0,1.01,0h1.415c1.974,0,3.521,1.236,3.521,2.813v7.591Z" transform="translate(0 -0.003)"/></g></g></svg>
                                                            <label for="my-house-image-upload" class="house-image-upload__label">Upload/change cover image</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row js-mobile-row-action">
                                                <div class="col-6 js-col-delete">
                                                    <button title="Delete house" type="submit" class="btn btn-secondary w-100"><span>delete house</span></button>
                                                </div>
                                                <div class="col-6 js-col-edit-add">
                                                    <button title="Confirm" type="submit" class="btn btn-primary w-100"><span>confirm</span></button>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group text-max-height">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row js-row-action">
                                        <div class="col-4 js-col-delete">
                                            <button title="Delete house" type="submit" class="btn btn-secondary w-100"><span>delete house</span></button>
                                        </div>
                                        <div class="col-4 js-col-edit-add">
                                            <button title="Confirm" type="submit" class="btn btn-primary w-100"><span>confirm</span></button>										
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
