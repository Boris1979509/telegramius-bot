export const truncateWithEllipses = (text, max) => {
    return text.substr(0, max) + (text.length > max ? '...' : '')
}
