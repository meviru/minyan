<?php
/* Template Name: Official Minyan
*  Template Post Type: Page
*/

get_header();
?>
    <section class="content-section create-minyan-wrapper official-minyan">
        <div class="container">
            <ul class="breadcrumb breadcrumb-top">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">Create a Minyan</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)" class="breadcrumb-link">Creation of an Official Minyan</a>
                </li>
            </ul>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">1. Identification</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">2. Minyan Type</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)" class="breadcrumb-link">3. Creation</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">4. Verification</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">5. Confirmation</a>
                </li>
            </ul>
            <div class="main-title text-center">
                <h1 class="main-title--text text-official-color">Creation of an Official Minyan (synagogue)</h1>
            </div>
            <form action="#" class="common-form official-minyan" enctype="multipart/form-data">
                <div class="row">
                    <div class="column-6">
                        <div class="common-form-wrapper">
                            <h2 class="common-title">MINYAN LOCATION'S COORDINATE</h2>
                            <div class="form-content pt-3">
                                <div class="form-content">
                                    <div class="form-group">
                                        <label for="institution" class="form-group--label">Institution Name
                                            <sup>*</sup>:</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcInstitution" id="institution" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="form-group--label">Country <sup>*</sup> :</label>
                                        <div class="form-group--control">
                                            <select name="mlcCountry" id="country"
                                                class="form-control form-control--select" required>
                                                <option selected disabled>Select a country</option>
                                                <?php
                                                $all_countries = getAllCountries();
                                                foreach( $all_countries as $code => $country ){
                                                    ?>
                                                    <option value="<?php echo $code; ?>"><?php echo $country; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="form-group--label">Address <sup>*</sup> :</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcAddress" id="address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="form-group--label">City <sup>*</sup> :</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcCity" id="city" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="postcode" class="form-group--label">Postcode <sup>*</sup>
                                            :</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcPostcode" id="postcode" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-group--label">Phone number <sup>*</sup> :</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcPhone" id="phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cellphone" class="form-group--label">Cellphone:</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcCellphone" id="cellphone" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="transportation" class="form-group--label">Transportation Nearby
                                            :</label>
                                        <div class="form-group--control">
                                            <textarea name="mlcTransportation" id="transportation"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture" class="form-group--label">Institution Picture:</label>
                                        <div class="form-group--control">
                                            <div class="form-group--file">
                                                <span class="form-group--file-text">Choose the file</span>
                                                <input type="file" name="mlcInstitutionPicture" id="picture"
                                                    class="form-control form-control--file">
                                            </div>
                                            <div
                                                class="w-100 form-control--info d-flex align-items-center justify-content-between">
                                                <strong>No file selected</strong>
                                                <em>(Maximum size: 5 MB)</em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="managerRabbi" class="form-group--label">Manager or Rabbi<sup>*</sup>
                                            :</label>
                                        <div class="form-group--control">
                                            <input type="text" name="mlcManagerRabbi" id="managerRabbi"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pictureManager" class="form-group--label">Picture of the manager or
                                            rabbi <sup>*</sup>:</label>
                                        <div class="form-group--control">
                                            <div class="form-group--file">
                                                <span class="form-group--file-text">Choose the file</span>
                                                <input type="file" name="mlcPictureManager" id="pictureManager"
                                                    class="form-control form-control--file">
                                            </div>
                                            <div
                                                class="w-100 form-control--info d-flex align-items-center justify-content-between">
                                                <strong>No file selected</strong>
                                                <em>(Maximum size: 5 MB)</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common-form-wrapper">
                            <h2 class="common-title">ADDITIONAL CONTACT DETAILS</h2>
                            <div class="form-content">
                                <div class="form-content py-4">
                                    <div class="form-group">
                                        <label for="website" class="form-group--label">Website</label>
                                        <div class="form-group--control">
                                            <input type="text" name="acdWebsite" id="website" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-group--label">E-mail</label>
                                        <div class="form-group--control">
                                            <input type="email" name="acdEmail" id="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-6">
                        <div class="common-form-wrapper">
                            <h2 class="common-title">PRESENTATION</h2>
                            <div class="form-content">
                                <div class="form-group">
                                    <textarea name="presentation" id="presentation" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="common-form-wrapper tefila-shabbat">
                            <h2 class="common-title">TEFILA</h2>
                            <div class="form-content pt-3">
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="tefilaChaharit"
                                                id="Chaharit">
                                            <label for="Chaharit" class="form-checkbox--label">Chaharit at netz</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="tefilaChaharitTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="tefilaOdou" id="Odou">
                                            <label for="Odou" class="form-checkbox--label">Chararit (Odou)</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="tefilaOdouTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="tefilaGuedola"
                                                id="guedola">
                                            <label for="guedola" class="form-checkbox--label">Minh'a guedola</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="tefilaGuedolaTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="tefilaKetana"
                                                id="ketana">
                                            <label for="ketana" class="form-checkbox--label">Minh'a ketana</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="tefilaKetanaTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="tefilaArvit" id="Arvit">
                                            <label for="Arvit" class="form-checkbox--label">Arvit after Minh'a</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="tefilaArvitTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="tefilaArvitNight"
                                                id="ArvitNight">
                                            <label for="ArvitNight" class="form-checkbox--label">Arvit at night</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="tefilaArvitNightTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="tefilaRites" class="form-group--label">Rites <sup>*</sup></label>
                                    <div class="form-group--control">
                                        <select id="tefilaRites" name="tefilaRites" class="form-control form-control--select" required>
                                            <option selected disabled>Select a rite</option>
                                            <option value="sephardic">Sephardic</option>
                                            <option value="ashkenazi">Ashkenazi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group my-3">
                                    <label for="tefilaMovement" class="form-group--label">Movement <sup>*</sup></label>
                                    <div class="form-group--control">
                                        <div class="form-radio mb-3">
                                            <input type="radio" class="form-radio--input" name="tefilaMovement"
                                                id="constistorial" value="constistorial" required>
                                            <label for="constistorial" class="form-radio--label">Constistorial</label>
                                        </div>
                                        <div class="form-radio mb-3">
                                            <input type="radio" class="form-radio--input" name="tefilaMovement" id="orthodox" value="orthodox">
                                            <label for="orthodox" class="form-radio--label">Orthodox</label>
                                        </div>
                                        <div class="form-radio">
                                            <input type="radio" class="form-radio--input" name="tefilaMovement" id="habad" value="habad">
                                            <label for="habad" class="form-radio--label">Habad</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group--check">
                                    <label class="form-group--label">Sefer Torah *</label>
                                    <div class="form-group--control">
                                        <div class="form-radio-inline">
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="tefilaSaferTorah"
                                                    id="radioOption20" value="yes" required>
                                                <label for="radioOption20" class="form-radio--label">Yes</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="tefilaSaferTorah"
                                                    id="radioOption21" value="no">
                                                <label for="radioOption21" class="form-radio--label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common-form-wrapper tefila-shabbat">
                            <h2 class="common-title">SHABBAT</h2>
                            <div class="form-content pt-3">
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="shabbatChaharit"
                                                id="shabbatChaharit">
                                            <label for="shabbatChaharit" class="form-checkbox--label">Shabbat Chaharit
                                                :</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="shabbatChaharitTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="shabbatMinh"
                                                id="shabbatMinh">
                                            <label for="shabbatMinh" class="form-checkbox--label">Shabbat Minh'a
                                                :</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="shabbatMinhTime" class="form-control" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-group--check">
                                    <div class="form-group--label">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="shabbatArvit"
                                                id="shabbatArvit">
                                            <label for="shabbatArvit" class="form-checkbox--label">Shabbat Arvit
                                                :</label>
                                        </div>
                                    </div>
                                    <div class="form-group--control">
                                        <input type="time" name="shabbatArvitTime" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="column-12">
                        <div class="common-form-wrapper">
                            <h2 class="common-title">CLASSES</h2>
                            <div class="form-content mb-3">
                                <div class="form-group">
                                    <div class="form-group--top">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="checkALlWomen"
                                                id="checkALlWomen">
                                            <label for="checkALlWomen" class="form-checkbox--label">Classes for
                                                women</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-controls pl-4 additinal-inner-group" style="display: none;" id="women-fields">
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMonday"
                                                    id="wMonday">
                                                <label for="wMonday" class="form-checkbox--label">Monday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMondayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMondayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMondayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMondaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wTuesday"
                                                    id="wTuesday">
                                                <label for="wTuesday" class="form-checkbox--label">Tuesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wTuesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wTuesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wTuesdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wTuesdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wWednesday"
                                                    id="wWednesday">
                                                <label for="wWednesday" class="form-checkbox--label">Wednesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wWednesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wWednesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wWednesdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wWednesdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wThursday"
                                                    id="wThursday">
                                                <label for="wThursday" class="form-checkbox--label">Thursday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wThursdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wThursdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wThursdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wThursdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wFriday"
                                                    id="wFriday">
                                                <label for="wFriday" class="form-checkbox--label">Friday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wFridayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wFridayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wFridayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wFridaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wSaturday"
                                                    id="wSaturday">
                                                <label for="wSaturday" class="form-checkbox--label">Saturday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSaturdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSaturdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSaturdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSaturdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wSunday"
                                                    id="wSunday">
                                                <label for="wSunday" class="form-checkbox--label">Sunday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSundayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSundayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSundayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wSundaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="form-group">
                                    <div class="form-group--top">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input" name="checkALlMen"
                                                id="checkALlMen">
                                            <label for="checkALlMen" class="form-checkbox--label">Classes for
                                                men</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-controls pl-4 additinal-inner-group" style="display: none;" id="men-fields">
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMonday"
                                                    id="mMonday">
                                                <label for="mMonday" class="form-checkbox--label">Monday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMondayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMondayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMondayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMondaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mTuesday"
                                                    id="mTuesday">
                                                <label for="mTuesday" class="form-checkbox--label">Tuesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mTuesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mTuesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mTuesdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mTuesdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mWednesday"
                                                    id="mWednesday">
                                                <label for="mWednesday" class="form-checkbox--label">Wednesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mWednesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mWednesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mWednesdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mWednesdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mThursday"
                                                    id="mThursday">
                                                <label for="mThursday" class="form-checkbox--label">Thursday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mThursdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mThursdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mThursdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mThursdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mFriday"
                                                    id="mFriday">
                                                <label for="mFriday" class="form-checkbox--label">Friday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mFridayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mFridayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mFridayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mFridaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mSaturday"
                                                    id="mSaturday">
                                                <label for="mSaturday" class="form-checkbox--label">Saturday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSaturdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSaturdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSaturdayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSaturdaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mSunday"
                                                    id="mSunday">
                                                <label for="mSunday" class="form-checkbox--label">Sunday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSundayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSundayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--text d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Title : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSundayTitle" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner`">
                                                <div class="d-flex align-items-center input-text">
                                                    <label class="inline-column--label">Speaker : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mSundaySpeaker" type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="column-12">
                        <div class="common-form-wrapper">
                            <h2 class="common-title">MIKVEH</h2>
                            <div class="form-content mb-3">
                                <div class="form-group">
                                    <div class="form-group--top">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input"
                                                name="checkALlMikvehWomen" id="checkALlMikvehWomen">
                                            <label for="checkALlMikvehWomen" class="form-checkbox--label">Mikveh for
                                                women</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-controls pl-4 additinal-inner-group" style="display: none;">
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehMonday"
                                                    id="wMikvehMonday">
                                                <label for="wMikvehMonday" class="form-checkbox--label">Monday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehMondayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehMondayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehTuesday"
                                                    id="wMikvehTuesday">
                                                <label for="wMikvehTuesday" class="form-checkbox--label">Tuesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehTuesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehTuesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehWednesday"
                                                    id="wMikvehWednesday">
                                                <label for="wMikvehWednesday" class="form-checkbox--label">Wednesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehWednesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehWednesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehThursday"
                                                    id="wMikvehThursday">
                                                <label for="wMikvehThursday" class="form-checkbox--label">Thursday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehThursdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehThursdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehFriday"
                                                    id="wMikvehFriday">
                                                <label for="wMikvehFriday" class="form-checkbox--label">Friday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input  name="wMikvehFridayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input  name="wMikvehFridayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehSaturday"
                                                    id="wMikvehSaturday">
                                                <label for="wMikvehSaturday" class="form-checkbox--label">Saturday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehSaturdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehSaturdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="wMikvehSunday"
                                                    id="wMikvehSunday">
                                                <label for="wMikvehSunday" class="form-checkbox--label">Sunday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehSundayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="wMikvehSundayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-column-wrap mt-2 form-group mb-0 d-flex align-items-center additinal-inner-group" style="display: none;">
                                    <div
                                        class="inline-column w-100 fw-100 inline-column--text d-flex align-items-center">
                                        <div class="inline-column--inner">
                                            <div class="d-flex align-items-center input-time">
                                                <label class="inline-column--label"  for="wMikvehManager">Manager : </label>
                                                <div class="inline-column--control">
                                                    <input  name="wMikvehManager" id="wMikvehManager" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content mb-3">
                                <div class="form-group">
                                    <div class="form-group--top">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input"
                                                name="checkALlMikvehMen" id="checkALlMikvehMen">
                                            <label for="checkALlMikvehMen" class="form-checkbox--label">Mikveh for
                                                men</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-controls pl-4 additinal-inner-group" style="display: none;">
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehMonday"
                                                    id="mMikvehMonday">
                                                <label for="mMikvehMonday" class="form-checkbox--label">Monday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehMondayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehMondayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehTuesday"
                                                    id="mMikvehTuesday">
                                                <label for="mMikvehTuesday" class="form-checkbox--label">Tuesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehTuesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehTuesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehWednesday"
                                                    id="mMikvehWednesday">
                                                <label for="mMikvehWednesday" class="form-checkbox--label">Wednesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehWednesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehWednesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehThursday"
                                                    id="mMikvehThursday">
                                                <label for="mMikvehThursday" class="form-checkbox--label">Thursday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehThursdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehThursdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehFriday"
                                                    id="mMikvehFriday">
                                                <label for="mMikvehFriday" class="form-checkbox--label">Friday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehFridayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehFridayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehSaturday"
                                                    id="mMikvehSaturday">
                                                <label for="mMikvehSaturday" class="form-checkbox--label">Saturday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehSaturdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehSaturdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="mMikvehSunday"
                                                    id="mMikvehSunday">
                                                <label for="mMikvehSunday" class="form-checkbox--label">Sunday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehSundayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="mMikvehSundayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-column-wrap mt-2 form-group mb-0 d-flex align-items-center additinal-inner-group" style="display: none;">
                                    <div
                                        class="inline-column w-100 fw-100 inline-column--text d-flex align-items-center">
                                        <div class="inline-column--inner">
                                            <div class="d-flex align-items-center input-time">
                                                <label class="inline-column--label">Manager : </label>
                                                <div class="inline-column--control">
                                                    <input  name="mMikvehManager" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content mb-3">
                                <div class="form-group">
                                    <div class="form-group--top">
                                        <div class="form-checkbox">
                                            <input type="checkbox" class="form-checkbox--input"
                                                name="checkALlMikvehKelims" id="checkALlMikvehKelims">
                                            <label for="checkALlMikvehKelims" class="form-checkbox--label">Mikveh for
                                                kelims</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-controls pl-4 additinal-inner-group" style="display: none;">
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehMonday"
                                                    id="kMonday">
                                                <label for="kMonday" class="form-checkbox--label">Monday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehMondayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehMondayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehTuesday"
                                                    id="kTuesday">
                                                <label for="kTuesday" class="form-checkbox--label">Tuesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehTuesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehTuesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehWednesday"
                                                    id="kWednesday">
                                                <label for="kWednesday" class="form-checkbox--label">Wednesday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehWednesdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehWednesdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehThursday"
                                                    id="kThursday">
                                                <label for="kThursday" class="form-checkbox--label">Thursday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehThursdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehThursdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehFriday"
                                                    id="kFriday">
                                                <label for="kFriday" class="form-checkbox--label">Friday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehFridayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehFridayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehSaturday"
                                                    id="kSaturday">
                                                <label for="kSaturday" class="form-checkbox--label">Saturday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehSaturdayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehSaturdayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inline-column-wrap form-group mb-0 d-flex align-items-center">
                                        <div class="inline-column inline-column--checkbox">
                                            <div class="form-checkbox mb-0">
                                                <input type="checkbox" class="form-checkbox--input" name="kMikvehSunday"
                                                    id="kSunday">
                                                <label for="kSunday" class="form-checkbox--label">Sunday</label>
                                            </div>
                                        </div>
                                        <div class="inline-column inline-column--time d-flex align-items-center">
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">From : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehSundayFromTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-column--inner">
                                                <div class="d-flex align-items-center input-time">
                                                    <label class="inline-column--label">To : </label>
                                                    <div class="inline-column--control">
                                                        <input name="kMikvehSundayToTime" type="time" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline-column-wrap mt-2 form-group mb-0 d-flex align-items-center additinal-inner-group" style="display: none;">
                                    <div
                                        class="inline-column w-100 fw-100 inline-column--text d-flex align-items-center">
                                        <div class="inline-column--inner">
                                            <div class="d-flex align-items-center input-time">
                                                <label class="inline-column--label">Manager : </label>
                                                <div class="inline-column--control">
                                                    <input  name="kMikvehManager" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-form-wrapper mt-5">
                    <h2 class="common-title">ADDITIONAL INFORMATIONS</h2>
                    <div class="form-group">
                        <div class="form-group--top">
                            <div class="form-checkbox">
                                <input type="checkbox" class="form-checkbox--input" name="cbshabbatMeals"
                                    id="shabbatMeals">
                                <label for="shabbatMeals" class="form-checkbox--label">Shabbat Meals</label>
                            </div>
                        </div>
                    </div>
                    <div class="row additinal-inner-group" style="display: none;">
                        <div class="column-6">
                            <div class="common-form-wrapper">
                                <div class="form-content pt-3">
                                    <div class="form-content">
                                        <div class="form-group form-group--check">
                                            <label class="form-group--label">Shabbat lunch Meal :</label>
                                            <div class="form-group--control">
                                                <div class="form-radio-inline">
                                                    <div class="form-radio">
                                                        <input type="radio" class="form-radio--input"
                                                            name="rbShabbatLunchMeal" id="rbShabbatLunchMeal-yes" value="yes">
                                                        <label for="rbShabbatLunchMeal-yes" class="form-radio--label">Yes</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="form-radio--input"
                                                            name="rbShabbatLunchMeal" id="rbShabbatLunchMeal-no" value="no">
                                                        <label for="rbShabbatLunchMeal-no" class="form-radio--label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group show-currency mt-2">
                                            <label for="price" class="form-group--label">Price per person/meal
                                                <sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="number" name="pricePerPersonLunch" id="price" class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="price" class="form-group--label">Adult menu :</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <div class="form-group--control-wrap">
                                                    <div class="form-group--top mt-0">Entrée :</div>
                                                    <input type="text" name="adultLunchEntree1" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultLunchEntree2" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultLunchEntree3" id="Entrée" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Main dish :</div>
                                                    <input type="text" name="adultLunchMaindish1" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultLunchMaindish2" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultLunchMaindish3" id="Maindish"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Dessert :</div>
                                                    <input type="text" name="adultLunchDessert1" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultLunchDessert2" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultLunchDessert3" id="Dessert" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Kashrut (ashgara) :</div>
                                                    <input type="text" name="adultLunchKashrut" id="Kashrut"
                                                        class="form-control mb-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group show-currency mt-2">
                                            <label for="price" class="form-group--label">Price per person/meal
                                                <sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="number" name="pricePerChildLunch" id="price" class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="price" class="form-group--label">Children's menu :</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <div class="form-group--control-wrap">
                                                    <div class="form-group--top mt-0">Entrée :</div>
                                                    <input type="text" name="childLunchEntree1" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childLunchEntree2" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childLunchEntree3" id="Entrée" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Main dish :</div>
                                                    <input type="text" name="childLunchMaindish1" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childLunchMaindish2" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childLunchMaindish3" id="Maindish"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Dessert :</div>
                                                    <input type="text" name="childLunchDessert1" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childLunchDessert2" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childLunchDessert3" id="Dessert" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Kashrut (ashgara) :</div>
                                                    <input type="text" name="childLunchKashrut" id="Kashrut"
                                                        class="form-control mb-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="Reservation" class="form-group--label">Reservation
                                                at<sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="text" name="lunchReservation" id="Reservation"
                                                    class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="Contactperson" class="form-group--label">Contact
                                                person<sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="text" name="lunchContactperson" id="Contactperson"
                                                    class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="picture" class="form-group--label">Picture of the meal :</label>
                                            <div class="form-group--control">
                                                <div class="form-group--file">
                                                    <span class="form-group--file-text">Choose the file</span>
                                                    <input type="file" name="lunchPicture" id="picture"
                                                        class="form-control form-control--file">
                                                </div>
                                                <div
                                                    class="w-100 form-control--info d-flex align-items-center justify-content-between">
                                                    <strong>No file selected</strong>
                                                    <em>(Maximum size: 5 MB)</em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-6">
                            <div class="common-form-wrapper">
                                <div class="form-content pt-3">
                                    <div class="form-content">
                                        <div class="form-group form-group--check">
                                            <label class="form-group--label">Shabbat evening Meal :</label>
                                            <div class="form-group--control">
                                                <div class="form-radio-inline">
                                                    <div class="form-radio">
                                                        <input type="radio" class="form-radio--input"
                                                            name="rbShabbatEveningMeal" id="rbShabbatEveningMeal-yes" value="yes">
                                                        <label for="rbShabbatEveningMeal-yes" class="form-radio--label">Yes</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="form-radio--input"
                                                            name="rbShabbatEveningMeal" id="rbShabbatEveningMeal-no" value="no">
                                                        <label for="rbShabbatEveningMeal-no" class="form-radio--label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group show-currency mt-2">
                                            <label for="price" class="form-group--label">Price per person/meal
                                                <sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="number" name="pricePerPersonEvening" id="price" class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="price" class="form-group--label">Adult menu :</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <div class="form-group--control-wrap">
                                                    <div class="form-group--top mt-0">Entrée :</div>
                                                    <input type="text" name="adultEveningEntree1" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultEveningEntree2" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultEveningEntree3" id="Entrée" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Main dish :</div>
                                                    <input type="text" name="adultEveningMaindish1" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultEveningMaindish2" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultEveningMaindish3" id="Maindish"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Dessert :</div>
                                                    <input type="text" name="adultEveningDessert1" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultEveningDessert2" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="adultEveningDessert3" id="Dessert" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Kashrut (ashgara) :</div>
                                                    <input type="text" name="adultEveningKashrut" id="Kashrut"
                                                        class="form-control mb-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group show-currency mt-2">
                                            <label for="price" class="form-group--label">Price per person/meal
                                                <sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="number" name="pricePerChildEvening" id="price" class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="price" class="form-group--label">Children's menu :</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <div class="form-group--control-wrap">
                                                    <div class="form-group--top mt-0">Entrée :</div>
                                                    <input type="text" name="childEveningEntree1" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childEveningEntree2" id="Entrée"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childEveningEntree3" id="Entrée" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Main dish :</div>
                                                    <input type="text" name="childEveningMaindish1" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childEveningMaindish2" id="Maindish"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childEveningMaindish3" id="Maindish"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Dessert :</div>
                                                    <input type="text" name="childEveningDessert1" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childEveningDessert2" id="Dessert"
                                                        class="form-control mb-2">
                                                    <input type="text" name="childEveningDessert3" id="Dessert" class="form-control">
                                                </div>
                                                <div class="form-group--control-wrap mt-3">
                                                    <div class="form-group--top mt-0">Kashrut (ashgara) :</div>
                                                    <input type="text" name="childEveningKashrut" id="Kashrut"
                                                        class="form-control mb-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="Reservation" class="form-group--label">Reservation
                                                at<sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="text" name="eveningReservation" id="Reservation"
                                                    class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="Contactperson" class="form-group--label">Contact
                                                person<sup>*</sup>
                                                :</label>
                                            <div class="form-group--control">
                                                <input type="text" name="eveningContactperson" id="Contactperson"
                                                    class="form-control is-required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="picture" class="form-group--label">Picture of the meal :</label>
                                            <div class="form-group--control">
                                                <div class="form-group--file">
                                                    <span class="form-group--file-text">Choose the file</span>
                                                    <input type="file" name="eveningPicture" id="picture"
                                                        class="form-control form-control--file">
                                                </div>
                                                <div
                                                    class="w-100 form-control--info d-flex align-items-center justify-content-between">
                                                    <strong>No file selected</strong>
                                                    <em>(Maximum size: 5 MB)</em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="column-6">
                            <div class="form-group">
                                <div class="form-group--top">
                                    <div class="form-checkbox">
                                        <input type="checkbox" class="form-checkbox--input" name="cbRentalBar" id="rental">
                                        <label for="rental" class="form-checkbox--label">Rental for party room / Bar
                                            Mitzvah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="common-form-wrapper additinal-inner-group" style="display: none;">
                                <div class="form-group">
                                    <label for="peoples" class="form-group--label">Number of people<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="number" name="rentalBarpeoples" id="peoples" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group show-currency">
                                    <label for="Reservation" class="form-group--label">Price<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="number" name="rentalBarprice" id="price" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="picture" class="form-group--label">Picture of the room :</label>
                                    <div class="form-group--control">
                                        <div class="form-group--file">
                                            <span class="form-group--file-text">Choose the file</span>
                                            <input type="file" name="rentalBarpicture" id="picture"
                                                class="form-control form-control--file">
                                        </div>
                                        <div
                                            class="w-100 form-control--info d-flex align-items-center justify-content-between">
                                            <strong>No file selected</strong>
                                            <em>(Maximum size: 5 MB)</em>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="Reservation" class="form-group--label">Reservation
                                        at<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="rentalBarReservation" id="Reservation" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="Contactperson" class="form-group--label">Contact
                                        person<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="rentalBarContactperson" id="Contactperson" class="form-control is-required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="column-6">
                            <div class="form-group">
                                <div class="form-group--top">
                                    <div class="form-checkbox">
                                        <input type="checkbox" class="form-checkbox--input" name="cbGala" id="cbGala">
                                        <label for="cbGala" class="form-checkbox--label">Gala</label>
                                    </div>
                                </div>
                            </div>
                            <div class="common-form-wrapper additinal-inner-group" style="display: none;">
                                <div class="form-group">
                                    <label for="nameofgala" class="form-group--label">Name of the gala<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="nameofgala" id="nameofgala" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="organizedBy" class="form-group--label">Organized by<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="galaOrganizedBy" id="organizedBy" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment" class="form-group--label">Annual Gala<sup>*</sup> :</label>
                                    <div class="form-group--control">
                                        <div class="form-radio-inline">
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input is-required" name="rbAnnualGala"
                                                    id="radioOption18" value="yes">
                                                <label for="radioOption18" class="form-radio--label">Yes</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="rbAnnualGala"
                                                    id="radioOption19" value="no">
                                                <label for="radioOption19" class="form-radio--label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="form-group--label">Date <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="date" name="galaDate" id="date" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-group--label">Address <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="galaAddress" id="address" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="form-group--label">City <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="galaCity" id="city" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="postcode" class="form-group--label">Postcode <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="galaPostcode" id="postcode" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="schedule" class="form-group--label">Schedule <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="time" name="galaSchedule" id="schedule" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group show-currency">
                                    <label for="pricepc" class="form-group--label">Price per couple <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="number" name="galaPricePerCouple" id="pricepc" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment" class="form-group--label">Raffle prize<sup>*</sup> :</label>
                                    <div class="form-group--control">
                                        <div class="form-radio-inline">
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input is-required" name="rbGalaRafflePrize"
                                                    id="rbGalaRafflePrize-yes" value="yes">
                                                <label for="rbGalaRafflePrize-yes" class="form-radio--label">Yes</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="rbGalaRafflePrize"
                                                    id="rbGalaRafflePrize-no" value="no">
                                                <label for="rbGalaRafflePrize-no" class="form-radio--label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group galaRaffle1prizeGroup" style="display: none;">
                                    <label for="1prize" class="form-group--label">If yes, which ones?</label>
                                    <div class="form-group--control">
                                        <div class="form-control--name mb-2">
                                            <span class="form-control--name-text">1st prize : </span>
                                            <input type="text" name="galaRaffle1prize" id="1prize" class="form-control">
                                        </div>
                                        <div class="form-control--name mb-2">
                                            <span class="form-control--name-text">2nd prize : </span>
                                            <input type="text" name="galaRaffle2prize" id="2prize" class="form-control">
                                        </div>
                                        <div class="form-control--name">
                                            <span class="form-control--name-text">3rd prize : </span>
                                            <input type="text" name="galaRaffle3prize" id="3prize" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment" class="form-group--label">Presence of the Rabani :</label>
                                    <div class="form-group--control">
                                        <div class="form-radio-inline">
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="rbGalaRabani"
                                                    id="rbGalaRabani-yes" value="yes">
                                                <label for="rbGalaRabani-yes" class="form-radio--label">Yes</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="rbGalaRabani"
                                                    id="rbGalaRabani-no" value="no">
                                                <label for="rbGalaRabani-no" class="form-radio--label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group galaRabani1prizeGroup" style="display: none;">
                                    <label for="1prize" class="form-group--label">If yes, which ones?</label>
                                    <div class="form-group--control">
                                        <div class="form-control--name mb-2">
                                            <span class="form-control--name-text">1 /</span>
                                            <input type="text" name="galaRabani1prize" id="1prize" class="form-control">
                                        </div>
                                        <div class="form-control--name mb-2">
                                            <span class="form-control--name-text">2 /</span>
                                            <input type="text" name="galaRabani2prize" id="2prize" class="form-control">
                                        </div>
                                        <div class="form-control--name">
                                            <span class="form-control--name-text">3 /</span>
                                            <input type="text" name="galaRabani3prize" id="3prize" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="presentation" class="form-group--label">Presentation</label>
                                    <div class="form-group--control">
                                        <textarea name="galaPresentation" id="presentation" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="column-6">
                            <div class="form-group">
                                <div class="form-group--top">
                                    <div class="form-checkbox">
                                        <input type="checkbox" class="form-checkbox--input" name="cbAnnouncementEvent"
                                            id="announcementEvent">
                                        <label for="announcementEvent" class="form-checkbox--label">Announcement by
                                            event</label>
                                    </div>
                                </div>
                            </div>
                            <div class="common-form-wrapper additinal-inner-group" style="display: none;">
                                <div class="form-group">
                                    <label for="synagogue" class="form-group--label">The synagogue organizes :</label>
                                    <div class="form-group--control">
                                        <select name="abeSynagogue" class="form-control form-control--select">
                                            <option selected disabled>Select</option>
                                            <option value="conference">Conference</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group abeIfOtherGroup" style="display: none;">
                                    <label for="ifOther" class="form-group--label">If Other:</label>
                                    <div class="form-group--control">
                                        <input type="text" name="abeIfOther" id="ifOther" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="participation" class="form-group--label">With the participation of
                                        <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="abeParticipation" id="participation" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="theme" class="form-group--label">Theme <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="abeTheme" id="theme" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment" class="form-group--label">Snack :</label>
                                    <div class="form-group--control">
                                        <div class="form-radio-inline">
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="abeRbSnack"
                                                    id="abeRbSnack-yes" value="yes">
                                                <label for="abeRbSnack-yes" class="form-radio--label">Yes</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="abeRbSnack"
                                                    id="abeRbSnack-no" value="no">
                                                <label for="abeRbSnack-no" class="form-radio--label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment" class="form-group--label">Meal :</label>
                                    <div class="form-group--control">
                                        <div class="form-radio-inline">
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="abeRbMeal"
                                                    id="abeRbMeal-yes" value="yes">
                                                <label for="abeRbMeal-yes" class="form-radio--label">Yes</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" class="form-radio--input" name="abeRbMeal"
                                                    id="abeRbMeal-no" value="no">
                                                <label for="abeRbMeal-no" class="form-radio--label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group show-currency">
                                    <label for="pricepc" class="form-group--label">Price per couple <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="number" name="abePricePerCouple" id="pricepc" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group show-currency">
                                    <label for="date" class="form-group--label">Date <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="date" name="abeDate" id="date" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group form-group--check mt-3">
                                    <label class="form-group--label">Open for :</label>
                                    <div class="form-group--control">
                                        <div class="form-radio mb-3">
                                            <input type="radio" class="form-radio--input" name="abeRbOpenFor"
                                                id="abeRbOpenFor-mixed" value="mixed">
                                            <label for="abeRbOpenFor-mixed" class="form-radio--label">Mixed</label>
                                        </div>
                                        <div class="form-radio mb-3">
                                            <input type="radio" class="form-radio--input" name="abeRbOpenFor"
                                                id="abeRbOpenFor-man" value="men">
                                            <label for="abeRbOpenFor-man" class="form-radio--label">Men</label>
                                        </div>
                                        <div class="form-radio">
                                            <input type="radio" class="form-radio--input" name="abeRbOpenFor"
                                                id="abeRbOpenFor-women" value="women">
                                            <label for="abeRbOpenFor-women" class="form-radio--label">Women</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="column-6">
                            <div class="form-group">
                                <div class="form-group--top">
                                    <div class="form-checkbox">
                                        <input type="checkbox" class="form-checkbox--input" name="cbGanIsrael"
                                            id="GanIsrael">
                                        <label for="GanIsrael" class="form-checkbox--label">Gan Israël</label>
                                    </div>
                                </div>
                            </div>
                            <div class="common-form-wrapper additinal-inner-group" style="display: none;">
                                <div class="form-group">
                                    <label for="date" class="form-group--label">Date <sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <div class="form-control--name mb-2">
                                            <span class="form-control--name-text">From : </span>
                                            <input type="date" name="ganIsraelFromDate" id="date" class="form-control is-required">
                                        </div>
                                        <div class="form-control--name mb-2">
                                            <span class="form-control--name-text">To : </span>
                                            <input type="date" name="ganIsraelToDate" id="date" class="form-control is-required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="age" class="form-group--label">Age<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <div class="form-control--inline d-flex align-items-center">
                                            <div class="form-control--name mr-2">
                                                <span class="form-control--name-text">From : </span>
                                                <select name="ganIsraelFromAge" class="form-control form-control--select is-required">
                                                    <?php
                                                    for( $i = 0; $i <= 17; $i++ ){
                                                        ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-control--name ml-5">
                                                <span class="form-control--name-text">To : </span>
                                                <select name="ganIsraelToAge" class="form-control form-control--select is-required">
                                                    <?php
                                                    for( $i = 0; $i <= 17; $i++ ){
                                                        ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span class="form-control--name-text end">years-old</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="activities" class="form-group--label">Activities<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="text" name="ganIsraelActivities" id="activities" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group show-currency">
                                    <label for="ppday" class="form-group--label">Price/day<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="number" name="ganIsraelPricePerDay" id="ppday" class="form-control is-required">
                                    </div>
                                </div>
                                <div class="form-group show-currency">
                                    <label for="ppweek" class="form-group--label">Price/week<sup>*</sup>
                                        :</label>
                                    <div class="form-group--control">
                                        <input type="number" name="ganIsraelPricePerWeek" id="ppweek" class="form-control is-required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-form-wrapper mt-5">
                    <h2 class="common-title">OTHER</h2>
                    <div class="custom-message">
                        <label for="otherComment" class="custom-message--label">Comment: </label>
                        <div class="custom-message--control pl-5">
                            <textarea name="otherComment" id="otherComment" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="page-form-action text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-official">View my Official Minyan
                        creation before confirming</button>
                </div>
            </form>
        </div>
    </section>
<?php
get_footer();