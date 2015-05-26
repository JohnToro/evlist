<?php
// +--------------------------------------------------------------------------+
// | evList A calendar solution for glFusion                                  |
// +--------------------------------------------------------------------------+
// | german_utf-8.php                                                         |
// |                                                                          |
// | German language file for evList                                          |
// | Modifiziert: August 09 Tony Kluever									  |
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
*   German language file for the evList plugin
*   @package    evlist
*/

// this file can't be used on its own
if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

$LANG_EVLIST = array(
'pi_title'          => 'evList',
'moderation_title'  => 'evList-Ereigniseinsendungen',
'del_future'        => 'Delete this and future repeats',
'conf_del_future'   => 'Are you sure you want to delete all future occurences of this event?',
'del_all'           => 'L�schen?',
'conf_del_all'      => 'Are you sure you want to delete all occurences of this event?',
'del_repeat'        => 'Delete this occurence',
'conf_del_repeat'   => 'Are you sure you want to delete this occurence?',
'conf_del_event'    => 'M�chtest Du dieses Ereignis l�schen?',
'conf_del_item'     => 'Are you sure you want to delete this item?',
'edit_repeat'       => 'Edit this instance',
'edit_event'        => 'Ereignis bearbeiten',
'add_event'         => 'Ereignis hinzuf�gen',
'err_missing_title' => '* <i>Ereignistitel</i> ist ein ben�tigtes Feld.',
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
'allday'            => 'Alle Tage',
'recur_cust_format' => '(Format: YYYY-MM-DD, YYYY-MM-DD, etc.)',
'recur_cust_ignoredates' => '(Ignores the start and end dates given above.)',
'click_to_select'   => 'Click to select',
'access_denied'     => 'Zugriff verweigert',
'skip_weekends'     => 'Wochenenden �berspringen?',
'yes'               => 'Yes',
'no'                => 'No',
'next_bus_day'      => 'N�chster Werktag?',
'edit'              => 'Bearbeiten',
'event_title'       => 'Ereignistitel',
'event_summary'     => 'Ereigniszusammenfassung: %s',
'start_date'        => 'Startdatum',
'start_time'        => 'Startzeit',
'end_time'          => 'Endzeit',
'end_date'          => 'Enddatum',
'copy'              => 'Kopieren',
'id'                => 'ID',
'enabled'           => 'Aktivieren',
'enabled_q'         => 'Aktivieren',
'ical_enabled'      => 'ICal Aktivieren',
'calendar'          => 'Calendar',
'calendars'         => 'Calendars',
'select_cals'       => 'Select which calendars will be displayed',
'new_calendar'      => 'New Calendar',
'events'            => 'Ereignisse',
'new_event'         => 'Ereignis hinzuf�gen',
'categories'        => 'evList-Kategorien',
'category'          => 'Kategorie',
'new_category'      => 'New Category',
'ticket_types'      => 'Ticket Types',
'type'              => 'Type',
'fee'               => 'Fee',
'new_ticket_type'   => 'New Ticket Type',
'print_tickets'     => 'Print Tickets',
'import_calendar'   => 'Import from Calendar',
'import_from_csv'   => 'Import from CSV',
'title'             => 'Titel',
'ev_info'           => 'Allgemeine Ereignisinformation',
'ev_schedule'       => 'Schedule',
'ev_perms'          => 'Permissions',
'ev_contact'        => 'Contact',
'ev_location'       => 'Ort',
'show_upcoming'     => 'Show in Upcoming Events',
'misc'              => 'Miscellaneous',
'foreground'        => 'Foreground',
'background'        => 'Background',
'colors'            => 'Colors',
'cal_name'          => 'Calendar Name',
'cat_name'          => 'Category Name',
'reset'             => 'zur�cksetzen',
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
'more_info'         => 'Mehr Informationen',
'click_here'        => 'Klicke hier',
'contact_us'        => 'Please <a href="%s">contact us</a> for more information.',
'rem_subject'       => "Eine Ereigniserinnerung von {$_CONF['site_name']}",
'rem_msg1'          => "Du erh�ltst diese Erinnerung, weil Deine Adresse an {$_CONF['site_name']} gsendet wurde.",
'rem_url'           => 'F�r mehr Informationen besuche bitte %s',
'you_are_subscribed' => 'You are subscribed to this event.',
'topic_all'         => 'All',
'topic_home'        => 'Homepage only',
'recur_stop_desc'   => ' until %s',
'recur_freq_txt' => 'Occurs every',
'interval_label'    => 'Specify the interval and day on which this event will recur',
'interval_note'     => 'The first occurance will be on the date specified above.',
'all_calendars'     => 'All Calendars',
'all_categories'    => 'Alle Kategorien',
'update_cats'       => 'Kategorien aktualisieren',
'notify_submission' => 'A new event has been submitted to {$_CONF[\'site_name\']}.  It can be approved or deleted at {$_CONF[\'site_admin_url\']}/moderation.php.',
'submitted_by'      => 'Submitted By',
'notify_subject'    => 'Event Notification from $_CONF[\'site_name\']',
'show_contactlink'  => 'Show link to contact email',
'no_match'          => 'Es gibt keine Ereignisse, die Deinen Kriterien entsprechen.',
'event_begins'      => 'Dieses Ereignis beginnt: %s',
'read_more'         => 'Mehr lesen',
'quick_del'         => 'Schnelll�schen',
'gen_evt_info'      => 'Allgemeine Ereignisinformation',
'full_desc'         => 'Volle Beschreibung',
'postmode'          => 'Beitragsmodus',
'post_html_note1'   => 'HINWEIS: Das <i>Ereignisort</i> Feld akzeptiert auch HTML.',
'enable_reminders_q' => 'E-Mail Erinnerungen aktivieren?',
'disable_reminders_note' => 'Das Deaktivieren der Erinnerungen, l�scht alle relevanten Erinnerungen.',
'submit_email_note' => 'Sende Deine E-Mail Adresse, um an dieses Ereignis erinnert zu werden.',
'add_to_cats'       => 'F�ge Dein Ereignis einer einzelnen oder mehreren Kategorien hinzu',
'cats_not_req'      => 'Das Hinzuf�gen Deines Ereignisses zu einer Kategorie, ist nicht notwendig.',
'cat_note1'         => 'Erstelle eine neue Kategorie f�r Dein Ereignis, an Stelle von oder zus�tzlh zu einer existierenden Kategorie.',
'url'               => 'URL',
'street_address'    => 'Strasse',
'city'              => 'Stadt',
'state'             => 'Bundesland',
'country'           => 'Land',
'zip'               => 'Postleitzahl',
'for_more_info'     => 'F�r mehr Informationen, kontaktiere',
'email'             => 'E-Mail',
'phone'             => 'Telefon #',
'perms_desc'        => 'Berechtigungen: (R = Lesen, E = Bearbeiten, setzt Lese-Bereichtigung voraus)',
'date_time_info'    => 'Date and Time Information',
'split_q'           => 'Aufteilen?',
'rec_event_info'    => 'Ereignis wiederholen - Information',
'rec_event_q'       => 'Ist dies ein sich wiederholendes Ereignis?',
'event_recurs'      => 'Ereignis wiederholt sich',
'select_format'     => 'Format w�hlen',
'jump_today'        => 'Gehe zu Heute',
'day_view'          => 'Tagesansicht',
'week_view'         => 'Wochenansicht',
'month_view'        => 'Montsansicht',
'year_view'         => 'Jahresansicht',
'list_view'         => 'Listenansicht',
'select_range'      => 'W�hle einen Ereigniszeitraum zum Anzeigen',
'or_choose_cat'     => 'und/oder w�hle eine Kategorie',
'go'                => 'Los',
'days_prior'        => 'Tage vor diesem Ereignis.',
'email_private'     => 'Deine E-Mail bleibt privat und wird nur zu Erinnerung an dieses Ereignis verwendet.',
'current_events'    => 'Aktuelle Ereignisse',
'past_events'       => 'Vergangene Ereignisse',
'upcoming_events'   => 'Bevorstehende Ereignisse',
'this_week_events'  => 'Ereignisse dieser Woche',
'this_month_events' => 'Ereignisse dieses Monats',
'hits'              => 'Treffer',
'top_ten'           => 'Top Ten evList-Ereignisse',
'no_events_viewable' => 'Derzeit sind keine Ereignisse im System anzeigbar.',
'date'              => 'Datum',
'all_upcoming'      => 'All Upcoming Events',
'subscribe_to'      => 'Subscribe to',
'messages'          => array(
        1   => 'Erfolg! Ereignis wurde gel�scht.',
        2   => 'Erfolg! Dein Ereignis wurde gespeichert.',
        3   => 'Ereignis wurde kopiert. Du kannst nun Dein neues Ereignis bearbeiten.',
        4   => 'Erfolg! Ereignis wurde aktualisiert.',
        5   => 'Ben�tigte Felder sind leer. Bitte �berpr�fe Deine Einsendung.',
        6   => 'Alarm!',
        7   => 'evList-Standardeinstellungen wurden gesetzt.',
        8   => 'evList-Konfigurationseinstellungen wurden aktualisiert.',
        9   => "Danke f�r das Einsenden Deines Ereignisses nach {$_CONF['site_name']}. Es wrde an unser Team �bersendet und muss noch best�tigt werden. Wenn es best�tigt wurde,rd Dein Ereignis anderen zug�nglich sein.",
        10  => 'Eingegebene Daten sind nicht g�ltig. Bitte �berpr�fe Deine Einsendung.',
        11  => 'Kategorien wurde aktualisiert.',
        12  => 'Erinnerung gespeichert. Du solltest eine E-Mail vor diesem Ererignis erhalten.',
        13  => 'Du hast eine ung�ltige oder falsch formatierte E-Mail Adressee angegeben. Btte versuche es erneut.',
        14  => 'Du mu� angeben, wieviele Tage vor dem Ereignis Du erinnert werden m�chtest',
        15  => "Diese Seite ben�tigt mindestens {$_EV_CONF['reminder_speedlimit']} SekundenWartezeit zwischen dem Anfordern von Erinnerungen.",
        16  => "Diese Seite ben�tigt mindestens {$_EV_CONF['post_speedlimit']} Sekunden Warezeit zwischen dem Einsenden von Ereignissen.",
        17  => 'Die Ereignisse des glFusion Kalenders wurden importiert',
        18  => 'Erinnerungsmitteilung erfolgreich entfernt',
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
        1   => 't�glich nach Datum, z.B., 4. April bis 7. April (sequentiell)',
        2   => 'monatlich nach Datum, z.B., der Erste jedes Monats',
        3   => 'j�hrlich nach Datum, z.B., 25. Dezember Jahr f�r Jahr',
        4   => 'w�chentlich nach Tag, z.B., Mo, Di, and Fr',
        5   => 'monatlich nach Tag, z.B., der dritte Freitag jedes Monats',
        6   => 'benutzerdef. Daten: ein Liste mit Kalenderdaten, mit Komma getrennt',
    ),
'rec_periods'       => array(
    1 => 'tag',
    2 => 'monat',
    3 => 'jahr',
    4 => 'woche',
    5 => 'monat',
    6 => '',
    ),

'postmodes'         => array(
        'plaintext'   => 'Text',
        'text'   => 'HTML',
    ),
'rec_intervals'     => array(
        1   => 'Erster',
        2   => 'Zweiter',
        3   => 'Dritter',
        4   => 'Vierter',
        5   => 'Letzter',
    ),
'ranges'            => array(
        1   => 'vergangen',
        2   => 'bevorstehend',
        3   => 'diese Woche',
        4   => 'diesen Monat',
    ),
'recur_desc'        => array(
        1   => 'Occurs every day',
        2   => 'Occurs on the same date each month',
        3   => 'Occurs on the same date each year',
        4   => 'Occurs every %interval% week on %day%',
        5   => 'Occurs %interval% month on the %daynum% %day%',
        6   => '',      // custom dates
    ),
'periods'           => array(
        'day'   => 'Tag',
        'week'  => 'Woche',
        'month' => 'Monat',
        'year'  => 'Jahr',
    ),
'on_days'   => 'on %s',
'on_the_days' => 'on the %s',
'each'      => 'each',
'every_num'  => 'every %d',
'event_editor'  => 'Ereignis-Editor',
'datestart_note' => '* <i>Startdatum</i> Jahr und Monat sind ben�tige Felder.',
'custom_label'  => 'Spezifiziere den/der/die/das %s an dem/denen sich das Ereignis %s wiederholt',
'stop_label'    => 'Spezifiziere den/der/die/das %s, nach dem/denen sich das Ereignis nicht %s wiederholt',
'day_by_date' => 'Tag, nach Tag',
'dates' => 'Daten',
'year_and_month' => 'Jahr und Monat',
'year' => 'Jahr',
'days_of_week' => 'Tage der Woche, nach Anzahl,',
'date_l' => 'Datum',
'if_any' => ', wenn �berhaupt,',
'all_day_event' => 'Dies ist ein Jeden-Tag-Ereignis.',
'more_from_cat' => 'Mehr Ereignisse von:&nbsp;',
'access_denied_msg' => 'Nur authorisierte Benutzer haben Zugriff auf diese Seite. Dein Benutzername und IP wurden aufgezeichnet.',
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
    2   => 'Ereignisliste',
    3   => 'Ereignis hinzuf�gen',
    4   => 'Zugriff verweigert',
    5   => 'Nur authorisierte Benutzer haben Zugriff auf diese Seite. Dein Benutzername und IP wurden aufgezeichnet.',
    6   => 'Ereignisse',
    7   => 'evList-Ereignisliste',
    8   => 'evList-Suchergebnisse',
    9   => 'Titel',
    10  => 'Startdatum',
    11  => 'Treffer',
    12  => 'evList-Ereignisse',
    13  => 'Ereignistitel',
    14  => 'Top Ten evList-Ereignisse',
    15  => 'Derzeit sind keine Ereignisse im System anzeigbar.',
    16  => 'evList-Ereigniseinsendungen',
    17  => 'Titel',
    18  => 'Startdatum',
    19  => 'Titel',
    20  => 'Datum',
    21  => 'Einsendungen',
    22  => 'evList-Einsendungen',
    23  => 'Ende der Nachricht',
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
    2   => 'Erlaube G�sten das Anzeigen von Ereignissen?',
    3   => 'Erlaube G�sten Einsendungen?',
    4   => 'Erlaube angemeldeten Benutzern Einsendungen?',
    5   => 'Erlaube HTML beim Schreiben?',
    6   => 'HINWEIS: Nur angemeldete Benutzer k�nnen in HTML schreiben.',
    7   => 'Benutzermen�link-Option',
    8   => 'Men�objekt aktivieren?',
    9   => 'Woche beginnt am',
    10  => 'Centerblock aktivieren?',
    11  => 'Centerblock-Position',
    12  => 'Thema',
    13  => 'Datumsformat',
    14  => 'Zeitformat',
    15  => 'Speichern',
    16  => 'Zur�cksetzen',
    17  => 'Standard setzen',
    18  => 'Abbruch',
    19  => 'Zugriffskontrolle',
    20  => 'GUI-Konfigiguration',
    21  => 'Centerblock-Konfiguration',
    22  => 'HINWEIS: Trifft nur auf header.thtml und die menu_elements Variable zu.',
    23  => 'Ereignis hinzuf�gen',
    24  => 'Ereignisse auflisten',
    25  => 'Sonntag',
    26  => 'Montag',
    27  => 'evList-Konfigurationseditor',
    28  => 'Alle',
    29  => 'Nur auf Startseite',
    30  => 'Oben auf Seite',
    31  => 'Nach Hauptartikel',
    32  => 'Unten auf Seite',
    33  => 'Gesamte Seite',
    34  => 'HINWEIS: Wenn aktiviert, dann wird eine Ereignisliste als Centerblock auf der Indexseite angezeigt.',
    35  => 'Anzahl der anzuzeigenden Ereignisse',
    36  => 'W�hle einen Ereigniszeitraum zum Anzeigen',
    37  => 'HINWEIS: Alle Einsendungen erwarten eine Best�tigung.',
    38  => 'Bearbeiten',
    39  => 'Ereignistitel',
    40  => 'Startdatum',
    41  => 'Kopieren',
    42  => 'ID',
    43  => 'Neu erstellen',
    44  => 'evList-Konfiguration',
    45  => 'evList-Ereignismanager',
    46  => 'Um ein neues Ereignis zu erstellen, klicke auf "Neu erstellen" oben.<br />Um globale Optionen zu verwalten, klicke auf "evList-Kongig" oben.<br />Um Kategorien zu verwalten, klicke auf "Kategorien" oben.<br />Um ein Ereignis zu bearbeiten oder zu l�schen, klicke auf das Bearbeiten-Icon des Ereignisses unten. Um ein Ereignis anzuzeigen, klicke auf den Titel des Ereignisses. Um ein Ereignis zu aktivieren/deaktivieren, das entsprechende K�stchen unten.',
    47  => 'Aktivieren',
    48  => 'Ereignis anzeigen',
    49  => 'Ereignis bearbeiten',
    50  => 'Ereignis in den Editor klonen',
    51  => 'evList-Kategorien',
    52  => 'evList-Ereignisse',
    53  => 'ID',
    54  => 'Name',
    55  => 'Aktivieren',
    56  => 'L�schen?',
    57  => 'Erstelle eine neue Kategorie unten',
    58  => 'Um Ereignisse zu verwalten, klicke auf "evList-Ereignisse" oben.<br />Um globale Optionen zu verwalten, klicke auf "evList-Konfiguration" oben.<br />Um Kategorienamen zu bearbeiten, oder Kategorien zu l�schen oder zu aktivieren/deaktivieren, bearbeite oder markiere das entsprechende K�stchen unten. Du kannst auch neue Kategorien in den leeren Feldern der Tabelle unten erstellen.',
    59  => 'Um Ereignisse zu verwalten, klicke auf "evList-Ereignisse" oben.<br />Um Kategorien zu verwalten, klicke auf "evList-Kategorien" oben.<br />Um globale Optionen zu verwalten, bearbeite die Felder unten, wenn n�tig.',
    60  => 'Kategorien aktualisieren',
    61  => 'Das L�schen von Kategorien, l�scht <strong>nicht</strong> die Ereignisse in diesen Kategorien.',
    62  => 'Bevorstehende-Ereignisse-Block: Anzahl der anzuzeigenden Ereignisse',
    63  => 'Hauptliste: Anzahl der anzuzeigenden Ereignisse je Seite',
    64  => 'Anzahl der Zeichen, die in der Ereigniszusammenfassung angezeigt werden',
    65  => 'Das Deaktivieren einer Kategorie, deaktiviert <strong>nicht</strong> die Ereignisse in ihr.  Diese Ereignisse werden weiterhin in der Event-Liste erscheinen, wenn sie in eine andere Kategorie geh� oder wenn keine Kategorie gew�t wurde.',
    66  => 'E-Mail Erinnerungen aktivieren?',
    67  => 'HINWEIS: Das Deaktivieren der Erinnerungen, l�scht alle gespeicherten Erinnerungen.',
    68  => 'Ein Ereignis h�rt auf, nicht mehr <i>bevorstehend</i> zu sein',
    69  => 'Import',
);

