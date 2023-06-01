export const getSubdomain = () => {
    const hostname = window.location.hostname

    // Проверяем, является ли адрес IP-адресом
    if (/^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/.test(hostname)) {
        // Адрес является IP-адресом, поэтому поддомен отсутствует
        return ''
    }

    // Удаляем "http://" или "https://" из начала строки
    const cleanedHostname = hostname.replace(/^https?:\/\//i, '')

    // Разбиваем строку на части, используя точку в качестве разделителя
    const parts = cleanedHostname.split('.')

    // Проверяем, есть ли поддомен
    if (parts.length > 2) {
        // Получаем первую часть после "https://" или "http://"
        const subdomain = parts[0]

        return subdomain
    }

    // Поддомен не найден
    return ''
}
