# 🌲 Bosfeesten 2026 – Front End

## Wie
**Chiro Popov** – een jeugdbeweging gevestigd in Gijzegem. De website wordt beheerd en ontwikkeld door leden en vrijwilligers van de chiro.

## Wat
De officiële festivalwebsite voor **Bosfeesten 2026** — een jaarlijks muziekfestival georganiseerd door Chiro Popov. De website bevat:
- Festivalinfo (locatie, datum, podia)
- Line-up & artiestengrid
- Dagplanning / timetable
- Nieuws & updates
- FAQ
- Partners/sponsors
- Ticketmodal (via Ordolio)
- Coming Soon pagina (voor pre-lancering)

## Waar
📍 **Eerste Bochtweg 1, 9308 Gijzegem, België**
🌐 Website gehost op een PHP-compatibele webserver

## Wanneer
🗓️ **14, 15 & 16 augustus 2026**

## Waarom
Bosfeesten is hét jaarlijkse hoogtepunt van Chiro Popov. De website dient als centraal informatiepunt voor bezoekers, artiesten en partners vóór en tijdens het festival.

## Hoe (Technische Stack)
- **PHP** – server-side rendering (geen framework, pure PHP includes)
- **Bootstrap 5.3** – layout & components (via CDN)
- **Bootstrap Icons** – iconografie (via CDN)
- **AOS (Animate On Scroll)** – scroll-animaties (via CDN)
- **Vanilla JS (ES Modules)** – alle interactie gesplitst in modules
- **CSS (ITCSS-structuur)** – gelaagde CSS architectuur:
  - `settings.css` – variabelen, fonts
  - `reset.css` – CSS reset
  - `generic.css` – Google Fonts import
  - `elements.css` – basis HTML-elementen
  - `components.*.css` – per component
  - `utilities.css` – hulpklassen

---

## 🎨 Styleguide

### Kleuren
| Naam           | CSS Variabele         | Hex       | Gebruik                          |
|----------------|-----------------------|-----------|----------------------------------|
| Neon Green     | `--color-primary`     | `#06D6A0` | Accenten, knoppen, badges Plein  |
| Neon Pink      | `--color-secondary`   | `#EF476F` | Badges Meis, highlights, hover   |
| Cyan           | `--color-accent`      | `#1B9AAA` | Datum badges, links, detail info |
| Deep Black     | `--color-black`       | `#0D0F10` | Achtergrond                      |
| Off White      | `--color-white`       | `#F8FFE5` | Tekst, randen                    |

### Lettertypes
| Naam            | CSS Variabele       | Gebruik                                         |
|-----------------|---------------------|-------------------------------------------------|
| **Hipstelvetica** | `--hipstelvetica` | Titels, logo, grote koppen, badges              |
| **Poppins**       | `--poppins`       | Bodytekst, labels, subtitels                    |
| **Roboto Slab**   | `--roboto`        | Navigatielinks, knoppen, artistnamen            |

> Hipstelvetica is een lokaal gehoste font: `assets/fonts/hipstelvetica/`
> Poppins & Roboto Slab worden geladen via Google Fonts (zie `generic.css`)

### Badge-kleurenconventie (consistent door de hele site)
| Badge type     | Achtergrond        | Tekstkleur         |
|----------------|--------------------|--------------------|
| PLEIN          | `--color-primary`  | `--color-black`    |
| MEIS           | `--color-secondary`| `--color-white`    |
| Datum          | `--color-accent`   | `--color-white`    |

### Logo
Het logo bestaat uit de woorden **"BOS"**, **"2026"** en **"FEESTEN"** in een gestapelde layout. Het gebruikt de Hipstelvetica font en is gebouwd als puur HTML/CSS component (`.c-logo-box` / `.o-logo-box`).

---

## 🚀 Setup – Lokale ontwikkelomgeving

### Vereisten
- [PHP](https://www.php.net/downloads) ≥ 7.4 (of hoger)
- Een lokale webserver die PHP ondersteunt, bv.:
  - [XAMPP](https://www.apachefriends.org/) (Windows/Mac/Linux)
  - [Laragon](https://laragon.org/) (Windows – aanbevolen)
  - [Herd](https://herd.laravel.com/) (Mac)
  - [PHP built-in server](#php-built-in-server) (snel alternatief)
- [Git](https://git-scm.com/)
- [VS Code](https://code.visualstudio.com/) (aanbevolen) met de extensie **PHP Server** of **Live Server**

### Stap 1 – Repository klonen
```bash
git clone https://github.com/[jouw-gebruikersnaam]/bosfeesten.git
cd bosfeesten
```

### Stap 2a – Starten via PHP built-in server
```bash
cd "bosfeesten front end"
php -S localhost:8000
```
Open daarna [http://localhost:8000/home.php](http://localhost:8000/home.php) in je browser.

### Stap 2b – Starten via XAMPP
1. Kopieer de projectmap naar `C:/xampp/htdocs/bosfeesten/`
2. Start Apache via het XAMPP Control Panel
3. Ga naar [http://localhost/bosfeesten/bosfeesten%20front%20end/home.php](http://localhost/bosfeesten/bosfeesten%20front%20end/home.php)

> ⚠️ **Let op:** JavaScript ES Modules (`type="module"`) werken **niet** via `file://`. Je hebt altijd een HTTP-server nodig.

### Stap 3 – VS Code aanbevolen extensies
- **PHP Intelephense** – PHP intellisense
- **Live Server** – voor statische preview
- **Prettier** – code formatting
- **GitLens** – git integratie

---

## 📁 Projectstructuur

```
bosfeesten front end/
├── home.php                  # Hoofdpagina
├── css/
│   ├── styles.css            # Hoofd stylesheet (imports alle andere)
│   ├── settings.css          # Variabelen & fonts
│   ├── reset.css             # CSS reset
│   ├── generic.css           # Google Fonts
│   ├── elements.css          # Basis elementen
│   ├── components.*.css      # Per component
│   └── utilities.css         # Hulpklassen
├── js/
│   ├── main.js               # Hoofdscript (importeert modules)
│   ├── loader.js             # Preloader logica
│   ├── countdown.js          # Countdown timer
│   ├── showDay.js            # Timetable dag-selectie
│   ├── slider.js             # Hero slider
│   └── comingSoon.js         # Coming soon placeholder
├── pages/
│   ├── nav.php               # Navigatie
│   ├── header.php            # Hero sectie
│   ├── location-card.php     # Locatie & datum sectie
│   ├── artists-grid.php      # Artiestengrid met countdown
│   ├── programma.php         # Timetable / dagplanning
│   ├── news.php              # Nieuws & updates
│   ├── faq.php               # FAQ accordion
│   ├── partners.php          # Partners sectie
│   ├── footer.php            # Footer
│   ├── modal-tickets.php     # Ticket modal
│   └── comingSoon.php        # Coming soon pagina
└── assets/
    ├── fonts/
    │   └── hipstelvetica/    # Lokale font bestanden
    ├── ico/
    │   └── favicon.ico
    ├── img/
    │   ├── header/           # Slideshow afbeeldingen (header_1.jpg ... header_10.jpeg)
    │   └── sponsors/         # Sponsor logo's
    └── pattern/
        └── backgroundPattern.svg
```

---

## 🤝 Bijdragen
1. Maak een nieuwe branch: `git checkout -b feature/jouw-feature`
2. Commit je wijzigingen: `git commit -m "feat: omschrijving"`
3. Push naar de branch: `git push origin feature/jouw-feature`
4. Open een Pull Request

---

## 📄 Licentie
© 2026 Bosfeesten – Chiro Popov. Alle rechten voorbehouden.