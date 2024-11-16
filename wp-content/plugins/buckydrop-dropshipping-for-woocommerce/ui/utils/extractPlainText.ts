const extractPlainText = (richText: string): string => (
  richText
    .replace(/<[^>]*>/g, '')
    .replace(/&nbsp;/g, ' ')
    .replace(/&#39;/g, '\'')
)

export default extractPlainText
