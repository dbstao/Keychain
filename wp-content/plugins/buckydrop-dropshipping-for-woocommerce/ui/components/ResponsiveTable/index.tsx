import React, { memo } from "@wordpress/element";
import { Columns } from './types'
import './index.scss'

interface PropsInterface {
  className?: string
  columns: Columns[]
  dataSource?: any[]
}

const ResponsiveTable = memo((props: PropsInterface) => {
  const {
    className,
    columns = [],
    dataSource = [],
  } = props

  return (
    <table className={`responsive-table ${className || ''}`}>
      <colgroup>
        {columns.map((column, index) => (
          <col
            key={index}
            width={column.width}
          />
        ))}
      </colgroup>
      <thead>
        <tr>
          {columns.map((column, index) => (
            <th
              scope='col'
              key={index}
            >
              {column.title}
            </th>
          ))}
        </tr>
      </thead>
      <tbody>
        {dataSource.map((row, i) => (
          <tr key={i}>
            {columns.map((grid, j) => (
              <td
                key={j}
                data-label={grid.title}
              >
                {dataSource[i][grid.dataIndex || '']}
              </td>
            ))}
          </tr>
        ))}
      </tbody>
    </table>
  )
})

export default ResponsiveTable
