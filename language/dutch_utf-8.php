<?php
// +--------------------------------------------------------------------------+
// | evList A calendar solution for glFusion                                  |
// +--------------------------------------------------------------------------+
// | dutch_utf-8.php                                                          |
// |                                                                          |
// | This is a Dutch language file for the evList plugin                      |
// | Translation by: 22.08.2009   R. Otten       - basstunez AT live.nl       |
// +--------------------------------------------------------------------------+
// | Based on the evList Plugin for Geeklog CMS                               |
// | Copyright (C) 2007 by the following authors:                             |
// |                                                                          |
// | Authors: Alford Deeley     - ajdeeley AT summitpages.ca                  |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+
/**
*   Dutch language file for the evList plugin
*   @package    evlist
*/

// this file can't be used on its own
if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

$LANG_EVLIST = array(
'pi_title'          => 'evList',
'moderation_title'  => 'evList Ingezonden Evenementen',
'del_future'        => 'Delete this and future repeats',
'conf_del_future'   => 'Are you sure you want to delete all future occurences of this event?',
'del_all'           => 'Verwijderen?',
'conf_del_all'      => 'Are you sure you want to delete all occurences of this event?',
'del_repeat'        => 'Delete this occurence',
'conf_del_repeat'   => 'Are you sure you want to delete this occurence?',
'conf_del_event'    => 'Weet je zeker dat je dit evenement wilt verwijderen?',
'conf_del_item'     => 'Are you sure you want to delete this item?',
'edit_repeat'       => 'Edit this instance',
'edit_event'        => 'Wijzig Evenement',
'add_event'         => 'Evenement Toevoegen',
'err_missing_title' => '* <i>Evenement Titel</i> is een verplicht veld.',
'err_missing_weekdays' => 'You must specify at least one day for a day-of-week recurrence.',
'err_times'         => 'The ending time cannot be before the starting time.',
'err_db_saving'     => 'A database error occurred while saving your record.',
'err_cal_import'    => 'There were %d errors importing from the calendar. Check your error log for details',
'err_import_event'  => 'Error importing event %s',
'err_cal_notavail' => 'The calendar plugin data is not available.',
'info'              => 'Information',
'warning'           => 'Warning',
'alert'             => 'Alert',
'editing_instance'  => 'You are editing a single instance of this event.',
'editing_series'    => 'You are editing the event series.  Any customizations made to specific instances will be lost!',
'allday'            => 'All Day',
'recur_cust_format' =>  '(Formaat: JJJJ-MM-DD, JJJJ-MM-DD, etc.)',
'recur_cust_ignoredates' => '(Ignores the start and end dates given above.)',
'click_to_select'   => 'Click to select',
'access_denied'     => 'Toegang Geweigerd',
'skip_weekends'     => 'Weekends overslaan?',
'yes'               => 'Ja',
'no'                => 'In',
'next_bus_day'      => 'Volgende werkdag?',
'edit'              => 'Wijzig',
'event_title'       => 'Evenement Titel',
'event_summary'     => 'Samenvatting van het evenement: %s',
'start_date'        => 'Startdatum',
'start_time'        => 'Starttijd',
'end_time'          => 'Eindtijd',
'end_date'          => 'Einddatum',
'copy'              => 'Kopieer',
'id'                => 'ID',
'enabled'           => 'Ingeschakeld',
'enabled_q'         => 'Ingeschakeld',
'ical_enabled'      => 'ICal Ingeschakeld',
'calendar'          => 'Calendar',
'calendars'         => 'Calendars',
'select_cals'       => 'Select which calendars will be displayed',
'new_calendar'      => 'New Calendar',
'events'            => 'Evenementen',
'new_event'         => 'Evenement toevoeging',
'categories'        => 'evList Categorieen',
'category'          => 'Categorie',
'new_category'      => 'New Category',
'ticket_types'      => 'Ticket Types',
'type'              => 'Type',
'fee'               => 'Fee',
'new_ticket_type'   => 'New Ticket Type',
'print_tickets'     => 'Print Tickets',
'import_calendar'   => 'Import from Calendar',
'import_from_csv'   => 'Import from CSV',
'title'             => 'Titel',
'ev_info'           => 'Algemene evenement informatie',
'ev_schedule'       => 'Schedule',
'ev_perms'          => 'Permissions',
'ev_contact'        => 'Contact',
'ev_location'       => 'Locatie',
'show_upcoming'     => 'Show in Upcoming Events',
'misc'              => 'Miscellaneous',
'foreground'        => 'Foreground',
'background'        => 'Background',
'colors'            => 'Colors',
'cal_name'          => 'Calendar Name',
'cat_name'          => 'Category Name',
'reset'             => 'Reset',
'del_cal_msg1'      => 'You are about to delete a calendar.  This is a permanent deletion and cannot be reversed.  Be sure that this is what you want to do before you click "Submit" below!
You may either move existing events to a new calendar, or delete those events.',
'del_cal_events'    => 'This calendar has %d events associated with it.  You may move these events to another calendar by selecting one below.  If you do not select a new calendar for the events, they will ALL be permanently deleted from the database.',
'confirm_del'       => 'Confirm that you want to delete the item',
'none_delete'       => 'None- delete the events',
'deleting_cal'      => 'Deleting Calendar',
'filter'            => 'Filter',
'when'              => 'When',
'where'             => 'Where',
'what'              => 'What',
'more_info'         => 'Meer Informatie',
'click_here'        => 'Klik Hier',
'contact_us'        => 'Please <a href="%s">contact us</a> for more information.',
'rem_subject'       => "Evenement notificatie via {$_CONF['site_name']}",
'rem_msg1'          => "Je ontvangt een herinnering voor dit evenement omdat je adres is ingevoerd via {$_CONF['site_name']}.",
'rem_url'           => 'Voor meer informatie, ga naar %s',
'you_are_subscribed' => 'You are subscribed to this event.',
'topic_all'         => 'All',
'topic_home'        => 'Homepage only',
'recur_stop_desc'   => ' until %s',
'recur_freq_txt' => 'Occurs every',
'interval_label'    => 'Specify the interval and day on which this event will recur',
'interval_note'     => 'The first occurance will be on the date specified above.',
'all_calendars'     => 'All Calendars',
'all_categories'    => 'All Categories',
'update_cats'       => 'Categorieen bijwerken',
'notify_submission' => 'A new event has been submitted to {$_CONF[\'site_name\']}.  It can be approved or deleted at {$_CONF[\'site_admin_url\']}/moderation.php.',
'submitted_by'      => 'Submitted By',
'notify_subject'    => 'Event Notification from $_CONF[\'site_name\']',
'show_contactlink'  => 'Show link to contact email',
'no_match'          => 'Er zijn geen evenementen die aan de criteria voldoen.',
'event_begins'      => 'Dit evenement begint op: %s',
'read_more'         => 'Lees meer',
'quick_del'         => 'Verwijder Nu',
'gen_evt_info'      => 'Algemene evenement informatie',
'full_desc'         => 'Volledige beschrijving',
'postmode'          => 'Berichtmode',
'post_html_note1'   => 'OPMERKING: Het <i>Evenement Locatie</i> veld hieronder accepteert ook html.',
'enable_reminders_q' => 'E-mail notificaties toestaan?',
'disable_reminders_note' => 'Het uitschakelen van notificaties zal alle relevante notificaties verwijderen.',
'submit_email_note' => 'Voer je mailadres in, om een herinnering voorafgaand aan dit evenement te ontvangen.',
'add_to_cats'       => 'Voeg je evenement toe aan een enkele of meerdere categorieen',
'cats_not_req'      => 'Je evenement toevoegen aan een categorie is niet verplicht.',
'cat_note1'         => 'Maak een nieuwe categorie voor je evenement in plaats van, of aanvullend op bestaande categorieen.',
'url'               => 'URL',
'street_address'    => 'Adres',
'city'              => 'Stad',
'state'             => 'Provincie',
'country'           => 'Land',
'zip'               => 'Postcode',
'for_more_info'     => 'Voor meer informatie neem contact op met:',
'email'             => 'E-mail',
'phone'             => 'Telefoon #',
'perms_desc'        => 'Rechten: (R = lezen, E = wijzig, wijzig rechten verondersteld lees rechten)',
'date_time_info'    => 'Date and Time Information',
'split_q'           => 'Splitsen?',
'rec_event_info'    => 'Terugkerend Evenement Informatie',
'rec_event_q'       => 'Is dit een terugkerend evenement?',
'event_recurs'      => 'Evenement is terugkerend',
'select_format'     => 'Selecteer Formaat',
'jump_today'        => 'Jump to Today',
'day_view'          => 'Daily View',
'week_view'         => 'Weekly View',
'month_view'        => 'Monthly View',
'year_view'         => 'Yearly View',
'list_view'         => 'List View',
'select_range'      => 'Selecteer een evenementenbereik om te tonen',
'or_choose_cat'     => 'en/of kies een categorie',
'go'                => 'Ga',
'days_prior'        => 'dagen voorafgaand aan dit evenement.',
'email_private'     => 'Je mailadres zal geheim blijven en wordt enkel gebruikt om je te herinneren aan dit evenement.',
'current_events'    => 'Huidige evenementen',
'past_events'       => 'Voorgaande evenementen',
'upcoming_events'   => 'Aankomende evenementen',
'this_week_events'  => 'Evenementen deze week',
'this_month_events' => 'Evenementen deze maand',
'hits'              => 'Treffers',
'top_ten'           => 'Top Tien evList Evenementen',
'no_events_viewable' => 'Geen evenementen in het systeem zijn momenteel zichtbaar.',
'date'              => 'Datum',
'all_upcoming'      => 'All Upcoming Events',
'subscribe_to'      => 'Subscribe to',
'messages'          => array(
        1   => 'Gelukt!  Evenement is verwijderd.',
        2   => 'Gelukt!  Je evenement is opgeslagen.',
        3   => 'Evenement is gekopieerd.  Je kunt nu je evenement aanpassen.',
        4   => 'Gelukt!  Het evenement is aangepast.',
        5   => 'Verplichte velden zijn leeg.  Controleer je invoer.',
        6   => 'Waarschuwing!',
        7   => 'evList standaard instellingen zijn toegepast.',
        8   => 'evList instellingen zijn bijgewerkt.',
        9   => "Dank je voor het toevoegen van je evenement aan {$_CONF['site_name']}. Het is verzonden naar de beheerders van de website voor goedkeuring. Zodra goedgekeurd, zal je evenement op de website verschijnen.",
        10  => 'Toegepaste datums zijn niet geldig.  Controleer je invoer nogmaals.',
        11  => 'Categorieen zijn aangepast.',
        12  => 'Herinnering opgeslagen.  Voorafgaand aan dit evenement ontvang je een bericht.',
        13  => 'Je hebt een ongeldig e-mailadres ingevoerd.  Probeer het nogmaals.',
        14  => 'Geef het aantal dagen voorafgaand aan dit evenement waarop je gewaarschuwd wilt worden.',
        15  => "Deze site vereist minstens {$_EV_CONF['reminder_speedlimit']} seconden tussen notificatie aanvragen.",
        16  => "Deze site vereist minstens {$_EV_CONF['post_speedlimit']} seconden tussen evenement inzendingen.",
        17  => 'The glFusion kalender evenementen zijn geimporteerd',
        18  => 'Notificatie succesvol verwijderd',
        19  => 'One or more errors occured during the calendar import.  Check the error log for details.',
    20  => 'This event doesn\'t allow registrations, or you do not have access to it.',
    21  => 'You\'re already signed up for this event.',
    22  => 'This event is full.',
    23  => 'There was an error processing your request.',
    24  => 'You have been registered for this event.',
    25  => 'Your registration has been cancelled.',
    26  => 'Payment is required, click <a href="%s">here</a> to check out',
    50  => 'Not Paid',
    51  => 'Already Used',
    ),
'admin_instr'       => array(
        'categories'    => 'Deleting categories <strong>will not</strong> delete events belonging to those categories.<br />Disabling a category <strong>will not</strong> disable its events.  Those events will continue to appear in the event list if it belongs to another category or if no category is selected.',
        'calendars'     => 'All events must be associated with a calendar.<br />Disabling a calendar prevents its events from being displayed. Deleting a calendar requires that events belonging to it be moved to another calendar.<br />Calendar number 1 cannot be deleted, but may be disabled.',
        'events'        => 'To create a new event, click on "New Event" above.<br />To modify or delete an event, click on that event\'s edit icon below. To enable/disable an event, check the appropriate box below.',
    'tickettypes' => 'Tickets can be created for free or paid admission, and to cover one event occurrence or all occurrences (event pass). Tickets are only used if the global &quot;Enable RSVP&quot; setting is enabled.<br />Ticket Types can only be deleted if they haven&apos; been used for any events.',
    ),
'rec_formats'       => array(
        1   => 'Voorgaande Evenementen',
        2   => 'Aankomende Evenementen',
        3   => 'Komende Week',
        4   => 'Komende Maand',
        5   => 'Evenementen',
        6   => 'Datum',
        7   => 'Evenementen Lijst',
    ),
'rec_periods'       => array(
    1 => 'day',
    2 => 'month',
    3 => 'year',
    4 => 'week',
    5 => 'month',
    6 => '',
    ),

'postmodes'         => array(
        'plaintext'   => 'gewone tekst',
        'html'   => 'html',
    ),
'rec_intervals'     => array(
        1   => 'Eerste',
        2   => 'Tweede',
        3   => 'Derde',
        4   => 'Vierde',
        5   => 'Laatste',
    ),
'ranges'            => array(
        1   => 'voorgaande',
        2   => 'aankomend',
        3   => 'deze week',
        4   => 'deze maand'
    ),
'recur_desc'        => array(
        1   => 'Occurs every day',
        2   => 'Occurs on the same date(s) each month',
        3   => 'Occurs on the same date each year',
        4   => 'Occurs every %interval% week on %day%',
        5   => 'Occurs %interval% month on the %daynum% %day%',
        6   => '',      // custom dates
    ),
'periods'           => array(
        'day'   => 'Day',
        'week'  => 'Week',
        'month' => 'Month',
        'year'  => 'Year',
    ),
'on_days'   => 'on %s',
'on_the_days' => 'on the %s',
'each'      => 'each',
'every_num'  => 'every %d',
'event_editor'  => 'Evenement Toevoegen of Wijzigen',
'datestart_note' => '* <i>Startdatum</i> jaar en maand zijn verplichte velden.',
'custom_label'  => 'Specificeer het %s waarop dit evenement terugkeert%s',
'stop_label'    => 'Specificeer %s waarna dit evenement niet zal plaatsvinden%s',
'day_by_date' => 'dag, ofwel datum,',
'dates' => 'datums',
'year_and_month' => 'jaar en maand',
'year' => 'jaar',
'days_of_week' => 'dagen van de week, op nummer,',
'date_l' => 'datum',
'if_any' => ', indien van toepassing',
'all_day_event' => 'Dit evenement duurt de hele dag.',
'more_from_cat' => 'Meer evenementen van:&nbsp;',
'access_denied_msg' => 'Alleen geautoriseerde Gebruikers hebben toegang tot deze Pagina.  Uw gebruikersnaame en IP adres zijn gelogd.',
'coordinates'   => 'Coordinates',
'latitude'      => 'Latitude',
'longitude'     => 'Longitude',
'instr_coords'  => 'If zero or empty, the coordinates will be filled in automatically from the address information, if possible.',
'select_location' => 'Select Location',
'instr_sel_loc' => 'Select a location from the list, or fill in the details.',
'use_rsvp'       => 'Enable signups?',
'max_rsvp'       => 'Max. Attendees',
'max_user_rsvp' => 'Max. Registrations per User',
'signup'        => 'Register for this event',
'cancelreg'     => 'Cancel your registration',
'rsvp_none'     => 'Signups Disabled',
'rsvp_event'    => 'Allow signups for the event',
'rsvp_repeat'   => 'Allow signups for each occurrence',
'rsvp_mindays'  => 'Min. days to RSVP',
'admin_rsvp'    => 'Manage RSVP\'s',
'rsvp_date'      => 'Registration Date',
'registration'  => 'Registration',
'rsvp_waitlist' => 'Accept waitlisted reservations?',
'rsvp_cutoff'   => 'RSVP Cutoff (days)',
'sel_monthdays' => 'Select the days each month when the event will occur',
'sub_this_instance' => 'This Instance',
'sub_all_instances' => 'All occurrences',
'description'   => 'Description',
'event_pass'    => 'Event Pass',
'cancel_free'   => 'Free registrations can be cancelled here if you will not be attending.',
'free_rsvp'     => 'Free Registrations',
'ticket_num'    => 'Ticket Number',
'date_used'     => 'Date Used',
'paid'          => 'Paid',
'login_to_register' => 'You need to log into the site to register for this event',
'conf_reset'    => 'Are your sure you want to reset this item?',
'reset_usage'   => 'Reset Usage',
'export_list'   => 'Export List',
'waitlisted'    => 'Waitlisted',
'name'          => 'Name',
);