/* list */
$X_LANG_EVLIST02 = array (
    1   => 'Es gibt keine Ereignisse, die Deinen Kriterien entsprechen.',
    2   => 'Ereignisliste',
    3   => 'Dieses Ereignis beginnt: %s',
    4   => 'Mehr lesen',
    5   => 'Kontakt',
    6   => 'Dieses Ereignis endet: %s',
    7   => 'Aktuelle Ereignisse',
    8   => 'Vergangene Ereignisse',
    9   => 'Bevorstehende Ereignisse',
    10  => 'W�hle ein Ereigniszeitraum zum Anzeigen',
    11  => 'Ereignisse dieser Woche',
    12  => 'Ereignisse dieses Monats',
    13  => 'Vorherige',
    14  => 'N�chste',
    15  => 'Kategorie',
    16  => 'Los',
    17  => 'Ereignis hinzuf�gen'
);

/* event */
$X_LANG_EVLIST03 = array (
    1   => 'Bevorstehendes Ereignis',
    2   => 'Ereignis ID# %s existiert nicht. Bitte �berpr�fe den Link und versuche es erneut.',
    3   => '<strong>Beginnt:</strong> ',
    4   => '<strong>Endet:</strong> ',
    5   => 'Bitte %s f�r mehr Informationen.',
    6   => 'kontaktiere %s',
    7   => 'kontaktiere uns',
    8   => 'Bearbeiten',
    9   => 'Schnelll�schen',
    10  => 'Zur�ck zur Ereignisliste',
    11  => 'Dieses ereignis findet statt am bei: %s',
    12  => 'Ort',
    13  => 'Klicke hier',
    14  => 'Dies ist ein Jeden-Tag-Ereignis.',
    15  => 'Dieses Ereignis wiederholt sich %s.',
    16  => 'Kontakt',
    17  => 't�glich',
    18  => 'monatlich',
    19  => 'j�hrlich',
    20  => 'w�chentlich: %s',
    21  => 'und ',
    22  => 'und/oder w�hle eine Kategorie',
    23  => 'Mehr Ereignisse von:&nbsp;',
    24  => 'Sende mir eine E-Mail',
    25  => 'Sende Deine E-Mail Adresse, um an dieses Ereignis erinnert zu werden.',
    26  => 'Deine E-Mail bleibt privat und wird nur zu Erinnerung an dieses Ereignis verwendet.',
    27  => 'Senden',
    28  => 'Tage vor diesem Ereignis.',
    29  => "Eine Ereigniserinnerung von {$_CONF['site_name']}",
    30  => "Du erh�ltst diese Erinnerung, weil Deine Adresse an {$_CONF['site_name']} gesendet wurde.",
    31  => 'Das Ereignis, %s, findet statt am oder um %s herum.',
    32  => 'Ereigniszusammenfassung: %s',
    33  => 'F�r mehr Informationen besuche bitte %s',
    34  => "Danke von {$_CONF['site_name']}",
    35  => "jeden",
    36  => 'M�chtest Du dieses Ereignis l�schen?',
    37  => 'All Day',
);

