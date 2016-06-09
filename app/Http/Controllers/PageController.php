<?php

namespace App\Http\Controllers;

class PageController extends Controller {

    public function getIndex() {
        return view('pages.index');
    }

    public function getProfileAgentBillMurray() {
        return view('pages.profile.agent.bill-murray');
    }

    public function getAboutUs() {
        return view('pages.about-us');
    }

    public function getTermsOfUse() {
        return view('pages.terms-of-use');
    }

    public function getCalendar() {
        return view('pages.wireframe.calendar');
    }

    public function getFullWidth() {
        return view('pages.wireframe.full-width');
    }

    public function getSidebar() {
        return view('pages.wireframe.sidebar');
    }

    public function getProfileSupplierCruise() {
        return view('pages.profile.supplier.cruise');
    }

    public function getProfileSupplierHotel() {
        return view('pages.profile.supplier.hotel');
    }

    public function getProductCruiseItinerary() {
        return view('pages.product.cruise.itinerary');
    }

    public function getProductHotelListing() {
        return view('pages.product.hotel.listing');
    }
    
}
