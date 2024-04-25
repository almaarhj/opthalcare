<?php

use App\Models\Consumble;
use App\Models\Appointment;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedController;
use App\Http\Controllers\IOPController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\ICD10Controller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VitalsController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\HmoPlanController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HmoGroupController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\VitalRefController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AntenatalController;
use App\Http\Controllers\CashPointController;
use App\Http\Controllers\ConsumbleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DrugStoreController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\RadiologyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\LabRequestController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\WaitingListController;
use App\Http\Controllers\VisionAcuityController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ConsultingRoomController;
use App\Http\Controllers\SystemSettingsController;
use App\Http\Controllers\AppointmentTypeController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\RadiologyRequestController;
use App\Http\Controllers\ConsultingTemplateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect()->route('app.dashboard');
});

Auth::routes();


Route::group(['prefix' => 'app', 'as' => 'app.', 'middleware' => 'auth'], function () {
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('users', UserController::class);
  Route::resource('diagnosis', DiagnosisController::class);
  Route::get('diagnosis/{id}', [DiagnosisController::class, 'show']);
  Route::resource('roles', RoleController::class);
  Route::resource('patients', PatientController::class);
  Route::get('patient/draw/{id}', [PatientController::class, 'draw'])->name('patient.draw');
  Route::get('patient/check-in/{id}', [PatientController::class, 'checkIn'])->name('patient.checkIn');
  Route::resource('hmos', HmoGroupController::class);
  Route::resource('departments', DepartmentController::class);
  Route::resource('documents', DocumentController::class);
  Route::resource('payment-methods', PaymentMethodController::class);
  Route::resource('religions', ReligionController::class);
  Route::resource('hmo-services', PaymentMethodController::class);
  Route::resource('hmo-plans', HmoPlanController::class);
  Route::resource('wards', WardController::class);
  Route::resource('beds', BedController::class);
  Route::resource('messages', MessageController::class);
  Route::resource('appointments', AppointmentController::class);
  Route::resource('pharmacy', PharmacyController::class);
  Route::post('lab-category', [LaboratoryController::class, 'storeCategory'])->name('lab-category.store');
  Route::get('lab-export', [LaboratoryController::class, 'Export'])->name('lab.export');
  Route::post('lab-import', [LaboratoryController::class, 'Import'])->name('lab.import');
  Route::post('lab-category/{category}', [LaboratoryController::class, 'updateCategory'])->name('lab-category.update');
  Route::post('lab-template', [LaboratoryController::class, 'storeTemplate'])->name('lab-template.store');
  Route::post('lab-template/{template}', [LaboratoryController::class, 'updateTemplate'])->name('lab-template.update');
  Route::post('lab-test', [LaboratoryController::class, 'store'])->name('lab-test.store');
  Route::post('lab-test/{test}', [LaboratoryController::class, 'update'])->name('lab-test.update');
  Route::post('drugs-add', [DrugController::class, 'storeDrugs'])->name('drugs-add.store');
  Route::post('drugs-add/{drugs}', [DrugController::class, 'updateDrugs'])->name('drugs-add.update');
  Route::post('drugs-store', [DrugStoreController::class, 'store'])->name('drugs-store.store');
  Route::post('drugs-category', [DrugController::class, 'storeCategory'])->name('drugs-category.store');
  Route::post('drugs-category/{category}', [DrugController::class, 'updateCategory'])->name('drugs-category.update');
  Route::resource('lab', LabRequestController::class);
  Route::get('lab/specimen/{lab}', [LabRequestController::class, 'specimen'])->name('lab.specimen');
  Route::resource('vitals', VitalsController::class);
  Route::resource('vision-acuity', VisionAcuityController::class);
  Route::resource('iop', IOPController::class);
  Route::get('vision-acuity/{id}', [VisionAcuityController::class, 'show']);
  Route::get('iop/{id}', [IOPController::class, 'show']);
  Route::post('lab-category', [LaboratoryController::class, 'storeCategory'])->name('lab-category.store');

  Route::post('consumables-add', [ConsumbleController::class, 'storeConsumables'])->name('consumables-add.store');
  Route::post('consumables-add/{drugs}', [ConsumbleController::class, 'updateConsumables'])->name('consumables-add.update');
  Route::post('consumables-category', [ConsumbleController::class, 'storeCategory'])->name('consumables-category.store');
  Route::post('consumables-category/{category}', [ConsumbleController::class, 'updateCategory'])->name('consumables-category.update');


  Route::resource('procedures', ProcedureController::class);
  Route::post('procedure', [ProcedureController::class, 'storeProcedure'])->name('procedure.store');
  Route::post('procedure/{procedures}', [ProcedureController::class, 'updateProcedure'])->name('procedure.update');
  Route::post('procedures-category', [ProcedureController::class, 'storeCategory'])->name('procedures-category.store');
  Route::post('procedures-category/{category}', [ProcedureController::class, 'updateCategory'])->name('procedures-category.update');


  // **** Radiology Routes
  Route::resource('radiology', RadiologyRequestController::class);
  Route::post('radiology-category', [RadiologyController::class, 'storeCategory'])->name('radiology-category.store');
  Route::post('radiology-category/{category}', [RadiologyController::class, 'updateCategory'])->name('radiology-category.update');
  Route::post('radiology-template', [RadiologyController::class, 'storeTemplate'])->name('radiology-template.store');
  Route::post('radiology-test', [RadiologyController::class, 'store'])->name('radiology-test.store');
  Route::post('radiology-test/{test}', [RadiologyController::class, 'update'])->name('radiology-test.update');
  //

  Route::resource('wait-list', WaitingListController::class);
  Route::resource('consumables', ConsumbleController::class);
  Route::resource('icd', ICD10Controller::class);
  Route::resource('tags', TagController::class);
  Route::resource('admissions', AdmissionController::class);
  Route::resource('billing', BillingController::class);
  Route::resource('antenatals', AntenatalController::class);
  Route::resource('specialities', SpecialityController::class);
  Route::resource('reports', ReportController::class);
  Route::resource('consulting-rooms', ConsultingRoomController::class);
  Route::resource('appointment-type', AppointmentTypeController::class);
  Route::resource('consulting-templates', ConsultingTemplateController::class);
  Route::resource('settings', SystemSettingsController::class)->except('store', 'update', 'edit', 'show', 'destroy');
  Route::post('settings', [SystemSettingsController::class, 'updateSystemSettings'])->name('update.system.settings');
  Route::post('settings/currency', [SystemSettingsController::class, 'updateStoreCurrency'])->name('update.store.currency');
  Route::get('settings/admission', [SystemSettingsController::class, 'admissionSettings'])->name('settings.admission');
  Route::get('settings/antenatal', [SystemSettingsController::class, 'antenatalSettings'])->name('settings.antenatal');
  Route::get('settings/consultations', [SystemSettingsController::class, 'consultationSettings'])->name('settings.consultations');
  Route::get('settings/consumables', [SystemSettingsController::class, 'consumablesSettings'])->name('settings.consumables');
  Route::get('settings/pharmacy', [SystemSettingsController::class, 'PharmacySettings'])->name('settings.pharmacy');
  Route::get('settings/laboratory', [SystemSettingsController::class, 'LaboratorySettings'])->name('settings.laboratory');
  Route::get('settings/radiology', [SystemSettingsController::class, 'RadiologySettings'])->name('settings.radiology');
  Route::get('settings/procedures', [SystemSettingsController::class, 'ProcedureSettings'])->name('settings.procedures');
  Route::get('settings/dialysis', [SystemSettingsController::class, 'RadiologySettings'])->name('settings.dialysis');
  Route::resource('categories', ServiceCategoryController::class);
  Route::resource('positions', PositionController::class);
  Route::resource('allergies', AllergyController::class);
  Route::resource('vitalRefs', VitalRefController::class);
  Route::resource('cashpoints', CashPointController::class);
});
Route::get('getLGA/{state}', [DashboardController::class, 'getLGA']);
Route::post('getDrugsCategorybyStore', [DrugController::class, 'getDrugsCategorybyStore']);
Route::post('getDrugsbyStore', [DrugController::class, 'getDrugsbyStore']);


URL::forceScheme('https');