/* editor */
$X_LANG_EVLIST04 = array (
    1   => 'Ereignis-Editor',
    2   => 'Allgemeine Ereignisinformation',
    3   => 'Datums- und Zeitinformation',
    4   => 'Ortsinformation',
    5   => 'Kontaktinformation',
    6   => 'Zugriffsinformation',
    7   => 'Speichern',
    8   => 'zur�cksetzen',
    9   => 'L�schen',
    10  => 'Abbruch',
    11  => 'Ereignistitel',
    12  => 'Ereigniszuammenfassung',
    13  => 'Volle Beschreibung',
    14  => 'Start',
    15  => 'Ende',
    16  => 'Tag',
    17  => 'Monat',
    18  => 'Jahr',
    19  => 'Stunde',
    20  => 'Minute',
    21  => 'Ereignisort',
    22  => 'Strasse',
    23  => 'Stadt',
    24  => 'Bundesland',
    25  => 'Postleitzahl',
    26  => 'URL',
    27  => 'Kontaktinformation',
    28  => '* <i>Ereignistitel</i> ist ein ben�tigtes Feld.',
    29  => 'Ist dies ein sich wiederholendes Ereignis?',
    30  => 'Ereignis wiederholt sich',
    31  => 'Aufteilen?',
    32  => 'Ganzer Tag?',
    33  => 'Startdatum',
    34  => 'Startzeit',
    35  => 'Enddatum',
    36  => 'Endzeit',
    37  => 'E-Mail',
    38  => 'Telefon #',
    39  => 'F�r mehr Informationen, kontaktiere',
    40  => 'Land',
    41  => 'Berechtigungen: (R = Lesen, E = Bearbeiten, setzt Lese-Bereichtigung voraus)',
    42  => 'HINWEIS: "Mitglieder" sind alle angemeldeten Mitglieder der Seite und "G�ste" sind alle Benutzer, die nicht angemeldet sind.',
    43  => 'Besitzer',
    44  => 'Gruppe',
    45  => 'Das <i>Jede(n)</i> Feld wird nicht ben�tigt, abh�ngig von der Wiederholungszeitraum.',
    46  => 'Beitragsmodus',
    47  => 'HINWEIS: Das <i>Ereignisort</i> Feld akzeptiert auch HTML.',
    48  => 'Ereignis aktivieren?',
    49  => 'Ereignis wiederholen - Information',
    50  => 'Spezifiziere den/der/die/das %s an dem/denen sich das Ereignis %s wiederholt',
    51  => ', wenn �berhaupt,',
    52  => 'Tag, nach Tag',
    53  => '(Format: YYYY-MM-DD)',
    54  => 'Datum',
    55  => 'Jahr und Monat',
    56  => '(Format: YYYY-MM)',
    57  => 'Jahr',
    58  => '(Format: YYYY)',
    59  => 'Tage der Woche, nach Anzahl,',
    60  => '(z.B.: 1,3,4,etc. (wobei 1 = Sonntag))',
    61  => 'Intervall und Tag',
    62  => 'Daten',
    63  => '(Format: YYYY-MM-DD, YYYY-MM-DD, etc.)',
    64  => 'Format w�hlen',
    65  => ' jeden Monat',
    66  => 'Spezifiziere den/der/die/das %s, nach dem/denen sich das Ereignis nicht %s wiederholt',
    67  => '* <i>Startdatum</i> Jahr und Monat sind ben�tige Felder.',
    68  => 'Kategorieinformation',
    69  => 'Neue Kategorie',
    70  => 'Erstelle eine neue Kategorie f�r Dein Ereignis, an Stelle von oder zus�tzlich zu einer existierenden Kategorie.',
    71  => 'F�ge Dein Ereignis einer einzelnen oder mehreren Kategorien hinzu',
    72  => 'Das Hinzuf�gen Deines Ereignisses zu einer Kategorie, ist nicht notwendig.',
    73  => 'Wochenenden �berspringen?',
    74  => 'N�chster Werktag?',
    75  => 'Ein sich wiederholendes Ereignis, kann an einem Wochende �bersprungen oder auf den n�chsten Werktag verschoben werden.',
    76  => 'E-Mail Erinnerungen aktivieren?',
    77  => 'Das Deaktivieren der Erinnerungen, l�scht alle relevanten Erinnerungen.'
);

