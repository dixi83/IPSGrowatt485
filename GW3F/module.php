<?php

/*
 * @addtogroup growatt
 * @{
 *
 * @package       Growatt
 * @file          module.php
 * @author        Martijn Diks
 * @copyright     2018 Michael Tröger
 * @license       
 * @version       0.1
 *
 */
require_once(__DIR__ . "/../libs/GrowattModule.php");  // diverse Klassen

class GW3F extends Growatt
{
    const PREFIX = 'GW3F';

    public static $Variables = [
		['Input power high ', vtInteger, 'Watt.14490', 0x0000, 4,1 ,true],
		['Input power low ', vtInteger, 'Watt.14490', 0x0001, 4,1 ,true],
		['PV1 voltage ', vtInteger, 'Volt.230', 0x0002, 4,1 ,true],
		['PV1 input current ', vtInteger, 'Ampere', 0x0003, 4,1 ,true],
		['PV1 input watt high ', vtInteger, 'Watt.14490', 0x0004, 4,1 ,true],
		['PV1 input watt low ', vtInteger, 'Watt.14490', 0x0005, 4,1 ,true],
		['PV2 voltage ', vtInteger, 'Volt.230', 0x0006, 4,1 ,true],
		['PV2 input current ', vtInteger, 'Ampere', 0x0007, 4,1 ,true],
		['PV2 input watt high ', vtInteger, 'Watt.14490', 0x0008, 4,1 ,true],
		['PV2 input watt low ', vtInteger, 'Watt.14490', 0x0009, 4,1 ,true],
		['Output power high ', vtInteger, 'Watt.14490', 0x000A, 4,1 ,true],
		['Output power low ', vtInteger, 'Watt.14490', 0x000B, 4,1 ,true],
		['Grid frequency ', vtInteger, 'Hertz.50', 0x000C, 4,1 ,true],
		['L1 phase grid voltage ', vtInteger, 'Volt.230', 0x000D, 4,1 ,true],
		['L1 phase grid output current ', vtInteger, 'Ampere', 0x000E, 4,1 ,true],
		['L1 phase grid output watt high ', vtInteger, 'VA', 0x000F, 4,1 ,true],
		['L1 phase grid output watt low ', vtInteger, 'VA', 0x0010, 4,1 ,true],
		['L2 Three phase grid voltage ', vtInteger, 'Volt.230', 0x0011, 4,1 ,true],
		['L2 Three phase grid output current ', vtInteger, 'Ampere', 0x0012, 4,1 ,true],
		['L2 Three phase grid output power high ', vtInteger, 'VA', 0x0013, 4,1 ,true],
		['L2 Three phase grid output power low ', vtInteger, 'VA', 0x0014, 4,1 ,true],
		['L3 Three phase grid voltage ', vtInteger, 'Volt.230', 0x0015, 4,1 ,true],
		['L3 Three phase grid output current ', vtInteger, 'Ampere', 0x0016, 4,1 ,true],
		['L3 Three phase grid output power high ', vtInteger, 'VA', 0x0017, 4,1 ,true],
		['L3 Three phase grid output power low ', vtInteger, 'VA', 0x0018, 4,1 ,true],
		['Energy today high ', vtInteger, 'Electricity', 0x0019, 4,1 ,true],
		['Energy today low ', vtInteger, 'Electricity', 0x001A, 4,1 ,true],
		['Energy total high ', vtInteger, 'Electricity', 0x001B, 4,1 ,true],
		['Energy total low ', vtInteger, 'Electricity', 0x001C, 4,1 ,true],
		['Work time total high ', vtInteger, '', 0x001D, 4,1 ,true],
		['Work time total low ', vtInteger, '', 0x001E, 4,1 ,true],
		['Temperature Inverter ', vtInteger, 'Temperature', 0x001F, 4,1 ,true],
		['ISO Fault value ', vtInteger, 'Volt.230', 0x0020, 4,1 ,true],
		['GFCI fault Value ', vtInteger, 'mA', 0x0021, 4,1 ,true],
		['DCI fault Value ', vtInteger, 'Ampere', 0x0022, 4,1 ,true],
		['PV voltage fault value ', vtInteger, 'Volt.230', 0x0023, 4,1 ,true],
		['AC voltage fault value ', vtInteger, 'Volt.230', 0x0024, 4,1 ,true],
		['AC frequency fault value ', vtInteger, 'Hertz.50', 0x0025, 4,1 ,true],
		['Temperature fault value ', vtInteger, 'Temperature', 0x0026, 4,1 ,true],
		['Inverter fault bit', vtInteger, '', 0x0027, 4,1 ,true],
		['IPM in inverter Temperature ', vtInteger, 'Temperature', 0x0028, 4,1 ,true],
		['P Bus inside Voltage ', vtInteger, 'Volt.230', 0x0029, 4,1 ,true],
		['N Bus inside Voltage ', vtInteger, 'Volt.230', 0x002A, 4,1 ,true],
		['Product check step Reserved', vtInteger, '', 0x002B, 4,1 ,true],
		['IPF Inverter output PF now 0 20000', vtInteger, '', 0x002C, 4,1 ,true],
		['Reset check data 1 to reset Reserved', vtInteger, '', 0x002D, 4,1 ,true],
		['DeratingMode', vtInteger, '', 0x002E, 4,1 ,true],
		['PV Energy today', vtInteger, '', 0x002F, 4,1 ,true],
		['PV Energy today ', vtInteger, 'Electricity', 0x0030, 4,1 ,true],
		['PV Energy total', vtInteger, '', 0x0031, 4,1 ,true],
		['PV Energy total ', vtInteger, 'Electricity', 0x0032, 4,1 ,true],
		['PV Energy today', vtInteger, '', 0x0033, 4,1 ,true],
		['PV Energy today ', vtInteger, 'Electricity', 0x0034, 4,1 ,true],
		['PV Energy total', vtInteger, '', 0x0035, 4,1 ,true],
		['PV Energy total ', vtInteger, 'Electricity', 0x0036, 4,1 ,true],
		['PV Energy total', vtInteger, '', 0x0037, 4,1 ,true],
		['PV Energy total ', vtInteger, 'Electricity', 0x0038, 4,1 ,true],
		['AC Reactive power', vtInteger, '', 0x0039, 4,1 ,true],
		['AC Reactive power ', vtInteger, 'VaR', 0x003A, 4,1 ,true],
		['AC Reactive energy', vtInteger, '', 0x003B, 4,1 ,true],
		['AC Reactive energy ', vtInteger, 'kVArh', 0x003C, 4,1 ,true],
		['AC Reactive energy', vtInteger, '', 0x003D, 4,1 ,true],
		['AC Reactive energy ', vtInteger, 'kVArh', 0x003E, 4,1 ,true],
		['WarningCode Warning Code', vtInteger, '', 0x003F, 4,1 ,true],
		['WarningValue Warning Value', vtInteger, '', 0x0040, 4,1 ,true],
		['089 GTresaved Resaved Resaved as word', vtInteger, '', 0x004F, 4,1 ,true],
		['Grid Fault record 1 code', vtInteger, '', 0x0059, 4,1 ,true],
		['Grid Fault record 1 yearmonth', vtInteger, '', 0x005A, 4,1 ,true],
		['Grid Fault record 1 dayhour', vtInteger, '', 0x005B, 4,1 ,true],
		['Grid Fault record 1 minsec', vtInteger, '', 0x005C, 4,1 ,true],
		['Grid Fault record 1 value', vtInteger, '', 0x005D, 4,1 ,true],
		['Grid Fault record 2 code', vtInteger, '', 0x005E, 4,1 ,true],
		['Grid Fault record 2 yearmonth', vtInteger, '', 0x005F, 4,1 ,true],
		['Grid Fault record 2 dayhour', vtInteger, '', 0x0060, 4,1 ,true],
		['Grid Fault record 2 minsec', vtInteger, '', 0x0061, 4,1 ,true],
		['Grid Fault record 2 value', vtInteger, '', 0x0062, 4,1 ,true],
		['Grid Fault record 3 code', vtInteger, '', 0x0063, 4,1 ,true],
		['Grid Fault record 3 yearmonth', vtInteger, '', 0x0064, 4,1 ,true],
		['Grid Fault record 3 dayhour', vtInteger, '', 0x0065, 4,1 ,true],
		['Grid Fault record 3 minsec', vtInteger, '', 0x0066, 4,1 ,true],
		['Grid Fault record 3 value', vtInteger, '', 0x0067, 4,1 ,true],
		['Grid Fault record 4 code', vtInteger, '', 0x0068, 4,1 ,true],
		['Grid Fault record 4 yearmonth', vtInteger, '', 0x0069, 4,1 ,true],
		['Grid Fault record 4 dayhour', vtInteger, '', 0x006A, 4,1 ,true],
		['Grid Fault record 4 minsec', vtInteger, '', 0x006B, 4,1 ,true],
		['Grid Fault record 4 value', vtInteger, '', 0x006C, 4,1 ,true],
		['Grid Fault record 5 code', vtInteger, '', 0x006D, 4,1 ,true],
		['Grid Fault record 5 yearmonth', vtInteger, '', 0x006E, 4,1 ,true],
		['Grid Fault record 5 dayhour', vtInteger, '', 0x006F, 4,1 ,true],
		['Grid Fault record 5 minsec', vtInteger, '', 0x0070, 4,1 ,true],
		['Grid Fault record 5 value', vtInteger, '', 0x0071, 4,1 ,true],
		['Inverter Error record 1 code', vtInteger, '', 0x00B3, 4,1 ,true],
		['Inverter Error record 1 year month', vtInteger, '', 0x00B4, 4,1 ,true],
		['Inverter Error record 1 day hour', vtInteger, '', 0x00B5, 4,1 ,true],
		['Inverter Error record 1 min sec', vtInteger, '', 0x00B6, 4,1 ,true],
		['Inverter Error record 1 value', vtInteger, '', 0x00B7, 4,1 ,true],
		['Inverter Error record 2 code', vtInteger, '', 0x00B8, 4,1 ,true],
		['Inverter Error record 2 year month', vtInteger, '', 0x00B9, 4,1 ,true],
		['Inverter Error record 2 day hour', vtInteger, '', 0x00BA, 4,1 ,true],
		['Inverter Error record 2 min sec', vtInteger, '', 0x00BB, 4,1 ,true],
		['Inverter Error record 2 value', vtInteger, '', 0x00BC, 4,1 ,true],
		['Inverter Error record 3 code', vtInteger, '', 0x00BD, 4,1 ,true],
		['Inverter Error record 3 year month', vtInteger, '', 0x00BE, 4,1 ,true],
		['Inverter Error record 3 day hour', vtInteger, '', 0x00BF, 4,1 ,true],
		['Inverter Error record 3 min sec', vtInteger, '', 0x00C0, 4,1 ,true],
		['Inverter Error record 3 value', vtInteger, '', 0x00C1, 4,1 ,true],
		['Inverter Error record 4 code', vtInteger, '', 0x00C2, 4,1 ,true],
		['Inverter Error record 4 year month', vtInteger, '', 0x00C3, 4,1 ,true],
		['Inverter Error record 4 day hour', vtInteger, '', 0x00C4, 4,1 ,true],
		['Inverter Error record 4 min sec', vtInteger, '', 0x00C5, 4,1 ,true],
		['Inverter Error record 4 value', vtInteger, '', 0x00C6, 4,1 ,true],
		['Inverter Error record 5 code', vtInteger, '', 0x00C7, 4,1 ,true],
		['Inverter Error record 5 year month', vtInteger, '', 0x00C8, 4,1 ,true],
		['Inverter Error record 5 day hour', vtInteger, '', 0x00C9, 4,1 ,true],
		['Inverter Error record 5 min sec', vtInteger, '', 0x00CA, 4,1 ,true],
		['Inverter Error record 5 value', vtInteger, '', 0x00CB, 4,1 ,true]
    ];
}