/* glFusion integrations:  links, stats, search, etc. */
$X_LANG_EVLIST00 = array (
    1   => 'evList',
    2   => 'Evenementen Lijst',
    3   => 'Evenement toevoeging',
    4   => 'Toegang Geweigerd',
    5   => 'Alleen geautoriseerde Gebruikers hebben toegang tot deze Pagina.  Uw gebruikersnaame en IP adres zijn gelogd.',
    6   => 'Evenementen',
    7   => 'evList Evenementen Overzicht',
    8   => 'evList Zoek Resultaten',
    9   => 'Titel',
    10  => 'Start Datum',
    11  => 'Treffers',
    12  => 'evList Evenementen',
    13  => 'Evenement Naam',
    14  => 'Top Tien evList Evenementen',
    15  => 'Geen evenementen in het systeem zijn momenteel zichtbaar.',
    16  => 'evList Ingezonden Evenementen',
    17  => 'Titel',
    18  => 'Start Datum',
    19  => 'Titel',
    20  => 'Datum',
    21  => 'Toevoegingen',
    22  => 'evList Inzendingen',
    23  => 'Einde bericht',
    24  => 'All Categories',
    25  => 'Jump to Today',
    26  => 'Daily View',
    27  => 'Weekly View',
    28  => 'Monthly View',
    29  => 'Yearly View',
    30  => 'List View',
);

