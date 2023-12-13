<?php
/**
 * Currency
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apideck
 *
 * The Apideck OpenAPI Spec: SDK Optimized
 *
 * The version of the OpenAPI document: 10.1.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Apideck\Client\Model;
use \Apideck\Client\ObjectSerializer;

/**
 * Currency Class Doc Comment
 *
 * @category Class
 * @description Indicates the associated currency for an amount of money. Values correspond to [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217).
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Currency
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN_CURRENCY = 'UNKNOWN_CURRENCY';

    const AED = 'AED';

    const AFN = 'AFN';

    const ALL = 'ALL';

    const AMD = 'AMD';

    const ANG = 'ANG';

    const AOA = 'AOA';

    const ARS = 'ARS';

    const AUD = 'AUD';

    const AWG = 'AWG';

    const AZN = 'AZN';

    const BAM = 'BAM';

    const BBD = 'BBD';

    const BDT = 'BDT';

    const BGN = 'BGN';

    const BHD = 'BHD';

    const BIF = 'BIF';

    const BMD = 'BMD';

    const BND = 'BND';

    const BOB = 'BOB';

    const BOV = 'BOV';

    const BRL = 'BRL';

    const BSD = 'BSD';

    const BTN = 'BTN';

    const BWP = 'BWP';

    const BYR = 'BYR';

    const BZD = 'BZD';

    const CAD = 'CAD';

    const CDF = 'CDF';

    const CHE = 'CHE';

    const CHF = 'CHF';

    const CHW = 'CHW';

    const CLF = 'CLF';

    const CLP = 'CLP';

    const CNY = 'CNY';

    const COP = 'COP';

    const COU = 'COU';

    const CRC = 'CRC';

    const CUC = 'CUC';

    const CUP = 'CUP';

    const CVE = 'CVE';

    const CZK = 'CZK';

    const DJF = 'DJF';

    const DKK = 'DKK';

    const DOP = 'DOP';

    const DZD = 'DZD';

    const EGP = 'EGP';

    const ERN = 'ERN';

    const ETB = 'ETB';

    const EUR = 'EUR';

    const FJD = 'FJD';

    const FKP = 'FKP';

    const GBP = 'GBP';

    const GEL = 'GEL';

    const GHS = 'GHS';

    const GIP = 'GIP';

    const GMD = 'GMD';

    const GNF = 'GNF';

    const GTQ = 'GTQ';

    const GYD = 'GYD';

    const HKD = 'HKD';

    const HNL = 'HNL';

    const HRK = 'HRK';

    const HTG = 'HTG';

    const HUF = 'HUF';

    const IDR = 'IDR';

    const ILS = 'ILS';

    const INR = 'INR';

    const IQD = 'IQD';

    const IRR = 'IRR';

    const ISK = 'ISK';

    const JMD = 'JMD';

    const JOD = 'JOD';

    const JPY = 'JPY';

    const KES = 'KES';

    const KGS = 'KGS';

    const KHR = 'KHR';

    const KMF = 'KMF';

    const KPW = 'KPW';

    const KRW = 'KRW';

    const KWD = 'KWD';

    const KYD = 'KYD';

    const KZT = 'KZT';

    const LAK = 'LAK';

    const LBP = 'LBP';

    const LKR = 'LKR';

    const LRD = 'LRD';

    const LSL = 'LSL';

    const LTL = 'LTL';

    const LVL = 'LVL';

    const LYD = 'LYD';

    const MAD = 'MAD';

    const MDL = 'MDL';

    const MGA = 'MGA';

    const MKD = 'MKD';

    const MMK = 'MMK';

    const MNT = 'MNT';

    const MOP = 'MOP';

    const MRO = 'MRO';

    const MUR = 'MUR';

    const MVR = 'MVR';

    const MWK = 'MWK';

    const MXN = 'MXN';

    const MXV = 'MXV';

    const MYR = 'MYR';

    const MZN = 'MZN';

    const NAD = 'NAD';

    const NGN = 'NGN';

    const NIO = 'NIO';

    const NOK = 'NOK';

    const NPR = 'NPR';

    const NZD = 'NZD';

    const OMR = 'OMR';

    const PAB = 'PAB';

    const PEN = 'PEN';

    const PGK = 'PGK';

    const PHP = 'PHP';

    const PKR = 'PKR';

    const PLN = 'PLN';

    const PYG = 'PYG';

    const QAR = 'QAR';

    const RON = 'RON';

    const RSD = 'RSD';

    const RUB = 'RUB';

    const RWF = 'RWF';

    const SAR = 'SAR';

    const SBD = 'SBD';

    const SCR = 'SCR';

    const SDG = 'SDG';

    const SEK = 'SEK';

    const SGD = 'SGD';

    const SHP = 'SHP';

    const SLL = 'SLL';

    const SOS = 'SOS';

    const SRD = 'SRD';

    const SSP = 'SSP';

    const STD = 'STD';

    const SVC = 'SVC';

    const SYP = 'SYP';

    const SZL = 'SZL';

    const THB = 'THB';

    const TJS = 'TJS';

    const TMT = 'TMT';

    const TND = 'TND';

    const TOP = 'TOP';

    const TRC = 'TRC';

    const _TRY = 'TRY';

    const TTD = 'TTD';

    const TWD = 'TWD';

    const TZS = 'TZS';

    const UAH = 'UAH';

    const UGX = 'UGX';

    const USD = 'USD';

    const USN = 'USN';

    const USS = 'USS';

    const UYI = 'UYI';

    const UYU = 'UYU';

    const UZS = 'UZS';

    const VEF = 'VEF';

    const VND = 'VND';

    const VUV = 'VUV';

    const WST = 'WST';

    const XAF = 'XAF';

    const XAG = 'XAG';

    const XAU = 'XAU';

    const XBA = 'XBA';

    const XBB = 'XBB';

    const XBC = 'XBC';

    const XBD = 'XBD';

    const XCD = 'XCD';

    const XDR = 'XDR';

    const XOF = 'XOF';

    const XPD = 'XPD';

    const XPF = 'XPF';

    const XPT = 'XPT';

    const XTS = 'XTS';

    const XXX = 'XXX';

    const YER = 'YER';

    const ZAR = 'ZAR';

    const ZMK = 'ZMK';

    const ZMW = 'ZMW';

    const BTC = 'BTC';

    const ETH = 'ETH';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN_CURRENCY,
            self::AED,
            self::AFN,
            self::ALL,
            self::AMD,
            self::ANG,
            self::AOA,
            self::ARS,
            self::AUD,
            self::AWG,
            self::AZN,
            self::BAM,
            self::BBD,
            self::BDT,
            self::BGN,
            self::BHD,
            self::BIF,
            self::BMD,
            self::BND,
            self::BOB,
            self::BOV,
            self::BRL,
            self::BSD,
            self::BTN,
            self::BWP,
            self::BYR,
            self::BZD,
            self::CAD,
            self::CDF,
            self::CHE,
            self::CHF,
            self::CHW,
            self::CLF,
            self::CLP,
            self::CNY,
            self::COP,
            self::COU,
            self::CRC,
            self::CUC,
            self::CUP,
            self::CVE,
            self::CZK,
            self::DJF,
            self::DKK,
            self::DOP,
            self::DZD,
            self::EGP,
            self::ERN,
            self::ETB,
            self::EUR,
            self::FJD,
            self::FKP,
            self::GBP,
            self::GEL,
            self::GHS,
            self::GIP,
            self::GMD,
            self::GNF,
            self::GTQ,
            self::GYD,
            self::HKD,
            self::HNL,
            self::HRK,
            self::HTG,
            self::HUF,
            self::IDR,
            self::ILS,
            self::INR,
            self::IQD,
            self::IRR,
            self::ISK,
            self::JMD,
            self::JOD,
            self::JPY,
            self::KES,
            self::KGS,
            self::KHR,
            self::KMF,
            self::KPW,
            self::KRW,
            self::KWD,
            self::KYD,
            self::KZT,
            self::LAK,
            self::LBP,
            self::LKR,
            self::LRD,
            self::LSL,
            self::LTL,
            self::LVL,
            self::LYD,
            self::MAD,
            self::MDL,
            self::MGA,
            self::MKD,
            self::MMK,
            self::MNT,
            self::MOP,
            self::MRO,
            self::MUR,
            self::MVR,
            self::MWK,
            self::MXN,
            self::MXV,
            self::MYR,
            self::MZN,
            self::NAD,
            self::NGN,
            self::NIO,
            self::NOK,
            self::NPR,
            self::NZD,
            self::OMR,
            self::PAB,
            self::PEN,
            self::PGK,
            self::PHP,
            self::PKR,
            self::PLN,
            self::PYG,
            self::QAR,
            self::RON,
            self::RSD,
            self::RUB,
            self::RWF,
            self::SAR,
            self::SBD,
            self::SCR,
            self::SDG,
            self::SEK,
            self::SGD,
            self::SHP,
            self::SLL,
            self::SOS,
            self::SRD,
            self::SSP,
            self::STD,
            self::SVC,
            self::SYP,
            self::SZL,
            self::THB,
            self::TJS,
            self::TMT,
            self::TND,
            self::TOP,
            self::TRC,
            self::_TRY,
            self::TTD,
            self::TWD,
            self::TZS,
            self::UAH,
            self::UGX,
            self::USD,
            self::USN,
            self::USS,
            self::UYI,
            self::UYU,
            self::UZS,
            self::VEF,
            self::VND,
            self::VUV,
            self::WST,
            self::XAF,
            self::XAG,
            self::XAU,
            self::XBA,
            self::XBB,
            self::XBC,
            self::XBD,
            self::XCD,
            self::XDR,
            self::XOF,
            self::XPD,
            self::XPF,
            self::XPT,
            self::XTS,
            self::XXX,
            self::YER,
            self::ZAR,
            self::ZMK,
            self::ZMW,
            self::BTC,
            self::ETH
        ];
    }
}


