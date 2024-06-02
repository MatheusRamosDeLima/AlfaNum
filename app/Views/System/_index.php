<section class="main-section">
    <div class="system-main">
        <div class="system-desktop">
            <div class="system-button" onclick="previousItem()">
                <span><strong> < </strong></span>
            </div>
            <div class="system-view" id="div-item"></div>
            <div class="system-button" onclick="nextItem()">
                <span><strong> > </strong></span>
            </div>
        </div>
        <div class="system-mobile">
            <div class="system-button" onclick="previousItem()">
                <span><strong> < </strong></span>
            </div>
            <div class="system-button" onclick="nextItem()">
                <span><strong> > </strong></span>
            </div>
        </div>
    </div>
    <div class="system-shortcuts">
        <div class="system-shortcut-button" id="first-item-button" onclick="firstItem()"></div>
        <div class="system-shortcut-button" id="last-item-button" onclick="lastItem()"></div>
    </div>
</section>