/* admin */
$X_LANG_EVLIST01 = array (
    1   => '',
    2   => 'Anonieme gebruikers toestaan om evenementen te bekijken?',
    3   => 'Anonieme inzendingen toestaan?',
    4   => 'Inzendingen van aangemelde gebruikers toestaan?',
    5   => 'HTML toestaan bij het plaatsen van een evenement?',
    6   => 'NB: Alleen aangemelde gebruikers mogen HTML gebruiken.',
    7   => 'Gebruikers menu link optie',
    8   => 'Menu item inschakelen?',
    9   => 'Week begint op',
    10  => 'Centerblok Inschakelen?',
    11  => 'Centerblock positie',
    12  => 'Onderwerp',
    13  => 'Datum formaat',
    14  => 'Tijd notatie',
    15  => 'Opslaan',
    16  => 'Reset',
    17  => 'Standaarden Toekennen',
    18  => 'Annuleren',
    19  => 'Toegangs Instellingen',
    20  => 'GUI Instellingen',
    21  => 'Centerblok Instellingen',
    22  => 'NB: Alleen van toepassing op header.thtml en de menu_elements var.',
    23  => 'Voeg Evenement Toe',
    24  => 'Toon Evenementen',
    25  => 'Zondag',
    26  => 'Maandag',
    27  => 'evList Instellingen',
    28  => 'Alle',
    29  => 'Alleen Startpagina',
    30  => 'Naar boven',
    31  => 'Na het featured artikel',
    32  => 'Naar beneden',
    33  => 'Gehele pagina',
    34  => 'NB: Indien aangevinkt wordt er een evenementen overzicht getoond als een centerblok op de index pagina.',
    35  => 'Geef het aantal evenementen op om te tonen',
    36  => 'Selecteer een evenementenbereik om te tonen',
    37  => 'NB: Alle inzendingen staan in de wachtrij voor goedkeuring.',
    38  => 'Wijzig',
    39  => 'Evenement Titel',
    40  => 'Start Datum',
    41  => 'Kopieer',
    42  => 'ID',
    43  => 'Maak Nieuw',
    44  => 'evList Instellingen',
    45  => 'evList Evenementen Beheer',
    46  => 'To create a new event, click on "Create New" above.<br />To manage global options, click on "evList Config" above.<br />To manage categories, click on "Categories" above.<br />To modify or delete an event, click on that event\'s edit icon below. To view an event, click on the event\'s title you wish to view. To enable/disable an event, check the appropriate box below.',
    47  => 'Inschakelen',
    48  => 'Toon Evenement',
    49  => 'Wijzig Evenement',
    50  => 'Clone evenement naar editor',
    51  => 'evList Categorieen',
    52  => 'evList Evenementen',
    53  => 'ID',
    54  => 'Naam',
    55  => 'Ingeschakeld',
    56  => 'Verwijderen?',
    57  => 'Maak nieuwe categorieen hieronder',
    58  => 'To manage events, click on "evList Events" above.<br />To manage global options, click on "evList Config" above.<br />To edit category names, delete or enable/disable categories, edit or check the apporpriate box below.  You may also create new categories in the empty fields at the bottom of the table.',
    59  => 'To manage events, click on "evList Events" above.<br />To manage categories, click on "evList Categories" above.<br />To manage evList glogal options, edit the fields below where necessary.',
    60  => 'Categorieen bijwerken',
    61  => 'Deleting categories <strong>will not</strong> delete events belonging to those categories.',
    62  => 'Upcoming events block: number of events to display',
    63  => 'Main list: number of events to display per page',
    64  => 'Number of characters to display in event summary',
    65  => 'Disabling a category <strong>will not</strong> disable its events.  Those events will continue to appear in the event list if it belongs to another category or if no category is selected.',
    66  => 'Notificaties inschakelen?',
    67  => 'NB: Notificaties uitschakelen verwijderd alle opgeslagen notificaties.',
    68  => 'Een evenement is niet meer <i>Aankomend</i>',
    69  => 'Importeren',
);

