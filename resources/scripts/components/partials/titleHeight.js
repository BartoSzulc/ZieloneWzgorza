export function initTitleHeight() {
    
    const titles = document.querySelectorAll('.home__our--offer .title, .turnusy__offer .title');
    const maxHeight = Array.from(titles).reduce((max, title) => {
    const height = title.offsetHeight;
    return height > max ? height : max;
    }, 0);
    document.querySelectorAll('.home__our--offer .title, .turnusy__offer .title').forEach(title => {
    title.style.height = `${maxHeight}px`;
    });
}