/* column block and centerblock */
$X_LANG_EVLIST05 = array (
    1   => 'Vergangene Ereignisse',
    2   => 'Bevorstehende Ereignisse',
    3   => 'Die kommende Wochen',
    4   => 'Der kommende Monat',
    5   => 'Ereignistitel',
    6   => 'Startdatum',
    7   => 'Ereignisliste'
);

/* recurring periods */
$X_LANG_EVLIST06 = array (
    1   => 't�glich nach Datum, z.B., 4. April bis 7. April (sequentiell)',
    2   => 'monatlich nach Datum, z.B., der Erste jedes Monats',
    3   => 'j�hrlich nach Datum, z.B., 25. Dezember Jahr f�r Jahr',
    4   => 'w�chentlich nach Tag, z.B., Mo, Di, and Fr',
    5   => 'monatlich nach Tag, z.B., der dritte Freitag jedes Monats',
    6   => 'benutzerdef. Daten: ein Liste mit Kalenderdaten, mit Komma getrennt'
);

/* messages */
$X_LANG_EVLIST07 = array (
    1   => 'Erfolg! Ereignis wurde gel�scht.',
    2   => 'Erfolg! Dein neues Ereignis wurde gespeichert.',
    3   => 'Ereignis wurde kopiert. Du kannst nun Dein neues Ereignis bearbeiten.',
    4   => 'Erfolg! Ereignis wurde aktualisiert.',
    5   => 'Ben�tigte Felder sind leer. Bitte �berpr�fe Deine Einsendung.',
    6   => 'Alarm!',
    7   => 'evList-Standardeinstellungen wurden gesetzt.',
    8   => 'evList-Konfigurationseinstellungen wurden aktualisiert.',
    9   => "Danke f�r das Einsenden Deines Ereignisses nach {$_CONF['site_name']}. Es wurde an unser Team �bersendet und muss noch best�tigt werden. Wenn es best�tigt wurde, wird Dein Ereignis anderen zug�nglich sein.",
    10  => 'Eingegebene Daten sind nicht g�ltig. Bitte �berpr�fe Deine Einsendung.',
    11  => 'Kategorien wurde aktualisiert.',
    12  => 'Erinnerung gespeichert. Du solltest eine E-Mail vor diesem Ererignis erhalten.',
    13  => 'Du hast eine ung�ltige oder falsch formatierte E-Mail Adressee angegeben. Bitte versuche es erneut.',
    14  => 'Du mu�t angeben, wieviele Tage vor dem Ereignis Du erinnert werden m�chtest.',
    15  => "Diese Seite ben�tigt mindestens {$_EV_CONF['reminder_speedlimit']} Sekunden Wartezeit zwischen dem Anfordern von Erinnerungen.",
    16  => "Diese Seite ben�tigt mindestens {$_EV_CONF['post_speedlimit']} Sekunden Wartezeit zwischen dem Einsenden von Ereignissen.",
    17  => 'Die Ereignisse des glFusion Kalenders wurden importiert',
    18  => 'Erinnerungsmitteilung erfolgreich entfernt',
);