/* list */
$X_LANG_EVLIST02 = array (
    1   => 'Er zijn geen evenementen die aan de criteria voldoen.',
    2   => 'Evenementen Lijst',
    3   => 'Dit evenement begint op: %s',
    4   => 'Lees meer',
    5   => 'Contact',
    6   => 'Dit evenement eindigt op: %s',
    7   => 'Huidige evenementen',
    8   => 'Voorgaande evenementen',
    9   => 'Aankomende evenementen',
    10  => 'Selecteer Periode',
    11  => 'Evenementen deze week',
    12  => 'Evenementen deze maand',
    13  => 'Vorige',
    14  => 'Volgende',
    15  => 'Categorie',
    16  => 'Ga',
    17  => 'Evenement Toevoegen'
);

/* event */
$X_LANG_EVLIST03 = array (
    1   => 'Evenement Details',
    2   => 'Evenement ID# %s bestaat niet.  Controleer de link en probeer het nog eens.',
    3   => '<strong>Begint:</strong> ',
    4   => '<strong>Eindigt:</strong> ',
    5   => '%s voor meer informatie.',
    6   => 'Contact %s',
    7   => 'Neem contact op',
    8   => 'Wijzig',
    9   => 'Verwijder Nu',
    10  => 'Terug naar evenementen lijst',
    11  => 'Dit evenement vindt plaats op: %s',
    12  => 'Locatie',
    13  => 'Klik Hier',
    14  => 'Dit evenement duurt de hele dag.',
    15  => 'Dit evenement is terugkerend %s.',
    16  => 'Contact',
    17  => 'dagelijks',
    18  => 'maandelijks',
    19  => 'jaarlijks',
    20  => 'wekelijks: %s',
    21  => 'en ',
    22  => 'en/of kies een categorie',
    23  => 'Meer evenementen van:&nbsp;',
    24  => 'Mail me via',
    25  => 'Voer je mailadres in, om een herinnering voorafgaand aan dit evenement te ontvangen.',
    26  => 'Je mailadres zal geheim blijven en wordt enkel gebruikt om je te herinneren aan dit evenement.',
    27  => 'Verzenden',
    28  => 'dagen voorafgaand aan dit evenement.',
    29  => "Evenement notificatie via {$_CONF['site_name']}",
    30  => "Je ontvangt een herinnering voor dit evenement omdat je adres is ingevoerd via {$_CONF['site_name']}.",
    31  => 'Het evenement, %s, vindt plaats op of rond %s.',
    32  => 'Samenvatting van het evenement: %s',
    33  => 'Voor meer informatie, ga naar %s',
    34  => "Bedankt namens {$_CONF['site_name']}",
    35  => "iedere",
    36  => 'Weet je zeker dat je dit evenement wilt verwijderen?',
    37  => 'All Day',
);

