const codeParser = (block) => {
  return `
    <pre id="code-block"><code>${block.data.code
      .replace(/</g, '&lt;')
      .replace(/>/, '&gt;')}</code></pre>
	`
}

const listParser = (block) => {
  let listItems = ''
  for (let i = 0; i < block.data.items.length; i++) {
    listItems += `<li>${block.data.items[i]}</li>`
  }
  if (block.data.style === 'ordered') {
    return `<div id="order-list" class="list"><ol>${listItems}</ol></div>`
  } else {
    return `<div id="unordered-list" class="list"><ul>${listItems}</ul></div>`
  }
}

const quoteParser = (block) => {
  return `
  <div id="quote-block">
    <div>
        <blockquote cite="${block.data.caption}">${block.data.text}</blockquote>
        <span>${block.data.caption}</span>
    </div>
  </div>
  `
}

const paragraphParser = (block) => {
  if (block.data.text === null) {
    return `<br>`
  }
  return `<p>${block.data.text}</p>`
}

const customParser = {
  code: codeParser,
  list: listParser,
  quote: quoteParser,
  paragraph: paragraphParser,
}

export { customParser }
