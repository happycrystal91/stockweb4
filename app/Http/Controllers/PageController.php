<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Private Banking > Corporate Advisory and Banking
    public function centerForFamilyBusiness() {
        return view('web.private-banking.corporate-advisory-and-banking.center_for_family_business');
    }
    public function corporateAdvisory() {
        return view('web.private-banking.corporate-advisory-and-banking.corporate_advisory');
    }
    public function corporateBanking() {
        return view('web.private-banking.corporate-advisory-and-banking.corporate_banking');
    }
    // Private Banking > Private Equity
    public function aboutWingate() {
        return view('web.private-banking.private-equity.about_wingate');
    }
    public function investProfile() {
        return view('web.private-banking.private-equity.invest_profile');
    }
    public function investmentStrategyAndTransactionTypes() {
        return view('web.private-banking.private-equity.investment_strategy_and_transaction_types');
    }
    public function selectPortfolioCompanies() {
        return view('web.private-banking.private-equity.select_portfolio_companies');
    }
    // Private Banking > Private Wealth Management
    public function centerForWomenAndWealth() {
        return view('web.private-banking.private-wealth-management.center_for_women_and_wealth');
    }
    public function investmentAdvisory() {
        return view('web.private-banking.private-wealth-management.investment_advisory');
    }
    public function philanthropicAdvisory() {
        return view('web.private-banking.private-wealth-management.philanthropic_advisory');
    }
    public function privateClientLanding() {
        return view('web.private-banking.private-wealth-management.private_client_landing');
    }
    public function trustServices() {
        return view('web.private-banking.private-wealth-management.trust_services');
    }
    public function wealthPlanning() {
        return view('web.private-banking.private-wealth-management.wealth_planning');
    }
}