/* editor */
$X_LANG_EVLIST04 = array (
    1   => 'Evenement Toevoegen of Wijzigen',
    2   => 'Algemene evenement informatie',
    3   => 'Datum en tijd informatie',
    4   => 'Locatie Informatie',
    5   => 'Contact Informatie',
    6   => 'Rechten Informatie',
    7   => 'Opslaan',
    8   => 'Reset',
    9   => 'Verwijder',
    10  => 'Annuleren',
    11  => 'Evenement Titel',
    12  => 'Evenement Samenvatting (bijv. slogan, entreeprijs, besloten, minimum leeftijd)',
    13  => 'Volledige beschrijving',
    14  => 'Start',
    15  => 'Einde',
    16  => 'dag',
    17  => 'maand',
    18  => 'jaar',
    19  => 'uur',
    20  => 'minuut',
    21  => 'Evenement Locatie',
    22  => 'Adres',
    23  => 'Stad',
    24  => 'Provincie',
    25  => 'Postcode',
    26  => 'URL',
    27  => 'Contact Informatie',
    28  => '* <i>Evenement Titel</i> is een verplicht veld.',
    29  => 'Is dit een terugkerend evenement?',
    30  => 'Evenement is terugkerend',
    31  => 'Splitsen?',
    32  => 'Hele dag?',
    33  => 'Startdatum',
    34  => 'Starttijd',
    35  => 'Einddatum',
    36  => 'Eindtijd',
    37  => 'E-mail',
    38  => 'Telefoon #',
    39  => 'Voor meer informatie neem contact op met:',
    40  => 'Land',
    41  => 'Rechten: (R = lezen, E = wijzig, wijzig rechten verondersteld lees rechten)',
    42  => 'NB: "Leden" zijn alle aangemelde gebruikers van de website en "anoniem" zijn alle gebruikers die op de website rondkijken maar niet zijn aangemeld.',
    43  => 'Eigenaar',
    44  => 'Groep',
    45  => 'Het <i>Iedere</i> veld is niet verplicht, afhankelijk van je keuze bij de terugkerende periode.',
    46  => 'Berichtmode',
    47  => 'OPMERKING: Het <i>Evenement Locatie</i> veld hieronder accepteert ook html.',
    48  => 'Evenement inschakelen?',
    49  => 'Terugkerend Evenement Informatie',
    50  => 'Specificeer het %s waarop dit evenement terugkeert%s',
    51  => ', indien van toepassing',
    52  => 'dag, ofwel datum,',
    53  => '(Formaat: JJJJ-MM-DD)',
    54  => 'datum',
    55  => 'jaar en maand',
    56  => '(Formaat: JJJJ-MM)',
    57  => 'jaar',
    58  => '(Formaat: JJJJ)',
    59  => 'dagen van de week, op nummer,',
    60  => '(bijv.: 1,3,4,etc. (waar 1 = Zondag))',
    61  => 'interval en dag',
    62  => 'datums',
    63  => '(Formaat: JJJJ-MM-DD, JJJJ-MM-DD, etc.)',
    64  => 'Selecteer Formaat',
    65  => ' iedere maand',
    66  => 'Specificeer %s waarna dit evenement niet zal plaatsvinden%s',
    67  => '* <i>Startdatum</i> jaar en maand zijn verplichte velden.',
    68  => 'Categorie Informatie',
    69  => 'Nieuwe categorie',
    70  => 'Maak een nieuwe categorie voor je evenement in plaats van, of aanvullend op bestaande categorieen.',
    71  => 'Voeg je evenement toe aan een enkele of meerdere categorieen',
    72  => 'Je evenement toevoegen aan een categorie is niet verplicht.',
    73  => 'Weekends overslaan?',
    74  => 'Volgende werkdag?',
    75  => 'Een terugkerend evenement dat uitkomt in een weekend kan overgeslagen worden of verplaatst worden naar de volgende werkdag.',
    76  => 'E-mail notificaties toestaan?',
    77  => 'Het uitschakelen van notificaties zal alle relevante notificaties verwijderen.'
);