/* postmodes */
$X_LANG_EVLIST08 = array (
    1   => 'Text',
    2   => 'HTML'
);

/* range option */
$X_LANG_EVLIST09 = array (
    1   => 'vergangen',
    2   => 'bevorstehend',
    3   => 'diese Woche',
    4   => 'diesen Monat'
);

/* weekday option */
$X_LANG_EVLIST10 = array (
    1   => 'Sonntag',
    2   => 'Montag',
    3   => 'Dienstag',
    4   => 'Mittwoch',
    5   => 'Donnerstag',
    6   => 'Freitag',
    7   => 'Sonnabend'
);

/* interval option */
$X_LANG_EVLIST11 = array (
    1   => 'Erster',
    2   => 'Zweiter',
    3   => 'Dritter',
    4   => 'Vierter',
    5   => 'Letzter'
);

/* weekday abreviations */
$X_LANG_EVLIST12 = array (
    1   => 'So',
    2   => 'Mo',
    3   => 'Di',
    4   => 'Mi',
    5   => 'Do',
    6   => 'Fr',
    7   => 'Sa'
);

/* event passing options */
$X_LANG_EVLIST13 = array (
    1   => 'sobald die Startzeit um ist (wenn vorhanden).',
    2   => 'sobald das Startdatum um ist, i.R., der n�chste Tag.',
    //3   => 'as soon as the end time has passed (if exists).',
    //4   => 'as soon as the end date has passed (if exists).'
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
    'title'                 => 'evList-Konfiguration'
);
$LANG_confignames['evlist'] = array(
    'allow_anon_view'       => 'Erlaube G�sten die Anzeige von Ereignissen?',
    'allow_anon_add'        => 'Erlaube G�sten Einsendungen?',
    'allow_user_add'        => 'Erlaube angemeldeten Benutzern Einsendungen?',
    'can_add'               => 'Users allowed to add events',
    'allow_html'            => 'Erlaube HTML beim Schreiben?',
    'usermenu_option'       => 'Benutzermen�link-Option',
    'enable_menuitem'       => 'Men�objekt aktivieren?',
    'week_begins'           => 'Woche beginnt am',
    'date_format'           => 'Datumsformat',
    'time_format'           => 'Zeitformat',
    'enable_categories'     => 'Kategorien aktivieren',
    'enable_centerblock'    => 'Centerblock aktivieren?',
    'pos_centerblock'       => 'Centerblock-Position',
    'topic_centerblock'     => 'Thema',
    'range_centerblock'     => 'Zeitraum zum Anzeigen w�hlen',
    'limit_centerblock'     => 'Anzahl der anzuzeigenden Ereignisse',
    'limit_list'            => 'Hauptliste: Anzahl der anzuzeigenden Ereignisse je Seite',
    'limit_block'           => 'Bevorstehende-Ereignisse-Block: Anzahl der anzuzeigenden Ereignisse',
    'limit_summary'         => 'Anzahl der Zeichen in der Anzeige der Ereigniszusammenfassung',
    'enable_reminders'      => 'E-Mail-Erinnerungen aktivieren?',
    'event_passing'         => 'Ein Ereignis h�rt auf <i>bevorstehend</i> zu sein',
    'default_permissions'   => 'Standardberechtigungen (Eigent�mer,Gruppe,Mitglieder,G�ste)',
    'reminder_speedlimit'   => 'Erinnerungen - Speedlimit',
    'post_speedlimit'       => 'Beitr�ge - Speedlimit',
    'reminder_days'         => 'Anzahl der Tage vor einem Ereignis, um Erinnerungen zu erlauben',
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
    'sg_main'               => 'Haupteinstellungen',
    'sg_rsvp'               => 'RSVP/Ticketing',
);
$LANG_fs['evlist'] = array(
    'ev_access'             => 'Zugriffskontrolle',
    'ev_gui'                => 'GUI-Einstellungen',
    'ev_centerblock'        => 'Centerblock-Einstellungen',
    'ev_permissions'        => 'Standardberechtigungen',
    'ev_rsvp'               => 'Registration and Ticketing',
);
$LANG_configselects['evlist'] = array(
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => TRUE, 'Nein' => FALSE),
    2 => array('Keine' => 0, 'Ereignis hinzuf�gen' => 1, 'Ereignisse auflisten' => 2),
    3 => array('Sonntag' => 1, 'Montag' => 2),
    4 => array(
            'Don Nov 20, 2008'      => '%a %b %d, %Y',
            'Don Nov 20'            => '%a %b %d',
            'Donnerstag Nov 20, 2008' => '%A %b %d, %Y',
            'Donnerstag Nov 20'       => '%A %b %d',
            'Donnerstag November 20'  => '%A %B %d',
            'November 20, 2008'     => '%B %d, %Y',
            '11/20/08'              => '%m/%d/%y',
            '11-20-08'              => '%m-%d-%y',
            '2008 11 20'            => '%Y %m %d',
            'Nov 20 2008'           => '%b %d %Y',
            'Nov 20, 2008'          => '%b %d, %Y',
    ),
    5 => array('02:38 PM' => '%I:%M %p', '14:48' => '%H:%M',),
    6 => array(
            'sobald die Startzeit um ist (wenn vorhanden)' => 1,
            'sobald das Startdatum um ist, i.R., der n�chste Tag.' => 2,
            'as soon as the end time has passed (if exists).' => 3,
            'as soon as the end date has passed.' => 4,
        ),
    7 => array('Oben auf Seite'=>1,'Nach Hauptartikel'=>2,'Unten auf Seite'=>3,'Gesamte Seite'=>0),
    8 => array('vergangen'=>1,'bevorstehend'=>2,'diese Woche'=>3,'diesen Monat'=>4),
    9 => array('disabled' => 0, 'table' => 1, 'story' => 2),
    12 => array('Kein Zugriff' => 0, 'Nur-Lesen' => 2, 'Lesen-Schreiben' => 3),
    13 => array('Left Blocks' => 0, 'Right Blocks' => 1, 'Left & Right Blocks' => 2, 'None' => 3),
    14 => array('Tag' => 'day', 'Woche' => 'week', 'Monat' => 'month', 'Jahr' => 'year', 'List' => 'list'),
    15 => array('Admins Only' => 0, 'Logged-In Users' => 1, 'Logged-In+Anon Users' => 2),
    16 => array('HTML' => 'html', 'JSON' => 'json'),
    17 => array('No' => 0, 'Default No' => 1, 'Default Paid Only' => 2,
                'Default Paid or Unpaid' => 3),
);
?>
