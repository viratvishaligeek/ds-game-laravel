@extends('frontend.include.layout')
@section('content')
    <section class="hero">
        <div class="hero-glows"><span class="g1"></span><span class="g2"></span><span class="g3"></span></div>
        <div class="hero-inner">
            <div class="hero-date" data-live-date>25 October 2026 | 9:14 PM</div>
            <div class="hero-pill-wrap">
                <div class="hero-pill" data-hero-pill>
                    <span class="dot"></span>
                    <span class="kind" data-pill-kind>Upcoming Result:</span>
                    <span class="name" data-pill-name>GHAZIABAD</span>
                    <span class="extra" data-pill-extra>— 10:00 PM</span>
                </div>
            </div>
            <div class="hero-cards">
                <a class="hero-card db has" href="/games/delhi-bazar" data-slug="delhi-bazar">
                    <img class="hero-landmark" src="{{ URL::asset('frontend') }}/images/cards/delhi-bazar-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="sheen"></div>
                    <div class="badge">DB</div>
                    <div class="gname">DELHI BAZAR</div>
                    <div class="num">67</div>
                    <div class="time">03:15 PM</div>
                </a>
                <a class="hero-card sg has" href="/games/shri-ganesh" data-slug="shri-ganesh">
                    <img class="hero-landmark" src="{{ URL::asset('frontend') }}/images/cards/shri-ganesh-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="sheen"></div>
                    <div class="badge">SG</div>
                    <div class="gname">SHREE GANESH </div>
                    <div class="num">81</div>
                    <div class="time">04:45 PM</div>
                </a>
                <a class="hero-card fb has" href="/games/faridabad" data-slug="faridabad">
                    <img class="hero-landmark" src="{{ URL::asset('frontend') }}/images/cards/faridabad-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="sheen"></div>
                    <div class="badge">FB</div>
                    <div class="gname">FARIDBAD </div>
                    <div class="num">52</div>
                    <div class="time">06:15 PM</div>
                </a>
                <a class="hero-card gb wait" href="/games/ghaziabad" data-slug="ghaziabad">
                    <img class="hero-landmark" src="{{ URL::asset('frontend') }}/images/cards/ghaziabad-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="sheen"></div>
                    <div class="badge">GB</div>
                    <div class="gname">GAZIYABAD </div>
                    <div class="num">**</div>
                    <div class="time">10:00 PM</div>
                </a>
                <a class="hero-card gl wait" href="/games/gali" data-slug="gali">
                    <img class="hero-landmark" src="{{ URL::asset('frontend') }}/images/cards/gali-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="sheen"></div>
                    <div class="badge">GL</div>
                    <div class="gname">GALI</div>
                    <div class="num">**</div>
                    <div class="time">11:50 PM</div>
                </a>
                <a class="hero-card ds has" href="/games/desawar" data-slug="desawar">
                    <img class="hero-landmark" src="{{ URL::asset('frontend') }}/images/cards/disawar-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="sheen"></div>
                    <div class="badge">DS</div>
                    <div class="gname">DISAWAR </div>
                    <div class="num">61</div>
                    <div class="time">05:15 AM</div>
                </a>
            </div>
            <div class="hero-note">Auto-refreshes every 30 seconds | Results update as declared</div>
        </div>
    </section>

    <section class="live-hero">
        <h1 class="sr-only">Satta King Result Today 2026 | sattakhaiwal</h1>
        <div class="live-box" data-live-box>
            <div class="gname">FARIDABAD</div>
            <div class="gnum">52</div>
            <div class="sub">Live Result</div>
            <div class="upcoming">
                <div class="gname" style="font-size:1.1rem">GHAZIABAD</div>
                <div class="sub" style="margin-top:6px"><span class="pulse"></span> Upcoming Result</div>
                <div class="gname" style="color:#fff;margin-top:4px">10:00 PM</div>
            </div>
        </div>
        <div><span class="badge-live">LIVE</span> <span class="muted" style="color:#bbf7d0">Today's
                Results</span></div>
        <div class="share-box">
            <div class="share-label">Share sattakhaiwal</div>
            <div class="share-row">
                <a class="share-wa"
                    href="https://wa.me/?text=sattakhaiwal%20%E2%80%93%20Satta%20King%20Result%20Today%202026%20%7C%20Live%20Results%0Ahttps%3A%2F%2Fsattakhaiwal.com"
                    target="_blank" rel="noopener">WhatsApp</a>
                <a class="share-fb" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsattakhaiwal.com"
                    target="_blank" rel="noopener">Facebook</a>
                <a class="share-x"
                    href="https://x.com/intent/tweet?text=sattakhaiwal%20%E2%80%93%20Satta%20King%20Result%20Today%202026%20%7C%20Live%20Results&url=https%3A%2F%2Fsattakhaiwal.com"
                    target="_blank" rel="noopener">X</a>
                <button type="button" class="share-copy" data-copy="https://sattakhaiwal.com">Copy Link</button>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="center">
                <h2>Sabhi 6 Games Ka Aaj Ka Result</h2>
                <p class="muted">Results updated daily by admin</p>
            </div>
            <div class="grid-3" style="margin-top:20px">
                <a class="result-card declared" href="/games/delhi-bazar" data-slug="delhi-bazar">
                    <div class="head">
                        <span class="g">DELHI BAZAR</span>
                        <span class="tag ok">Declared</span>
                    </div>
                    <div class="body">
                        <div class="big ">67</div>
                        <div class="muted small">Result at 03:15 PM</div>
                    </div>
                </a>
                <a class="result-card declared" href="/games/shri-ganesh" data-slug="shri-ganesh">
                    <div class="head">
                        <span class="g">SHREE GANESH </span>
                        <span class="tag ok">Declared</span>
                    </div>
                    <div class="body">
                        <div class="big ">81</div>
                        <div class="muted small">Result at 04:45 PM</div>
                    </div>
                </a>
                <a class="result-card declared" href="/games/faridabad" data-slug="faridabad">
                    <div class="head">
                        <span class="g">FARIDBAD </span>
                        <span class="tag ok">Declared</span>
                    </div>
                    <div class="body">
                        <div class="big ">52</div>
                        <div class="muted small">Result at 06:15 PM</div>
                    </div>
                </a>
                <a class="result-card " href="/games/ghaziabad" data-slug="ghaziabad">
                    <div class="head">
                        <span class="g">GAZIYABAD </span>
                        <span class="tag wait">Pending</span>
                    </div>
                    <div class="body">
                        <div class="big dim"></div>
                        <div class="muted small">Expected at 10:00 PM</div>
                    </div>
                </a>
                <a class="result-card " href="/games/gali" data-slug="gali">
                    <div class="head">
                        <span class="g">GALI</span>
                        <span class="tag wait">Pending</span>
                    </div>
                    <div class="body">
                        <div class="big dim"></div>
                        <div class="muted small">Expected at 11:50 PM</div>
                    </div>
                </a>
                <a class="result-card declared" href="/games/desawar" data-slug="desawar">
                    <div class="head">
                        <span class="g">DISAWAR </span>
                        <span class="tag ok">Declared</span>
                    </div>
                    <div class="body">
                        <div class="big ">61</div>
                        <div class="muted small">Result at 05:15 AM</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="wrap">
            <div class="center">
                <h2>Disawar — This Month's Chart</h2>
                <p class="muted">Monthly result chart — view all dates and winning numbers</p>
            </div>
            <div style="margin-top:16px">
                <div class="table-scroll">
                    <table class="chart-table">
                        <thead>
                            <tr>
                                <th class="wk-h">OCTOBER 2026</th>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="wk">01 Oct</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>--</td>
                                <td>52</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td class="wk">04 Oct</td>
                                <td>15</td>
                                <td>70</td>
                                <td>59</td>
                                <td>23</td>
                                <td>90</td>
                                <td>26</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td class="wk">11 Oct</td>
                                <td>27</td>
                                <td>98</td>
                                <td>40</td>
                                <td>97</td>
                                <td>42</td>
                                <td>98</td>
                                <td>97</td>
                            </tr>
                            <tr>
                                <td class="wk">18 Oct</td>
                                <td>44</td>
                                <td>23</td>
                                <td>64</td>
                                <td>72</td>
                                <td>47</td>
                                <td>03</td>
                                <td>02</td>
                            </tr>
                            <tr>
                                <td class="wk">25 Oct</td>
                                <td>61</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="center" style="margin-top:16px"><a class="btn" href="/charts">VIEW FULL CHARTS →</a>
            </div>
        </div>
    </section>

    <section class="lrb-section">
        <div class="lrb-inner">
            <div class="lrb-heading">
                <h2 class="lrb-title">Today's Winning Numbers</h2>
                <p class="lrb-subtitle">Sunday, 25 Oct 2026</p>
                <div class="lrb-meta">
                    <span class="lrb-updated" data-lrb-updated></span>
                    <button type="button" class="lrb-refresh-btn" data-lrb-refresh>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 12a9 9 0 1 1-2.6-6.4" />
                            <path d="M21 3v6h-6" />
                        </svg>
                        REFRESH
                    </button>
                </div>
            </div>
            <div class="lrb-grid">
                <a class="lrb-card" data-state="declared" data-slug="delhi-bazar" href="/games/delhi-bazar">
                    <img class="lrb-landmark" src="{{ URL::asset('frontend') }}/images/cards/delhi-bazar-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="lrb-header">
                        <span class="lrb-name">DELHI BAZAR</span>
                        <span class="lrb-badge lrb-badge--declared">
                            <span class="lrb-dot"></span> Declared </span>
                    </div>
                    <div class="lrb-body">
                        <span class="lrb-num lrb-num--declared">67</span>
                        <span class="lrb-time">
                            <svg class="lrb-clock" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>
                            Result at <strong>03:15 PM</strong>
                        </span>
                    </div>
                </a>
                <a class="lrb-card" data-state="declared" data-slug="shri-ganesh" href="/games/shri-ganesh">
                    <img class="lrb-landmark" src="{{ URL::asset('frontend') }}/images/cards/shri-ganesh-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="lrb-header">
                        <span class="lrb-name">SHREE GANESH </span>
                        <span class="lrb-badge lrb-badge--declared">
                            <span class="lrb-dot"></span> Declared </span>
                    </div>
                    <div class="lrb-body">
                        <span class="lrb-num lrb-num--declared">81</span>
                        <span class="lrb-time">
                            <svg class="lrb-clock" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>
                            Result at <strong>04:45 PM</strong>
                        </span>
                    </div>
                </a>
                <a class="lrb-card" data-state="declared" data-slug="faridabad" href="/games/faridabad">
                    <img class="lrb-landmark" src="{{ URL::asset('frontend') }}/images/cards/faridabad-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="lrb-header">
                        <span class="lrb-name">FARIDBAD </span>
                        <span class="lrb-badge lrb-badge--declared">
                            <span class="lrb-dot"></span> Declared </span>
                    </div>
                    <div class="lrb-body">
                        <span class="lrb-num lrb-num--declared">52</span>
                        <span class="lrb-time">
                            <svg class="lrb-clock" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>
                            Result at <strong>06:15 PM</strong>
                        </span>
                    </div>
                </a>
                <a class="lrb-card" data-state="awaited" data-slug="ghaziabad" href="/games/ghaziabad">
                    <img class="lrb-landmark" src="{{ URL::asset('frontend') }}/images/cards/ghaziabad-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="lrb-header">
                        <span class="lrb-name">GAZIYABAD </span>
                        <span class="lrb-badge lrb-badge--awaited">
                            Pending </span>
                    </div>
                    <div class="lrb-body">
                        <span class="lrb-time">
                            <svg class="lrb-clock" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>
                            Expected at <strong>10:00 PM</strong>
                        </span>
                    </div>
                </a>
                <a class="lrb-card" data-state="awaited" data-slug="gali" href="/games/gali">
                    <img class="lrb-landmark" src="{{ URL::asset('frontend') }}/images/cards/gali-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="lrb-header">
                        <span class="lrb-name">GALI</span>
                        <span class="lrb-badge lrb-badge--awaited">
                            Pending </span>
                    </div>
                    <div class="lrb-body">
                        <span class="lrb-time">
                            <svg class="lrb-clock" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>
                            Expected at <strong>11:50 PM</strong>
                        </span>
                    </div>
                </a>
                <a class="lrb-card" data-state="declared" data-slug="desawar" href="/games/desawar">
                    <img class="lrb-landmark" src="{{ URL::asset('frontend') }}/images/cards/disawar-landmark.jpg"
                        alt="" aria-hidden="true">
                    <div class="lrb-header">
                        <span class="lrb-name">DISAWAR </span>
                        <span class="lrb-badge lrb-badge--declared">
                            <span class="lrb-dot"></span> Declared </span>
                    </div>
                    <div class="lrb-body">
                        <span class="lrb-num lrb-num--declared">61</span>
                        <span class="lrb-time">
                            <svg class="lrb-clock" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>
                            Result at <strong>05:15 AM</strong>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="wa-ad" aria-label="WhatsApp contact">
        <div class="wa-ad-card">
            <div class="wa-ad-stripe-top"></div>
            <div class="wa-ad-body">
                <button type="button" class="wa-ad-logo" data-wa-open aria-label="Game schedule dekhein"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42" height="42"
                        fill="currentColor" aria-hidden="true">
                        <path
                            d="M24 4C12.95 4 4 12.95 4 24c0 3.55.93 6.9 2.56 9.8L4 44l10.44-2.53A19.87 19.87 0 0 0 24 44c11.05 0 20-8.95 20-20S35.05 4 24 4zm0 36c-3.18 0-6.17-.87-8.73-2.38l-.62-.37-6.2 1.5 1.55-5.98-.4-.65A15.93 15.93 0 0 1 8 24c0-8.82 7.18-16 16-16s16 7.18 16 16-7.18 16-16 16zm8.73-11.9c-.48-.24-2.83-1.4-3.27-1.56-.44-.16-.76-.24-1.08.24-.32.48-1.24 1.56-1.52 1.88-.28.32-.56.36-1.04.12-.48-.24-2.02-.74-3.85-2.36-1.42-1.27-2.38-2.83-2.66-3.31-.28-.48-.03-.74.21-.98.22-.22.48-.56.72-.84.24-.28.32-.48.48-.8.16-.32.08-.6-.04-.84-.12-.24-1.08-2.6-1.48-3.56-.39-.93-.78-.8-1.08-.82-.28-.01-.6-.01-.92-.01-.32 0-.84.12-1.28.6-.44.48-1.68 1.64-1.68 4s1.72 4.64 1.96 4.96c.24.32 3.38 5.16 8.2 7.24 1.15.5 2.04.8 2.74 1.02 1.15.36 2.2.31 3.02.19.92-.14 2.83-1.16 3.23-2.28.4-1.12.4-2.08.28-2.28-.12-.2-.44-.32-.92-.56z" />
                    </svg></button>
                <div class="wa-ad-copy">
                    <p class="wa-ad-title">WhatsApp Par Sampark Karein</p>
                    <p class="wa-ad-text">चैट बॉक्स पर नंबर लगवाने, खाईवाल का परचा लगवाने, <strong>गेम का रिजल्ट
                            डलवाने</strong> और <strong>गेम सेल की पोस्ट</strong> डलवाने के लिए हमसे WhatsApp पर
                        मैसेज करें।</p>
                    <button type="button" class="wa-ad-link" data-wa-open>Game Timing Dekhein</button>
                </div>
                <div class="wa-ad-actions">
                    <button type="button" class="wa-ad-schedule" data-wa-open>Game Schedule</button>
                    <a class="wa-ad-btn"
                        href="https://wa.me/919589836730?text=Namaste%21%20Main%20sattakhaiwal%20se%20online%20game%20ke%20baare%20mein%20jaankari%20chahta%20hoon."
                        target="_blank" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                            width="18" height="18" fill="currentColor" aria-hidden="true">
                            <path
                                d="M24 4C12.95 4 4 12.95 4 24c0 3.55.93 6.9 2.56 9.8L4 44l10.44-2.53A19.87 19.87 0 0 0 24 44c11.05 0 20-8.95 20-20S35.05 4 24 4zm0 36c-3.18 0-6.17-.87-8.73-2.38l-.62-.37-6.2 1.5 1.55-5.98-.4-.65A15.93 15.93 0 0 1 8 24c0-8.82 7.18-16 16-16s16 7.18 16 16-7.18 16-16 16zm8.73-11.9c-.48-.24-2.83-1.4-3.27-1.56-.44-.16-.76-.24-1.08.24-.32.48-1.24 1.56-1.52 1.88-.28.32-.56.36-1.04.12-.48-.24-2.02-.74-3.85-2.36-1.42-1.27-2.38-2.83-2.66-3.31-.28-.48-.03-.74.21-.98.22-.22.48-.56.72-.84.24-.28.32-.48.48-.8.16-.32.08-.6-.04-.84-.12-.24-1.08-2.6-1.48-3.56-.39-.93-.78-.8-1.08-.82-.28-.01-.6-.01-.92-.01-.32 0-.84.12-1.28.6-.44.48-1.68 1.64-1.68 4s1.72 4.64 1.96 4.96c.24.32 3.38 5.16 8.2 7.24 1.15.5 2.04.8 2.74 1.02 1.15.36 2.2.31 3.02.19.92-.14 2.83-1.16 3.23-2.28.4-1.12.4-2.08.28-2.28-.12-.2-.44-.32-.92-.56z" />
                        </svg> WhatsApp Now</a>
                </div>
            </div>
            <div class="wa-ad-stripe-bot"></div>
        </div>
    </section>

    <section class="ad-banner" aria-label="Advertisement">
        <div class="ad-banner-card">
            <div class="ad-banner-bar"></div>
            <p class="ad-banner-text">Har din ke latest Satta King Results, ek hi jagah — sattakhaiwal.com par fast
                aur reliable updates.</p>
            <div class="ad-banner-bar"></div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="center">
                <div class="kicker">PREVIOUS RESULTS</div>
                <h2>LAST 14 DAYS RESULTS</h2>
                <p class="muted">Complete winning numbers for all 6 markets — past two weeks</p>
            </div>
            <div class="prev-wrap" style="margin-top:16px">
                <table class="prev-table">
                    <thead>
                        <tr>
                            <th class="th-date">DATE</th>
                            <th class="th-day">DAY</th>
                            <th>DELHI BAZAR</th>
                            <th>SHREE GANESH</th>
                            <th>FARIDBAD</th>
                            <th>GAZIYABAD</th>
                            <th>GALI</th>
                            <th>DISAWAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="is-today">
                            <td class="td-date">
                                <span class="today-pill">TODAY</span> <span>25 Oct 2026</span>
                            </td>
                            <td class="td-day">Sun</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">67</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">81</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">52</a>
                            </td>
                            <td class="num">
                                <span class="empty">--</span>
                            </td>
                            <td class="num">
                                <span class="empty">--</span>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">61</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="td-date">
                                <span>24 Oct 2026</span>
                            </td>
                            <td class="td-day">Sat</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">53</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">66</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">21</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">77</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">33</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">02</a>
                            </td>
                        </tr>
                        <tr class="alt">
                            <td class="td-date">
                                <span>23 Oct 2026</span>
                            </td>
                            <td class="td-day">Fri</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">66</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">04</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">61</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">35</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">60</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">03</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="td-date">
                                <span>22 Oct 2026</span>
                            </td>
                            <td class="td-day">Thu</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">73</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">99</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">26</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">55</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">85</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">47</a>
                            </td>
                        </tr>
                        <tr class="alt">
                            <td class="td-date">
                                <span>21 Oct 2026</span>
                            </td>
                            <td class="td-day">Wed</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">86</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">64</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">12</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">86</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">09</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">72</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="td-date">
                                <span>20 Oct 2026</span>
                            </td>
                            <td class="td-day">Tue</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">29</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">95</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">29</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">16</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">96</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">64</a>
                            </td>
                        </tr>
                        <tr class="alt">
                            <td class="td-date">
                                <span>19 Oct 2026</span>
                            </td>
                            <td class="td-day">Mon</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">44</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">11</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">72</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">23</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">47</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">23</a>
                            </td>
                        </tr>
                        <tr class=" extra">
                            <td class="td-date">
                                <span>18 Oct 2026</span>
                            </td>
                            <td class="td-day">Sun</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">74</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">19</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">78</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">16</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">73</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">44</a>
                            </td>
                        </tr>
                        <tr class="alt extra">
                            <td class="td-date">
                                <span>17 Oct 2026</span>
                            </td>
                            <td class="td-day">Sat</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">16</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">55</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">78</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">15</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">69</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">97</a>
                            </td>
                        </tr>
                        <tr class=" extra">
                            <td class="td-date">
                                <span>16 Oct 2026</span>
                            </td>
                            <td class="td-day">Fri</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">66</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">62</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">29</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">42</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">51</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">98</a>
                            </td>
                        </tr>
                        <tr class="alt extra">
                            <td class="td-date">
                                <span>15 Oct 2026</span>
                            </td>
                            <td class="td-day">Thu</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">07</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">56</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">48</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">74</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">12</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">42</a>
                            </td>
                        </tr>
                        <tr class=" extra">
                            <td class="td-date">
                                <span>14 Oct 2026</span>
                            </td>
                            <td class="td-day">Wed</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">12</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">80</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">11</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">80</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">81</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">97</a>
                            </td>
                        </tr>
                        <tr class="alt extra">
                            <td class="td-date">
                                <span>13 Oct 2026</span>
                            </td>
                            <td class="td-day">Tue</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">96</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">98</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">87</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">58</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">22</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">40</a>
                            </td>
                        </tr>
                        <tr class=" extra">
                            <td class="td-date">
                                <span>12 Oct 2026</span>
                            </td>
                            <td class="td-day">Mon</td>
                            <td class="num">
                                <a href="/games/delhi-bazar">22</a>
                            </td>
                            <td class="num">
                                <a href="/games/shri-ganesh">67</a>
                            </td>
                            <td class="num">
                                <a href="/games/faridabad">55</a>
                            </td>
                            <td class="num">
                                <a href="/games/ghaziabad">48</a>
                            </td>
                            <td class="num">
                                <a href="/games/gali">90</a>
                            </td>
                            <td class="num">
                                <a href="/games/desawar">98</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="center" style="margin-top:16px">
                <button type="button" class="prev-toggle" data-prev-toggle>SHOW ALL 14 DAYS</button>
            </div>
            <div class="center" style="margin-top:20px">
                <a class="btn" href="/record-charts">SEARCH ALL HISTORICAL RECORDS →</a>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="wrap">
            <div class="center">
                <div class="kicker">RESULT CHARTS</div>
                <h2 style="color:#fff">GAME-WISE RESULT HISTORY</h2>
                <p class="muted">Full monthly calendar — Shree Ganesh, Delhi Bazar, Faridabad, Ghaziabad, Gali
                    &amp; Disawar</p>
            </div>
            <div class="month-nav" id="charts-nav">
                <div class="month-nav-top">
                    <a class="mn-btn" href="/?cy=2026&cm=9#charts"><svg viewBox="0 0 24 24" width="16"
                            height="16" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M15 18l-6-6 6-6" />
                        </svg> PREV</a>
                    <div class="lbl">OCTOBER 2026</div>
                    <form method="get" action="/" class="mn-year">
                        <input type="hidden" name="cm" value="10">
                        <select name="cy" onchange="this.form.submit()" aria-label="Select year">
                            <option value="2026" selected>2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                        </select>
                        <svg class="mn-year-caret" viewBox="0 0 24 24" width="14" height="14" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </form>
                    <span class="mn-btn is-disabled">NEXT <svg viewBox="0 0 24 24" width="16" height="16"
                            fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M9 18l6-6-6-6" />
                        </svg></span>
                </div>
                <div class="month-grid">
                    <a class="" href="/?cy=2026&cm=1#charts">Jan</a>
                    <a class="" href="/?cy=2026&cm=2#charts">Feb</a>
                    <a class="" href="/?cy=2026&cm=3#charts">Mar</a>
                    <a class="" href="/?cy=2026&cm=4#charts">Apr</a>
                    <a class="" href="/?cy=2026&cm=5#charts">May</a>
                    <a class="" href="/?cy=2026&cm=6#charts">Jun</a>
                    <a class="" href="/?cy=2026&cm=7#charts">Jul</a>
                    <a class="" href="/?cy=2026&cm=8#charts">Aug</a>
                    <a class="" href="/?cy=2026&cm=9#charts">Sep</a>
                    <a class="active" href="/?cy=2026&cm=10#charts">Oct</a>
                    <span class="disabled">Nov</span>
                    <span class="disabled">Dec</span>
                </div>
            </div>
            <div id="charts">
                <div class="game-chart-card">
                    <div class="game-chart-head">
                        <div>
                            <h3>DELHI BAZAR RESULT CHART</h3>
                            <p>OCTOBER 2026 · Result Time: 03:15 PM</p>
                        </div>
                        <a class="btn btn-gold btn-sm" href="/games/delhi-bazar">FULL HISTORY →</a>
                    </div>
                    <div class="table-scroll">
                        <table class="chart-table">
                            <thead>
                                <tr>
                                    <th class="wk-h">WEEK</th>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wk">01 Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="d">1</span><span class="n">76</span></td>
                                    <td><span class="d">2</span><span class="n">25</span></td>
                                    <td><span class="d">3</span><span class="n">25</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">04 Oct</td>
                                    <td><span class="d">4</span><span class="n">91</span></td>
                                    <td><span class="d">5</span><span class="n">86</span></td>
                                    <td><span class="d">6</span><span class="n">29</span></td>
                                    <td><span class="d">7</span><span class="n">06</span></td>
                                    <td><span class="d">8</span><span class="n">07</span></td>
                                    <td><span class="d">9</span><span class="n">87</span></td>
                                    <td><span class="d">10</span><span class="n">71</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">11 Oct</td>
                                    <td><span class="d">11</span><span class="n">50</span></td>
                                    <td><span class="d">12</span><span class="n">22</span></td>
                                    <td><span class="d">13</span><span class="n">96</span></td>
                                    <td><span class="d">14</span><span class="n">12</span></td>
                                    <td><span class="d">15</span><span class="n">07</span></td>
                                    <td><span class="d">16</span><span class="n">66</span></td>
                                    <td><span class="d">17</span><span class="n">16</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">18 Oct</td>
                                    <td><span class="d">18</span><span class="n">74</span></td>
                                    <td><span class="d">19</span><span class="n">44</span></td>
                                    <td><span class="d">20</span><span class="n">29</span></td>
                                    <td><span class="d">21</span><span class="n">86</span></td>
                                    <td><span class="d">22</span><span class="n">73</span></td>
                                    <td><span class="d">23</span><span class="n">66</span></td>
                                    <td><span class="d">24</span><span class="n">53</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">25 Oct</td>
                                    <td class="today"><span class="d">25</span><span class="n gold">67</span></td>
                                    <td><span class="d">26</span><span class="n dim">--</span></td>
                                    <td><span class="d">27</span><span class="n dim">--</span></td>
                                    <td><span class="d">28</span><span class="n dim">--</span></td>
                                    <td><span class="d">29</span><span class="n dim">--</span></td>
                                    <td><span class="d">30</span><span class="n dim">--</span></td>
                                    <td><span class="d">31</span><span class="n dim">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="game-chart-foot">
                        <span class="muted">Today's result highlighted in yellow</span>
                        <a href="/charts">ALL CHARTS →</a>
                    </div>
                </div>
                <div class="game-chart-card">
                    <div class="game-chart-head">
                        <div>
                            <h3>SHREE GANESH RESULT CHART</h3>
                            <p>OCTOBER 2026 · Result Time: 04:45 PM</p>
                        </div>
                        <a class="btn btn-gold btn-sm" href="/games/shri-ganesh">FULL HISTORY →</a>
                    </div>
                    <div class="table-scroll">
                        <table class="chart-table">
                            <thead>
                                <tr>
                                    <th class="wk-h">WEEK</th>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wk">01 Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="d">1</span><span class="n">51</span></td>
                                    <td><span class="d">2</span><span class="n">31</span></td>
                                    <td><span class="d">3</span><span class="n">54</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">04 Oct</td>
                                    <td><span class="d">4</span><span class="n">47</span></td>
                                    <td><span class="d">5</span><span class="n">18</span></td>
                                    <td><span class="d">6</span><span class="n">27</span></td>
                                    <td><span class="d">7</span><span class="n">89</span></td>
                                    <td><span class="d">8</span><span class="n">02</span></td>
                                    <td><span class="d">9</span><span class="n">01</span></td>
                                    <td><span class="d">10</span><span class="n">06</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">11 Oct</td>
                                    <td><span class="d">11</span><span class="n">58</span></td>
                                    <td><span class="d">12</span><span class="n">67</span></td>
                                    <td><span class="d">13</span><span class="n">98</span></td>
                                    <td><span class="d">14</span><span class="n">80</span></td>
                                    <td><span class="d">15</span><span class="n">56</span></td>
                                    <td><span class="d">16</span><span class="n">62</span></td>
                                    <td><span class="d">17</span><span class="n">55</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">18 Oct</td>
                                    <td><span class="d">18</span><span class="n">19</span></td>
                                    <td><span class="d">19</span><span class="n">11</span></td>
                                    <td><span class="d">20</span><span class="n">95</span></td>
                                    <td><span class="d">21</span><span class="n">64</span></td>
                                    <td><span class="d">22</span><span class="n">99</span></td>
                                    <td><span class="d">23</span><span class="n">04</span></td>
                                    <td><span class="d">24</span><span class="n">66</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">25 Oct</td>
                                    <td class="today"><span class="d">25</span><span class="n gold">81</span></td>
                                    <td><span class="d">26</span><span class="n dim">--</span></td>
                                    <td><span class="d">27</span><span class="n dim">--</span></td>
                                    <td><span class="d">28</span><span class="n dim">--</span></td>
                                    <td><span class="d">29</span><span class="n dim">--</span></td>
                                    <td><span class="d">30</span><span class="n dim">--</span></td>
                                    <td><span class="d">31</span><span class="n dim">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="game-chart-foot">
                        <span class="muted">Today's result highlighted in yellow</span>
                        <a href="/charts">ALL CHARTS →</a>
                    </div>
                </div>
                <div class="game-chart-card">
                    <div class="game-chart-head">
                        <div>
                            <h3>FARIDBAD RESULT CHART</h3>
                            <p>OCTOBER 2026 · Result Time: 06:15 PM</p>
                        </div>
                        <a class="btn btn-gold btn-sm" href="/games/faridabad">FULL HISTORY →</a>
                    </div>
                    <div class="table-scroll">
                        <table class="chart-table">
                            <thead>
                                <tr>
                                    <th class="wk-h">WEEK</th>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wk">01 Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="d">1</span><span class="n">42</span></td>
                                    <td><span class="d">2</span><span class="n">05</span></td>
                                    <td><span class="d">3</span><span class="n">58</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">04 Oct</td>
                                    <td><span class="d">4</span><span class="n">36</span></td>
                                    <td><span class="d">5</span><span class="n">26</span></td>
                                    <td><span class="d">6</span><span class="n">01</span></td>
                                    <td><span class="d">7</span><span class="n">87</span></td>
                                    <td><span class="d">8</span><span class="n">92</span></td>
                                    <td><span class="d">9</span><span class="n">99</span></td>
                                    <td><span class="d">10</span><span class="n">08</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">11 Oct</td>
                                    <td><span class="d">11</span><span class="n">96</span></td>
                                    <td><span class="d">12</span><span class="n">55</span></td>
                                    <td><span class="d">13</span><span class="n">87</span></td>
                                    <td><span class="d">14</span><span class="n">11</span></td>
                                    <td><span class="d">15</span><span class="n">48</span></td>
                                    <td><span class="d">16</span><span class="n">29</span></td>
                                    <td><span class="d">17</span><span class="n">78</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">18 Oct</td>
                                    <td><span class="d">18</span><span class="n">78</span></td>
                                    <td><span class="d">19</span><span class="n">72</span></td>
                                    <td><span class="d">20</span><span class="n">29</span></td>
                                    <td><span class="d">21</span><span class="n">12</span></td>
                                    <td><span class="d">22</span><span class="n">26</span></td>
                                    <td><span class="d">23</span><span class="n">61</span></td>
                                    <td><span class="d">24</span><span class="n">21</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">25 Oct</td>
                                    <td class="today"><span class="d">25</span><span class="n gold">52</span></td>
                                    <td><span class="d">26</span><span class="n dim">--</span></td>
                                    <td><span class="d">27</span><span class="n dim">--</span></td>
                                    <td><span class="d">28</span><span class="n dim">--</span></td>
                                    <td><span class="d">29</span><span class="n dim">--</span></td>
                                    <td><span class="d">30</span><span class="n dim">--</span></td>
                                    <td><span class="d">31</span><span class="n dim">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="game-chart-foot">
                        <span class="muted">Today's result highlighted in yellow</span>
                        <a href="/charts">ALL CHARTS →</a>
                    </div>
                </div>
                <div class="game-chart-card">
                    <div class="game-chart-head">
                        <div>
                            <h3>GAZIYABAD RESULT CHART</h3>
                            <p>OCTOBER 2026 · Result Time: 10:00 PM</p>
                        </div>
                        <a class="btn btn-gold btn-sm" href="/games/ghaziabad">FULL HISTORY →</a>
                    </div>
                    <div class="table-scroll">
                        <table class="chart-table">
                            <thead>
                                <tr>
                                    <th class="wk-h">WEEK</th>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wk">01 Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="d">1</span><span class="n">67</span></td>
                                    <td><span class="d">2</span><span class="n">81</span></td>
                                    <td><span class="d">3</span><span class="n">95</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">04 Oct</td>
                                    <td><span class="d">4</span><span class="n">98</span></td>
                                    <td><span class="d">5</span><span class="n">78</span></td>
                                    <td><span class="d">6</span><span class="n">38</span></td>
                                    <td><span class="d">7</span><span class="n">84</span></td>
                                    <td><span class="d">8</span><span class="n">74</span></td>
                                    <td><span class="d">9</span><span class="n">89</span></td>
                                    <td><span class="d">10</span><span class="n">71</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">11 Oct</td>
                                    <td><span class="d">11</span><span class="n">46</span></td>
                                    <td><span class="d">12</span><span class="n">48</span></td>
                                    <td><span class="d">13</span><span class="n">58</span></td>
                                    <td><span class="d">14</span><span class="n">80</span></td>
                                    <td><span class="d">15</span><span class="n">74</span></td>
                                    <td><span class="d">16</span><span class="n">42</span></td>
                                    <td><span class="d">17</span><span class="n">15</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">18 Oct</td>
                                    <td><span class="d">18</span><span class="n">16</span></td>
                                    <td><span class="d">19</span><span class="n">23</span></td>
                                    <td><span class="d">20</span><span class="n">16</span></td>
                                    <td><span class="d">21</span><span class="n">86</span></td>
                                    <td><span class="d">22</span><span class="n">55</span></td>
                                    <td><span class="d">23</span><span class="n">35</span></td>
                                    <td><span class="d">24</span><span class="n">77</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">25 Oct</td>
                                    <td class="today"><span class="d">25</span><span class="n dim">--</span>
                                    </td>
                                    <td><span class="d">26</span><span class="n dim">--</span></td>
                                    <td><span class="d">27</span><span class="n dim">--</span></td>
                                    <td><span class="d">28</span><span class="n dim">--</span></td>
                                    <td><span class="d">29</span><span class="n dim">--</span></td>
                                    <td><span class="d">30</span><span class="n dim">--</span></td>
                                    <td><span class="d">31</span><span class="n dim">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="game-chart-foot">
                        <span class="muted">Today's result highlighted in yellow</span>
                        <a href="/charts">ALL CHARTS →</a>
                    </div>
                </div>
                <div class="game-chart-card">
                    <div class="game-chart-head">
                        <div>
                            <h3>GALI RESULT CHART</h3>
                            <p>OCTOBER 2026 · Result Time: 11:50 PM</p>
                        </div>
                        <a class="btn btn-gold btn-sm" href="/games/gali">FULL HISTORY →</a>
                    </div>
                    <div class="table-scroll">
                        <table class="chart-table">
                            <thead>
                                <tr>
                                    <th class="wk-h">WEEK</th>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wk">01 Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="d">1</span><span class="n">93</span></td>
                                    <td><span class="d">2</span><span class="n">01</span></td>
                                    <td><span class="d">3</span><span class="n">68</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">04 Oct</td>
                                    <td><span class="d">4</span><span class="n">80</span></td>
                                    <td><span class="d">5</span><span class="n">24</span></td>
                                    <td><span class="d">6</span><span class="n">53</span></td>
                                    <td><span class="d">7</span><span class="n">29</span></td>
                                    <td><span class="d">8</span><span class="n dim">--</span></td>
                                    <td><span class="d">9</span><span class="n">83</span></td>
                                    <td><span class="d">10</span><span class="n">12</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">11 Oct</td>
                                    <td><span class="d">11</span><span class="n">40</span></td>
                                    <td><span class="d">12</span><span class="n">90</span></td>
                                    <td><span class="d">13</span><span class="n">22</span></td>
                                    <td><span class="d">14</span><span class="n">81</span></td>
                                    <td><span class="d">15</span><span class="n">12</span></td>
                                    <td><span class="d">16</span><span class="n">51</span></td>
                                    <td><span class="d">17</span><span class="n">69</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">18 Oct</td>
                                    <td><span class="d">18</span><span class="n">73</span></td>
                                    <td><span class="d">19</span><span class="n">47</span></td>
                                    <td><span class="d">20</span><span class="n">96</span></td>
                                    <td><span class="d">21</span><span class="n">09</span></td>
                                    <td><span class="d">22</span><span class="n">85</span></td>
                                    <td><span class="d">23</span><span class="n">60</span></td>
                                    <td><span class="d">24</span><span class="n">33</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">25 Oct</td>
                                    <td class="today"><span class="d">25</span><span class="n dim">--</span>
                                    </td>
                                    <td><span class="d">26</span><span class="n dim">--</span></td>
                                    <td><span class="d">27</span><span class="n dim">--</span></td>
                                    <td><span class="d">28</span><span class="n dim">--</span></td>
                                    <td><span class="d">29</span><span class="n dim">--</span></td>
                                    <td><span class="d">30</span><span class="n dim">--</span></td>
                                    <td><span class="d">31</span><span class="n dim">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="game-chart-foot">
                        <span class="muted">Today's result highlighted in yellow</span>
                        <a href="/charts">ALL CHARTS →</a>
                    </div>
                </div>
                <div class="game-chart-card">
                    <div class="game-chart-head">
                        <div>
                            <h3>DISAWAR RESULT CHART</h3>
                            <p>OCTOBER 2026 · Result Time: 05:15 AM</p>
                        </div>
                        <a class="btn btn-gold btn-sm" href="/games/desawar">FULL HISTORY →</a>
                    </div>
                    <div class="table-scroll">
                        <table class="chart-table">
                            <thead>
                                <tr>
                                    <th class="wk-h">WEEK</th>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wk">01 Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="d">1</span><span class="n dim">--</span></td>
                                    <td><span class="d">2</span><span class="n">52</span></td>
                                    <td><span class="d">3</span><span class="n">18</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">04 Oct</td>
                                    <td><span class="d">4</span><span class="n">15</span></td>
                                    <td><span class="d">5</span><span class="n">70</span></td>
                                    <td><span class="d">6</span><span class="n">59</span></td>
                                    <td><span class="d">7</span><span class="n">23</span></td>
                                    <td><span class="d">8</span><span class="n">90</span></td>
                                    <td><span class="d">9</span><span class="n">26</span></td>
                                    <td><span class="d">10</span><span class="n">22</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">11 Oct</td>
                                    <td><span class="d">11</span><span class="n">27</span></td>
                                    <td><span class="d">12</span><span class="n">98</span></td>
                                    <td><span class="d">13</span><span class="n">40</span></td>
                                    <td><span class="d">14</span><span class="n">97</span></td>
                                    <td><span class="d">15</span><span class="n">42</span></td>
                                    <td><span class="d">16</span><span class="n">98</span></td>
                                    <td><span class="d">17</span><span class="n">97</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">18 Oct</td>
                                    <td><span class="d">18</span><span class="n">44</span></td>
                                    <td><span class="d">19</span><span class="n">23</span></td>
                                    <td><span class="d">20</span><span class="n">64</span></td>
                                    <td><span class="d">21</span><span class="n">72</span></td>
                                    <td><span class="d">22</span><span class="n">47</span></td>
                                    <td><span class="d">23</span><span class="n">03</span></td>
                                    <td><span class="d">24</span><span class="n">02</span></td>
                                </tr>
                                <tr>
                                    <td class="wk">25 Oct</td>
                                    <td class="today"><span class="d">25</span><span class="n gold">61</span>
                                    </td>
                                    <td><span class="d">26</span><span class="n dim">--</span></td>
                                    <td><span class="d">27</span><span class="n dim">--</span></td>
                                    <td><span class="d">28</span><span class="n dim">--</span></td>
                                    <td><span class="d">29</span><span class="n dim">--</span></td>
                                    <td><span class="d">30</span><span class="n dim">--</span></td>
                                    <td><span class="d">31</span><span class="n dim">--</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="game-chart-foot">
                        <span class="muted">Today's result highlighted in yellow</span>
                        <a href="/charts">ALL CHARTS →</a>
                    </div>
                </div>
            </div>
            <div class="center"><a class="btn btn-gold" href="/charts">VIEW COMPLETE CHARTS PAGE →</a></div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="center">
                <h2>sattakhaiwal FAMILY CHART</h2>
                <p class="muted">Complete family number combinations — 00 to 99</p>
            </div>
            <div class="family-wrap" style="margin-top:16px">
                <div class="family-head">Family Chart</div>
                <div class="table-scroll">
                    <table class="family-table">
                        <tbody>
                            <tr>
                                <td class="fn">00</td>
                                <td class="fc">00-05-50-55</td>
                                <td class="fn">25</td>
                                <td class="fc">25-20-75-70</td>
                                <td class="fn">50</td>
                                <td class="fc">50-55-00-05</td>
                                <td class="fn">75</td>
                                <td class="fc last">75-70-25-20</td>
                            </tr>
                            <tr>
                                <td class="fn">01</td>
                                <td class="fc">01-06-51-56</td>
                                <td class="fn">26</td>
                                <td class="fc">26-21-76-71</td>
                                <td class="fn">51</td>
                                <td class="fc">51-56-01-06</td>
                                <td class="fn">76</td>
                                <td class="fc last">76-71-26-21</td>
                            </tr>
                            <tr>
                                <td class="fn">02</td>
                                <td class="fc">02-07-52-57</td>
                                <td class="fn">27</td>
                                <td class="fc">27-22-77-72</td>
                                <td class="fn">52</td>
                                <td class="fc">52-57-02-07</td>
                                <td class="fn">77</td>
                                <td class="fc last">77-72-27-22</td>
                            </tr>
                            <tr>
                                <td class="fn">03</td>
                                <td class="fc">03-08-53-58</td>
                                <td class="fn">28</td>
                                <td class="fc">28-23-78-73</td>
                                <td class="fn">53</td>
                                <td class="fc">53-58-03-08</td>
                                <td class="fn">78</td>
                                <td class="fc last">78-73-28-23</td>
                            </tr>
                            <tr>
                                <td class="fn">04</td>
                                <td class="fc">04-09-54-59</td>
                                <td class="fn">29</td>
                                <td class="fc">29-24-79-74</td>
                                <td class="fn">54</td>
                                <td class="fc">54-59-04-09</td>
                                <td class="fn">79</td>
                                <td class="fc last">79-74-29-24</td>
                            </tr>
                            <tr>
                                <td class="fn">05</td>
                                <td class="fc">05-00-55-50</td>
                                <td class="fn">30</td>
                                <td class="fc">30-35-80-85</td>
                                <td class="fn">55</td>
                                <td class="fc">55-50-05-00</td>
                                <td class="fn">80</td>
                                <td class="fc last">80-85-30-35</td>
                            </tr>
                            <tr>
                                <td class="fn">06</td>
                                <td class="fc">06-01-56-51</td>
                                <td class="fn">31</td>
                                <td class="fc">31-36-81-86</td>
                                <td class="fn">56</td>
                                <td class="fc">56-51-06-01</td>
                                <td class="fn">81</td>
                                <td class="fc last">81-86-31-36</td>
                            </tr>
                            <tr>
                                <td class="fn">07</td>
                                <td class="fc">07-02-57-52</td>
                                <td class="fn">32</td>
                                <td class="fc">32-37-82-87</td>
                                <td class="fn">57</td>
                                <td class="fc">57-52-07-02</td>
                                <td class="fn">82</td>
                                <td class="fc last">82-87-32-37</td>
                            </tr>
                            <tr>
                                <td class="fn">08</td>
                                <td class="fc">08-03-58-53</td>
                                <td class="fn">33</td>
                                <td class="fc">33-38-83-88</td>
                                <td class="fn">58</td>
                                <td class="fc">58-53-08-03</td>
                                <td class="fn">83</td>
                                <td class="fc last">83-88-33-38</td>
                            </tr>
                            <tr>
                                <td class="fn">09</td>
                                <td class="fc">09-04-59-54</td>
                                <td class="fn">34</td>
                                <td class="fc">34-39-84-89</td>
                                <td class="fn">59</td>
                                <td class="fc">59-54-09-04</td>
                                <td class="fn">84</td>
                                <td class="fc last">84-89-34-39</td>
                            </tr>
                            <tr>
                                <td class="fn">10</td>
                                <td class="fc">10-15-60-65</td>
                                <td class="fn">35</td>
                                <td class="fc">35-30-85-80</td>
                                <td class="fn">60</td>
                                <td class="fc">60-65-10-15</td>
                                <td class="fn">85</td>
                                <td class="fc last">85-80-35-30</td>
                            </tr>
                            <tr>
                                <td class="fn">11</td>
                                <td class="fc">11-16-61-66</td>
                                <td class="fn">36</td>
                                <td class="fc">36-31-86-81</td>
                                <td class="fn">61</td>
                                <td class="fc">61-66-11-16</td>
                                <td class="fn">86</td>
                                <td class="fc last">86-81-36-31</td>
                            </tr>
                            <tr>
                                <td class="fn">12</td>
                                <td class="fc">12-17-62-67</td>
                                <td class="fn">37</td>
                                <td class="fc">37-32-87-82</td>
                                <td class="fn">62</td>
                                <td class="fc">62-67-12-17</td>
                                <td class="fn">87</td>
                                <td class="fc last">87-82-37-32</td>
                            </tr>
                            <tr>
                                <td class="fn">13</td>
                                <td class="fc">13-18-63-68</td>
                                <td class="fn">38</td>
                                <td class="fc">38-33-88-83</td>
                                <td class="fn">63</td>
                                <td class="fc">63-68-13-18</td>
                                <td class="fn">88</td>
                                <td class="fc last">88-83-38-33</td>
                            </tr>
                            <tr>
                                <td class="fn">14</td>
                                <td class="fc">14-19-64-69</td>
                                <td class="fn">39</td>
                                <td class="fc">39-34-89-84</td>
                                <td class="fn">64</td>
                                <td class="fc">64-69-14-19</td>
                                <td class="fn">89</td>
                                <td class="fc last">89-84-39-34</td>
                            </tr>
                            <tr>
                                <td class="fn">15</td>
                                <td class="fc">15-10-65-60</td>
                                <td class="fn">40</td>
                                <td class="fc">40-45-90-95</td>
                                <td class="fn">65</td>
                                <td class="fc">65-60-15-10</td>
                                <td class="fn">90</td>
                                <td class="fc last">90-95-40-45</td>
                            </tr>
                            <tr>
                                <td class="fn">16</td>
                                <td class="fc">16-11-66-61</td>
                                <td class="fn">41</td>
                                <td class="fc">41-46-91-96</td>
                                <td class="fn">66</td>
                                <td class="fc">66-61-16-11</td>
                                <td class="fn">91</td>
                                <td class="fc last">91-96-41-46</td>
                            </tr>
                            <tr>
                                <td class="fn">17</td>
                                <td class="fc">17-12-67-62</td>
                                <td class="fn">42</td>
                                <td class="fc">42-47-92-97</td>
                                <td class="fn">67</td>
                                <td class="fc">67-62-17-12</td>
                                <td class="fn">92</td>
                                <td class="fc last">92-97-42-47</td>
                            </tr>
                            <tr>
                                <td class="fn">18</td>
                                <td class="fc">18-13-68-63</td>
                                <td class="fn">43</td>
                                <td class="fc">43-48-93-98</td>
                                <td class="fn">68</td>
                                <td class="fc">68-63-18-13</td>
                                <td class="fn">93</td>
                                <td class="fc last">93-98-43-48</td>
                            </tr>
                            <tr>
                                <td class="fn">19</td>
                                <td class="fc">19-14-69-64</td>
                                <td class="fn">44</td>
                                <td class="fc">44-49-94-99</td>
                                <td class="fn">69</td>
                                <td class="fc">69-64-19-14</td>
                                <td class="fn">94</td>
                                <td class="fc last">94-99-44-49</td>
                            </tr>
                            <tr>
                                <td class="fn">20</td>
                                <td class="fc">20-25-70-75</td>
                                <td class="fn">45</td>
                                <td class="fc">45-40-95-90</td>
                                <td class="fn">70</td>
                                <td class="fc">70-75-20-25</td>
                                <td class="fn">95</td>
                                <td class="fc last">95-90-45-40</td>
                            </tr>
                            <tr>
                                <td class="fn">21</td>
                                <td class="fc">21-26-71-76</td>
                                <td class="fn">46</td>
                                <td class="fc">46-41-96-91</td>
                                <td class="fn">71</td>
                                <td class="fc">71-76-21-26</td>
                                <td class="fn">96</td>
                                <td class="fc last">96-91-46-41</td>
                            </tr>
                            <tr>
                                <td class="fn">22</td>
                                <td class="fc">22-27-72-77</td>
                                <td class="fn">47</td>
                                <td class="fc">47-42-97-92</td>
                                <td class="fn">72</td>
                                <td class="fc">72-77-22-27</td>
                                <td class="fn">97</td>
                                <td class="fc last">97-92-47-42</td>
                            </tr>
                            <tr>
                                <td class="fn">23</td>
                                <td class="fc">23-28-73-78</td>
                                <td class="fn">48</td>
                                <td class="fc">48-43-98-93</td>
                                <td class="fn">73</td>
                                <td class="fc">73-78-23-28</td>
                                <td class="fn">98</td>
                                <td class="fc last">98-93-48-43</td>
                            </tr>
                            <tr>
                                <td class="fn">24</td>
                                <td class="fc">24-29-74-79</td>
                                <td class="fn">49</td>
                                <td class="fc">49-44-99-94</td>
                                <td class="fn">74</td>
                                <td class="fc">74-79-24-29</td>
                                <td class="fn">99</td>
                                <td class="fc last">99-94-49-44</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="family-foot">SATTAKHAIWAL.COM — DAILY UPDATED SATTA KING RESULT</div>
            </div>
            <div class="blog-card" style="margin-top:28px;max-width:860px;margin-left:auto;margin-right:auto">
                <h3>Play Bazar Safe Satta King — Family Chart Kya Hota Hai?</h3>
                <p class="muted"><strong style="color:#fff">Play Bazar Family Chart</strong> ek aisa chart hai
                    jisme <strong style="color:#fff">00 se 99</strong> tak ke har number ki <strong style="color:#fff">4
                        family combinations</strong> di gayi hain. Jaise agar aapka number
                    <strong style="color:#fff">05</strong> hai, toh uski family hogi <strong
                        style="color:#fff">05-00-55-50</strong>.
                </p>
                <h3>Satta King Family Chart Ka Istemal Kaise Karein?</h3>
                <ul class="muted">
                    <li>Upar diye gaye chart mein apna number dhundein (00 se 99 tak).</li>
                    <li>Us number ke saamne 4 family numbers likhe hain — woh note kar lein.</li>
                    <li>Ye charon numbers ek hi family ke hain — inhe dhyan mein rakhein.</li>
                    <li>Result check karne ke liye sattakhaiwal.com par aayein.</li>
                </ul>
                <p class="muted small" style="margin-top:12px"><strong>Disclaimer:</strong> sattakhaiwal.com
                    sirf Satta King results ki information provide karta hai. Hum kisi bhi gambling activity ko
                    promote nahi karte.</p>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="load-box">
            <div class="load-info">
                <h3>★ AAJ KA LOAD NUMBER</h3>
                <div class="body">
                    Yahan aap sabhi major markets ke recent results ke aadhar par <span class="gold">frequently
                        aane wale numbers</span> dekh sakte hain — ek hi jagah par.
                    <br>Yeh data recent declared results ke historical frequency ke hisaab se calculate hota hai.
                    <br>Available Markets: DB — Delhi Bazar · SG — Shree Ganesh · FB — Faridabad · GB — Ghaziabad ·
                    GL — Gali · DS — Disawar
                    <br><span class="gold">Note: Yeh information sirf reference ke liye hai. Kisi bhi result ki
                        guarantee nahi hai.</span>
                </div>
            </div>
            <div class="load-panel">
                <div class="load-tabs">
                    <button type="button" class="active" data-load-tab="DB">DB</button>
                    <button type="button" class="" data-load-tab="SG">SG</button>
                    <button type="button" class="" data-load-tab="FB">FB</button>
                    <button type="button" class="" data-load-tab="GB">GB</button>
                    <button type="button" class="" data-load-tab="GL">GL</button>
                    <button type="button" class="" data-load-tab="DS">DS</button>
                </div>
                <div class="load-ranges">
                    <span class="muted" style="font-family:var(--font-heading);font-weight:800">Number</span>
                    <button type="button" class="active" data-load-range="01-30">01–30</button>
                    <button type="button" data-load-range="30-60">30–60</button>
                    <button type="button" data-load-range="60-80">60–80</button>
                    <button type="button" data-load-range="81-00">81–00</button>
                </div>
                <div id="load-chart" class="load-bars"></div>
                <div class="load-legend">
                    <span><i style="background:#ff0033"></i> ≥ 2.0% Hot</span>
                    <span><i style="background:#ffe600"></i> ≥ 1.5%</span>
                    <span><i style="background:#d100ff"></i> ≥ 1.0%</span>
                    <span><i style="background:#3388ff"></i> &lt; 1.0%</span>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.PB_LOAD = [{
            "slug": "delhi-bazar",
            "label": "DB",
            "total": 3439,
            "numbers": [{
                "num": "00",
                "count": 14,
                "pct": 0.41
            }, {
                "num": "01",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "02",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "03",
                "count": 29,
                "pct": 0.84
            }, {
                "num": "04",
                "count": 31,
                "pct": 0.9
            }, {
                "num": "05",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "06",
                "count": 39,
                "pct": 1.13
            }, {
                "num": "07",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "08",
                "count": 28,
                "pct": 0.81
            }, {
                "num": "09",
                "count": 37,
                "pct": 1.08
            }, {
                "num": "10",
                "count": 25,
                "pct": 0.73
            }, {
                "num": "11",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "12",
                "count": 38,
                "pct": 1.1
            }, {
                "num": "13",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "14",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "15",
                "count": 26,
                "pct": 0.76
            }, {
                "num": "16",
                "count": 43,
                "pct": 1.25
            }, {
                "num": "17",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "18",
                "count": 45,
                "pct": 1.31
            }, {
                "num": "19",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "20",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "21",
                "count": 30,
                "pct": 0.87
            }, {
                "num": "22",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "23",
                "count": 22,
                "pct": 0.64
            }, {
                "num": "24",
                "count": 38,
                "pct": 1.1
            }, {
                "num": "25",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "26",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "27",
                "count": 29,
                "pct": 0.84
            }, {
                "num": "28",
                "count": 34,
                "pct": 0.99
            }, {
                "num": "29",
                "count": 38,
                "pct": 1.1
            }, {
                "num": "30",
                "count": 43,
                "pct": 1.25
            }, {
                "num": "31",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "32",
                "count": 24,
                "pct": 0.7
            }, {
                "num": "33",
                "count": 40,
                "pct": 1.16
            }, {
                "num": "34",
                "count": 34,
                "pct": 0.99
            }, {
                "num": "35",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "36",
                "count": 26,
                "pct": 0.76
            }, {
                "num": "37",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "38",
                "count": 17,
                "pct": 0.49
            }, {
                "num": "39",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "40",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "41",
                "count": 38,
                "pct": 1.1
            }, {
                "num": "42",
                "count": 31,
                "pct": 0.9
            }, {
                "num": "43",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "44",
                "count": 38,
                "pct": 1.1
            }, {
                "num": "45",
                "count": 38,
                "pct": 1.1
            }, {
                "num": "46",
                "count": 27,
                "pct": 0.79
            }, {
                "num": "47",
                "count": 28,
                "pct": 0.81
            }, {
                "num": "48",
                "count": 27,
                "pct": 0.79
            }, {
                "num": "49",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "50",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "51",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "52",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "53",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "54",
                "count": 40,
                "pct": 1.16
            }, {
                "num": "55",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "56",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "57",
                "count": 31,
                "pct": 0.9
            }, {
                "num": "58",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "59",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "60",
                "count": 40,
                "pct": 1.16
            }, {
                "num": "61",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "62",
                "count": 31,
                "pct": 0.9
            }, {
                "num": "63",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "64",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "65",
                "count": 28,
                "pct": 0.81
            }, {
                "num": "66",
                "count": 26,
                "pct": 0.76
            }, {
                "num": "67",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "68",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "69",
                "count": 37,
                "pct": 1.08
            }, {
                "num": "70",
                "count": 37,
                "pct": 1.08
            }, {
                "num": "71",
                "count": 34,
                "pct": 0.99
            }, {
                "num": "72",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "73",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "74",
                "count": 40,
                "pct": 1.16
            }, {
                "num": "75",
                "count": 34,
                "pct": 0.99
            }, {
                "num": "76",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "77",
                "count": 45,
                "pct": 1.31
            }, {
                "num": "78",
                "count": 37,
                "pct": 1.08
            }, {
                "num": "79",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "80",
                "count": 45,
                "pct": 1.31
            }, {
                "num": "81",
                "count": 43,
                "pct": 1.25
            }, {
                "num": "82",
                "count": 28,
                "pct": 0.81
            }, {
                "num": "83",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "84",
                "count": 41,
                "pct": 1.19
            }, {
                "num": "85",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "86",
                "count": 33,
                "pct": 0.96
            }, {
                "num": "87",
                "count": 40,
                "pct": 1.16
            }, {
                "num": "88",
                "count": 34,
                "pct": 0.99
            }, {
                "num": "89",
                "count": 34,
                "pct": 0.99
            }, {
                "num": "90",
                "count": 36,
                "pct": 1.05
            }, {
                "num": "91",
                "count": 43,
                "pct": 1.25
            }, {
                "num": "92",
                "count": 32,
                "pct": 0.93
            }, {
                "num": "93",
                "count": 42,
                "pct": 1.22
            }, {
                "num": "94",
                "count": 39,
                "pct": 1.13
            }, {
                "num": "95",
                "count": 26,
                "pct": 0.76
            }, {
                "num": "96",
                "count": 28,
                "pct": 0.81
            }, {
                "num": "97",
                "count": 35,
                "pct": 1.02
            }, {
                "num": "98",
                "count": 22,
                "pct": 0.64
            }, {
                "num": "99",
                "count": 25,
                "pct": 0.73
            }]
        }, {
            "slug": "shri-ganesh",
            "label": "SG",
            "total": 3214,
            "numbers": [{
                "num": "00",
                "count": 23,
                "pct": 0.72
            }, {
                "num": "01",
                "count": 41,
                "pct": 1.28
            }, {
                "num": "02",
                "count": 37,
                "pct": 1.15
            }, {
                "num": "03",
                "count": 27,
                "pct": 0.84
            }, {
                "num": "04",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "05",
                "count": 30,
                "pct": 0.93
            }, {
                "num": "06",
                "count": 33,
                "pct": 1.03
            }, {
                "num": "07",
                "count": 31,
                "pct": 0.96
            }, {
                "num": "08",
                "count": 42,
                "pct": 1.31
            }, {
                "num": "09",
                "count": 27,
                "pct": 0.84
            }, {
                "num": "10",
                "count": 30,
                "pct": 0.93
            }, {
                "num": "11",
                "count": 23,
                "pct": 0.72
            }, {
                "num": "12",
                "count": 39,
                "pct": 1.21
            }, {
                "num": "13",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "14",
                "count": 30,
                "pct": 0.93
            }, {
                "num": "15",
                "count": 39,
                "pct": 1.21
            }, {
                "num": "16",
                "count": 38,
                "pct": 1.18
            }, {
                "num": "17",
                "count": 43,
                "pct": 1.34
            }, {
                "num": "18",
                "count": 25,
                "pct": 0.78
            }, {
                "num": "19",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "20",
                "count": 41,
                "pct": 1.28
            }, {
                "num": "21",
                "count": 32,
                "pct": 1
            }, {
                "num": "22",
                "count": 31,
                "pct": 0.96
            }, {
                "num": "23",
                "count": 24,
                "pct": 0.75
            }, {
                "num": "24",
                "count": 35,
                "pct": 1.09
            }, {
                "num": "25",
                "count": 33,
                "pct": 1.03
            }, {
                "num": "26",
                "count": 35,
                "pct": 1.09
            }, {
                "num": "27",
                "count": 35,
                "pct": 1.09
            }, {
                "num": "28",
                "count": 36,
                "pct": 1.12
            }, {
                "num": "29",
                "count": 39,
                "pct": 1.21
            }, {
                "num": "30",
                "count": 36,
                "pct": 1.12
            }, {
                "num": "31",
                "count": 37,
                "pct": 1.15
            }, {
                "num": "32",
                "count": 32,
                "pct": 1
            }, {
                "num": "33",
                "count": 33,
                "pct": 1.03
            }, {
                "num": "34",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "35",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "36",
                "count": 25,
                "pct": 0.78
            }, {
                "num": "37",
                "count": 30,
                "pct": 0.93
            }, {
                "num": "38",
                "count": 31,
                "pct": 0.96
            }, {
                "num": "39",
                "count": 32,
                "pct": 1
            }, {
                "num": "40",
                "count": 39,
                "pct": 1.21
            }, {
                "num": "41",
                "count": 41,
                "pct": 1.28
            }, {
                "num": "42",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "43",
                "count": 33,
                "pct": 1.03
            }, {
                "num": "44",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "45",
                "count": 25,
                "pct": 0.78
            }, {
                "num": "46",
                "count": 25,
                "pct": 0.78
            }, {
                "num": "47",
                "count": 32,
                "pct": 1
            }, {
                "num": "48",
                "count": 39,
                "pct": 1.21
            }, {
                "num": "49",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "50",
                "count": 27,
                "pct": 0.84
            }, {
                "num": "51",
                "count": 32,
                "pct": 1
            }, {
                "num": "52",
                "count": 27,
                "pct": 0.84
            }, {
                "num": "53",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "54",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "55",
                "count": 30,
                "pct": 0.93
            }, {
                "num": "56",
                "count": 26,
                "pct": 0.81
            }, {
                "num": "57",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "58",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "59",
                "count": 26,
                "pct": 0.81
            }, {
                "num": "60",
                "count": 39,
                "pct": 1.21
            }, {
                "num": "61",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "62",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "63",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "64",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "65",
                "count": 22,
                "pct": 0.68
            }, {
                "num": "66",
                "count": 27,
                "pct": 0.84
            }, {
                "num": "67",
                "count": 25,
                "pct": 0.78
            }, {
                "num": "68",
                "count": 24,
                "pct": 0.75
            }, {
                "num": "69",
                "count": 37,
                "pct": 1.15
            }, {
                "num": "70",
                "count": 41,
                "pct": 1.28
            }, {
                "num": "71",
                "count": 35,
                "pct": 1.09
            }, {
                "num": "72",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "73",
                "count": 31,
                "pct": 0.96
            }, {
                "num": "74",
                "count": 29,
                "pct": 0.9
            }, {
                "num": "75",
                "count": 27,
                "pct": 0.84
            }, {
                "num": "76",
                "count": 30,
                "pct": 0.93
            }, {
                "num": "77",
                "count": 42,
                "pct": 1.31
            }, {
                "num": "78",
                "count": 26,
                "pct": 0.81
            }, {
                "num": "79",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "80",
                "count": 33,
                "pct": 1.03
            }, {
                "num": "81",
                "count": 48,
                "pct": 1.49
            }, {
                "num": "82",
                "count": 26,
                "pct": 0.81
            }, {
                "num": "83",
                "count": 31,
                "pct": 0.96
            }, {
                "num": "84",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "85",
                "count": 32,
                "pct": 1
            }, {
                "num": "86",
                "count": 36,
                "pct": 1.12
            }, {
                "num": "87",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "88",
                "count": 28,
                "pct": 0.87
            }, {
                "num": "89",
                "count": 33,
                "pct": 1.03
            }, {
                "num": "90",
                "count": 36,
                "pct": 1.12
            }, {
                "num": "91",
                "count": 46,
                "pct": 1.43
            }, {
                "num": "92",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "93",
                "count": 38,
                "pct": 1.18
            }, {
                "num": "94",
                "count": 40,
                "pct": 1.24
            }, {
                "num": "95",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "96",
                "count": 32,
                "pct": 1
            }, {
                "num": "97",
                "count": 34,
                "pct": 1.06
            }, {
                "num": "98",
                "count": 32,
                "pct": 1
            }, {
                "num": "99",
                "count": 33,
                "pct": 1.03
            }]
        }, {
            "slug": "faridabad",
            "label": "FB",
            "total": 4158,
            "numbers": [{
                "num": "00",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "01",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "02",
                "count": 31,
                "pct": 0.75
            }, {
                "num": "03",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "04",
                "count": 54,
                "pct": 1.3
            }, {
                "num": "05",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "06",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "07",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "08",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "09",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "10",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "11",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "12",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "13",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "14",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "15",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "16",
                "count": 30,
                "pct": 0.72
            }, {
                "num": "17",
                "count": 30,
                "pct": 0.72
            }, {
                "num": "18",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "19",
                "count": 50,
                "pct": 1.2
            }, {
                "num": "20",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "21",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "22",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "23",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "24",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "25",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "26",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "27",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "28",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "29",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "30",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "31",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "32",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "33",
                "count": 50,
                "pct": 1.2
            }, {
                "num": "34",
                "count": 36,
                "pct": 0.87
            }, {
                "num": "35",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "36",
                "count": 30,
                "pct": 0.72
            }, {
                "num": "37",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "38",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "39",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "40",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "41",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "42",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "43",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "44",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "45",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "46",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "47",
                "count": 52,
                "pct": 1.25
            }, {
                "num": "48",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "49",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "50",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "51",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "52",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "53",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "54",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "55",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "56",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "57",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "58",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "59",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "60",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "61",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "62",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "63",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "64",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "65",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "66",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "67",
                "count": 36,
                "pct": 0.87
            }, {
                "num": "68",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "69",
                "count": 31,
                "pct": 0.75
            }, {
                "num": "70",
                "count": 55,
                "pct": 1.32
            }, {
                "num": "71",
                "count": 51,
                "pct": 1.23
            }, {
                "num": "72",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "73",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "74",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "75",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "76",
                "count": 26,
                "pct": 0.63
            }, {
                "num": "77",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "78",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "79",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "80",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "81",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "82",
                "count": 53,
                "pct": 1.27
            }, {
                "num": "83",
                "count": 36,
                "pct": 0.87
            }, {
                "num": "84",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "85",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "86",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "87",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "88",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "89",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "90",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "91",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "92",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "93",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "94",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "95",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "96",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "97",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "98",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "99",
                "count": 47,
                "pct": 1.13
            }]
        }, {
            "slug": "ghaziabad",
            "label": "GB",
            "total": 4158,
            "numbers": [{
                "num": "00",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "01",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "02",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "03",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "04",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "05",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "06",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "07",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "08",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "09",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "10",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "11",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "12",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "13",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "14",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "15",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "16",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "17",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "18",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "19",
                "count": 36,
                "pct": 0.87
            }, {
                "num": "20",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "21",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "22",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "23",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "24",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "25",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "26",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "27",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "28",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "29",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "30",
                "count": 50,
                "pct": 1.2
            }, {
                "num": "31",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "32",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "33",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "34",
                "count": 29,
                "pct": 0.7
            }, {
                "num": "35",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "36",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "37",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "38",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "39",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "40",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "41",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "42",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "43",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "44",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "45",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "46",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "47",
                "count": 36,
                "pct": 0.87
            }, {
                "num": "48",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "49",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "50",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "51",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "52",
                "count": 54,
                "pct": 1.3
            }, {
                "num": "53",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "54",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "55",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "56",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "57",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "58",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "59",
                "count": 54,
                "pct": 1.3
            }, {
                "num": "60",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "61",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "62",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "63",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "64",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "65",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "66",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "67",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "68",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "69",
                "count": 34,
                "pct": 0.82
            }, {
                "num": "70",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "71",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "72",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "73",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "74",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "75",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "76",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "77",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "78",
                "count": 27,
                "pct": 0.65
            }, {
                "num": "79",
                "count": 51,
                "pct": 1.23
            }, {
                "num": "80",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "81",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "82",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "83",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "84",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "85",
                "count": 52,
                "pct": 1.25
            }, {
                "num": "86",
                "count": 32,
                "pct": 0.77
            }, {
                "num": "87",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "88",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "89",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "90",
                "count": 50,
                "pct": 1.2
            }, {
                "num": "91",
                "count": 56,
                "pct": 1.35
            }, {
                "num": "92",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "93",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "94",
                "count": 51,
                "pct": 1.23
            }, {
                "num": "95",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "96",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "97",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "98",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "99",
                "count": 43,
                "pct": 1.03
            }]
        }, {
            "slug": "gali",
            "label": "GL",
            "total": 4156,
            "numbers": [{
                "num": "00",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "01",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "02",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "03",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "04",
                "count": 51,
                "pct": 1.23
            }, {
                "num": "05",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "06",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "07",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "08",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "09",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "10",
                "count": 25,
                "pct": 0.6
            }, {
                "num": "11",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "12",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "13",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "14",
                "count": 52,
                "pct": 1.25
            }, {
                "num": "15",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "16",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "17",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "18",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "19",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "20",
                "count": 33,
                "pct": 0.79
            }, {
                "num": "21",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "22",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "23",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "24",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "25",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "26",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "27",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "28",
                "count": 51,
                "pct": 1.23
            }, {
                "num": "29",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "30",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "31",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "32",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "33",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "34",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "35",
                "count": 31,
                "pct": 0.75
            }, {
                "num": "36",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "37",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "38",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "39",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "40",
                "count": 55,
                "pct": 1.32
            }, {
                "num": "41",
                "count": 27,
                "pct": 0.65
            }, {
                "num": "42",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "43",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "44",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "45",
                "count": 37,
                "pct": 0.89
            }, {
                "num": "46",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "47",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "48",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "49",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "50",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "51",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "52",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "53",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "54",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "55",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "56",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "57",
                "count": 50,
                "pct": 1.2
            }, {
                "num": "58",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "59",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "60",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "61",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "62",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "63",
                "count": 39,
                "pct": 0.94
            }, {
                "num": "64",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "65",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "66",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "67",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "68",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "69",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "70",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "71",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "72",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "73",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "74",
                "count": 52,
                "pct": 1.25
            }, {
                "num": "75",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "76",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "77",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "78",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "79",
                "count": 38,
                "pct": 0.91
            }, {
                "num": "80",
                "count": 42,
                "pct": 1.01
            }, {
                "num": "81",
                "count": 51,
                "pct": 1.23
            }, {
                "num": "82",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "83",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "84",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "85",
                "count": 48,
                "pct": 1.15
            }, {
                "num": "86",
                "count": 27,
                "pct": 0.65
            }, {
                "num": "87",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "88",
                "count": 45,
                "pct": 1.08
            }, {
                "num": "89",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "90",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "91",
                "count": 35,
                "pct": 0.84
            }, {
                "num": "92",
                "count": 44,
                "pct": 1.06
            }, {
                "num": "93",
                "count": 40,
                "pct": 0.96
            }, {
                "num": "94",
                "count": 46,
                "pct": 1.11
            }, {
                "num": "95",
                "count": 43,
                "pct": 1.03
            }, {
                "num": "96",
                "count": 47,
                "pct": 1.13
            }, {
                "num": "97",
                "count": 49,
                "pct": 1.18
            }, {
                "num": "98",
                "count": 41,
                "pct": 0.99
            }, {
                "num": "99",
                "count": 37,
                "pct": 0.89
            }]
        }, {
            "slug": "desawar",
            "label": "DS",
            "total": 3947,
            "numbers": [{
                "num": "00",
                "count": 28,
                "pct": 0.71
            }, {
                "num": "01",
                "count": 35,
                "pct": 0.89
            }, {
                "num": "02",
                "count": 33,
                "pct": 0.84
            }, {
                "num": "03",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "04",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "05",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "06",
                "count": 44,
                "pct": 1.11
            }, {
                "num": "07",
                "count": 37,
                "pct": 0.94
            }, {
                "num": "08",
                "count": 37,
                "pct": 0.94
            }, {
                "num": "09",
                "count": 38,
                "pct": 0.96
            }, {
                "num": "10",
                "count": 19,
                "pct": 0.48
            }, {
                "num": "11",
                "count": 26,
                "pct": 0.66
            }, {
                "num": "12",
                "count": 31,
                "pct": 0.79
            }, {
                "num": "13",
                "count": 29,
                "pct": 0.73
            }, {
                "num": "14",
                "count": 32,
                "pct": 0.81
            }, {
                "num": "15",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "16",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "17",
                "count": 36,
                "pct": 0.91
            }, {
                "num": "18",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "19",
                "count": 36,
                "pct": 0.91
            }, {
                "num": "20",
                "count": 27,
                "pct": 0.68
            }, {
                "num": "21",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "22",
                "count": 38,
                "pct": 0.96
            }, {
                "num": "23",
                "count": 26,
                "pct": 0.66
            }, {
                "num": "24",
                "count": 44,
                "pct": 1.11
            }, {
                "num": "25",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "26",
                "count": 37,
                "pct": 0.94
            }, {
                "num": "27",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "28",
                "count": 45,
                "pct": 1.14
            }, {
                "num": "29",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "30",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "31",
                "count": 48,
                "pct": 1.22
            }, {
                "num": "32",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "33",
                "count": 39,
                "pct": 0.99
            }, {
                "num": "34",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "35",
                "count": 43,
                "pct": 1.09
            }, {
                "num": "36",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "37",
                "count": 38,
                "pct": 0.96
            }, {
                "num": "38",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "39",
                "count": 39,
                "pct": 0.99
            }, {
                "num": "40",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "41",
                "count": 55,
                "pct": 1.39
            }, {
                "num": "42",
                "count": 44,
                "pct": 1.11
            }, {
                "num": "43",
                "count": 49,
                "pct": 1.24
            }, {
                "num": "44",
                "count": 43,
                "pct": 1.09
            }, {
                "num": "45",
                "count": 39,
                "pct": 0.99
            }, {
                "num": "46",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "47",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "48",
                "count": 37,
                "pct": 0.94
            }, {
                "num": "49",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "50",
                "count": 32,
                "pct": 0.81
            }, {
                "num": "51",
                "count": 43,
                "pct": 1.09
            }, {
                "num": "52",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "53",
                "count": 39,
                "pct": 0.99
            }, {
                "num": "54",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "55",
                "count": 29,
                "pct": 0.73
            }, {
                "num": "56",
                "count": 31,
                "pct": 0.79
            }, {
                "num": "57",
                "count": 43,
                "pct": 1.09
            }, {
                "num": "58",
                "count": 38,
                "pct": 0.96
            }, {
                "num": "59",
                "count": 38,
                "pct": 0.96
            }, {
                "num": "60",
                "count": 44,
                "pct": 1.11
            }, {
                "num": "61",
                "count": 48,
                "pct": 1.22
            }, {
                "num": "62",
                "count": 48,
                "pct": 1.22
            }, {
                "num": "63",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "64",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "65",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "66",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "67",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "68",
                "count": 48,
                "pct": 1.22
            }, {
                "num": "69",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "70",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "71",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "72",
                "count": 39,
                "pct": 0.99
            }, {
                "num": "73",
                "count": 49,
                "pct": 1.24
            }, {
                "num": "74",
                "count": 37,
                "pct": 0.94
            }, {
                "num": "75",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "76",
                "count": 47,
                "pct": 1.19
            }, {
                "num": "77",
                "count": 24,
                "pct": 0.61
            }, {
                "num": "78",
                "count": 35,
                "pct": 0.89
            }, {
                "num": "79",
                "count": 45,
                "pct": 1.14
            }, {
                "num": "80",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "81",
                "count": 41,
                "pct": 1.04
            }, {
                "num": "82",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "83",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "84",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "85",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "86",
                "count": 32,
                "pct": 0.81
            }, {
                "num": "87",
                "count": 45,
                "pct": 1.14
            }, {
                "num": "88",
                "count": 34,
                "pct": 0.86
            }, {
                "num": "89",
                "count": 37,
                "pct": 0.94
            }, {
                "num": "90",
                "count": 33,
                "pct": 0.84
            }, {
                "num": "91",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "92",
                "count": 44,
                "pct": 1.11
            }, {
                "num": "93",
                "count": 49,
                "pct": 1.24
            }, {
                "num": "94",
                "count": 46,
                "pct": 1.17
            }, {
                "num": "95",
                "count": 44,
                "pct": 1.11
            }, {
                "num": "96",
                "count": 42,
                "pct": 1.06
            }, {
                "num": "97",
                "count": 40,
                "pct": 1.01
            }, {
                "num": "98",
                "count": 38,
                "pct": 0.96
            }, {
                "num": "99",
                "count": 44,
                "pct": 1.11
            }]
        }];
    </script>

    <section class="section">
        <div class="wrap">
            <div class="center">
                <div class="kicker">RECENT HISTORY</div>
                <h2>GAME-WISE RESULT HISTORY</h2>
                <p class="muted">Latest 15 results for each market — most recent first</p>
            </div>
            <div class="hist-strip">
                <div class="hist-head">
                    <div>
                        <h3>DELHI BAZAR</h3>
                        <p>Result Time: 03:15 PM</p>
                    </div>
                    <a class="btn btn-gold btn-sm" href="/games/delhi-bazar">VIEW ALL →</a>
                </div>
                <div class="hist-row">
                    <div class="hist-cell first">
                        <span class="n">67</span>
                        <span class="d">25 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">53</span>
                        <span class="d">24 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">66</span>
                        <span class="d">23 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">73</span>
                        <span class="d">22 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">86</span>
                        <span class="d">21 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">29</span>
                        <span class="d">20 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">44</span>
                        <span class="d">19 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">74</span>
                        <span class="d">18 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">16</span>
                        <span class="d">17 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">66</span>
                        <span class="d">16 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">07</span>
                        <span class="d">15 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">12</span>
                        <span class="d">14 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">96</span>
                        <span class="d">13 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">22</span>
                        <span class="d">12 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">50</span>
                        <span class="d">11 Oct</span>
                    </div>
                </div>
            </div>
            <div class="hist-strip">
                <div class="hist-head">
                    <div>
                        <h3>SHREE GANESH </h3>
                        <p>Result Time: 04:45 PM</p>
                    </div>
                    <a class="btn btn-gold btn-sm" href="/games/shri-ganesh">VIEW ALL →</a>
                </div>
                <div class="hist-row">
                    <div class="hist-cell first">
                        <span class="n">81</span>
                        <span class="d">25 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">66</span>
                        <span class="d">24 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">04</span>
                        <span class="d">23 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">99</span>
                        <span class="d">22 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">64</span>
                        <span class="d">21 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">95</span>
                        <span class="d">20 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">11</span>
                        <span class="d">19 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">19</span>
                        <span class="d">18 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">55</span>
                        <span class="d">17 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">62</span>
                        <span class="d">16 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">56</span>
                        <span class="d">15 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">80</span>
                        <span class="d">14 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">98</span>
                        <span class="d">13 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">67</span>
                        <span class="d">12 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">58</span>
                        <span class="d">11 Oct</span>
                    </div>
                </div>
            </div>
            <div class="hist-strip">
                <div class="hist-head">
                    <div>
                        <h3>FARIDBAD </h3>
                        <p>Result Time: 06:15 PM</p>
                    </div>
                    <a class="btn btn-gold btn-sm" href="/games/faridabad">VIEW ALL →</a>
                </div>
                <div class="hist-row">
                    <div class="hist-cell first">
                        <span class="n">52</span>
                        <span class="d">25 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">21</span>
                        <span class="d">24 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">61</span>
                        <span class="d">23 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">26</span>
                        <span class="d">22 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">12</span>
                        <span class="d">21 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">29</span>
                        <span class="d">20 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">72</span>
                        <span class="d">19 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">78</span>
                        <span class="d">18 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">78</span>
                        <span class="d">17 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">29</span>
                        <span class="d">16 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">48</span>
                        <span class="d">15 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">11</span>
                        <span class="d">14 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">87</span>
                        <span class="d">13 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">55</span>
                        <span class="d">12 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">96</span>
                        <span class="d">11 Oct</span>
                    </div>
                </div>
            </div>
            <div class="hist-strip">
                <div class="hist-head">
                    <div>
                        <h3>GAZIYABAD </h3>
                        <p>Result Time: 10:00 PM</p>
                    </div>
                    <a class="btn btn-gold btn-sm" href="/games/ghaziabad">VIEW ALL →</a>
                </div>
                <div class="hist-row">
                    <div class="hist-cell first">
                        <span class="n">77</span>
                        <span class="d">24 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">35</span>
                        <span class="d">23 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">55</span>
                        <span class="d">22 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">86</span>
                        <span class="d">21 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">16</span>
                        <span class="d">20 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">23</span>
                        <span class="d">19 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">16</span>
                        <span class="d">18 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">15</span>
                        <span class="d">17 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">42</span>
                        <span class="d">16 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">74</span>
                        <span class="d">15 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">80</span>
                        <span class="d">14 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">58</span>
                        <span class="d">13 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">48</span>
                        <span class="d">12 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">46</span>
                        <span class="d">11 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">71</span>
                        <span class="d">10 Oct</span>
                    </div>
                </div>
            </div>
            <div class="hist-strip">
                <div class="hist-head">
                    <div>
                        <h3>GALI</h3>
                        <p>Result Time: 11:50 PM</p>
                    </div>
                    <a class="btn btn-gold btn-sm" href="/games/gali">VIEW ALL →</a>
                </div>
                <div class="hist-row">
                    <div class="hist-cell first">
                        <span class="n">33</span>
                        <span class="d">24 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">60</span>
                        <span class="d">23 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">85</span>
                        <span class="d">22 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">09</span>
                        <span class="d">21 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">96</span>
                        <span class="d">20 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">47</span>
                        <span class="d">19 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">73</span>
                        <span class="d">18 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">69</span>
                        <span class="d">17 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">51</span>
                        <span class="d">16 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">12</span>
                        <span class="d">15 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">81</span>
                        <span class="d">14 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">22</span>
                        <span class="d">13 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">90</span>
                        <span class="d">12 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">40</span>
                        <span class="d">11 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">12</span>
                        <span class="d">10 Oct</span>
                    </div>
                </div>
            </div>
            <div class="hist-strip">
                <div class="hist-head">
                    <div>
                        <h3>DISAWAR </h3>
                        <p>Result Time: 05:15 AM</p>
                    </div>
                    <a class="btn btn-gold btn-sm" href="/games/desawar">VIEW ALL →</a>
                </div>
                <div class="hist-row">
                    <div class="hist-cell first">
                        <span class="n">61</span>
                        <span class="d">25 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">02</span>
                        <span class="d">24 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">03</span>
                        <span class="d">23 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">47</span>
                        <span class="d">22 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">72</span>
                        <span class="d">21 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">64</span>
                        <span class="d">20 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">23</span>
                        <span class="d">19 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">44</span>
                        <span class="d">18 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">97</span>
                        <span class="d">17 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">98</span>
                        <span class="d">16 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">42</span>
                        <span class="d">15 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">97</span>
                        <span class="d">14 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">40</span>
                        <span class="d">13 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">98</span>
                        <span class="d">12 Oct</span>
                    </div>
                    <div class="hist-cell">
                        <span class="n">27</span>
                        <span class="d">11 Oct</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="wrap">
            <div class="center">
                <div class="kicker">RECORD CHARTS</div>
                <h2>HISTORICAL RECORD CHARTS</h2>
                <p class="muted">Search any number to find when it last appeared — complete records for all
                    markets</p>
            </div>
            <form class="filters" method="get" action="/record-charts" style="max-width:480px;margin:16px auto">
                <input type="text" name="number" placeholder="Search a number (00–99)..." maxlength="2">
                <button class="btn" type="submit">SEARCH</button>
            </form>
            <div class="rec-grid">
                <a class="rec-card" href="/games/faridabad">
                    <div class="n">52</div>
                    <div class="g fb">FARIDBAD </div>
                    <div class="muted small">25 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/shri-ganesh">
                    <div class="n">81</div>
                    <div class="g sg">SHREE GANESH </div>
                    <div class="muted small">25 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/delhi-bazar">
                    <div class="n">67</div>
                    <div class="g db">DELHI BAZAR</div>
                    <div class="muted small">25 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/desawar">
                    <div class="n">61</div>
                    <div class="g ds">DISAWAR </div>
                    <div class="muted small">25 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/gali">
                    <div class="n">33</div>
                    <div class="g gl">GALI</div>
                    <div class="muted small">24 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/ghaziabad">
                    <div class="n">77</div>
                    <div class="g gb">GAZIYABAD </div>
                    <div class="muted small">24 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/faridabad">
                    <div class="n">21</div>
                    <div class="g fb">FARIDBAD </div>
                    <div class="muted small">24 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/shri-ganesh">
                    <div class="n">66</div>
                    <div class="g sg">SHREE GANESH </div>
                    <div class="muted small">24 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/delhi-bazar">
                    <div class="n">53</div>
                    <div class="g db">DELHI BAZAR</div>
                    <div class="muted small">24 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/desawar">
                    <div class="n">02</div>
                    <div class="g ds">DISAWAR </div>
                    <div class="muted small">24 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/gali">
                    <div class="n">60</div>
                    <div class="g gl">GALI</div>
                    <div class="muted small">23 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/ghaziabad">
                    <div class="n">35</div>
                    <div class="g gb">GAZIYABAD </div>
                    <div class="muted small">23 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/faridabad">
                    <div class="n">61</div>
                    <div class="g fb">FARIDBAD </div>
                    <div class="muted small">23 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/shri-ganesh">
                    <div class="n">04</div>
                    <div class="g sg">SHREE GANESH </div>
                    <div class="muted small">23 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/delhi-bazar">
                    <div class="n">66</div>
                    <div class="g db">DELHI BAZAR</div>
                    <div class="muted small">23 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/desawar">
                    <div class="n">03</div>
                    <div class="g ds">DISAWAR </div>
                    <div class="muted small">23 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/gali">
                    <div class="n">85</div>
                    <div class="g gl">GALI</div>
                    <div class="muted small">22 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/ghaziabad">
                    <div class="n">55</div>
                    <div class="g gb">GAZIYABAD </div>
                    <div class="muted small">22 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/faridabad">
                    <div class="n">26</div>
                    <div class="g fb">FARIDBAD </div>
                    <div class="muted small">22 Oct 2026</div>
                </a>
                <a class="rec-card" href="/games/shri-ganesh">
                    <div class="n">99</div>
                    <div class="g sg">SHREE GANESH </div>
                    <div class="muted small">22 Oct 2026</div>
                </a>
            </div>
            <div class="center" style="margin-top:20px">
                <a class="btn" href="/record-charts">OPEN FULL RECORD CHARTS →</a>
                <a class="btn" href="/live-results" style="margin-left:8px">VIEW LIVE RESULTS →</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="center">
                <h2>Sabhi Satta King Games — Live Result</h2>
                <p class="muted">Har game ka dedicated page — chart, history aur aaj ka result</p>
            </div>
            <div class="seo-games" style="margin-top:16px">
                <a class="seo-game" href="/disawar-chart">
                    <div class="mark">DI</div>
                    <div>
                        <div class="t" style="font-family:var(--font-heading);font-weight:900;color:#7eb3ff">
                            Disawar</div>
                        <div class="muted small">5:15 AM · Subah ka pehla result — sabse popular game</div>
                    </div>
                </a>
                <a class="seo-game" href="/delhi-bazar-result">
                    <div class="mark">DE</div>
                    <div>
                        <div class="t" style="font-family:var(--font-heading);font-weight:900;color:#7eb3ff">Delhi
                            Bazar
                        </div>
                        <div class="muted small">3:15 PM · Dopahar 3:15 PM — din ka popular game</div>
                    </div>
                </a>
                <a class="seo-game" href="/shri-ganesh-result">
                    <div class="mark">SH</div>
                    <div>
                        <div class="t" style="font-family:var(--font-heading);font-weight:900;color:#7eb3ff">Shree
                            Ganesh
                        </div>
                        <div class="muted small">4:45 PM · Shaam 4:45 PM — evening ka game</div>
                    </div>
                </a>
                <a class="seo-game" href="/faridabad-result">
                    <div class="mark">FA</div>
                    <div>
                        <div class="t" style="font-family:var(--font-heading);font-weight:900;color:#7eb3ff">
                            Faridabad</div>
                        <div class="muted small">6:15 PM · Shaam 6:15 PM — evening ka popular game</div>
                    </div>
                </a>
                <a class="seo-game" href="/ghaziabad-result">
                    <div class="mark">GH</div>
                    <div>
                        <div class="t" style="font-family:var(--font-heading);font-weight:900;color:#7eb3ff">
                            Ghaziabad</div>
                        <div class="muted small">10:00 PM · Raat 10:00 PM — prime time result</div>
                    </div>
                </a>
                <a class="seo-game" href="/gali-result">
                    <div class="mark">GA</div>
                    <div>
                        <div class="t" style="font-family:var(--font-heading);font-weight:900;color:#7eb3ff">Gali
                        </div>
                        <div class="muted small">11:50 PM · Raat 11:50 PM — din ka aakhri result</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="section alt">
        <div class="wrap" style="max-width:860px">
            <div class="blog-card" style="margin-bottom:32px">
                <h2>sattakhaiwal.com — Satta King Result Daily Update</h2>
                <p class="muted"><strong style="color:#7eb3ff">sattakhaiwal.com</strong> ek result information
                    website hai jahan par aapko <strong style="color:#fff">6 popular games</strong> — Disawar,
                    Delhi Bazar, Shree Ganesh, Faridabad, Ghaziabad aur Gali — ke daily results milte hain.</p>
                <p class="muted">Hamare website par <strong style="color:#fff">February 2015 se aaj
                        tak</strong> ka poora record available hai. Result declare hote hi automatically update ho
                    jaata hai. Mobile aur desktop dono par fast loading.</p>
                <div class="stat-row">
                    <div>
                        <div class="v">6</div>
                        <div class="muted small">Live Games</div>
                    </div>
                    <div>
                        <div class="v">2015</div>
                        <div class="muted small">Se Record</div>
                    </div>
                    <div>
                        <div class="v">20,000+</div>
                        <div class="muted small">Results DB Mein</div>
                    </div>
                </div>
            </div>
            <h2>Aksar Puche Jane Wale Sawaal</h2>
            <p class="muted">Satta King result ke baare mein common questions</p>
            <div class="faq" style="margin-bottom:36px">
                <details open>
                    <summary>Satta King result kab aata hai?</summary>
                    <p class="muted">sattakhaiwal.com par 6 games ke results alag-alag time par aate hain:
                        Disawar 5:15 AM, Delhi Bazar 3:15 PM, Shree Ganesh 4:45 PM, Faridabad 6:15 PM, Ghaziabad
                        10:00 PM, aur Gali 11:50 PM.</p>
                </details>
                <details>
                    <summary>sattakhaiwal.com par result kaise dekhen?</summary>
                    <p class="muted">Homepage par sabse upar Today's Winning Numbers section mein aaj ke sabhi 6
                        games ke results ek saath dikh jaate hain. Page auto-refresh hota hai.</p>
                </details>
                <details>
                    <summary>Satta King chart kahan milega?</summary>
                    <p class="muted">Har game ka monthly chart available hai. Homepage par Result Charts section
                        mein kisi bhi game ka, kisi bhi mahine ka chart dekh sakte hain — 2015 se aaj tak.</p>
                </details>
                <details>
                    <summary>Purana Satta King record kahan milega?</summary>
                    <p class="muted">February 2015 se aaj tak ka poora record Record Charts page par available
                        hai — sabhi 6 games ka.</p>
                </details>
                <details>
                    <summary>Kaunsa Satta King game sabse popular hai?</summary>
                    <p class="muted">India mein Disawar aur Gali sabse zyada popular hain. Disawar subah 5:15 AM
                        par aur Gali raat 11:50 PM par declare hota hai.</p>
                </details>
                <details>
                    <summary>Satta King result fast kahan milta hai?</summary>
                    <p class="muted">sattakhaiwal.com par result declare hote hi update ho jaata hai.
                        Auto-refresh se manually refresh karne ki zaroorat nahi.</p>
                </details>
                <details>
                    <summary>Gali Disawar result aaj ka kya hai?</summary>
                    <p class="muted">Aaj ka Gali aur Disawar result homepage par Today's Winning Numbers section
                        mein dekh sakte hain. Declare hone se pehle ** dikhta hai.</p>
                </details>
                <details>
                    <summary>Satta King 2026 chart kahan milega?</summary>
                    <p class="muted">sattakhaiwal.com par 2026 ka poora chart available hai — sabhi 6 games ka.
                        Result Charts section mein current month ka chart dikh raha hai.</p>
                </details>
            </div>
            <h2>How to Check Results</h2>
            <p class="muted">Follow these simple steps to find today's winning numbers</p>
            <div class="how-step">
                <div class="num">01</div>
                <div>
                    <h3>Visit sattakhaiwal Daily</h3>
                    <p class="muted">Open sattakhaiwal on your browser every day. Results are updated as soon as
                        they are declared by the game operators.</p>
                </div>
            </div>
            <div class="how-step">
                <div class="num">02</div>
                <div>
                    <h3>Find Your Game</h3>
                    <p class="muted">Scroll to the Today&#039;s Results section and locate your game — Disawar,
                        Gali, Faridabad, Ghaziabad, or any other listed game.</p>
                </div>
            </div>
            <div class="how-step">
                <div class="num">03</div>
                <div>
                    <h3>Note the Winning Number</h3>
                    <p class="muted">The winning number is displayed prominently in gold. Cross-check with the
                        declared time to confirm the result is for today&#039;s draw.</p>
                </div>
            </div>

            <h2 style="margin-top:36px">sattakhaiwal — Satta King Result Website 2026</h2>
            <p class="muted">Roz subah uthke sabse pehle <strong style="color:#fff">Satta King result</strong>
                check karna ho — to <strong style="color:#fff">sattakhaiwal.com</strong> hi woh jagah hai. Delhi
                Bazar, Shree Ganesh, Faridabad, Ghaziabad, Gali aur Disawar ke results ek hi jagah milte hain.</p>

            <h2 style="margin-top:28px">Sabhi Satta King Markets</h2>
            <div class="market-list">
                <a class="market-link" href="/games/desawar">
                    <div>
                        <div class="t">Disawar Satta King Result</div>
                        <div class="muted small">Daily live result + monthly chart</div>
                    </div>
                    <span style="color:#7eb3ff;font-weight:900">→</span>
                </a>
                <a class="market-link" href="/games/delhi-bazar">
                    <div>
                        <div class="t">Delhi Bazar Satta King Result</div>
                        <div class="muted small">Daily live result + monthly chart</div>
                    </div>
                    <span style="color:#7eb3ff;font-weight:900">→</span>
                </a>
                <a class="market-link" href="/games/shri-ganesh">
                    <div>
                        <div class="t">Shree Ganesh Satta King Result</div>
                        <div class="muted small">Daily live result + monthly chart</div>
                    </div>
                    <span style="color:#7eb3ff;font-weight:900">→</span>
                </a>
                <a class="market-link" href="/games/faridabad">
                    <div>
                        <div class="t">Faridabad Satta King Result</div>
                        <div class="muted small">Daily live result + monthly chart</div>
                    </div>
                    <span style="color:#7eb3ff;font-weight:900">→</span>
                </a>
                <a class="market-link" href="/games/ghaziabad">
                    <div>
                        <div class="t">Ghaziabad Satta King Result</div>
                        <div class="muted small">Daily live result + monthly chart</div>
                    </div>
                    <span style="color:#7eb3ff;font-weight:900">→</span>
                </a>
                <a class="market-link" href="/games/gali">
                    <div>
                        <div class="t">Gali Satta King Result</div>
                        <div class="muted small">Daily live result + monthly chart</div>
                    </div>
                    <span style="color:#7eb3ff;font-weight:900">→</span>
                </a>
            </div>

            <h2 style="margin-top:32px">sattakhaiwal Ko Kyun Choose Karein? — Why Choose sattakhaiwal?</h2>
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon why-icon-fast" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor">
                            <path d="M13 2L4 14h7l-1 8 10-13h-7l0-7z" />
                        </svg>
                    </div>
                    <h3>Fast Result Update</h3>
                    <p class="muted small">Result declare hote hi update ho jaata hai — no delays. Sabhi 6 markets
                        ka result ek jagah.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon why-icon-ok" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none"
                            stroke="currentColor" stroke-width="2.4">
                            <path d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3>Verified Results Only</h3>
                    <p class="muted small">Sirf officially declared results dikhate hain. Koi guess nahi, koi fake
                        number nahi.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon why-icon-hist" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor">
                            <rect x="3" y="12" width="4" height="8" rx="1" />
                            <rect x="10" y="7" width="4" height="13" rx="1" />
                            <rect x="17" y="3" width="4" height="17" rx="1" />
                        </svg>
                    </div>
                    <h3>Complete History</h3>
                    <p class="muted small">Monthly charts, yearly records aur game-wise full history — 2015 se aaj
                        tak — ek jagah.</p>
                </div>
            </div>

            <h2 style="margin-top:32px">Frequently Asked Questions — Aksar Pooche Jane Wale Sawaal</h2>
            <div class="faq">
                <details open>
                    <summary>Q: Satta King kya hota hai? (What is Satta King?)</summary>
                    <p class="muted">A: Satta King ek number-based game hai jisme players 00 se 99 ke beech ek
                        number guess karte hain. Results are declared daily at fixed times for each market — Delhi
                        Bazar, Faridabad, Ghaziabad, Gali, aur Disawar.</p>
                </details>
                <details>
                    <summary>Q: Aaj ka Satta King result kaise check karein?</summary>
                    <p class="muted">A: sattakhaiwal.com par visit karein — yahan aaj ka Satta King result live
                        update hota hai jaise hi declare hota hai.</p>
                </details>
                <details>
                    <summary>Q: Delhi Bazar Satta King result today kya hai?</summary>
                    <p class="muted">A: Delhi Bazar result daily declare hota hai. Homepage par Live Results
                        Board mein aaj ka winning number turant update hota hai.</p>
                </details>
                <details>
                    <summary>Q: Satta King record chart 2026 kahan milega?</summary>
                    <p class="muted">A: sattakhaiwal.com par sabhi markets ka complete record chart available
                        hai. Homepage par scroll karein ya individual game page par jaayein.</p>
                </details>
                <details>
                    <summary>Q: Gali aur Disawar ka result kab aata hai?</summary>
                    <p class="muted">A: Gali raat 11:50 PM par aur Disawar subhe 5:15 AM par declare hota hai.
                        Both results are updated live as soon as announced.</p>
                </details>
                <details>
                    <summary>Q: Kya sattakhaiwal safe aur reliable hai?</summary>
                    <p class="muted">A: Haan, sattakhaiwal.com ek independent result information website hai. We
                        only display officially declared results — koi gambling activity conduct nahi karte.</p>
                </details>
            </div>
            <p class="muted small" style="margin-top:16px"><strong>Disclaimer:</strong> sattakhaiwal provides
                Satta King result information for informational purposes only. We do not promote or encourage
                gambling. Please check your local laws.</p>
        </div>
    </section>
@endsection