/* column block and centerblock */
$X_LANG_EVLIST05 = array (
    1   => 'Voorgaande Evenementen',
    2   => 'Aankomende Evenementen',
    3   => 'Komende Week',
    4   => 'Komende Maand',
    5   => 'Evenementen',
    6   => 'Datum',
    7   => 'Evenementen Lijst'
);

/* recurring periods */
$X_LANG_EVLIST06 = array (
    1   => 'Dagelijks, bijv., 4 april tot en met 7 april (aaneensluitend)',
    2   => 'Maandelijks op datum, bijv., de eerste van de maand',
    3   => 'Jaarlijks, bijv., ieder jaar op 25 december',
    4   => 'Wekelijks, bijv., Maandag, Woensdag, en Vrijdag',
    5   => 'Maandelijks op dag, bijv., de derde vrijdag van de maand',
    6   => 'Meerdere datums: een komma-gescheiden lijst van kalenderdatums'
);

/* messages */
$X_LANG_EVLIST07 = array (
    1   => 'Gelukt!  Evenement is verwijderd.',
    2   => 'Gelukt!  Je evenement is opgeslagen.',
    3   => 'Evenement is gekopieerd.  Je kunt nu je evenement aanpassen.',
    4   => 'Gelukt!  Het evenement is aangepast.',
    5   => 'Verplichte velden zijn leeg.  Controleer je invoer.',
    6   => 'Waarschuwing!',
    7   => 'evList standaard instellingen zijn toegepast.',
    8   => 'evList instellingen zijn bijgewerkt.',
    9   => "Dank je voor het toevoegen van je evenement aan {$_CONF['site_name']}. Het is verzonden naar de beheerders van de website voor goedkeuring. Zodra goedgekeurd, zal je evenement op de website verschijnen.",
    10  => 'Toegepaste datums zijn niet geldig.  Controleer je invoer nogmaals.',
    11  => 'Categorieen zijn aangepast.',
    12  => 'Herinnering opgeslagen.  Voorafgaand aan dit evenement ontvang je een bericht.',
    13  => 'Je hebt een ongeldig e-mailadres ingevoerd.  Probeer het nogmaals.',
    14  => 'Geef het aantal dagen voorafgaand aan dit evenement waarop je gewaarschuwd wilt worden.',
    15  => "Deze site vereist minstens {$_EV_CONF['reminder_speedlimit']} seconden tussen notificatie aanvragen.",
    16  => "Deze site vereist minstens {$_EV_CONF['post_speedlimit']} seconden tussen evenement inzendingen.",
    17  => 'The glFusion kalender evenementen zijn geimporteerd',
    18  => 'Notificatie succesvol verwijderd',
);

