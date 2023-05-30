export const getSubdomain = () => {
    const hostname = window.location.hostname

    // Проверяем, является ли адрес IP-адресом
    if (/^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/.test(hostname)) {
        // Адрес является IP-адресом, поэтому поддомен отсутствует
        return ''
    }

    const parts = hostname.split('.')

    // Проверяем, есть ли поддомен
    if (parts.length > 2) {
        // Получаем все части, кроме последних двух (основной домен и верхнеуровневый домен)
        const subdomainParts = parts.slice(0, -2)

        // Объединяем части поддомена с помощью точки в качестве разделителя
        const name = subdomainParts.join('.')

        // Удаляем "http://" или "https://" из имени поддомена
        return name.replace(/^https?:\/\//i, '')
    }

    // Поддомен не найден
    return ''
}
