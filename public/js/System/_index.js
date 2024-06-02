const divItem = document.querySelector('#div-item');
const firstItemBtn = document.querySelector('#first-item-button');
const lastItemBtn = document.querySelector('#last-item-button');

let isLetterItems = true;
let isLetterFormatationSelected = false;

let recentPositionOfItem = 0;

if (items.length === 10) isLetterItems = false;

if (!isLetterItems) startSystem();

function previousItem() {
    if (!isLetterItems || isLetterFormatationSelected) {
        if (recentPositionOfItem === 0) recentPositionOfItem = items.length - 1;
        else recentPositionOfItem--;
        divItem.innerHTML = `${items[recentPositionOfItem]}`;
    }
}

function nextItem() {
    if (!isLetterItems || isLetterFormatationSelected) {
        if (recentPositionOfItem === items.length - 1) recentPositionOfItem = 0;
        else recentPositionOfItem++;
        divItem.innerHTML = `${items[recentPositionOfItem]}`;
    }
}

function firstItem() {
    if (!isLetterItems || isLetterFormatationSelected) {
        recentPositionOfItem = 0;
        divItem.innerHTML = `${items[recentPositionOfItem]}`;
    }
}

function lastItem() {
    if (!isLetterItems || isLetterFormatationSelected) {
        recentPositionOfItem = items.length - 1;
        divItem.innerHTML = `${items[recentPositionOfItem]}`;
    }
}

function selectLetterFormatation() {
    const formatationOptions = document.getElementsByName('formatation');
    
    if (isUpperCase(formatationOptions)) {
        defineUpperCase();
    } else if (isLowerCase(formatationOptions)) {
        defineLowerCase();
    }

    if (isUpperCase(formatationOptions) || isLowerCase(formatationOptions)) {
        isLetterFormatationSelected = true;
        startSystem();
    }
}

function startSystem() {
    divItem.innerHTML = `${items[recentPositionOfItem]}`;
    firstItemBtn.innerHTML = `${items[[0]]}`;
    lastItemBtn.innerHTML = `${items[[items.length - 1]]}`;
}

function isUpperCase(formatationOptions) {
    return formatationOptions[0].checked;
}

function isLowerCase(formatationOptions) {
    return formatationOptions[1].checked;
}

function defineUpperCase() {
    for (let i = 0; i <= items.length - 1; i++) {
        items[i] = items[i].toUpperCase();
    }
}

function defineLowerCase() {
    for (let i = 0; i <= items.length - 1; i++) {
        items[i] = items[i].toLowerCase();
    }
}