/* postmodes */
$X_LANG_EVLIST08 = array (
    1   => 'gewone tekst',
    2   => 'html'
);

/* range option */
$X_LANG_EVLIST09 = array (
    1   => 'voorgaande',
    2   => 'aankomend',
    3   => 'deze week',
    4   => 'deze maand'
);

/* weekday option */
$X_LANG_EVLIST10 = array (
    1   => 'Zondag',
    2   => 'Maandag',
    3   => 'Dinsdag',
    4   => 'Woensdag',
    5   => 'Donderdag',
    6   => 'Vrijdag',
    7   => 'Zaterdag'
);

/* interval option */
$X_LANG_EVLIST11 = array (
    1   => 'Eerste',
    2   => 'Tweede',
    3   => 'Derde',
    4   => 'Vierde',
    5   => 'Laatste'
);

/* weekday abreviations */
$X_LANG_EVLIST12 = array (
    1   => 'ZO',
    2   => 'MA',
    3   => 'DI',
    4   => 'WO',
    5   => 'DO',
    6   => 'VR',
    7   => 'ZA'
);

/* event passing options */
$X_LANG_EVLIST13 = array (
    1   => 'zodra de starttijd verstreken is (indien van toepassing).',
    2   => 'zodra de startdatum verstreken is, bijvoorbeeld, de volgende dag.',
    //3   => 'zodra de eindtijd verstreken is (indien van toepassing).',
    //4   => 'zodra de eindtijd verstreken is (indien van toepassing).'
);

/* Periods */
$X_LANG_EVLIST14 = array(
    'day'   => 'Day',
    'week'  => 'Week',
    'month' => 'Month',
    'year'  => 'Year',
);

