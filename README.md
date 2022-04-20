# leydelmonte
12/02/2017

Inicia https://www.leybook.com/doc/190

Termina https://www.leybook.com/doc/18620

Hacer pruebas con http://www.temasnicas.net/rtn106.pdf

Guardando el detalle de cada documento PDF EN MySQL

```
CREATE TABLE 'libros' (
  'id_libro' int(11) NOT NULL,
  'codigo' int(11) DEFAULT NULL,
  'titulo' text COLLATE utf8_spanish_ci,
  'materia' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'rango' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'numero' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'aprobado' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'publicado' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
```

=== The Events Calendar ===

Contributors: theeventscalendar, borkweb, bordoni, brianjessee, aguseo, camwynsp, GeoffBel, geoffgraham, jentheo, leahkoerper, lucatume, neillmcshea, patriciahillebrandt, paulskim, vicskf, zbtirrell, juanfra
Tags: events, calendar, event, schedule, organizer
Donate link: https://evnt.is/29
Requires at least: 5.6
Stable tag: 5.14.1
Tested up to: 5.9.2
Requires PHP: 7.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Events Calendar is the number one calendar plugin for WordPress. Easily create and manage events (including virtual events!) on your WordPress site with The Events Calendar free plugin.

== Description ==
Easily create and manage an events calendar on your WordPress site with [The Events Calendar](https://evnt.is/mj) free plugin. Whether your events are in-person or virtual events, this WordPress calendar plugin boasts professional features backed by our world-class team of developers and designers.

https://vimeo.com/425323974

[See more videos on our YouTube channel](https://evnt.is/1b4-)

Packed with loads of features, The Events Calendar is ready to go out of the box. It’s also extensible, easy to use, and completely customizable.

= 📅 The #1 Calendar for WordPress =

See the calendar in action on our [demo experience](https://evnt.is/1ajs). Just getting started? Read through the [New User Primer](https://evnt.is/2d) to get set up.

Looking for additional features like recurring events, ticket sales, user-submitted events, automatic imports, and more?

<strong>Check out [Events Calendar Pro](https://evnt.is/mj), [Event Aggregator](https://evnt.is/197u), and [more add-ons](https://evnt.is/2a).</strong>

= 🔌🎨 Plug and Play or Customize =

The Events Calendar is built to work out of the box. Simply install the plugin, configure your settings, and start creating events in minutes.

Want to add your personal touch? Use The Events Calendar as the foundation for customization. Personalize to your heart's content with the help of a skeleton stylesheet, partial template overrides, template tags, hooks and filters, [careful documentation](https://evnt.is/eu), and a [library of free extensions](https://evnt.is/1a0r).

Whether your vision is big or small, you're in good company. Hundreds of thousands of small businesses, musicians, venues, restaurants, and non-profits are publishing and promoting their in-person and virtual events with The Events Calendar. Our plugins have also been scaled to work on large networks for Fortune 100 companies, universities, and government institutions.

= ✨ Features =

Our feature-rich plugin comes with everything you need to create and manage your calendar.

✔️ Rapidly create events
✔️ Saved venues & organizers
✔️ Calendar month view with tooltips
✔️ Event List view
✔️ Day view
✔️ Block Editor support
✔️ Event search
✔️ Google maps
✔️ Widget: Upcoming events list
✔️ Events Taxonomies (Categories & Tags)
✔️ Google Calendar and iCal exporting
✔️ WP REST API endpoints
✔️ Completely ajaxified for super smooth browsing
✔️ Completely responsive from mobile to tablet to desktop
✔️ Tested on the major theme frameworks such as Avada, Divi, Enfold, Genesis, and many more.
✔️ Increase your SEO with JSON-LD Structured Data
✔️ Internationalized & translated
✔️ Multiple stylesheets to improve integration
✔️ Extensive template tags for customization
✔️ Hooks & filters galore
✔️ Caching support
✔️ Debug mode for developers
✔️ [Library of extensions](https://evnt.is/1a0r)

== 📃 Documentation ==

All of our documentation can be found in [our Knowledgebase](https://evnt.is/eu).

Additional helpful links:

* [The Events Calendar New User Primer](https://evnt.is/2l)
* [The Themer’s Guide to The Events Calendar](https://evnt.is/2m)

If you have any questions about this plugin, you can post a thread in the [WordPress.org forum](https://wordpress.org/support/plugin/the-events-calendar). Please search existing threads before starting a new one.

== Add-Ons ==

Take your calendar to the next level by pairing it with our plugins for ticketing, crowdsourcing, email marketing, and more. Learn more about all our products on [our website](https://evnt.is/18wn).

Our Free Plugins:

🎟️ [Event Tickets](https://wordpress.org/plugins/event-tickets/)
📐 [Advanced Post Manager](https://wordpress.org/plugins/advanced-post-manager/)

Our Premium Plugins and Services:

⚡ [Events Calendar PRO](https://evnt.is/18wi)
↪️ [Event Aggregator](https://evnt.is/197u) (service)
🎟️ [Event Tickets Plus](https://evnt.is/18wk)
✉️ [Promoter](https://evnt.is/1ajt)
👥 [Community Events](https://evnt.is/2g)
🎟️ [Community Tickets](https://evnt.is/18wl)
✏️ [Filter Bar](https://evnt.is/fa)
🗓️ [Eventbrite Tickets](https://evnt.is/2e)
📡 [Virtual Events](https://evnt.is/1aky)

== Help ==

If you aren’t familiar with The Events Calendar, check out our [New User Primer](https://evnt.is/2p). It will have you creating events in no time.

Ready to dig deeper? Check out these resources:

* [Tutorials](https://evnt.is/2u)
* [Release Schedule](https://theeventscalendar.com/release-schedule/)
* [Known Issues](https://theeventscalendar.com/known-issues/)
* [Documentation](https://evnt.is/eu)
* [Help Videos](https://evnt.is/2t)
* [Release Notes](https://evnt.is/2v)

We check in on the [The Events Calendar forum here on WordPress.org](https://wordpress.org/support/plugin/the-events-calendar/) about once a week to help users with basic troubleshooting and identifying bugs. If you’re looking for premium, personalized support, consider upgrading to Events Calendar Pro.

Still have a question? Shoot us an email at support@theeventscalendar.com.

== Installation ==

Installing the plugin is easy. Just follow one of the following methods:

= Install The Events Calendar from within Wordpress =

1. Visit the plugins page within your dashboard and select ‘Add New’
2. Search for "Events Calendar"
3. Activate The Events Calendar from your Plugins page
4. You're done!


= Install The Events Calendar Manually =

1. From the dashboard of your site, navigate to Plugins --> Add New.
2. Select the Upload option and hit "Choose File."
3. When the popup appears select the the-events-calendar-x.x.zip file from your desktop. (The 'x.x' will change depending on the current version number).
4. Follow the on-screen instructions and wait as the upload completes.
5. When it's finished, activate the plugin via the prompt. A message will show confirming activation was successful. A link to access the calendar directly on the frontend will be presented here as well.

That's it! Just configure your settings as you see fit, and you're on your way to creating events in style. Need help getting things started? Check out our [new user primer](https://evnt.is/2l) for help with settings and features.

== Screenshots ==

1. Month View with hover
2. Mobile Views
3. Single event
4. List View
5. Event Editor
6. Events admin listing
7. General Settings
8. Display Settings
9. CSV Importer