// Localization of the Admin Configuration UI
$LANG_configsections['evlist'] = array(
    'label'                 => 'evList',
    'title'                 => 'evList Instellingen'
);
$LANG_confignames['evlist'] = array(
    'allow_anon_view'       => 'Anonieme gebruikers kunnen evenementen bekijken?',
    'allow_anon_add'        => 'Anonieme inzendingen toestaan?',
    'allow_user_add'        => 'Inzendingen van aangemelde gebruikers toestaan?',
    'can_add'               => 'Users allowed to add events',
    'allow_html'            => 'HTML toestaan bij opmaken?',
    'usermenu_option'       => 'Gebruiker menu link optie',
    'enable_menuitem'       => 'Menu Item inschakelen?',
    'week_begins'           => 'Week begint op',
    'date_format'           => 'Datum formaat',
    'time_format'           => 'Tijd formaat',
    'enable_categories'     => 'Categorieen Inschakelen',
    'enable_centerblock'    => 'Centerblok Inschakelen?',
    'pos_centerblock'       => 'Centerblok positie',
    'topic_centerblock'     => 'Rubriek',
    'range_centerblock'     => 'Selecteer een evenementenbereik om te tonen',
    'limit_centerblock'     => 'Geef het aantal evenementen om te tonen',
    'limit_list'            => 'Hoofdlijst: aantal evenementen per pagina',
    'limit_block'           => 'Aankomend evenementen blok: aantal te tonen evenementen',
    'limit_summary'         => 'Aantal zichtbare karakters bij een evenement summary',
    'enable_reminders'      => 'Email notificaties Toestaan?',
    'event_passing'         => 'Een evenement is niet meer <i>aankomend</i>',
    'default_permissions'   => 'Standaard Rechten (eigenaar,groep,leden,anon)',
    'reminder_speedlimit'   => 'Snelheidslimiet Notificaties',
    'post_speedlimit'       => 'Snelheidslimiet Inzendingen',
    'reminder_days'         => 'aantal dagen voor een evenement start dat notificaties zijn toegestaan',
    'displayblocks'         => 'Display glFusion Blocks',
    'default_view'          => 'Default View',
    'max_upcoming_days'     => 'Max. Upcoming days to show in list',
    'use_locator'           => 'Integrate with the Locator plugin?',
    'use_weather'           => 'Integrate with the Weather plugin?',
    'cal_tmpl'              => 'Use HTML or JSON templates',
    'enable_rsvp'           => 'Enable Registration/Ticketing?',
    'rsvp_print'            => 'Enable Ticket Printing?',
);
$LANG_configsubgroups['evlist'] = array(
    'sg_main'               => 'Hoofd Instellingen',
    'sg_rsvp'               => 'RSVP/Ticketing',
);
$LANG_fs['evlist'] = array(
    'ev_access'             => 'Toegangscontrole',
    'ev_gui'                => 'GUI Instellingen',
    'ev_centerblock'        => 'Centerblok Instellingen',
    'ev_permissions'        => 'Standaard Rechten',
    'ev_rsvp'               => 'Registration and Ticketing',
);
$LANG_configselects['evlist'] = array(
    0 => array('Ja' => 1, 'Nee' => 0),
    1 => array('Ja' => TRUE, 'Nee' => FALSE),
    2 => array('Geen' => 0, 'Voeg Evenement Toe' => 1, 'Toon Evenementen' => 2),
    3 => array('Zondag' => 1, 'Maandag' => 2),
    4 => array(
            'Don Nov 20, 2008'      => '%a %b %d, %Y',
            'Don Nov 20'            => '%a %b %d',
            'Donderdag Nov 20, 2008' => '%A %b %d, %Y',
            'Donderdag Nov 20'       => '%A %b %d',
            'Donderdag November 20'  => '%A %B %d',
            'November 20, 2008'     => '%B %d, %Y',
            '11/20/08'              => '%m/%d/%y',
            '11-20-08'              => '%m-%d-%y',
            '2008 11 20'            => '%Y %m %d',
            'Nov 20 2008'           => '%b %d %Y',
            'Nov 20, 2008'          => '%b %d, %Y',
    ),
    5 => array('02:38 PM' => '%I:%M %p', '14:48' => '%H:%M',),
    6 => array(
            'zodra de starttijd is overschreden (indien aanwezig)' => 1,
            'zodra de startdatum is overschreden, bijv, de volgende dag.' => 2,
            'as soon as the end time has passed (if exists).' => 3,
            'as soon as the end date has passed.' => 4,
        ),
    7 => array('Bovenaan de pagina'=>1,'Na het featured artikel'=>2,'Onderaan de pagina'=>3,'Gehele Pagina'=>0),
    8 => array('afgelopen'=>1,'aankomend'=>2,'deze week'=>3,'deze maand'=>4),
    9 => array('disabled' => 0, 'table' => 1, 'story' => 2),
    12 => array('Geen Toegang' => 0, 'Alleen-Lezen' => 2, 'Lezen-Schrijven' => 3),
    13 => array('Left Blocks' => 0, 'Right Blocks' => 1, 'Left & Right Blocks' => 2, 'None' => 3),
    14 => array('Day' => 'day', 'Week' => 'week', 'Month' => 'month', 'Year' => 'year', 'List' => 'list'),
    15 => array('Admins Only' => 0, 'Logged-In Users' => 1, 'Logged-In+Anon Users' => 2),
    16 => array('HTML' => 'html', 'JSON' => 'json'),
    17 => array('No' => 0, 'Default No' => 1, 'Default Paid Only' => 2,
                'Default Paid or Unpaid' => 3),
);

?>
